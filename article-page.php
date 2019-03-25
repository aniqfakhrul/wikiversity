<?php
include 'header.php';
include 'queries.php';
include 'mysql.php';

if($_GET['id']){
  // $id = $_GET['id'];
  $id = base64_decode($_GET['id']);
  $hit = "UPDATE articles SET hit=hit+1 WHERE articleID=$id";
  mysqli_query($conn, $hit);
  $query = "SELECT * FROM articles WHERE articleID=$id";
  $result = mysqli_query($conn, $query) or die ($conn->error);
  $page = mysqli_fetch_assoc($result);
}
?>

<div class="zad billboard" data-zadtype="billboard"></div>



<div class="breadcrumb wrapper">
  <a href="../../culture.html"><?= $page['category'] ?></a>
    <div class="follow">
      <a href="https://facebook.com/theaseanbuzz"> Follow AseanBuzz &gt; <img src="s/mashable/follow_placeholder.png" alt="" style="vertical-align:middle; margin-left: 30px;"></a>
  </div>
</div>


<div class="wrapper content">
<div id="content">
<article itemscope itemtype="https://schema.org/Article" class="article ARTICLE">
  <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
  <meta itemprop="datePublished" content="2019-01-17T14:18:00+08:00"/>
  <meta itemprop="dateModified" content="2019-01-17T14:38:48.591329+08:00"/>
  <meta itemprop="inLanguage" content="en-sg"/>
  <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="url" content="../../s/mashable/mashable192.png">
      <meta itemprop="width" content="192">
      <meta itemprop="height" content="192">
    </div>
    <meta itemprop="name" content="Mashable SEA">
  </div>
  <span itemprop="image" style="display: none" itemscope itemtype="https://schema.org/ImageObject"><meta itemprop="url" content="https://sm.mashable.com/mashable_sea/photo/default/johor-premium-outlets-shopping_du4f.jpg"><meta itemprop="width" content="770"><meta itemprop="height" content="419"></span>

  <h1 id="id_title" itemprop="headline"><?= $page['title'] ?></h1>

  <ul class="sharer full">
  <li><a class="fb facebook_share" href="#">
    <svg id="shareFBSvg" width="44" height="44" viewBox="0 0 44 44" >
      <path class="pathSocialIcons" d="M23.23 30.5v-7.754h2.603l.39-3.023H23.23v-1.929c0-.875.243-1.471 1.498-1.471l1.6-.001v-2.703a21.367 21.367 0 0 0-2.332-.119c-2.307 0-3.887 1.408-3.887 3.995v2.228H17.5v3.023h2.609V30.5h3.121z" fill="#FFF"></path>
    </svg>
    Share on Facebook</a>
  </li>
  <li><a class="tw twitter_share" href="#">
    <svg id="shareTWSvg" width="44" height="44" viewBox="0 0 44 44">
     <path class="pathSocialIcons" d="M29.582 18.724c0-.164 0-.328-.01-.49a7.709 7.709 0 0 0 1.888-1.96 7.538 7.538 0 0 1-2.175.596 3.802 3.802 0 0 0 1.665-2.095 7.596 7.596 0 0 1-2.404.92 3.792 3.792 0 0 0-6.456 3.453 10.75 10.75 0 0 1-7.805-3.957 3.79 3.79 0 0 0 1.173 5.056 3.749 3.749 0 0 1-1.72-.474v.048a3.79 3.79 0 0 0 3.04 3.713 3.773 3.773 0 0 1-1.71.065 3.793 3.793 0 0 0 3.538 2.63A7.61 7.61 0 0 1 13 27.8a10.713 10.713 0 0 0 5.806 1.698c6.966.003 10.776-5.768 10.776-10.773z" fill="#FFF"></path>
    </svg>
  Share on Twitter</a>
  </li>
  <li class="mobileonly"><a class="wa whatsapp_share" href="whatsapp://send?text=Contrary%20to%20popular%20belief%2C%20Singaporeans%20are%20still%20shopping%20in%20Malaysia%20https%3A//sea.mashable.com/culture/1934/contrary-to-popular-belief-singaporeans-are-still-shopping-i">
  <svg id="shareWASvg" width="44" height="44" viewBox="0 0 44 44">
    <path class="logo_green" fill="35b14f" d="M10.7,32.8l0.6,0.3c2.5,1.5,5.3,2.2,8.1,2.2l0,0c8.8,0,16-7.2,16-16c0-4.2-1.7-8.3-4.7-11.3&#10;s-7-4.7-11.3-4.7c-8.8,0-16,7.2-15.9,16.1c0,3,0.9,5.9,2.4,8.4l0.4,0.6l-1.6,5.9L10.7,32.8z"/>
    <path class="logo_white" fill="#FFF" d="M32.4,6.4C29,2.9,24.3,1,19.5,1C9.3,1,1.1,9.3,1.2,19.4c0,3.2,0.9,6.3,2.4,9.1L1,38l9.7-2.5&#10;c2.7,1.5,5.7,2.2,8.7,2.2l0,0c10.1,0,18.3-8.3,18.3-18.4C37.7,14.4,35.8,9.8,32.4,6.4z M19.5,34.6L19.5,34.6c-2.7,0-5.4-0.7-7.7-2.1&#10;l-0.6-0.3l-5.8,1.5L6.9,28l-0.4-0.6c-4.4-7.1-2.3-16.5,4.9-20.9s16.5-2.3,20.9,4.9s2.3,16.5-4.9,20.9C25.1,33.8,22.3,34.6,19.5,34.6&#10;z M28.3,23.5L27.2,23c0,0-1.6-0.7-2.6-1.2c-0.1,0-0.2-0.1-0.3-0.1c-0.3,0-0.5,0.1-0.7,0.2l0,0c0,0-0.1,0.1-1.5,1.7&#10;                            c-0.1,0.2-0.3,0.3-0.5,0.3h-0.1c-0.1,0-0.3-0.1-0.4-0.2l-0.5-0.2l0,0c-1.1-0.5-2.1-1.1-2.9-1.9c-0.2-0.2-0.5-0.4-0.7-0.6&#10;                            c-0.7-0.7-1.4-1.5-1.9-2.4L15,18.4c-0.1-0.1-0.1-0.2-0.2-0.4c0-0.2,0-0.4,0.1-0.5c0,0,0.4-0.5,0.7-0.8c0.2-0.2,0.3-0.5,0.5-0.7&#10;                            c0.2-0.3,0.3-0.7,0.2-1c-0.1-0.5-1.3-3.2-1.6-3.8c-0.2-0.3-0.4-0.4-0.7-0.5h-0.3c-0.2,0-0.5,0-0.8,0c-0.2,0-0.4,0.1-0.6,0.1&#10;                            l-0.1,0.1c-0.2,0.1-0.4,0.3-0.6,0.4c-0.2,0.2-0.3,0.4-0.5,0.6c-0.7,0.9-1.1,2-1.1,3.1l0,0c0,0.8,0.2,1.6,0.5,2.3l0.1,0.3&#10;c0.9,1.9,2.1,3.6,3.7,5.1l0.4,0.4c0.3,0.3,0.6,0.5,0.8,0.8c2.1,1.8,4.5,3.1,7.2,3.8c0.3,0.1,0.7,0.1,1,0.2l0,0c0.3,0,0.7,0,1,0&#10;c0.5,0,1.1-0.2,1.5-0.4c0.3-0.2,0.5-0.2,0.7-0.4l0.2-0.2c0.2-0.2,0.4-0.3,0.6-0.5s0.4-0.4,0.5-0.6c0.2-0.4,0.3-0.9,0.4-1.4&#10;c0-0.2,0-0.5,0-0.7C28.6,23.7,28.5,23.6,28.3,23.5z"/></svg>
  Share on Whatsapp</a>
  </li>
