<?php
  include 'header-talks.php';
  include '../queries.php';
?>

<div class="wrapper content">
<div id="content">
<ul class="cl">

<li class="video  pos1">
  <a href="../tech/1835/this-mask-uses-lights-to-alert-you-to-polluted-air.html">
    <img src="../img/thumbnail/peter.jpg" alt="0" srcset="../img/thumbnail/peter.jpg 1x, ../img/thumbnail/peter.jpg 2x">
    <span class="caption">10 PREMIERE PRO tips you SHOULD KNOW! Tutorial from Beginner to Pro</span>
    <time></time>
  </a>
</li>

<?php for ($i=0; $i < count($talk); $i++) { ?>
<li class="video  pos2">
  <a href="../article-page.php?id=<?= urlencode(base64_encode($talk[$i]['articleID'])); ?>">
    <img src="../<?= $talk[$i]['image_path'] ?>" alt="0" srcset="../<?= $talk[$i]['image_path'] ?>, ../<?= $talk[$i]['image_path'] ?> 2x">
    <span class="caption"><?= $talk[$i]['title'] ?></span>
    <time></time>
  </a>
</li>
<?php } ?>
</div>
</div>
<div class="zad footer" data-zadtype="footer"></div>
<?php include 'footer-talks.php' ?>
