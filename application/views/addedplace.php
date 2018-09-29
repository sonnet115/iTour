<?php
  if($this->session->userdata('adminLoggedIn') == '') {
    $home =  base_url();
    redirect($home);
  }
?>
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
    <a class="navbar-brand" href="home.html">iTourGuide | Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="addplaceform">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Add a Place</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link w3-white" href="javascript:void(0)">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Added Place</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">                      
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">      
      <!-- Example DataTables Card-->
      <div class="card mb-3 w3-card-2">
        <div class="card-header w3-grey">
          <i class="fa fa-search"></i> Added Places</div>
        <div class="card-body">
          <div class="w3-row">        
              <?php foreach ($places as $p) {?>                     
                <div class="w3-col l3 w3-padding w3-center">
                    <img src="<?php echo base_url().'img'.'/'.$p['img']?>" style="height: 150px;max-width: 100%">
                    <br>
                    <br>
                    <p><?php echo $p['name']?></p>                  
                    <button onclick="document.getElementById('<?php echo $p['pid']?>').style.display='block'" class="w3-button w3-green">Details</button>                
                </div>
               
                 <div id="<?php echo $p['pid']?>" class="w3-modal">
                  <div class="w3-modal-content w3-card-4" style="max-width: 600px">
                    <header class="w3-container w3-green w3-center" > 
                      <span onclick="document.getElementById('<?php echo $p['pid']?>').style.display='none'" 
                      class="w3-button w3-display-topright">&times;</span>
                      <h2><?php echo $p['name']?></h2>
                    </header>
                    <div class="w3-container w3-padding w3-center">
                      <img src="<?php echo base_url().'img'.'/'.$p['img']?>" style="height: 300px;max-width: 100% " class="w3-card-4">
                      <br>
                      <br>
                      <br>
                      <div class="w3-large">
                          <p><b>Division:</b> <?php echo $p['continent']?></p>
                          <p><b>District:</b> <?php echo $p['country']?></p>
                          <p><b>Type:</b> <?php echo $p['type']?></p>
                      </div>
                    
                    </div>
                    <footer class="w3-container w3-green w3-padding-16">
                      
                    </footer>
                  </div>
                </div>  

                <?php }?>           
          </div>
        </div>        
      </div>
   </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © iToureGuide 2017-2018</small>
        </div>
      </div>
    </footer>
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
            <a class="btn btn-primary" href="logout">Logout</a>
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
    <script src="<?php echo base_url()?><?php echo base_url()?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url()?>js/sb-admin-datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>
  </div>
</body>

</html>
