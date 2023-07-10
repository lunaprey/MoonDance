<nav class="navbar navbar-dark">
  <div class="d-flex align-items-center">
    <a class="navbar-brand, glow mr-2" href="#">
      <i class="fas fa-moon"></i>
    </a>
    <span class="navbar-text"><a href="https://moon-dance.net">MoonDance</a></span>
  </div>
  <?php
    if (isset($_SESSION['userid'])) {
        // Logout Button
    ?>
    <div class="ml-auto">
        <span class="navbar-text mr-2"><a href="profile.php?id=<?php echo $_SESSION['userid']; ?>"><?php echo $_SESSION['username']; ?></a></span>
        <button type="button" value="Logout" onclick="window.location.href='logout.php'">Logout</button>
    </div>
    <?php
    } else {
        // Show Login form and Register Button
    ?>
    <div class="ml-auto">
        <form method="post" action="login.php" class="form-inline">
            <input name="username" class="black-background" type="text" placeholder="Username" aria-label="Username">
            <input name="password" class="black-background" type="password" placeholder="Password" aria-label="Password">
            <input class="black-background" value="Login" type="submit">
            &nbsp;<div style="color:#6c757d;">or</div>&nbsp;
            <button type="button" value="Logout" onclick="window.location.href='register.php'">Register</button>
        </form>
    </div>
    <?php
    }
    ?>
    </nav>
