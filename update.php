<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nom = $row['nom'];
$email = $row['email'];
$telephone = $row['telephone'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,nom='$nom', email='$email', telephone='$telephone', password='$password' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "DONNEES INSEREES AVEC SUCCES";
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
            <input type="text" class="form-control" placeholder="Entrer votre Nom" name="nom" autocomplete="off" value=<?php echo $nom;?>>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" class="form-control" placeholder="Entrer votre e-mail" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" class="form-control" placeholder="Entrer votre téléphone" name="telephone" autocomplete="off" value=<?php echo $telephone;?>>
        </div>
       
        <div class="mb-3">
            <label>Mot de Passe</label>
            <input type="password" class="form-control" placeholder="Entrer votre mot de passe" name="password" autocomplete="off" value=<?php echo $password;?>>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
</form>
    </div>
    
  </body>
</html>