</ul>



  <div class="articleHero" itemscope itemtype="https://schema.org/ImageObject">

      <div class="image"><img src="<?= $page['image_path'] ?>" alt="<?= $page['title'] ?>" itemprop="image"></div>

  </div>


  <div class="byline">
      <b>
        <img src="images/logo.png" srcset="images/logo.png 1x, images/logo.png 2x" alt="Sukhbir Cheema">By
        <span itemprop="author" itemscope itemtype="https://schema.org/Person" class="microdata person">
<span id="id_author" itemprop="name">AseanBuzz's Editor</span>
<meta itemprop="givenName" content="Sukhbir">
<meta itemprop="familyName" content="Cheema">
<meta itemprop="description" content="Sukhbir Cheema is a writer, playwright, theatre director and cartoonist based in Malaysia.">
<img src="https://sm.mashable.com/mashable_sea/user/s/sukhbir-ch/sukhbir-cheema_rx5a.jpg" itemprop="image" alt="Sukhbir Cheema" style="display: none">
</span>
      </b>
      <time datetime="2019-01-17T14:18:00+08:00" itemprop="datePublished">20 hours, 2 minutes</time>
  </div>

  <div id="id_text" itemprop="articleBody"><p><?= $page['content'] ?></p>

<figure itemscope="" itemtype="https://schema.org/ImageObject"><img  alt="" class="image photo" data-model="image" data-pk="4505" data-thumb="https://sm.mashable.com/mashable_sea/photo/default/malaysian-retailers-james_xqe2.jpg" itemprop="contentUrl" itemscope="" itemtype="https://schema.org/ImageObject" src="https://sm.mashable.com/mashable_sea/photo/default/malaysian-retailers-james_xqe2.jpg"/ itemscope itemtype="https://schema.org/ImageObject">
<figcaption itemprop="description">Singaporeans are still shopping in Malaysia, James Loke asserts. IMAGE: Focus Malaysia</figcaption>
</figure>

