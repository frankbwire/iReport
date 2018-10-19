<?php
session_start();
// initializing variables
$fname = "";
$lname="";
$email = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ireport');
// REGISTER USER
if (isset($_POST['reg_user'])) {
// receive all input values from the form
$fname =mysqli_real_escape_string($db, $_POST['fname']);
$lname =mysqli_real_escape_string($db, $_POST['lname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$pass_1 = mysqli_real_escape_string($db, $_POST['pass1']);
$pass_2 = mysqli_real_escape_string($db, $_POST['pass2']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($fname)) { array_push($errors, "First Name is required"); }
if (empty($lname)) { array_push($errors, "Last Name is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($pass_1)) { array_push($errors, "Password is required"); }
if ($pass_1 != $pass_2) {
array_push($errors, "The two passwords do not match");
}
// first check the database to make sure
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM users WHERE firstname='$fname' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
if ($user['email'] === $email) {
array_push($errors, "email already exists");
}
}
// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
$password = md5($pass_1);//encrypt the password before saving in the database
$query = "INSERT INTO users (firstname,lastname, email, password)
VALUES('$fname','$lname', '$email', '$password')";
mysqli_query($db, $query);
$_SESSION['email'] = $email;
$_SESSION['success'] = "You are now logged in";
header('location: index.php');
}
}
// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
if (empty($email)) {
array_push($errors, "Email is required");
}
if (empty($password)) {
array_push($errors, "Password is required");
}
if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['email'] = $email;
$_SESSION['success'] = "You are now logged in";
header('location: home.php');
}else {
array_push($errors, "Wrong email/password combination");
}
}
}
// LOGIN ADMIN
if (isset($_POST['login_admin'])) {
$em2 = mysqli_real_escape_string($db, $_POST['email2']);
$pass2 = mysqli_real_escape_string($db, $_POST['password2']);
if (empty($em2)) {
array_push($errors, "Email is required");
}
if (empty($pass2)) {
array_push($errors, "Password is required");
}
if (count($errors) == 0) {
$query = "SELECT * FROM admin WHERE email='$em2' AND password='$pass2'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['email2'] = $em2;
$_SESSION['success'] = "You are now logged in";
header('location: adminhome.php');
}else {
array_push($errors, "Wrong email/password combination");
}
}
}
//user_comment_section
$usern="";
if(isset($_POST["comment_btn"])){
$usern=mysqli_real_escape_string($db , $_POST["username"] );
$comm=mysqli_real_escape_string($db , $_POST["comment"] );
$sql="Insert into opinions(username,opinion) values('$usern','$comm')";
    if(mysqli_query($db, $sql)){} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($db);
}
}
?>
?>
