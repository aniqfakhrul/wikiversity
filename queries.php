
<?php
  include 'mysql.php';
   $datas = array();
   $trending = array();
   $video = array ();
   $talk = array();

   //Latest News
   $query = "SELECT * FROM articles ORDER BY -articleID";
   $result = mysqli_query($conn, $query) or die ($conn->error);
   if(mysqli_num_rows($result)>0){
     for($i=0; $image = mysqli_fetch_assoc($result); $i++){
       $datas[$i]=$image;
     }
   }

   //Trending News
   $queryTrending = "SELECT * FROM articles ORDER BY -hit";
   $resultTrending = mysqli_query($conn, $query) or die ($conn->error);
   if (mysqli_num_rows($resultTrending)>0){
     for($i=0; $image = mysqli_fetch_assoc($resultTrending); $i++){
       $trending[$i] = $image;
     }
   }

   //Trending Video
   $queryVideo = "SELECT * FROM articles ORDER BY articleID";
   $resultVideo = mysqli_query($conn, $query) or die ($conn->error);
   if (mysqli_num_rows($resultVideo)>0){
     for($i=0; $image = mysqli_fetch_assoc($resultVideo); $i++){
       $video[$i] = $image;
     }
   }

   //Talks
   $queryTalk = "SELECT * FROM talks ORDER BY -articleID";
   $resultTalk = mysqli_query($conn, $query) or die ($conn->error);
   if (mysqli_num_rows($resultTalk)>0){
     for($i=0; $image = mysqli_fetch_assoc($resultTalk); $i++){
       $talk[$i] = $image;
     }
   }
?>
