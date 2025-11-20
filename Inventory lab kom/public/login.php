<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/login.css" />

    <title>Login</title>

</head>
<body>
     <div class="container">
      <h1>
  <img src="../source/computer-removebg-preview.png" width="80" alt="computer"> <br>
  Login
    </h1>
      <form action="../admin/tampilan.php" method="POST">
        <label>Username</label> <br>
        <input type="text" name="username" required>
        <br>
        <label>Password</label> <br>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="tombol" >Log in</button>
      </form>
    </div>
</body>
</html>