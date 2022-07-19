<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if ($_POST["password"] == "defaultpassword") {
  ?>
    Login for <span class="message"><?php echo $_POST["username"]; ?></span> succeeded! <br>
  <?php
  } else {
  ?>
    <span class="message">Login was not successful</span>
  <?php
  }
  ?>
</body>

</html>