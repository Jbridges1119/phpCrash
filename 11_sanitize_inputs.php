<?php
//$_GET & $_POST superglobals

/*
We can pass data through urls and forms using the $_GET and $_POST superglobals. 
*/
//checks to see if submit button has been set
if(isset($_POST['submit'])){
  //Prevent malicious use of inputs. eg, someone inputting JS
// $name = htmlspecialchars($_POST['name']);
// $age = htmlspecialchars($_POST['age']);

//Another method of protecting inputs
$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
echo $name;
echo $age;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST">
<div>
  <label for="name">Name: </label>
  <input type="text" name="name">
</div>
<div>
  <label for="age">Age: </label>
  <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
