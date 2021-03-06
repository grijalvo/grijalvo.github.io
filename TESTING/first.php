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
   <h1> Is Technology changed how human lived?  </h1>
  <img src="art1.jpg" alt="Simply Easy Learning" width="900" height="400">
 <br>
 <br>
<br>
 <p>  Technology is what makes our world go round. From the moment we wake up, until the time we lie down to sleep,
 technology plays a central role in our lives.From our alarm clock to the coffee maker that gets us going in the morning, to our air conditioning unit and surrounding gadgets, technology provides us with comfort, entertainment, and information on a daily basis.
The role of technology in connecting the world has grown exponentially since the invention of the Internet. 
It has become easier than ever before to reach people around the world and to connect with them in an instant. 
We can share information and collaborate on projects with people all over the world without leaving our desk. 
We can chat or video call with someone across the globe or reach out to colleagues on the other side of town.
Technology has also changed how we consume news and information. In fact, you are reading this article because of technology!
 Technology gives us access to breaking news as it happens from any number of sources- mobile devices, news channels, social media sites and more.
 Way back when (think: pre-1990s), people relied primarily on television or newspapers for their news fix. 
Today people are turning to social media for updates from friends and family members all over the world. </p>
<br>
<p> Technology means so many things to us. It makes our life easier. It makes us safer, more connected, and more productive. It's the machine that keeps on giving.
But what's even better than the technology we use today? The technology we use tomorrow. And the one after that. And the one after that.
Yeah, yeah, I know: change is scary. But try to keep an open mind and look at all the ways our lives are changing and improving due to technological innovation:</p>
 <br>
    
</div>



</body>
</html>
