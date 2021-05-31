<div id="card" class="card text-white bg-success mb-3">
  <div class="card-header"><button type="button" class="btn btn-outline-success"><h2 style="color:white;">c'est quoi l'intérêt ?</h2></button></div>
  <div class="card-body" >
    <p class="card-text" id="show">Le site permet à tous les artisans de diverses disciplines (Imeuble,teinture, zellige, plâtre, forge, électricité ...) de placer leurs publicités gratuitement, aussi il facilite la diffusion de leurs informations sur Internet, car il rapproche les clients de la technicien ou artisan le plus proche de leur lieu de résidence.</p>
    </div>
</div>
<script>

$("#show").hide();
$(document).ready(function(){
  $("button").click(function(){
    $("#show").toggle();
  });
});

// $(".show.icon input").click(function(){
//     $("#bgimg h1").;
//   });

</script>