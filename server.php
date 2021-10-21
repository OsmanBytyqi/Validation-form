<?php


$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=loginform", $username, $password);

   if(isset($_POST['email'])){

    

    $sql="INSERT INTO user (username,email,password,telephone,slug)
    VALUES (:username,:email,:password,:telephone,:slug)";
    $stm=$conn->prepare($sql);
    $stm->bindValue(':username',$_POST['username']);
    $stm->bindValue(':email',$_POST['email']);
    $stm->bindValue(':password',$_POST['password']);
    $stm->bindValue(':telephone',$_POST['telephone']);
    $stm->bindValue(':slug',$_POST['slug']);
    $stm->execute();

    echo "data has been saved";

    
   }


  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>