<?php


if (isset($_POST["submit"])) {
  echo $_POST["name"];
  echo $_POST["age"];
}

?>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=Zukkii&age=7">Click</a>

<!-- by default, form will be GET request. Thus, no need to declare -->
 <!-- Be aware that GET will show the input data on URI -->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>