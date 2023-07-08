<!DOCTYPE html>
<html>
<head>
  <title>MoonDance</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    <?php include 'https://raw.githubusercontent.com/lunaprey/MoonDance/main/style.css'; ?>
  </style>
</head>
<body>
  <nav class="navbar navbar-dark">
  <div class="d-flex align-items-center">
    <a class="navbar-brand, glow mr-3" href="#">
      <i class="fas fa-moon"></i>
    </a>
    <span class="navbar-text"><a href="#">MoonDance</a></span>
  </div>
  <?php
    if (isset($_SESSION['userid'])) {
        // Logout Button
    ?>
    <div class="ml-auto">
        <span class="navbar-text mr-2"><a href="#"><?php echo $_SESSION['userid']; ?></a></span>
        <a href="logout.php" class="">Logout</a>
    </div>
    <?php
    } else {
        // Show Login form and Register Button
    ?>
    <div class="ml-auto">
        <form action="login.php" class="form-inline">
            <input class="black-background" type="text" placeholder="Username" aria-label="Username">
            <input class="black-background" type="password" placeholder="Password" aria-label="Password">
            <button class="black-background" type="submit">Login</button>
        </form>
        <a href="register.php" class="ml-auto">Register</a>
    </div>
    <?php
    }
    ?>
    </nav>
  
  <div id="container">
    An OpenSource Web Community</h1>
    
    <div class="forum-category">
      <h2><a href="#">Welcome</a></h2>
      <p>MoonDance aims to become a comprehensive and entirely OpenSource forum software accessible to all for hosting their individual forums.</p>
      <p>This website is securely hosted on cPanel, adopting the same file structure and naming conventions as the corresponding GitHub project located at <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a>. Utilizing the PHP "include" function, each file executes the code derived from this project to power the functionality of this website.</p>
      <p>In the course of this project's development, I plan to incorporate MongoDB as the preferred backend solution for hosting dynamic conversations.</p>
    </div>

  </div>
  
  <footer>
    <p>An opensource project. See <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a> to contribute.</p>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
