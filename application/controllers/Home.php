<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();     
        $this->load->model('Insert_Data_Model');            
    }

	public function index()
	{
		$data['top'] = $this->Insert_Data_Model->getRandomPlaces();
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('home',$data);
	}

	public function showAdminLogin(){
		$this->load->view('adminlogin');
	}

	public function addPlaceform(){
		$this->load->view('addplace');
	}

	public function addedPlace(){
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('addedplace',$data);
	}

	public function showHotelBasic(){
		$username = $this->session->userdata('hotelLoggedIn');
		$data['info'] = $this->Insert_Data_Model->getHotelData($username);
		$this->load->view('hotelbasic', $data);
	}
	public function addHotelBranch(){
		$country = $this->session->userdata('hotelCountry');
		$data['places'] = $this->Insert_Data_Model->getPlacesForHotels();
		$this->load->view('hotelBranch', $data);
	}
	public function manageHotelBranch(){
		$username = $this->session->userdata('hotelLoggedIn');
		$data['branch'] = $this->Insert_Data_Model->getAddedHotel($username);
		$this->load->view('manageBranch',$data);
	}

	public function submitHotelBranch(){
		$username = $this->session->userdata('hotelLoggedIn');
		$this->Insert_Data_Model->insertHotelBranch($username);
		redirect('hotel/addbranch');
	}



	public function showTravbasic(){
		$username = $this->session->userdata('travellerLoggedIn');
		$data['info'] = $this->Insert_Data_Model->getTravellerData($username);
		$this->load->view('profile', $data);
	}
	public function showSearch(){
		$data['type'] = $this->Insert_Data_Model->getPlaceTypes();
		$data['continent'] = $this->Insert_Data_Model->getContinents();
		$data['activity'] = $this->Insert_Data_Model->getActivities();
		$data['country'] = $this->Insert_Data_Model->getCountry();
		$this->load->view('search', $data);
	}

	public function showResult1(){
		$data['search'] = $this->Insert_Data_Model->getResult1();
		$data['type'] = $this->Insert_Data_Model->getPlaceTypes();
		$data['continent'] = $this->Insert_Data_Model->getContinents();
		$data['activity'] = $this->Insert_Data_Model->getActivities();
		$this->load->view('result1', $data);
	}

	public function showResult2(){
		$data['search'] = $this->Insert_Data_Model->getResult2();
		$data['type'] = $this->Insert_Data_Model->getPlaceTypes();
		$data['country'] = $this->Insert_Data_Model->getCountry();
		$data['activity'] = $this->Insert_Data_Model->getActivities();
		$this->load->view('result2', $data);
	}

	//admin login
	public function adminLogin(){
		$username =  $this->input->post("username");
		if($this->Insert_Data_Model->checkAdminLogin($username)){						
			$this->session->set_userdata('adminLoggedIn', $username);
			redirect('admin/addplaceform');
		}
	}

	public function adminLogout(){
		$this->session->unset_userdata('adminLoggedIn');
		$home = base_url();
		redirect($home);
	}
	//admin login ends



	// traveller reg and  login
	public function registerTraveller(){
		if($this->Insert_Data_Model->storeTraverllerData()){			
			$username =  $this->input->post("username");
			$this->session->set_userdata('travellerLoggedIn', $username);
			redirect('traveller/basicinfo');
		}
	}

	public function travellerLogin(){
		$username =  $this->input->post("username");
		if($this->Insert_Data_Model->checkTravellerLogin($username)){						
			$this->session->set_userdata('travellerLoggedIn', $username);
			redirect('traveller/basicinfo');
		}
	}

	public function travellerLogout(){
		$this->session->unset_userdata('travellerLoggedIn');
		$home = base_url();
		redirect($home);
	}
	// traveller reg and  login ends



	// hotel reg and  login
	public function registerHotel(){
		if($this->Insert_Data_Model->storeHotelData()){			
			$username =  $this->input->post("username");
			$country =  $this->input->post("country");
			$this->session->set_userdata('hotelLoggedIn', $username);
			$this->session->set_userdata('hotelCountry', $country);
			redirect('hotel/basicinfo');
		}
	}

	
	public function hotelLogin(){
		$username =  $this->input->post("username");
		$data['hotel'] = $this->Insert_Data_Model->getHotelCountry($username);
		if($this->Insert_Data_Model->checkHotelLogin($username)){						
			$this->session->set_userdata('hotelLoggedIn', $username);
			$this->session->set_userdata('hotelCountry', $data['hotel'][0]['country']);
			redirect('hotel/basicinfo');
		}
	}

	public function hotelLogout(){
		$this->session->unset_userdata('hotelLoggedIn');
		$this->session->unset_userdata('hotelCountry');
		$home = base_url();
		redirect($home);
	}
	// hotel reg and  login ends

	//add place
	public function addPlace(){
		$this->Insert_Data_Model->insertPlace($this->input->post());								
		redirect('admin/addplaceform');		
	}

	public function showPlaceDetails(){
		$pid = $this->uri->segment(3);
		$data['place'] = $this->Insert_Data_Model->getPlaceDetails($pid);
		$data['activity'] = $this->Insert_Data_Model->getPlaceActivities($pid);
		$data['location'] = $this->Insert_Data_Model->getPlaceLocations($pid);
		$data['hotel'] = $this->Insert_Data_Model->getPlaceHotels($pid);
		$this->load->view('details', $data);
	}

	public function showTopPlaceDetails(){
		$pid = $this->uri->segment(2);
		$data['place'] = $this->Insert_Data_Model->getPlaceDetails($pid);
		$data['activity'] = $this->Insert_Data_Model->getPlaceActivities($pid);
		$data['location'] = $this->Insert_Data_Model->getPlaceLocations($pid);
		$data['hotel'] = $this->Insert_Data_Model->getPlaceHotels($pid);
		$this->load->view('top', $data);
	}

	public function loadHill(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('hill',$data);
	}

	public function loadFood(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('food',$data);
	}

	public function loadFest(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('fest',$data);
	}

	public function loadThrill(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('thrill',$data);
	}

	public function loadForest(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('forest',$data);
	}

	public function loadArchaeology(){		
		$data['places'] = $this->Insert_Data_Model->getAddedPlace();
		$this->load->view('archaeology',$data);
	}
}
