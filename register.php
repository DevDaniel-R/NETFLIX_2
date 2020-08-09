<?php
if (isset($_POST["submitButton"])) {
  echo "Form was submitted";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to movieflix!</title>
  <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>

<body>

  <div class="signInContainer">
    <div class="column">

      <div class="header">
        <img src="assets/images/movieflex.png" title="Logo" alt="Site Logo" />
        <h3>Sign Up</h3>
        <span>to continue to Movieflix</span>
      </div>

      <form method="POST">

        <input type="text" name="firstName" placeholder="first name" required>

        <input type="text" name="lastName" placeholder="last name" required>

        <input type="text" name="userName" placeholder="user name" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="email" name="email2" placeholder="Confirm email" required>

        <input type="password" name="password" placeholder="password" required>

        <input type="password" name="password2" placeholder="Comfirm password" required>

        <input type="submit" name="submitButton" value="SUBMIT" required>

      </form>

      <a href="index.php" class="signInMessage">Already have an account? Sign in here!</a>

    </div>
  </div>

</body>

</html>