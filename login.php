<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 14%;
  padding: 8px 20px;
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
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

.create {
  width: auto;
  padding: 14px 50px;
  background-color: #f44336;
}

.container {

  background-image: url('https://dm0qx8t0i9gc9.cloudfront.net/watermarks/image/rDtN98Qoishumwih/doctor-with-heartbeat-background_Gy1IlbKu_SB_PM.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

  padding: 16px;
}

span.psw {
  float: center;
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
<center>
<form action="main.html" method="post">
   <div class="container">
<br>
    <img src="nutrifit.png" height="250" width="250" height="400px" width="200px">
 <br><br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button type="submit">Login</button>
    <a href="create_acc.html"><button type="button" class="create">New User</button></a>
<br>
<br><br><br><br><br><br><br>
  </div>
</form>

</body>
</html>