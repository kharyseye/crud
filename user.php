<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $password=$_POST['password'];

    $sql="insert into `crud`(nom,email,telephone,password) 
    values('$nom','$email','$telephone','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "DONNEES INSEREES AVEC SUCCES";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>crud operation</title>
  </head>
  <body>
  
    <h1 class="text-center my-5" >Inscription aux Cartes Etudiants </h1>
    <div class="container my-5">
    <form method="post"> 
       
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" class="form-control" placeholder="Entrer votre Nom" name="nom" autocomplete="off">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" class="form-control" placeholder="Entrer votre e-mail" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" class="form-control" placeholder="Entrer votre téléphone" name="telephone" autocomplete="off">
        </div>
       
        <div class="mb-3">
            <label>Mot de Passe</label>
            <input type="password" class="form-control" placeholder="Entrer votre mot de passe" name="password" autocomplete="off">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
</form>
    </div>
    
  </body>
</html>


