<?php 
  include 'handler.php' ;
  ?>


 <!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
     <!-- Custom CSS -->
     <link rel="stylesheet"  href="styleee.css">
     <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

<!-- Details Page -->

<div class="container mt-5">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                    <img src="<?= $dphoto ?>" alt=""  style="float: left; width: 250px; height: 350px; object-fit: cover;" class="img-fluid rounded float-left">
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h4 class="font-size38 sm-font-size32 xs-font-size30 mb-5">
                   <strong class="mt-3"> User Details:</strong>
                    </h4>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">

                          <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-user text-green"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-green">First Name:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $dfirst ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-user text-orange"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-orange">Last Name:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $dlast ?></p>
                                    </div>
                                </div>
                            </li>
                     
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $demail ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-mobile-alt text-purple"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $dphone ?></p>
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>

                    <h5 class="font-size24 sm-font-size22 xs-font-size20 mt-3">
                     <a href="index.php" >
                        <button class="btn btn-info">Back to Users</button>
                        <a href="edit.php?edit=<?= $row['id']; ?>"  class="btn btn-info">Edit</a>
                     </a>
                    </h5>
            </div>
        </div>
    </div>
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom script  -->
   <script src="script.js"></script>
</body>