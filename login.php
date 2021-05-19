<?php
require_once 'library/lib.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$validate=new Auth;

if (isset($_POST['sub'])) {
    $validate->check($_POST,$_FILES);
}

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
    <link rel="icon" type="img/jpg" href="admin/img/logo.jpg">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
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

           <!-- End Left Sidebar  -->

           <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">LOGIN FORM</h3> </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html" style="color: purple;">Click to go back to Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Login</a></li> 
                               
                           </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
           <!-- Page wrapper  -->
           <!-- Container fluid  -->
           <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-title">
                            <h4>LOGIN INFORMATION</h4>

                            <p><?=$lib->msg();?></p>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="login.php" method="POST" enctype="multipart/form-data">

                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Email :</p>
                                            <input type="email" class="form-control input-rounded" name="email" placeholder="Please enter email" required="required">

                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Password :</p>
                                            <input type="password" class="form-control input-rounded" name="password" placeholder="Please enter password" required="required">

                                        </div>

                                <hr style="border:3px solid black;">

                                <h3>GRAPHICAL IMAGE UPLOADS</h3>

                                <div class="row">
                                
                                    <div class="col-md-4">
                                      <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 1 :</p>
                                            <img id="list1" height="200" width="220"/><br>
                                            <input type="file" name="img1" id="upfile1" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>

                                <div class="col-md-4">
                                       <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 2  :</p>
                                            <img id="list2" height="200" width="220"/><br>
                                            <input type="file" name="img2" id="upfile2" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>


                                <div class="col-md-4">
                                       <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Image 3 :</p>
                                            <img id="list3" height="200" width="220"/><br>
                                            <input type="file" name="img3" id="upfile3" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                </div>


                            </div>


                <div class="form-actions">
                    <button type="submit" name="sub" class="btn btn-success col-md-3"> <i class="fa fa-sign-in"></i> Login</button>
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
include "admin/inc/footer.php";
?>

<!-- End footer -->

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
<script src="admin/js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
<script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="admin/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="admin/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="admin/js/scripts.js"></script>

</body>

</html>