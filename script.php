<?php 
@include 'database.php';

session_start();

if(isset($_POST['save']))          saveInstrument();
if(isset($_POST['update']))        updateInstrument();
if(isset($_POST['delete']))        deleteInstrument();


if (isset($_POST['signin'])) {
    $email= $_POST['email'];
    $pass=$_POST['password'];
  
  
    $select="SELECT * FROM admins WHERE `email`='$email' and `password`='$pass' ";
    $result=mysqli_query($conn,$select);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['email'] == $email && $row['password'] == $pass) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['name'] = $row['name'];
         
          $_SESSION['email'] = $row['email'];
          $_SESSION['password'] = $row['password'];

          $_SESSION['image'] = $row['image'];

          header("Location: index.php");
      }
  }else{
      $_SESSION['error'] = "passeword or email is wrong";
      header("Location: login.php");
  }


  }





if (isset($_POST['signup'])) {

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])){
      $_SESSION['error']='check your informations';
      header('location: signup.php');

    }else{
      $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
      // $name= $_POST['name'];
      // $email =filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
      $email= $_POST['email'];
      // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $pass=$_POST['password'];
      
      
      if($pass == $_POST['cpasseword']){
        $sql="SELECT * FROM admins WHERE email='$email'";
        $res=mysqli_query($conn,$sql);
        $checkEmail=mysqli_num_rows( $res);

        if($checkEmail==0){

        $insert="INSERT INTO admins (`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
        $result=mysqli_query($conn,$insert);
        
          $_SESSION['message']='your account has beeen created successfully';
          header('location: login.php');
        }
        else{
          $_SESSION['error']='this email already exist';
          header('location: signup.php');
        }
        }else{
        $_SESSION['error']='password are not matched';
          header('location: signup.php');
      }
      
    }
    
    
  }

  if (isset($_POST['logout'])) {
        
          unset($_SESSION);
          session_destroy();
          header("Location:login.php");
  }

