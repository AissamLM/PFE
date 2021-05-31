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
        <?php include"header.css" ?>
        <?php include"footer.css" ?>
   
      
        h2{
            text-align:center;
            margin-top:0.5em;
            letter-spacing:0.3em;
            color:#15324d
        }
  
#divicons{

display:flex;
width:80%;
margin:auto;
margin-top:2em;
margin-bottom:1em;
}
#divicons div{
    width:33%;
    margin:auto;
    display: flex;
}
#divicons div i{
    font-size:2em;
    margin-right:0.3em;
    /* color:#ff3200; */
    color:#FF8C00;
  
}
#divform  i{
    font-size:1.5em;
    margin-right:0.3em;
    color:white;
}
#divform{
   width:80%;border-radius:10px;padding:15px;margin:auto;margin-bottom:1.5em;
    background-color:#15324d;
}
#divicons h4{
    color:#15324d;
}
#divform label{
 font-size:1.3em;
 color:white;
}
#divform span{
    font-size:1.4em;
    color:white;
}

@media all and (max-width:1010px) {
   /* for mobile */
   #divicons{
    display:block;
    width:100%;
    }
    #divicons div{
        width:100%;
        margin:auto;
        margin-left:10%;
        text-align:center;
        margin-bottom:0.7em;
    }
  }
       
    </style>
</head>
<body>
    <?php include "header.php" ?> 
    <h2>Contact</h2>
    <hr style="width:30%;margin:auto;">
    <div id="divicons">
            <div>
                <i class="fas fa-phone"></i>
                <h4>0625563616</h4>
            </div>
            <div style="width:45%">
                <i class="fas fa-envelope"></i>
                <h4>arty.contact@gmail.com</h4>
            </div>
            <div style="width:35%">
                 <i class="fa fa-clock-o"></i>
                 <h4>lun-ven/09:00-21:00</h4>
            </div>
       </div>
    
         <div id="divform">
         <form action="" method="post" >
         <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom & Prenom</label>
  <input type="text" class="form-control" id="exampleFormControlInput1">
</div>
         <div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><i class="fas fa-envelope-open-text "></i>Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button style="background-color:#ff3200;" type="submit" class="btn "><i class="far fa-paper-plane"></i><span>Envoyer</span></button>

</form> </div>
        
        
    <?php include "footer.php"?>
     <!-- ********** javaScript bootstrap lien ********** -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>