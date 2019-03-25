<?php
  include 'queries.php';
  include 'header.php';
?>

<div class="wrapper content">
<div id="content">
<div id="new">
    <em class="title">What's New</em>
    <ul id="wn" data-pagenum="1">
    <?php
    for ($j=0; $j < 4; $j++) {
    for ($i=0; $i < count($datas); $i++) {
      if (empty($video[$i]['videoURL'])) {
    ?>
      <li>
        <a href="article-page.php?id=<?= urlencode(base64_encode($datas[$i]['articleID'])); ?>">
          <img src="<?= $datas[$i]['image_path'] ?>" srcset="<?= $datas[$i]['image_path'] ?>, <?= $datas[$i]['image_path'] ?> 2x" alt="Netflix claims an enormous number of people are watching &#39;You&#39; (News Entertainment)"></a>
            <div class="wcnt">
                <a href="article-page.php?id=<?= urlencode(base64_encode($datas[$i]['articleID'])); ?>" class="lnk"><?= $datas[$i]['title'] ?></a>
                <time class="microsharer"><?= $datas[$i]['date'] ?></time>
            </div>
      </li>
    <?php }
    }
  }
    ?>
    </ul>
</div>

<div id="rising">
    <em class="title">What's Trending</em>
    <ul id="wr">
    <?php for ($i=0; $i < count($trending); $i++) {
      if (empty($video[$i]['videoURL'])) {
    ?>
        <li>
          <a href="article-page.php?id=<?= urlencode(base64_encode($trending[$i]['articleID'])); ?>" class="thumb">
          <img src="<?= $trending[$i]['image_path'] ?>" srcset="<?= $trending[$i]['image_path'] ?>, <?= $trending[$i]['image_path'] ?> 2x" alt="The world&#39;s hottest places on earth were all in Australia (Article Culture)"></a>
          <em class="topic"><?= $trending[$i]['category'] ?></em>
          <a href="article-page.php?id=<?= urlencode(base64_encode($trending[$i]['articleID'])); ?>" class="title"><?= $trending[$i]['title'] ?></a>
          <span class="microsharer"></span>
        </li>
    <?php }
    }
    ?>
    </ul>
</div>

<div id="hot">
    <em class="title">Trending Video</em>
    <ul id="wh">
    <?php
    for ($i=0; $i < count($video); $i++) {
      if (!empty($video[$i]['videoURL'])) {
    ?>
      <li>
      <a href="article-page.php?id=<?= urlencode(base64_encode($video[$i]['articleID'])); ?>" class="thumb">
        <img src="<?= $video[$i]['image_path'] ?>" srcset="<?= $video[$i]['image_path'] ?>, <?= $video[$i]['image_path'] ?> 2x" alt="Contrary to popular belief, Singaporeans are still shopping in Malaysia (Article Culture)"></a>
      <div class="wcnt">
          <em class="topic"><?= $video[$i]['category'] ?></em>
          <a href="article-page.php?id=<?= urlencode(base64_encode($video[$i]['articleID'])); ?>" class="title"><?= $video[$i]['title'] ?></a>
      </div>
      <span class="microsharer"></span>
      </li>
    <?php
      }
    }
    ?>
    </ul>
</div>
</div>

</div>
<?php include 'footer.php' ?>
