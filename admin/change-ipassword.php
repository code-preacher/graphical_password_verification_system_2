     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

     if (isset($_POST['submit'])) {
        $crud->updateImagePassword($_FILES);
        }

      $xx=$crud->displayOne('login',$_SESSION['id']);
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>GRAPHICAL USER PASSWORD AUTHENTICATION SYSTEM</title>
    
    <!-- Basic SEO -->
    <meta name="description" content="GRAPHICAL USER PASSWORD AUTHENTICATION SYSTEM">
    <meta name="keywords" content="GRAPHICAL USER PASSWORD AUTHENTICATION SYSTEM">

    <!-- Favicon -->
    <link rel="icon" type="img/jpg" href="img/logo.jpg">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
         <?php
         include "inc/header.php";
         ?>
         <!-- End header header -->
         <!-- Left Sidebar  -->
         <?php
         include "inc/sidebar.php";
         ?>     
         <!-- End Left Sidebar  -->
         <!-- Page wrapper  -->
         <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Change Image Password</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Change Image Password</h4>

                                <p><?=$lib->msg();?> </p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="change-ipassword.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                
                                    <div class="col-md-4">
                                      <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 1 :</p>
                                            <img id="list1" height="200" width="220" src="../gimages/<?=$xx['image1']?>"/><br>
                                            <input type="file" name="img1" id="upfile1" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>

                                <div class="col-md-4">
                                       <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 2  :</p>
                                            <img id="list2" height="200" width="220" src="../gimages/<?=$xx['image2']?>"/><br>
                                            <input type="file" name="img2" id="upfile2" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>


                                <div class="col-md-4">
                                       <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 3 :</p>
                                            <img id="list3" height="200" width="220" src="../gimages/<?=$xx['image3']?>"/><br>
                                            <input type="file" name="img3" id="upfile3" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>


                            </div>


                <div class="form-actions">
                    <button type="submit" name="sub" class="btn btn-success col-md-3"> <i class="fa fa-refresh"></i> Update</button>
                    <button type="reset" class="btn btn-inverse col-md-3"><i class="fa fa-refresh"></i> Clear</button>
                </div>









            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->

        <!-- FOOTER REGION -->
        <?php
        include "inc/footer.php";
        ?>

        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '" width="120" height="120"/>'].join('');
          document.getElementById('list1').insertBefore(span, null);
                          document.getElementById("list1").src=e.target.result;

        };
      })(f);
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('upfile1').addEventListener('change', handleFileSelect, false);
 

  function handleFileSelect2(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '" width="120" height="120"/>'].join('');
          document.getElementById('list2').insertBefore(span, null);
                          document.getElementById("list2").src=e.target.result;

        };
      })(f);
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('upfile2').addEventListener('change', handleFileSelect2, false);


  function handleFileSelect3(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '" width="120" height="120"/>'].join('');
          document.getElementById('list3').insertBefore(span, null);
                          document.getElementById("list3").src=e.target.result;

        };
      })(f);
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('upfile3').addEventListener('change', handleFileSelect3, false);

  
</script>
<!-- All Jquery -->
<script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="js/scripts.js"></script>

</body>

</html>