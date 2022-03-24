<!DOCTYPE html>
<html lang="en">
<head>
<title>TECH INSIDER </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: black;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 18px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}



/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1> TECH INSIDER</h1>
   <b>Latest Tech News Online </b>
</div>

<div class="navbar">
  <a href="index.php" class="active">Home</a>
  <a href="ARTICLES.php">Articles</a>
  <a href="about.php">About</a>
 
</div>

<div class="row">
  <div class="side">
  
    <h2>Advanced technology is the future. It will certainly change the world and how we live within it.</h2>
   <video width="350" height="280" controls>
  <source src="video.mp4" type="video/mp4"> </video>
  <h3>With the increasingly competitive business world, it is important that products are up to date. Advanced technology is one of the key methods for achieving this. </h3>
 
<video width="350" height="280" controls>
  <source src="videos1.mp4" type="video/mp4"> </video>
  </div>
  
  <div class="main">
    <h1>START UP AND TECHNOLOGY NEWS</h1>
    <h5>Updated news today, March 24, 2002</h5>
  <img src="technology-header.jpg" alt="Simply Easy Learning" width="900" height="400">
 
    <h2> Catch Up on the Latest Tech News! </h2>

 <h3> There's a lot going on in the world of technology, and it can be hard to keep up.
 That's why we're here! We'll give you the latest tech news so that you can stay informed.
 We're like a little bird: constantly scouring the internet so that you don't have to. 
 Here are some things we've been seeing lately: <br> </h3>
<h2>

<li> Is Technology changed how human lived?  <br>

<li>How technology is influencing the education system. <br>

<li> What are the negative effects of new technologies? <br>

</h2>
    <br>
    
</div>



</body>
</html>
