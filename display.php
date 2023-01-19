<?php
include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>crud operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD USER</a></button>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Mot de Passe</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
<?php
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    if ($result){
        while ($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $nom=$row['nom'];
          $email=$row['email'];
          $telephone=$row['telephone'];
          $password=$row['password'];

          echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$nom.'</td>
          <td>'.$email.'</td>
          <td>'.$telephone.'</td>
          <td>'.$password.'</td>
          <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Modifier</a></button>
            <button class="btn btn-danger" ><a href="delete.php? deleteid='.$id.'"class="text-light">Supprimer</a></button>
          </td>
        </tr>';
        }
    }


?>
  </tbody>
</table>
    </div>   
    
</body>
</html>