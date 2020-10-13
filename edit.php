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

<form action="handler.php" method="post" enctype="multipart/form-data">
	 <input type="hidden" name="id" value="<?= $id; ?>">
							<div class="form-group">
						          <label class="col-sm-2 control-label" for="inputContact1">First</label>
						             <div class="col-sm-10">
						             <input class="form-control" name="first" id="inputContact1" type="text" placeholder="" value="<?= $first; ?>" autofocus required >
						             </div>
						    </div>

    						<div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Last</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="last" id="inputContact2" type="text" placeholder="" value="<?= $last; ?>" required>
                                </div>
                            </div>

                           <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" id="inputContact3" type="text" placeholder="" value="<?= $email; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="phone" id="inputContact4" type="text" placeholder="" value="<?= $phone; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                                    <input type="file" name="image" class="custom-file" >
                                    <img src="<?= $photo; ?>" class="img-thumbnail" width="120">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-info" type="submit" name="update">Update</button>
                                    <a href="index.php" class="btn btn-info">Back to Users</a>
                                </div>
                            </div>
</form>




 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom script  -->
  <script src="script.js"></script>
</body>