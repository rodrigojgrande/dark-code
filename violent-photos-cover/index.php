<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

  <div class="middle">

    <div class="image">
      <img src="image.jpg" class="img" alt="">
      <div class="text">This photo may have a violent content.</div>
      <button onclick="coverImage()" class="btn">Uncover Image</button>
    </div>
  </div>

<script type="text/javascript">
  var btn = document.getElementsByClassName('btn')[0],
      text = document.getElementsByClassName('text')[0],
      img = document.getElementsByClassName('img')[0],
      c = 0;
  function coverImage() {
    if(c == 0){
      btn.innerHTML = "Cover Image";
      text.style.display = "none";
      img.style.filter = "blur(0)";
      c = 1;
    }else{
      btn.innerHTML = "Uncover Image";
      text.style.display = "block";
      img.style.filter = "blur(24px)";
      c = 0;
    }
  }

</script>

<?php include_once "_includes/footer.php" ?>
