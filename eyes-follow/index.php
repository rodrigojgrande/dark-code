<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

<div class="eyes">
    <div class="eye">
      <div class="ball"></div>
    </div>

    <div class="eye">
      <div class="ball"></div>
    </div>
  </div>


<script>
  var balls = document.getElementsByClassName("ball");
  document.onmousemove = function(){
    var x = event.clientX * 100 / window.innerWidth + "%";
    var y = event.clientY * 100 / window.innerHeight + "%";
    //event.clientX => get the horizontal coordinate of the mouse
    //event.clientY => get the Vertical coordinate of the mouse
    //window.innerWidth => get the browser width
    //window.innerHeight => get the browser height

    for(var i=0;i<2;i++){
      balls[i].style.left = x;
      balls[i].style.top = y;
      balls[i].style.transform = "translate(-"+x+",-"+y+")";
    }
  }
</script>

<?php include_once "_includes/footer.php" ?>
