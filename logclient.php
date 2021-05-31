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
    <title>S'inscrire de Client</title>
    <style>
        <?php include"classbootstrap.css" ?>
        <?php include"header.css" ?>
        <?php include"footer.css" ?>
   
      
        h2{
            text-align:center;
            margin-top:0.5em;
            letter-spacing:0.3em;
            color:#15324d
        }
  


#divform  i{
    font-size:1.2em;
    margin-right:0.3em;
    color:#7FFF00;
}
#divform{
   width:50%;border-radius:10px;padding:15px;margin:auto;margin-bottom:1.5em;
    background-color:#15324d;
    margin-top:2em;
}

#divform label{
 font-size:1.2em;
 color:white;
}
#divform span{
    font-size:1.4em;
    color:white;
}



@media all and (max-width:1030px) {
   /* for mobile */
   #divform{
   width:85%;}
  }
       
    </style>
   
</head>
<body>
    <?php include "header.php" ?> 
    <h2>S'inscrire</h2>
    <hr style="width:40%;margin:auto;">
    
    
  <div id="divform">
 <form action="" method="post" onSubmit="return validate();">
    <div class="mb-2">
      <label for="exampleFormControlInput1" class="form-label">  <i class="fas fa-user"></i>Nom & Prenom</label>
      <input type="text" class="form-control" id="exampleFormControlInput1"  required>
    </div>
    <div class="mb-2">
       <label for="exampleFormControlInput2" class="form-label"><i class="fas fa-envelope"></i>E-mail</label>
       <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com"  required>
    </div>
    <div class="mb-2">
      <label for="password" class="form-label">  <i class="fas fa-lock"></i>Mote de passe</label>
      <input type="password" class="form-control" id="password" required>
    </div>
    <div class="mb-2">
      <label for="confirm_password" class="form-label"> <i class="fas fa-lock"></i>Confirmer mote de passe</label>
      <input onkeyup="key();"  type="password" class="form-control" id="confirm_password" required>
    </div>
    <div class="mb-2">
      <label for="tel" class="form-label"> <i class="fas fa-phone"></i>Numéro télephone</label>
      <input type="text" class="form-control" id="tel" required  placeholder="06 ** ** ** **">
    </div>
 
    <div class="mb-2">
      <label for="exampleFormControlInput7" class="form-label"> <i class="fas fa-id-badge"></i>Choisir un photo profile</label>
      <input type="file" class="form-control" id="exampleFormControlInput7"  required>
    </div>
    <div class="mb-2">
      <label for="ville" class="form-label"> <i class="fas fa-city"></i>La ville</label>
      <input list="city" id="ville" class="form-control" placeholder="la ville"  required/>
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
    <div class="mb-2">
      <label for="zone" class="form-label"> <i class="fas fa-map-marker-alt"></i>La zone</label>
      <select class="form-control" id="zone"  required>
      <option>zone 1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
   
  
 
 
       
   <button style="background-color: blue" type="submit" class="btn "><i class="fas fa-user-plus" style="color:white;font-size:1.5em;"></i><span>S'inscrire</span></button>
   
</form></div>
        
    <?php include "footer.php"?>
     <!-- ********** javaScript bootstrap lien ********** -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>


<script>
    
        function validate(){

            var a = document.getElementById("password").value;
        var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Les mots de passe ne correspondent pas !!");
               return false;
            }
        }

        function key()
        {
            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if(a!=b)
            {
                document.getElementById("confirm_password").style.backgroundColor="Red";
            }
            else
            {
                document.getElementById("confirm_password").style.backgroundColor="white";
            }
        }
     </script>


</html>