<p>Malaysian Retailers Association president James Loke explains that only a "handful" of Singaporeans are cancelling their shopping trips to the Malaysian states.</p>

<p>“If there are those who are not coming here to shop because of the Malaysia-Singapore tensions, I would say they make up only a handful,” James <a href="https://www.freemalaysiatoday.com/category/nation/2019/01/16/singaporeans-still-shopping-in-malaysia-says-retail-group/" target="_blank">explains</a>.</p>

<p>He adds that there were many Singaporeans who had arrived in droves during the recent Christmas holidays to shop with some even heading to Kuala Lumpur, Genting Highlands and nearby states.</p>

<p>“Yes, there may be some concern over the disputes, but the overall impact on business is minor.”</p>

<p>In fact, James adds that there were many Singaporeans who chose to shop specifically during the weekends.</p>

<figure itemscope="" itemtype="https://schema.org/ImageObject"><img  alt="" class="image photo" data-model="image" data-pk="4506" data-thumb="https://sm.mashable.com/mashable_sea/photo/default/shopping-in-malaysia_g2pm.jpg" itemprop="contentUrl" itemscope="" itemtype="https://schema.org/ImageObject" src="https://sm.mashable.com/mashable_sea/photo/default/shopping-in-malaysia_g2pm.jpg"/ itemscope itemtype="https://schema.org/ImageObject">
<figcaption itemprop="description">Singaporeans opt to shop in Malaysia due to the competitive prices. IMAGE: Malaysia Travel</figcaption>
</figure>

<p>It appears that the tension between leaders of both countries has not thwarted Singaporeans' preference to shop in Malaysia thanks to the affordability of goods and items here.</p>

<p>Singapore and Malaysia has been in a tiny spat since October following the latter's extending its limits of its Johor Bahru port into Singaporean waters.</p>

<p>In return, Singapore decided to extend its own port limits on December 6. Lawmakers from both nations are yet to sit down like mature adults over the matter although Singapore has been pretty vocal about the issue in its parliaments.</p>

<p>But this will certainly not affect businesses. Yet. Let's leave politics out of businesses shall we?</p></div>

  <div class="topics">TOPICS: <a href="../../malaysia.html">Malaysia</a>, <a href="../../singapore.html">singapore</a>, <a href="../../culture.html">Culture</a>, <a href="../../shopping-trolley.html">shopping trolley</a>, <a href="../../shopping.html">shopping</a></div>
</article>
</div>

<section class="sidebar">
<div class="zad halfpage" data-zadtype="halfpage"></div>

<?php
for ($i=0; $i < 3; $i++) {
?>
<div class="sb">
  <a href="../1940/if-you-thought-southeast-asia-does-not-have-amazing-artists.html" class="thumb"><img src="https://sm.mashable.com/t/mashable_sea/photo/default/sea-artists_xsav.360.jpg" srcset="https://sm.mashable.com/t/mashable_sea/photo/default/sea-artists_xsav.360.jpg, https://sm.mashable.com/t/mashable_sea/photo/default/sea-artists_xsav.720.jpg 2x" alt="If you thought Southeast Asia does not have amazing artists, think again (Article Culture)"></a>
  <div class="sbc">
    <em class="topic"></em>
    <a href="../1940/if-you-thought-southeast-asia-does-not-have-amazing-artists.html" class="title">If you thought Southeast Asia does not have amazing artists, think again</a>
  </div>
</div>
<?php } ?>
</section>

</div>

<?php include 'footer.php'; ?>
