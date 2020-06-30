<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

<div class="middle">
  <div class="counting-sec">
    <div class="inner-width">
      <div class="col">
        <i class="far fa-smile-wink"></i>
        <div class="num">1246</div>
        Speakers
      </div>

      <div class="col">
        <i class="fas fa-briefcase"></i>
        <div class="num">19</div>
        Services
      </div>

      <div class="col">
        <i class="far fa-money-bill-alt"></i>
        <div class="num">687</div>
        Sells
      </div>

      <div class="col">
        <i class="far fa-object-group"></i>
        <div class="num">87</div>
        Templates
      </div>
    </div>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

<script type="text/javascript">
  $(".num").counterUp({delay:10,time:1000});
</script>

<?php include_once "_includes/footer.php" ?>
