<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>iTourGuide | User Profile</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- w3css -->
  <link href="<?php echo base_url()?>vendor/w3css/w3.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/custom.css">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url()?>">iTourGuide | Top Places</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">                          
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">      
      <!-- Example DataTables Card-->
      <div class="card mb-3 w3-card-2">
        <div class="card-header w3-amber w3-large">
            <?php foreach ($place as $p) {?>
              <i class="fa fa-hotel"></i> <?php echo $p['name']?>
            <?php }?>
        </div>
          
        <div class="card-body">
          <div class="w3-row w3-center">     
            <div class="w3-col l8 w3-padding">
              <?php foreach ($place as $p) {?>
              <img src="<?php echo base_url()."img/".$p['img']?>" width="100%" class="w3-card-2 w3-round" height="300px">
              <?php }?>
            </div>

            <div class="w3-col l4 w3-margin-top" style="text-align: left;">    
              <h3 class="w3-border-bottom w3-text-teal">Basic Information </h3>          
              <?php foreach ($place as $p) {?>                
                <span><b>Division:</b> <?php echo $p['continent']?></span>   <br>           
                <span><b>District:</b> <?php echo $p['country']?></span>  <br>  
                <span><b>Place Name:</b> <?php echo $p['name']?></span>  <br>  
                <span><b>Place Type:</b> <?php echo $p['type']?></span>  <br>                 
              <?php }?>

            </div>      
          </div>
          <br>

    <div class="w3-row">
           <div class="w3-col l4 w3-padding">
             <h3 class="w3-border-bottom w3-center w3-text-green">Available Activities</h3>                            
                 <?php foreach ($activity as $act) {?>                 
                    <div class="w3-col l7 w3-padding ">
                      <img src="<?php echo base_url()."img/".$act['img']?>" style="width:150px;height: 90px" class="w3-card-2 w3-border w3-border-white">                 
                    </div>
                    <div class="w3-col l5" style="text-align: left;font-size: 10px">
                       <h4 class="w3-text-teal"><?php echo $act['name']?></h4>   
                       <p style="margin-top:-10px"><b>Price: <?php echo $act['price']?> Tk</b></p>
                    </div>
                  <?php }?>                          
           </div>

           <div class="w3-col l4 w3-padding">
                <h3 class="w3-border-bottom w3-center w3-text-green">Tourist Spots</h3>              
                 <?php foreach ($location as $loc) {?>
                  
                  <div class="w3-col l7 w3-padding">
                      <img src="<?php echo base_url()."img/".$loc['img']?>" style="width:150px;height: 90px" class="w3-card-2 w3-border w3-border-white">                 
                  </div>
                  <div class="w3-col l5" style="text-align: left;font-size: 10px">
                     <h4 class="w3-text-teal"><?php echo $loc['name']?></h4>   
                     <p style="margin-top:-10px"><b>Distance: <?php echo $loc['dis']?> KM</b></p>
                  </div>
                <?php }?>
           </div>

           <div class="w3-col l4 w3-padding">
             <h3 class="w3-border-bottom w3-center w3-text-green">Hotels</h3>           
             <?php foreach ($hotel as $ho) {?>
                  
                  <div class="w3-col l7 w3-padding">
                      <img src="<?php echo base_url()."img/".$ho['img']?>" style="width: 150px;height: 90px" class="w3-card-2 w3-border w3-border-white">                 
                  </div>
                  <div class="w3-col l5" style="text-align: left;font-size: 10px">
                     <h4 class="w3-text-teal"><?php echo $ho['name']?></h4>   
                     <a href="<?php echo $ho['website']?>" class="w3-button w3-green">Book Now</a>
                  </div>
              <?php }?>
           </div>
         </div>
         <hr>            
         <h2 class="w3-text-green w3-center">Find Direction</h2>
         <?php foreach ($place as $p) {?>    
          <?php $name = str_replace(' ', '+', $p['name']);?>      
          <div class="w3-row w3-center">
              <iframe width="100%" height="450" frameborder="0" class="w3-card-4" style="border:0"
               src="https://www.google.com/maps/embed/v1/directions?origin=North+South+University&destination=<?php echo $name?>&key=AIzaSyCZfaX7In90nH2yCzwaVdvS8XMwVyD76QM" allowfullscreen>
               </iframe>
          </div>         
          
          <?php }?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <!--  <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © iToureGuide 2017-2018</small>
        </div>
      </div>
    </footer> -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url()?>traveller/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="j<?php echo base_url()?>s/sb-admin-datatables.min.js"></script>
  </div>  
</body>

</html>
