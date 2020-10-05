<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>
  
    <form action="services/login.proc.php" method="POST">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Your email..."><br>
      <label for="psw">Password:</label><br>
      <input type="password" id="psw" name="psw" placeholder="Your password..."><br><br>
      <div class="container-submit">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

</body>
</html>