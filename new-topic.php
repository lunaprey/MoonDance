<!DOCTYPE html>
<html>
<head>
  <title>New Topic</title>
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
    New Topic
    <div class="forum-category">
      <form action="new-topic.php" method="POST">
        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" placeholder="Enter the subject">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Enter your message"></textarea>
        </div>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>

  
  <footer>
    <p>An opensource project. See <a href="https://github.com/lunaprey/MoonDance">https://github.com/lunaprey/MoonDance</a> to contribute.</p>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
