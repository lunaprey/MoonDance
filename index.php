<!DOCTYPE html>
<html>
<head>
  <title>MoonDance</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #111111;
      color: #ffffff;
      font-family: Arial, sans-serif;
      font-size: 12pt;
    }
    
    #container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #222222;
      border: 1px solid #333333;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    
    h1 {
      text-align: left;
      font-size: 16px;
    }
    p {
        font-size: 12px;
    }
    
    .forum-category {
      background-color: #333333;
      padding: 10px;
      margin-bottom: 20px;
    }
    
    .forum-category h2 {
      color: #ffffff;
      font-size: 14px;
      margin: 0;
    }
    
    .forum-category a {
      color: #00aaff;
      text-decoration: none;
    }
    
    .forum-category a:hover {
      color: #00ddff;
    }
    
    .glow {
      text-shadow: 0 0 10px #00aaff, 0 0 20px #00aaff, 0 0 30px #00aaff;
    }
    
    footer {
      text-align: center;
      margin-top: 20px;
      padding-top: 10px;
      border-top: 1px solid #333333;
    }
     .input-sm {
      height: 20px;
    }
    .navbar {
      background-color: #333333;
      font-size: 14px;
    }
    
    .navbar-brand {
      font-size: 12px;
      color: #ffffff;
    }
    
    .form-inline .form-control {
      width: 150px;
      font-size: 12pt;
    }
    
    .btn-primary {
      background-color: #002aff;
      border-color: #002aff;
      font-size: 12pt;
    }
    
    .btn-primary:hover {
      background-color: #004cff;
      border-color: #004cff;
    }
    
    .btn-light {
      color: #ffffff;
      font-size: 12pt;
    }
    
    .btn-light:hover {
      background-color: #ffffff;
      color: #000000;
    }

    /* Custom styles */
    .login-button {
      padding-top: 0.375rem !important;
      padding-bottom: 0.375rem !important;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-dark">
  <a class="navbar-brand, glow" href="#">
    <i class="fas fa-moon"></i>
  </a>
  <form class="form-inline ml-auto">
    <input class="form-control form-control-sm mr-sm-2 input-sm" type="text" placeholder="Username" aria-label="Username">
    <input class="form-control form-control-sm mr-sm-2 input-sm" type="password" placeholder="Password" aria-label="Password">
    <button class="btn btn-primary btn-sm my-2 my-sm-0 input-sm login-button" type="submit">Login</button>
  </form>
  <a href="#" class="btn ml-2">Register</a>
    </nav>

  
  
  <div id="container">
    <h1 class="glow">Threads</h1>
    
    <div class="forum-category">
      <h2><a href="#">General Discussion</a></h2>
      <p>This is a place to discuss general topics.</p>
    </div>
    
    <div class="forum-category">
      <h2><a href="#">Technical Support</a></h2>
      <p>Get help with technical issues here.</p>
    </div>
    
    <div class="forum-category">
      <h2><a href="#">Announcements</a></h2>
      <p>Stay updated with the latest forum news.</p>
    </div>
  </div>
  
  <footer>
    <p>An opensource project. See <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a> to contribute.</p>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
