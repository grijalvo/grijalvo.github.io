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
  <a href="about">About</a>
  
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
   <h1> How technology is influencing the education system.  </h1>
  <img src="art2.jpg" alt="Simply Easy Learning" width="900" height="400">
 <br>
 <br>
<br>
 <p> Technology is influencing the education system in many ways. Schools are now using computers, robotics, and artificial intelligence to provide a better, more interactive learning experience.

The first way technology is influencing education is through the use of computers in the classroom. This can be seen as early as kindergarten, where children are exposed to basic computer concepts such as mouse skills and typing. As students grow older, they will learn how to use more advanced programs such as Microsoft Word or Photoshop. With computers, teachers can easily access information about their students' progress and assign them work based on their needs.

Another way that technology is influencing education is through robotics and artificial intelligence. Schools around the world are starting to use robots for everything from helping with homework to providing an extra set of hands during class time.

One of the newest innovations in this field comes from Japan, where a robot named Pepper has been designed specifically to interact with children and help them learn social skills like sharing or taking turns playing games together. This type of interaction could lead us into a world where robots are able to replace teachers altogether!</p>
    <br>
    
In addition to making learning easier, technology is also improving education because it can be used by professors to better assess students’ progress. Grades are given more quickly than before so students know their grade right away rather than waiting days or weeks for their grades to come back from the teacher. Professors also have access to a variety of programs that allow them to track how much time each student spends on a particular assignment and follow their progress through the coursework as well as see how long each student spends studying.
</div>



</body>
</html>
