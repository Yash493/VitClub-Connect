<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap">


    <title>Club Management System</title>
</head>
<body>
    
<?php include 'header.php';?>
  
    <section class="hero">
        <div class="hero-image">
            <img src="images/hero.jpg" alt="Club Image">
        </div>
        <div class="hero-content">
       <br> <br> <br>
       <br>
        <h1>Unleash the Power of <br> Community</h1>
        <p>Effortlessly Manage Your Club Activities</p>
        <p>Our club management system is designed to streamline your club's operations and make management tasks easier than ever. Whether you're in charge of a sports club, a social organization, or any other type of club, our platform is here to help.</p>
        <p>Join us today and take your club management to the next level.</p>
        <br>
        <br>
        <br>
            <div class="buttons">
                <a href="login.php">Login/Register</a>
                
            </div>
        </div>
    </section>

    <section class="clubs">
    <h2>Discover Clubs You Can Join</h2>
    <div class="club-grid">
    <div class="club-card">
            <img src="images/club2.jpg" alt="Club 2">
            <h3>Technical Club</h3>
            <p>Explore the world of technology and innovation by joining our Technical Club. Engage in coding competitions, hackathons, and tech projects while connecting with like-minded individuals.</p>
        </div>
        <div class="club-card">
            <img src="images/club1.jpg" alt="Club 1">
            <h3>Music Club</h3>
            <p>Join our music club to create, perform, and appreciate music with fellow enthusiasts.</p>
        </div>
       
        <div class="club-card">
            <img src="images/club3.jpg" alt="Club 3">
            <h3>Extracarricular Club</h3>
            <p>Our Extracurricular Club is the perfect place to explore your diverse interests beyond academics. Dive into various activities, including arts, music, sports, and more.</p>
        </div>
        <div class="club-card">
            <img src="images/club4.jpg" alt="Club 2">
            <h3>Dance Club</h3>
            <p>Join us in celebrating the art of dance through various dance styles like hip-hop, contemporary, salsa, and more. Whether you're a beginner or an experienced dancer, you'll find a supportive community to learn, practice, and perform together.</p>
        </div>
        <div class="club-card">
            <img src="images/club5.jpg" alt="Club 2">
            <h3>Sports Club</h3>
            <p>Participate in various sports and stay active while enjoying the camaraderie of our sports club.</p>
        </div>
       
    </div>
</section>
<section class="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
   

    <?php include 'footer.php';?>
</body>
</html>
