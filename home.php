<?php

session_start();

?>

<html>
<head>
<title> Home Page </title>

<body>
    <a href= "logout.php"> LOGOUT</a>
    <h1> Welcome <?php echo $_SESSION['username']; ?></h1>

    <meta name="viewpoint" content="with-device-width", inital-scale="1.0">
        <title> Anglia Ruskin University's Internal Site</title>
        <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
   


    </head>
</body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/unilogo.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="Students.php">STUDENTS</a></li>
                    <li><a href="">COURSES</a></li>
                    <li><a href="">STAFF</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa bars" onclick="hidemenu()"></i>
        </nav>
    
<h1>Welcome</h1>  
                <div class= "text-box">
  
<a href="https://aru.ac.uk/student-life/life-on-campus/cambridge-campus" class="hero-btn"> Visit the University's main website for information that is not avaliable on the website</a>
</div>

</section>
<!-----Purpose of this webiste-->
<section class="reason">
<h1>Who is this is for</h1>
<p>Hi and welcome to the University's webiste. In this website,you are able to view student data. If you want to access the data about courses and for staff as well.</p>
<div class="row">
    <div class="about-col">
    <h3>Staff</h3>
    <p>Staff and faculty that wish access data can do so by following by these links.</p>
    </div>
</div>

</section>
<!------------campus-->
<section class="campus">
    <h1>Our Main Campus</h1>
<div class="row">
    <div class="campus-col">
        <img src="images/Cambridge2.jpg">
        <div class="layer">
            <h3>CAMBRIDGE</h3>
    </div>    
</div>
</section>

</body>
</html>
