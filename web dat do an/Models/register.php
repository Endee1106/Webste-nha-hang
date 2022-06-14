<?php
 require_once('model.php');
    class register extends model {
        function register_user(){
           
    // initializing variables
    $username = "";
    $email    = "";
    $errors = array(); 
    
    
    // REGISTER USER
    if (isset($_POST['submit'])) {
      
      // receive all input values from the form
      $username = mysqli_real_escape_string($this->conn, $_POST['username']);
      $user_email = mysqli_real_escape_string($this->conn, $_POST['emailInput']);
      $password_1 = mysqli_real_escape_string($this->conn, $_POST['password']);
      $password_2 = mysqli_real_escape_string($this->conn, $_POST['rpassword']);
    
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if (empty($username)) { array_push($errors, "Username is required"); }
      if (empty($user_email)) { array_push($errors, "Email is required"); }
      if (empty($password_1)) { array_push($errors, "Password is required"); }
      if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
      }
    
      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM tbl_user WHERE username='$username' OR user_email='$email' LIMIT 1";
      $rs = $this->conn->query($user_check_query);
      $user = mysqli_fetch_assoc($rs);
   
      if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
    
        if ($user['user_email'] === $user_email) {
          array_push($errors, "email already exists");
        }
      }
    
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {

           $password = $password_1;//encrypt the password before saving in the database
    
          $query = "INSERT INTO tbl_user (username, user_email, password) 
                    VALUES('$username', '$user_email', '$password')";
          $rs = $this->conn->query($query);
          // $row = mysqli_fetch_array($rel);
          // $row['role_id']==2;
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = $username;
  
          $_SESSION['success'] = "You are now logged in";
          header("location: ?act=login");

      }
    }
    
        }
    }
?>
