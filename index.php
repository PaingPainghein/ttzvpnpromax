<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FNET VPN PRO</title>
  <meta name="author" content="FNET VPN PRO">
  <meta name="keywords" content="HTML,CSS,JavaScript"">
  <meta name ="revised" content ="02/11/2023" >
  <meta http-equiv ="refresh" content ="35" >
  
  <meta name="description" content="The number one app for you">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
<nav class="navbar fixed-top bg-?? placeholder-wave" style="background-color: #6750A4;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FNET VPN PRO</a>
    <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </div>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../app">Version 1.0.0</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Coming soon</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>

<div class="g1">
<br>

<style>
    .navbar {
        background: linear-gradient(
          to right,
          #158cff,
          #1172cfdc
        ); /* Adjust the colors as needed */
      }
  
 body{
 
     background-color: #ffffff;
 }
 
div.g1 {
  margin: 8px;
}

p.ex {
  font-size: 14px;
  }
  
  a {
  text-decoration: none;
  color: #6750A4;
  font-size: 14px;
}

.nav {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 65px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
}

.nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 13px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
}

.nav__link:hover {
    background-color: #00000000;
    color: #12976f;
}

.nav__link--active {
    color: #12976f;
}

.nav__icon {
    font-size: 18px;
}
    
</style>
</div>

<style>
html, body { margin:0; padding:0; font:16px/1.75 Verdana, Arial, Helvetica, sans-serif }
.page-content { padding:1em; max-width:64em; margin:auto }

.click-count { 
color: #757575; 
font-size: 12px;
 }

.blue {
    color:#12976f;
    font-size: 13px;
}
button {
margin-Top: 15px;
  background-color: #12976f;
  border: none;
  border-radius: 30px;
  color: white;
  padding: 5px 50px;
  font-size: none;
}
button:hover {
margin-Top: 15px;
  background-color: #0b855f;
  border: none;
  border-radius: 30px;
  color: white;
  padding: 5px 50px;
  font-size: none;
}

download {
    font-size: 12px;
}

.picture-cards {
  display: flex;
  padding: 1rem;
  margin-Top: 0px;
  
}

.destination-pictures {
  width: 100px;
  height: 100px;
  border-radius: 5%;
  margin-Top: 0px;
  
}
.picture-content {
  padding: 0 1rem;
  margin-Top: 13px;
  }
  
 .dl_img {
  width: 18px;
  height: 18px;
  }
  
.chartop {
    margin-Top: 50px;
}

ul.horizontal-slide {
    margin: 0px;
    padding: 10px;
    width: 100%;
    white-space: nowrap;
    overflow-x: auto;
}


.img-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.img-container img {
  cursor: pointer;
  border-radius: 6px;
  width: 50%;
  
}

.popupContainer {
  position: fixed;
  left: 0;
  bottom: 0;
  right: 0;
  top: 0;
  overflow: auto;
}
.popupContainer .popUpBackground {
  transition: all 0.3s ease-in-out;
  position: fixed;
  left: 0;
  bottom: 0;
  right: 0;
  top: 0;
}
.popupContainer .popUpBackground.active {
  background-color: rgba(0, 0, 0, 0.4);
}
.popupContainer .popImage {
  position: relative;
  display: block;
  transition: all 0.3s ease-in-out;
  border-radius: 1px;
}
     
</style>

<script>
    function initImagePopup(elem){
    // check for mouse click, add event listener on document
    document.addEventListener('click', function (e) {
        // check if click target is img of the elem - elem is image container
        if (!e.target.matches(elem +' img')) return;
        else{

            var image = e.target; // get current clicked image

            // create new popup image with all attributes for clicked images and offsets of the clicked image
            var popupImage = document.createElement("img"); 
            popupImage.setAttribute('src', image.src);
            popupImage.style.width = image.width+"px";
            popupImage.style.height = image.height+"px";
            popupImage.style.left = image.offsetLeft+"px";
            popupImage.style.top = image.offsetTop+"px";
            popupImage.classList.add('popImage');

            // creating popup image container
            var popupContainer = document.createElement("div"); 
            popupContainer.classList.add('popupContainer');
            
            // creating popup image background
            var popUpBackground = document.createElement("div"); 
            popUpBackground.classList.add('popUpBackground');

            // append all created elements to the popupContainer then on the document.body
            popupContainer.appendChild(popUpBackground);
            popupContainer.appendChild(popupImage);
            document.body.appendChild(popupContainer);

            // call function popup image to create new dimensions for popup image and make the effect
            popupImageFunction();


            // resize function, so that popup image have responsive ability
            var wait;
            window.onresize = function(){
                clearTimeout(wait);
                wait = setTimeout(popupImageFunction, 100);
            };

            // close popup image clicking on it
            popupImage.addEventListener('click', function (e) {
                closePopUpImage();
            });
            // close popup image on clicking on the background
            popUpBackground.addEventListener('click', function (e) {
                closePopUpImage();
            });


            function popupImageFunction(){
                // wait few miliseconds (10) and change style of the popup image and make it popup
                // waiting is for animation to work, yulu can disable it and check what is happening when it's not there
                setTimeout(function(){      
                    // I created this part very simple, but you can do it much better by calculating height and width of the screen,
                    // image dimensions.. so that popup image can be placed much better
                    popUpBackground.classList.add('active');
                    popupImage.style.left = "15%";
                    popupImage.style.top = "50px";       
                    popupImage.style.width = window.innerWidth * 0.7+"px";
                    popupImage.style.height = ((image.height / image.width) * (window.innerWidth * 0.7))+"px";       
                }, 10);
            }

            // function for closing popup image, first it will be return to the place where 
            // it started then it will be removed totaly (deleted) after animation is over, in our case 300ms
            function closePopUpImage(){
                popupImage.style.width = image.width+"px";
                popupImage.style.height = image.height+"px";
                popupImage.style.left = image.offsetLeft+"px";
                popupImage.style.top = image.offsetTop+"px";
                popUpBackground.classList.remove('active');
                setTimeout(function(){      
                    popupContainer.remove();
                }, 300);
            }
            
        }
    });
}

