<?php
  if($this->session->userdata('travellerLoggedIn') == '') {
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
    <a class="navbar-brand" href="home.html">iTourGuide | Search Places</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="basicinfo">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Basic Info</span>
          </a>
        </li>
      
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link w3-white" href="javascript:void(0)">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Search a Place</span>
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
          <a class="nav-link" href="logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">      
      <!-- Example DataTables Card-->
      <div class="card mb-3 w3-card-2">
        <div class="card-header w3-amber">
          <i class="fa fa-search"></i> Search a Place by Type and Activity</div>
        <div class="card-body">
          <div class="w3-row w3-center">            
                  <form action="<?php echo base_url()?>search/result1" method="post">
                    <div class="w3-col l4">
                      <select class="w3-select w3-border" name="ptype">
                          <option value="" disabled selected>Choose a Place Type</option>
                          <?php foreach ($type as $t) {?>                         
                            <option value="<?php echo $t['type']?>"><?php echo $t['type']?></option>
                          <?php }?>
                     </select>
                    </div>
                     
                     <div class="w3-col l4">
                       <select class="w3-select w3-border" name="activity">
                            <option value="" disabled selected>Choose a Activity</option>
                            <?php foreach ($activity as $acname) {?>                         
                              <option value="<?php echo $acname['actname']?>"><?php echo $acname['actname']?></option>
                            <?php }?>
                       </select>
                    </div>
                    <div class="w3-col l4">
                      <select class="w3-select w3-border" name="continent">
                          <option value="" disabled selected>Choose a Division</option>
                          <?php foreach ($continent as $c) {?>                         
                            <option value="<?php echo $c['continent']?>"><?php echo $c['continent']?></option>
                          <?php }?>
                     </select>
                    </div>
                    <br>
                    <br>
                    <br>
                     <button class="w3-button w3-amber w3-round ">Seacrh</button>
                  </form>              
          </div>
        </div>        
      </div>
   </div>

   <div class="container-fluid">
    <div class="card mb-3 w3-card-2">
        <div class="card-header w3-teal">
          <i class="fa fa-search"></i> Search a Place by District & Type</div>
        <div class="card-body">
          <div class="w3-row w3-center">            
                  <form action="<?php echo base_url()?>search/result2" method="post">
                    <div class="w3-col l6">
                       <select class="w3-select w3-border" name="country">
                          <option value="" disabled selected>Choose a District</option>
                          <?php foreach ($country as $c) {?>                         
                            <option value="<?php echo $c['country']?>"><?php echo $c['country']?></option>
                          <?php }?>
                     </select>
                    </div>
                     
                     <div class="w3-col l6">
                      <select class="w3-select w3-border" name="ptype">
                          <option value="" disabled selected>Choose a Place Type</option>
                          <?php foreach ($type as $t) {?>                         
                            <option value="<?php echo $t['type']?>"><?php echo $t['type']?></option>
                          <?php }?>
                     </select>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                     <button class="w3-button w3-teal w3-round">Seacrh</button>
                  </form>              
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

  <div id="chatBot" class="w3-light-grey">
       <div class="w3-row w3-green w3-padding ">
        <p class="w3-margin-left w3-inline"> <i class="fa fa-blind"> Need Help? Ask Me !</i></p>
        <a href="javascript:void(0)" onclick="minimizeBot()" class="w3-right"><i class="fa fa-close"></i></a>
       </div>

       <div class="w3-row w3-border w3-padding" style="height: 310px">
        <div class="w3-padding w3-white">
          <p><b>Bot:</b><span class="w3-amber w3-round-xxlarge w3-padding"> Hello! How Can I Help You?</span></p>
          <p style="text-align: right;"><b>Me:</b><span class="w3-blue w3-round-xxlarge w3-padding"> Hi</p>         
          <p style="text-align: right;""><b>Me:</b><span class="w3-blue w3-round-xxlarge w3-padding"> Midium Level Hotel Cost in Cox's Bazar?</p>
          <p ><b>Bot:</b><span class="w3-amber w3-round-xxlarge w3-padding">  Season or Off-season?</p>
          <p style="text-align: right;""><b>Me:</b><span class="w3-blue w3-round-xxlarge w3-padding">  Season</p>
          <p ><b>Bot:</b> <span class="w3-amber w3-round-xxlarge w3-padding"> Around 5000 Bdt</p>
        </div>
       </div>

       <div class="w3-row w3-border">
        <form>
          <input type="text" name="name" placeholder="How can I help?" class="w3-input w3-border">              
        </form>
       </div>
   </div>
   <script type="text/javascript" src="<?php echo base_url()?>js/custom.js"></script>
</body>

</html>
