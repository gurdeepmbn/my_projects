<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Example</title>
<style>
  /* Some basic CSS for the navbar */
  .navbar {
    background-color: #333;
    overflow: hidden;
  }
  .navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }
  .navbar a:hover {
    background-color: #ddd;
    color: black;
  }
  .active {
    background-color: #555;
    color: white;
  }
</style>
</head>
<body>

<div class="navbar">
  <a class="nav-item" href="#">Home</a>
  <a class="nav-item" href="#">About</a>
  <a class="nav-item" href="#">Services</a>
  <a class="nav-item" href="#">Contact</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.nav-item').click(function(){
      $('.nav-item').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>

</body>
</html>