// Start popup image function
initImagePopup(".img-container") // elem = image container
</script>
</head>
<body>

<div class="page-content">
<!--     
<h2>AJAX &amp; PHP Click-Counter with Flat File Storage (text file)</h2>
<p>Log and display clicks on any HTML element. Counts are saved to a .txt file with PHP, while AJAX displays the increasing number in real time. No page refresh required!</p>
<p>PHP5 required. Works in modern browsers and IE8+</p>
<br/> -->


<?php 

$clickcount = explode("\n", file_get_contents('counter.txt'));
foreach($clickcount as $line){
	$tmp = explode('||', $line);
	$count[trim($tmp[0])] = trim($tmp[1]);
	}

?>

<!-- 
<button class="click-trigger" data-click-id="click-002">Click Me</button> 
<span id="click-002" class="click-count"><?php echo $count['click-002'];?></span> 
<br/><br/>

<button class="click-trigger" data-click-id="click-003">Click Me</button> 
<span id="click-003" class="click-count"><?php echo $count['click-003'];?></span> 
<br/><br/>  -->

<div class="picture-cards">
     <img src="https://fnetvpnpro.free.nf/app/ic_app_icon.png" alt="logo" class="destination-pictures">
    <div class="picture-content">
     <b>FNET VPN PRO</b>
      <div class="blue">M-66P Team</div>
<download>Contains no ads</download>

<div>
 <img class="dl_img" src="https://cdn-icons-png.flaticon.com/128/2319/2319152.png" alt="dl_viewers">
<span id="click-001" class="click-count"><?php echo $count['click-001'];?></span><download> Downloads</download></div>
    </div>
    </div>
    
 
  <center class="0">
 <a href="https://www.mediafire.com/file/ie371q9tz92rz40/FNET+VPN+PRO+V_1.0.0.apk/file">
<button class="click-trigger" data-click-id="click-001"><i class="fa fa-arrow-down"></i>  Download</button></a>
<br><br></center>
      
      <div class="img-container">
     <ul class="horizontal-slide">       
    <img src="https://fnetvpnpro.free.nf/img/download%20(66).png" class="object-fit-contain border rounded" style="width:45%" alt="...">
<img src="https://fnetvpnpro.free.nf/img/download%20(67).png" class="object-fit-cover border rounded" style="width:45%" alt="...">
<img src="https://fnetvpnpro.free.nf/img/download%20(68).png" class="object-fit-fill border rounded" style="width:45%" alt="..">
    </ul>
       </div>

   

   <br><br><br>
    <div class="chartop"></div>
     <br><br><br>
</div><!-- closing ".page-content" -->

</div>
<script>
var clicks = document.querySelectorAll('.click-trigger'); // IE8
for(var i = 0; i < clicks.length; i++){
	clicks[i].onclick = function(){
		var id = this.getAttribute('data-click-id');
		var post = 'id='+id; // post string
		var req = new XMLHttpRequest();
		req.open('POST', 'counter.php', true);
		req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		req.onreadystatechange = function(){
			if (req.readyState != 4 || req.status != 200) return; 
			document.getElementById(id).innerHTML = req.responseText;
			};
		req.send(post);
		}
	}
</script>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="nav">
  <a href="../404" class="nav__link">
    <i class="material-icons nav__icon">home</i>
    <span class="nav__text">Home</span>
  </a>
  <a href="../404" class="nav__link">
    <i class="material-icons nav__icon">image</i>
    <span class="nav__text">Image</span>
  </a>
  
   <a href="#" class="nav__link nav__link--active">
    <i class="material-icons nav__icon">android</i>
    <span class="nav__text">Install Apk</span>
  </a>
  <a href="../404" class="nav__link">
    <i class="material-icons nav__icon">notifications</i>
    <span class="nav__text">Notification</span>
  </a>
</nav>
<!-- partial -->
</body>
</html>
