<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
    <label for='email'> Enter your email: </label>
    <input action= "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>" type='email' name='name' id='email' method='post'>
    <input type='submit' value='Submit'>
  </form>
  </body>
</html>
<?php
$form = INPUT_POST;
if (filter_has_var($form, "hoi")) {
    if (filter_var($form, FILTER_VALIDATE_EMAIL)) {
        echo ("$form is a valid email address");
    } else {
        echo ("$form is not a valid email address");
    }
}

?>
