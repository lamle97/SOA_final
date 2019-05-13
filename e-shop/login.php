<?php
    ob_start();
    session_start();
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap -->
   <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
  
</head>



<body>
  <div class="login-page">
  <div class="form" align="center">

    <form class="login-form" method="post">
      <input type="text" placeholder="User Name" name="user"/>
      <input type="password" placeholder="Password" name="pass"/>
      <button>Login</button>

    </form>
  </div>

      <div class="alert alert-danger" style="text-align: center; display: none">
          <span>Sai username hoặc mật khẩu</span>
      </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

  <script>
      function showError() {
          $(".alert-danger").fadeIn(1500);
          setTimeout(function () {
              $(".alert-danger").fadeOut(3000);
          },3000);
      }
  </script>

  <?php

  if (isset($_POST['user']) && isset($_POST['pass'])) {
      include_once('function.php');
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      $dataRequest =  array('username'=>$_POST['user'],'password'=>$_POST['pass']);
      $isAccountStaff =json_decode(login($dataRequest),true);
      $isAccountCustomer = json_decode(login_customer($dataRequest),true);
      if ($isAccountStaff != null) {
          $_SESSION['Staff'] = $isAccountStaff['nameStaff'];
          header("Location: index.php");
      }else if($isAccountCustomer !=null){
          $_SESSION['customer'] = $isAccountCustomer['name'];
          $_SESSION['accountInfo'] = $isAccountCustomer;
          header("Location: index.php");
      } else{
          echo "<script>showError()</script>";
      }
  }

  ?>
</body>
</html>
