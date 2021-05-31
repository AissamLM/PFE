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
    <title>PFE ARTY</title>
    <style>
        <?php include"classbootstrap.css" ?>
        <?php include"style.css" ?>
        <?php include"header.css" ?>
        <?php include"tv.css" ?>
        <?php include"footer.css" ?>
        <?php include"readmore.css" ?>
        <?php include"comment.css" ?>
        h2,h3,h4,h5{
          color:#15324d;
    
        }
    </style>
   
</head>
<body>
    <?php include "header.php" ?>
   
    <div id="bgimg">
 <img src="1rolo.png" alt="">
<h1>aissam</h1>
<button type="button"id="top" class="btn btn-primary">Primary</button>
</div>

 <!-- <img src="sbnew.png"style="width:100%" alt=""> -->

<div id="disflex">
  <div id="text1">
  <h2>ÀPROPOS DE NOUS</h2>
  <h5><span id="arty"><span>ARTY.ma</span></span> permet à tous les artisans de
   diverses disciplines (Imeuble,teinture, zellige, 
   plâtre, forge, électricité ...) de placer leurs 
   <span id="dots">...</span><span id="more">publicités 
   gratuitement, aussi il facilite la
   diffusion de leurs informations sur Internet, 
   car il rapproche les clients de la technicien ou 
   artisan le plus proche de leur lieu de résidence.</span></h5>
  
   <button type="button" class="btn btn-outline-success"  onclick="myFunction()" id="myBtn">LIRE LA SUITE</button>
   

  </div>
  <div id="text2">
  <h2>VOTRE AVIS </h2>
  <h4>EST IMPORTANT POUR NOUS</h4>
 
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
<button type="button" class="btn btn-outline-success">EVALUER</button>
<p id="pevaluer">(Note moyenne 4.0 basé sur 4 avis)</p>
  </div>

</div>
<div id="comment">
  <h2>VOICI COMMENT CELA FONCTIONNE</h2>
  <div id="commenticons">
    <div>
    <i class="fas fa-filter"></i>
      <h4>Localisez un artisan à l'aide de notre répertoire de recherche</h4>
    </div>
    <div>
    <i class="fas fa-phone"></i>
      <h4>Communiquez avec le bon artisan pour toi</h4>
    </div>
    <div>
    <i class="fa fa-wrench"></i>
      <h4>Lancez-vous et laissez vos notes sur le profil de l'artisan</h4>
    </div>
  </div>
</div>
<?php include "tv.php" ?>
  <div id="btn">
  <a id="btnorange" href="#" class="btn btn-primary btn-lg ">Trouver des artisans</a>
  <h3>Êtes-vous un artisan?</h3>
  <a  href="#" class="btn btn-success btn-lg ">Créez votre compte maintenant</a>
 </div>
  
  <br><br><br>
    <?php include "footer.php"?>
    <!-- ********** javaScript bootstrap lien ********** -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>