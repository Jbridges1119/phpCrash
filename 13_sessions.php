<?php
//store info in variables on server - used across multiple pages

session_start();

if (isset($_POST['submit'])) {
  //Prevent malicious use of inputs. eg, someone inputting JS
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);

  //Another method of protecting inputs
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  //don't need to sanitize - normally hashed
  $password = $_POST['password'];

  if ($username == 'jack' && $password == 'password') {
    //setting username to jack
    $_SESSION['username'] = $username;
    //redirect
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="name">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="age">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">