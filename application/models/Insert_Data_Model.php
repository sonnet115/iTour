<?php
class Insert_Data_Model extends CI_Model {


	public function checkAdminLogin($username){
		$sql="SELECT * FROM admin WHERE username = '$username'";

		if(($this->db->query($sql)->num_rows())>0){
			return true;
		}
		else 
			return false;
	}

	public function storeTraverllerData(){
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email 	  = $this->input->post('email');
		$country = $this->input->post('country');

		$sql = "INSERT INTO traveller (fname, lname, username, password, email, country) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$country')";
		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}

	public function getTravellerData($username){
		$get="SELECT * FROM traveller WHERE username = '$username'";
		$query =  $this->db->query($get);
	    return $query->result_array();
	}

	public function checkTravellerLogin($username){
		$sql="SELECT * FROM traveller WHERE username = '$username'";

		if(($this->db->query($sql)->num_rows())>0){
			return true;
		}
		else 
			return false;
	}


	public function storeHotelData(){
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email 	  = $this->input->post('email');
		$class	  = $this->input->post('catagory');
		$country = $this->input->post('country');
		$continent = $this->input->post('continent');

		$sql = "INSERT INTO hotel (name, username, password, email, class, country, continent) VALUES ('$name', '$username', '$password', '$email', '$class','$country', '$continent')";
		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}

	public function getHotelData($username){
		$get="SELECT * FROM hotel WHERE username = '$username'";
		$query =  $this->db->query($get);
	    return $query->result_array();
	}

	public function checkHotelLogin($username){
		$sql="SELECT * FROM hotel WHERE username = '$username'";

		if(($this->db->query($sql)->num_rows())>0){
			return true;
		}
		else 
			return false;
	}

	public function getHotelCountry($username){
		$sql = "SELECT * FROM hotel WHERE username = '$username'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getPlacesForHotels(){
		$sql = "SELECT * FROM places";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function insertPlace($postdata){
		$name = $this->input->post('pname');
		$pname = str_replace("'", "-", $name);		
		$continent = $this->input->post('continent');
		$country = $this->input->post('country');
		$type = $this->input->post('type');
		$pid =  str_replace(" ", "", $pname).rand(0,10000);

			$config['upload_path'] ='img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['mainimg']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            $this->upload->do_upload('mainimg');
            $uploadData = $this->upload->data();
            $link = $uploadData['file_name'];   

		$sql = "INSERT INTO places (name, continent, country, type, img, pid) VALUES ('$pname', '$continent', '$country', '$type', '$link', '$pid')";
		$this->db->query($sql);

		$data =array();
        extract($postdata);
        $count = count($aname);

		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++){			  	         
		        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
		        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
		        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
		        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
		        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

		        $this->upload->initialize($this->set_upload_options());
		        $this->upload->do_upload();

           		$images[] = $_FILES['userfile']['name'];
		    }
		   
        for($i=0; $i<$count; $i++) {
            $data[$i]=array(
                'name'=>$aname[$i],
                'price'=>$price[$i],
                'img' =>$images[$i],
                'pid' =>$pid
            );
        }
        $this->db->insert_batch('activity', $data);

       	$data1 =array();
        extract($postdata);
        $count = count($lname);

        $files1 = $_FILES;
		$cpt = count($_FILES['ppic']['name']);
		for($i=0; $i<$cpt; $i++){			  	         
		        $_FILES['ppic']['name']= $files['ppic']['name'][$i];
		        $_FILES['ppic']['type']= $files['ppic']['type'][$i];
		        $_FILES['ppic']['tmp_name']= $files['ppic']['tmp_name'][$i];
		        $_FILES['ppic']['error']= $files['ppic']['error'][$i];
		        $_FILES['ppic']['size']= $files['ppic']['size'][$i];    

		        $this->upload->initialize($this->set_upload_options());
		        $this->upload->do_upload();

           		$images1[] = $_FILES['ppic']['name'];
		    }
		     		
        for($i=0; $i<$count; $i++) {
            $data1[$i]=array(
                'name'=>$lname[$i],
                'dis'=>$pdis[$i],
                'img' =>$images1[$i],
                'pid' =>$pid
                );

            }
        $this->db->insert_batch('location', $data1);
	}

	private function set_upload_options()
	{   
    	//upload an image options
	    $config = array();
	    $config['upload_path'] = 'img/';
	    $config['allowed_types'] = 'gif|jpg|png';	    
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

	public function insertHotelBranch($username){
		$pid = $this->input->post('placeid');
		$website = $this->input->post('website');

		 	$config['upload_path'] ='img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['hpic']['name'];

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            $this->upload->do_upload('hpic');
            $uploadData = $this->upload->data();
            $link = $uploadData['file_name'];                	            
       
		$sql = "INSERT INTO hotelbranch (username, website, img, pid) VALUES ('$username', '$website', '$link', '$pid')";
		$this->db->query($sql);
	}

	public function getPlaceTypes(){
		$sql = "SELECT DISTINCT(type) AS type FROM places";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getContinents(){
		$sql = "SELECT DISTINCT(continent) AS continent FROM places";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getActivities(){
		$sql = "SELECT DISTINCT(name) AS actname FROM activity";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getCountry(){
		$sql = "SELECT DISTINCT(country) AS country FROM places";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getResult1(){
		$type =$this->input->post('ptype');
		$activity =$this->input->post('activity');
		$continent =$this->input->post('continent');

		$sql = "SELECT p.name AS pname, p.country, p.continent, p.pid, p.img FROM places p JOIN activity ON p.pid = activity.pid AND p.type = '$type' AND p.continent = '$continent' AND activity.name='$activity'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getResult2(){
		$type =$this->input->post('ptype');		
		$country =$this->input->post('country');

		$sql = "SELECT * FROM places WHERE type = '$type' AND country = '$country'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getPlaceDetails($pid){
		$sql = "SELECT * FROM places WHERE pid = '$pid'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getPlaceActivities($pid){
		$sql = "SELECT * FROM activity WHERE pid = '$pid'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getPlaceLocations($pid){
		$sql = "SELECT * FROM location WHERE pid = '$pid'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getPlaceHotels($pid){
		$sql = "SELECT * FROM hotelbranch JOIN hotel ON hotelbranch.username = hotel.username AND  hotelbranch.pid = '$pid'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getAddedPlace(){
		$sql = "SELECT * FROM places";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function getAddedHotel(){
		$sql = "SELECT * FROM hotelbranch";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getRandomPlaces(){
		$sql = "SELECT * FROM places ORDER BY RAND() LIMIT 0,4";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}