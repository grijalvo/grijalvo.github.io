<!DOCTYPE html>
<html lang="en">
<head>
<title>TECH INSIDER</title>
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
  padding: 20px;
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
  
    <h1>Latest Topic Today</h1>
	<h5>Updated news today, March 24, 2002</h5>
	<img src="art1.jpg" alt="Trulli" width="350" height="200">
	<a href="first.php"> Is Technology changed how human lived? </a>
	<br>
	<img src="art2.jpg" alt="Trulli" width="350" height="200">
	<a href="second.php"> How technology is influencing the education system.  </a>
	<br>
	<img src="art3.webp" alt="Trulli" width="350" height="200">
	<a href="third.php"> What are the negative effects of new technologies? </a>
    
</div>

  <div class="main">
   <h1> Technology Nowadays! </h1>
  <img src="backimage.jpg" alt="Simply Easy Learning" width="900" height="400">
 <br>
 <br>
<br>
 <p> We do everything faster nowadays. Our lives move at super speed and finding time to stop, slow down and smell the roses is next to impossible.
 We are addicted to our devices;we have become permanently connected to our computers and mobile phones every moment of the day.
 It seems that technology is advancing at a faster rate than ever before; as one technology evolves and develops so does another. 
The generations of today demand more, they want it all faster and better, this has brought about new ideas and concepts that are remarkable. 
New technology is rapidly emerging on a daily basis, with the result being a world that becomes increasingly more connected and convenient for consumers.
<br> Although the pervasiveness of technology can sometimes cause anxieties, it's worthwhile to consider how the technological landscape that we inhabit 
today has impacted our lives and shaped how we navigate across the world. 
<br>
<br>
Technology has become an indispensable part of our lives, but how much do we really know about it? 
This blog post is going to tackle how technology changed the way how human live. How technology influence or adopt in education system. And the Negative Effects of Technologies.
</p>

    <br>
    
</div>



</body>
</html>
