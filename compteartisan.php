<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="script.js"></script>
    <title>header artisan</title>
    <style>
   <?php include"headerartisan.css" ?>
 
    #divcompte{
     display:flex;

    }
    #divchange{
        border-right:5px solid #15324d;
        width:20%;
      
    }
    img{
       width:100%;
      
    }
 
    .btnicon{
        width:100%;
        margin-bottom: 2em;
        /* margin-top:0.5em;
        margin-left:5%; */
    }
    #divinfo{
       
        width:80%;
        /* height: 80vh; */
    }
  
</style>
   
</head>
<body>
<?php include "headerartisan.php" ?>
<div id="divcompte">

<?php


try {
    $conn = new PDO(
        'mysql:host=localhost;dbname=arty',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
  
    die('<h1>Erreur : </h1>' . $e->getMessage());
}
if(isset($_POST['unsername'])&&isset($_POST['image'])&&isset($_POST['job'])
&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['fb'])
&&isset($_POST['city'])&&isset($_POST['zone'])&&isset($_POST['description'])){
    if(!empty($_POST['username'])&&!empty($_POST['image'])&&!empty($_POST['job'])
    &&!empty($_POST['phone'])&&!empty($_POST['email'])&&!empty($_POST['fb'])
    &&!empty($_POST['city'])&&!empty($_POST['zone'])&&!empty($_POST['description'])){
        $username=htmlspecialchars($_POST['username']);
        $image=htmlspecialchars($_POST['image']);
        $job=htmlspecialchars($_POST['job']);
        $phone=htmlspecialchars($_POST['phone']);
        $email=htmlspecialchars($_POST['email']);
        $fb=htmlspecialchars($_POST['fb']);
        $city=htmlspecialchars($_POST['city']);
        $zone=htmlspecialchars($_POST['zone']);
        $description=htmlspecialchars($_POST['description']);




    }
}
$contenueClient=$conn->prepare('SELECT * FROM artisans WHERE id=1');
$contenueClient->execute(array());
//  $contenueClient=$con->query('SELECT * FROM artisans');
?>
<div id="divchange">
<?php
while($ligne=$contenueClient->fetch()){
    ?>
<img src="<?php echo $ligne['image'];?>" >
<button type="button" class="btn btnicon btn-outline-secondary"><i class="fas fa-user-edit"></i> changer la photo</button>
<button type="button" class="btn btnicon btn-outline-secondary"><i class="fas fa-unlock-alt"></i> changer Mote de passe</button>
<button type="button" class="btn btnicon btn-outline-secondary"><i class="fas fa-user-cog"></i> changer mes infos </button>
<button type="button" class="btn btnicon btn-outline-secondary"><i class="fas fa-user-cog"></i> Supprimer mon compte </button>

</div>

<div id="divinfo">
<table class="table"  style="text-align:center;width:70%;margin:auto;font-size:120%;">
  <caption>Mes informations</caption>
  <thead>
    <tr>
      <th scope="col" colspan="2" style="text-align:center;"><?php echo $ligne['username']?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Service</th>
      <td><?php echo $ligne['job']?></td>
     
    </tr>
    <tr>
      <th scope="row">Numéro tél</th>
      <td><?php echo $ligne['phone']?></td>
    
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><?php echo $ligne['email']?></td>
    </tr>
    <tr>
      <th scope="row">Facebook</th>
      <td><?php echo $ligne['fb']?></td>
    </tr>
    <tr>
      <th scope="row">Ville &zone</th>
      <td><?php echo $ligne['city']?>&nbsp;<?php echo $ligne['zone']?></td>
    </tr>
    <tr>
      <th scope="row">description</th>
      <td><?php echo $ligne['description']?></td>
   
    </tr>
  </tbody>
</table>
</div>
 <?php
}
?>

</div>



    <?php include "footer.php"?>
    <!-- ********** javaScript bootstrap lien ********** -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>