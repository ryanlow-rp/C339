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
  if ($_POST["psw"] == "secretpassword") {
  ?>
    Welcome <span id="result"><?php echo $_POST["uname"]; ?></span><br>
  <?php
  } else {
  ?>
    <span id="result">Login was not successful</span>
  <?php
  }
  ?>
</body>

</html>