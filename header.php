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
