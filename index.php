 <?php 
  include 'handler.php' ;
  ?>


 <!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
     <!-- Custom CSS -->
     <link rel="stylesheet"  href="styleee.css">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
</head>
<body>

<!--Navbar-->

<nav class="blue lighten-3">
  <div class="container">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">CRUD</a>
    </div>
  </div>
</nav>
<br><br>

<!-- Modal Trigger  -->

<div class="container">
    <a href="#modal1" class="btn waves-effect waves-light green modal-trigger">Add User 
    <i class="material-icons right">add</i>           
    </a>
</div>

<!-- Modal  -->

<div id="modal1" class="modal">
    <div class="modal-content">
        <form class="col s12" action="handler.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s9">
          <input id="firstName" type="text" class="validate" name="first"  required>
          <label for="firstName">First Name</label>
        </div>
        <div class="input-field col s9">
          <input id="lastName" type="text" class="validate" name="last"   required>
          <label for="lastName">Last Name</label>
        </div>
      </div>
              
          <div class="row">
            <div class="input-field col s9">
              <input id="email" type="email" class="validate" name="email"  required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s9">
              <input id="phone" type="text" class="validate" name="phone"  required>
              <label for="phone">Phone</label>
            </div>
          </div>

          
            <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" accept="image/x-png,image/jpeg" name="image" required>
                     
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Choose Picture">
                </div>
            </div>
         
          <button class="btn waves-effect waves-light" type="submit" name="add">
           Submit<i class="material-icons right">send</i>
          </button>
        </form>
    </div> 
  </div>
 <br><br>
  <!-- Search Bar  -->

  <nav class="blue lighten-3">
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
<br><br>

<!-- Table -->

<?php 
$query = "SELECT * FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
 ?>


 <div class="container">
   <div class="row">
     <div class="col l12">
         <table class="highlight" id="users-table"> 
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th></th>       
          </tr>
        </thead>
        <tbody>
          <?php while($row=$result->fetch_assoc()){ ?>
          <tr>
            <td><?= $row['first'] . '  ' .$row['last'];  ?></td>
            <td><?= $row['email'];?></td> 
            <td>
              <a href="details.php?details=<?= $row['id']; ?>" class="btn-floating btn-small waves-effect waves-light green darken-2"><i class="material-icons">dehaze</i></a>&nbsp;
              <a href="edit.php?edit=<?= $row['id']; ?>" data-toggle=".modal" data-target="#modal1" class="btn-floating btn-small waves-effect waves-light amber accent-2 modal-trigger "><i class="material-icons">edit</i></a>&nbsp;
              <a href="handler.php?delete=<?= $row['id']; ?>" class="btn-floating btn-small waves-effect waves-light red darken-4" onclick="return confirm('Do you want to delete user: <?= $row['first'] . '  ' .$row['last'];  ?> ')"><i class="material-icons">delete</i></a> 
            </td>            
          </tr> 
          <?php } ?>        
        </tbody>
      </table>
     </div>
   </div>
 </div>

     
            

<!-- Alerts  -->
      <?php if(isset($_SESSION['response'])){ ?>

      <div class="alert-dismissible">    
         <script>
           setTimeout(() => M.toast({html: '<?= $_SESSION['response'];?>' , classes: '<?= $_SESSION['res_class']; ?>'},3000), 400);
         </script>
      </div><br>

    <?php } unset($_SESSION['response']); ?>
    <!-- Alerts  -->


   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <!-- custom script  -->
   <script src="script.js"></script>


</body>
</html> 




   

  
