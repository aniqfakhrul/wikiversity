  <?php
    include 'queries.php';
    include 'header.php';
  ?>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {font-family: "Lato", sans-serif}
  .mySlides {display: none}
  </style>

<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <div class="mySlides w3-display-container w3-center">
    <img src="images/kids.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/kids2.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/kids3.jpg" style="width:100%">
  </div>

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">WIKIVERSITY</h2>
    <p class="w3-opacity"><i>We love to educate people</i></p>
    <p class="w3-justify">TED-Ed celebrates the ideas of teachers and students around the world. Discover hundreds of animated lessons, create customized lessons, and share your big ideas to the world</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Aniq Fakhrul</p>
        <img src="images/aniq.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Lokman Azmi</p>
        <img src="images/aniq.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Izuddin</p>
        <img src="images/aniq.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Hanif</p>
        <img src="images/aniq.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Faizuddin</p>
        <img src="images/aniq.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>If you have any inquiries, feel free to contact us!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +013 511 7715<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: work@wikilifes.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>

</div>

<img src="images/kids3.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<?php include 'footer.php' ?>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
