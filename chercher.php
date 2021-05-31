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
    <title>chercher</title>
    <style>
        <?php include"classbootstrap.css" ?>
        <?php include"style.css" ?>
        <?php include"header.css" ?>
        <?php include"tv.css" ?>
        <?php include"footer.css" ?>
        <?php include"readmore.css" ?>
        <?php include"comment.css" ?>
        h2{
            
            margin-top:0.5em;
            text-align:center;
            letter-spacing:0.2em;
            color:#15324d;
        }
       
        #divform{
           
            width:80%;
            margin:auto;
            margin-bottom:1.5em;
            margin-top:2em;
            background-color:#15324d;
            border-radius:10px;
            padding: 20px;
        }
        #displayinputs{
            display:flex;
            /* margin-bottom:1em; */
        }
        .form-group{
            width:30%;
            margin:auto;
        }
        .form-group label{
         color:white;
          font-size:1.5em;
        }
        #button{
            width:97%;
            margin-top:1em;
            margin:auto;
            /* text-align:center; */
        }
        #btn{
            background-color:#ff3200;
        }
       .form-group i{
    font-size:1.1em;
    margin-right:0.3em;
    color:#7FFF00;
}

        @media all and (max-width:1000px) {
                    
            #displayinputs{
                      display:block;
                     
                  }
                  .form-group{
            width:90%;
            margin:auto;
            margin-bottom:1em;
        }

        }
    </style>
</head>
<body>
    <?php include "header.php" ?> 
    <h2>LISTE DES ARTISANS</h2>
    <hr style="width:60%;margin:auto;"/>
    
    <div id="divform">
 <form action="chercher.php" method="GET" >
 <div id="displayinputs">
 <div class="form-group">
    <label for="service"><i class="fa fa-wrench"></i>les services</label>
    <select class="form-control" id="service">
    <option>Électricien</option>
     <option>Nettoyage</option>
     <option>jardinier</option>
     <option>zellige</option>
      <option>GYPSE</option>
    <option>Transport de marchandises</option>
    <option>forgeron</option>
    <option>Baby-sitter</option>
    <option>Charpentier</option>
      <option>teinturier</option>
      <option>Imeuble</option>
    </select>
  </div>
  <div class="form-group">
 <label for="ville"> <i class="fas fa-city"></i>les villes</label>
<input list="city" id="ville" class="form-control" placeholder="la ville"/>
<datalist id="city">
<option value="Tanger">
<option value="Tetouan">
<option value="Nador">
<option value="Elhoussaima">
<option value="Taza">
<option value="Casablanca">
<option value="Rabat">
<option value="Salé">
<option value="Fés">
<option value="Marrakech">
<option value="Meknès">
<option value="Oujda">
<option value="Mohammédia">
<option value="Khouribga">
<option value="El Jadida">
<option value="Béni Mellal">
<option value="Agadir">
<option value="Kénitra">
<option value="Khémisset">
</datalist>
</div>
<div class="form-group">
    <label for="zone"><i class="fas fa-map-marker-alt"></i>la zone</label>
    <select class="form-control" id="zone">
      <option>la zone</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  </div>
  <div id="button">
  <button  type="submit" class="btn btn-danger btn-lg btn-block" id="btn">
    <i class="fas fa-search"></i>
  </button>
  </div>

 </form>
 </div>


    <?php include "footer.php" ?>

    <!-- ********** javaScript bootstrap lien ********** -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>