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
  <header>
    <?php include 'https://raw.githubusercontent.com/lunaprey/MoonDance/main/header.php'; ?>
  </header>
  
  <div id="container">
    An OpenSource Web Community
    <div class="forum-category">
      <h2><a href="#">Welcome</a></h2>
      <p>MoonDance aims to become a comprehensive and entirely OpenSource forum software accessible to all for hosting their individual forums.</p>
      <p>This website is securely hosted on cPanel, adopting the same file structure and naming conventions as the corresponding GitHub project located at <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a>. Utilizing the PHP "include" function, each file executes the code derived from this project to power the functionality of this website.</p>
      <p>This project uses a MySQL backend solution for hosting dynamic conversations.</p>
    </div>
  </div>

  <div id="container">
    <div class="forum-category">
      <a href="new-topic.php">Create Thread</a>
      <div>
        <table style="width: 100%;">
          <tr style="color: #6c757d">
            <td>Subject</td><td>Posts</td><td>Creator</td><td>Last Post</td><td>Delete</td>
          </tr>
          <tr style="background-color: #010409">
            <td>Title</td><td>1</td><td>Name</td><td>Date</td><td>Delete</td>
          </tr>
          <tr>
            <td>Long Title</td><td>1</td><td>Name</td><td>Date</td><td>Delete</td>
          </tr>
          <tr style="background-color: #010409">
            <td>An even longer Title</td><td>1</td><td>Name</td><td>Date</td><td>Delete</td>
          </tr>
          <tr>
            <td>An even longer longer longer Title</td><td>1</td><td>Name</td><td>Date</td><td>Delete</td>
          </tr>
        </table>
        
      </div>
    </div>
  </div>
  
  <footer>
    <p>An opensource project. See <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a> to contribute.</p>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
