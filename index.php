<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href ="style.css"/>
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
    <title>TiroTech!</title>
    
    <style>
       
     /* I may decide to syle this in css instead */ 
    /* lets see how is works out */ 
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
  
}
  /* Change the link color on hover  just trying out the command*/
li a:hover {
    background-color: #555;
    color: white;
}
li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}     
      
  </style>
  
  </head>
       
  <body>
    // add logo image an the link below 
    <img src="logo image"/>
    <div class="header"><h1>
      
      <?php
      $welcome = "GAMING & SURFING IN STYLE!";
      echo $welcome;
      
 <ul class="nav" id="nav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#products">Products</a></li>
  <li><a href="#gaming">Gaming</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  </li>
</ul>
<script>
function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}
</script>

      ?>
      

   
  </body>
</html>