function valid($input){
$input =htmlspecialchars($input);
$input =stripslashes($input);
$input = trim($input);
return $input;
}

  function saveInstrument()
    {

     
      $tmpImage = $_FILES["image"]["tmp_name"];
      $image = $_FILES["image"]["name"];

      //var_dump($_SERVER['DOCUMENT_ROOT']);

      $folder = $_SERVER['DOCUMENT_ROOT'].'/ginstrument/images/';
      move_uploaded_file($tmpImage,$folder.$image);


      

        global $conn;
        $idadmin=$_SESSION['id'];
        // $nom = htmlspecialchars(stripslashes(trim($_POST['nom'])));
        $nom = valid($_POST['nom']);
        $categorie = $_POST['categorie'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $description = $_POST['description'];
        // $idadmin=$_SESSION['id'];
        $sql ="INSERT INTO `instruments`(`image`, `title`, `price`, `quantite`, `categorie_id`, `admin_id`, `description`)
         VALUES ('$image','$nom','$prix','$quantite',$categorie,$idadmin,'$description')";
        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $_SESSION['message'] = "product has been added successfully !";
		    header('location: index.php');
    }



    function getInstrument()
    {
        //CODE HERE
        global $conn;
        //SQL SELECT
        $idadmin = $_SESSION["id"];
        $sql ="SELECT admins.name as name , categories.title as titleCat ,instruments.* from instruments INNER JOIN admins on admins.id = instruments.admin_id INNER JOIN categories on categories.id = instruments.categorie_id ";
        $res = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_assoc($res)) { ?>  
<!-- <div class=" col-md-3 col-12"> -->
<div class=" col-lg-4 col-md-6 col-12 col-xl-3 rounded cursor-pointer">
  <div class="card m-2 py-2 px-3 shadow shadow-sm" data-bs-toggle="modal" data-bs-target="#update<?php echo $row["id"] ?>">
    <!-- <div style="height:150px;background-position:center;background-size:cover;background-repeat:no-repeat;background-image: url(./images/)">  
    </div> -->
    <img src="./images/<?php echo $row["image"] ?>" class="rounded img-fluid" height="200"/>
    <div class="card-body">
      <h4 class="card-title fw-bold text-truncate"><?php  echo $row["title"] ?></h4>
      <div class="fw-bold">
        <div class="text-dark">Price : <?php  echo $row["price"] ?> DH</div>
        <div class="text-dark">Quantite : <?php  echo $row["quantite"] ?></div>
        <div class="text-gray">created by:<?php echo $row["name"]; ?></div>
        <!-- <div class="text-dark">categorie:</div> -->
        
      </div>
      <p class="card-text text-truncate">Description :<?php echo $row["description"]; ?></p>
      <!-- <a href="#" class="btn btn-primary">Add to card</a> -->
    </div>
  </div> 
</div>  




<!-- </div>      -->
              

        <?php
        @include("./includes/modaledit.php");
        }


    }

    
    function updateInstrument()
    {
        
        global $conn;
        
        $tmpImage = $_FILES["image"]["tmp_name"];
        $image = $_FILES["image"]["name"];

        var_dump($_SERVER['DOCUMENT_ROOT']);

        $folder = $_SERVER['DOCUMENT_ROOT'].'/ginstrument/images/';
        move_uploaded_file($tmpImage,$folder.$image);

        $idadmin=$_SESSION['id'];
        $idInstrument = $_POST["instrument_id"];
        $nom = $_POST['nom'];
        $categorie = $_POST['categorie'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $description = $_POST['description'];

        if($image==""){
          $sql = " UPDATE `instruments` SET `title`='$nom',`price`='$prix',`quantite`='$quantite',`categorie_id`='$categorie',`admin_id`='$idadmin',`description`='$description' 
          WHERE id =  $idInstrument;";
        }else{
          $sql = " UPDATE `instruments` SET `image`='$image',`title`='$nom',`price`='$prix',`quantite`='$quantite',`categorie_id`='$categorie',`admin_id`='$idadmin',`description`='$description' 
        WHERE id =  $idInstrument;";
        }
       
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         $_SESSION['message'] = "Instrument has been updated successfully !";
         header('location: index.php');
       
      
    }
    function deleteInstrument()
    {
        global $conn;
        $idInstrument = $_POST["instrument_id"];
    
        $sql="DELETE FROM `instruments` WHERE `id`='$idInstrument' ";
        $res = mysqli_query($conn,$sql);
        //SQL DELETE
        $_SESSION['message'] = "Instrument  has been deleted successfully !";
		header('location: index.php');
    }

    function countInstruments(){

      global $conn;
      //SQL SELECT
      $sql="SELECT * FROM instruments ";
      // mysqli_fetch_all($result, MYSQLI_ASSOC);
      $res = mysqli_query($conn,$sql);
      $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
      echo count($result);
    }


    function countDashboard($table){

      global $conn;
      //SQL SELECT
      $sql="SELECT * FROM $table ";
      // mysqli_fetch_all($result, MYSQLI_ASSOC);
      $res = mysqli_query($conn,$sql);
      $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
      echo count($result);
    }
    function countAdmins(){

      global $conn;
      //SQL SELECT
      $sql="SELECT * FROM admins ";
      // mysqli_fetch_all($result, MYSQLI_ASSOC);
      $res = mysqli_query($conn,$sql);
      $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
      echo count($result);
    }
    

    function countsumQu(){

      global $conn;
      //SQL SELECT
      $sql="SELECT SUM(quantite) AS quantite FROM instruments ";
      // mysqli_fetch_all($result, MYSQLI_ASSOC);
      $res = mysqli_query($conn,$sql);
      $result = mysqli_fetch_array($res, MYSQLI_ASSOC);


      echo $result["quantite"];

      // echo count($result);


    }

    //nbr des produits
// $sql3='SELECT COUNT() AS sommeProd FROM products';
// $res3=mysqli_query($conn,$sql3);
// $row3=mysqli_fetch_assoc($res3);

    
  