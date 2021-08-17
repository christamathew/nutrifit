<?php

$hostname="127.0.0.1";
$username="username";
$dbname="nutrifit";
$password="password";

$conn=mysqli_connect($hostname,$username,$dbname,$password) or DIE("Unable to connect to database !!");

if(isset($_POST['submit']))
{
	
	$uname=$_POST['uname'];
	$uid=$_POST['uid'];
    $email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$sql= "Insert into user(name,userid, email, password) values ('$uname','$uid','$email','$pass')";
	if($conn->query($sql) === TRUE)
	{
		echo("New user added");
	}
	else{
		echo("Not added");
	}
$conn->close();
}	
	
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image: url('https://cdn.technologyadvice.com/wp-content/uploads/2015/07/do-patients-trust-telemedicine-01-700x408.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
font-size:20px;
 color :navy;
 font-family:Georgia, serif;
font-size:20px;}
button{
font-size:20px;
}
button:hover{
opacity:0.6;
}
</style>
        <script type='text/JavaScript'>
            function passValidate()
            { 
                var pass = document.getElementById("pass").value;
                var cpass = document.getElementById("cpass").value; 
                if(pass == cpass)
                    { 
                        document.getElementById("e1").innerText = ""; 
                    }
                    else 
                    {
                        document.getElementById("e1").style.color = "maroon";
                        document.getElementById("e1").innerText = "Password Mismatched ";   
                    }
            }
            function emailValidate()
            {
                var emailId = document.getElementById("emailId").value;
                console.log();
                var regex = /^\w+([-.]?\w+)@\w+([-.]?\w+)\.\w+([-.]\w+)*$/;
                if( regex.test(emailId))
                {
                    document.getElementById("e2").innerText = " ";
                }
                else
                {
                    document.getElementById("e2").style.color = "maroon";
                    document.getElementById("e2").innerText = "Invalid Email Id ";
                }
            }
			
			function myFunction() {
			alert("Account created successfully.Welcome to Nutrifit family!");
            window.open("login.html");
}
        </script>
    </head>
    <body><center>
<br><br>
 <img src="nutrifit.png" height="180" width="250" height="400px" width="400px">
<br><br>
            <form>
                    Name: <input type="text" id="uname" name="uname" ><br><br>
					Username: <input type="text" id="userid" name="uid" ><br><br>
                    Email ID : <input type="text" id="email" name="email" onkeyup="emailValidate()" ><p id="e2"> </p><br>
                    Password : <input type="password" id="pass" name="pass" > <p id="e1"> </p>
                    Confirm Password: <input type="password" id="cpass" onkeyup="passValidate()" ><br><br>
                     <input id="button" type="submit" name="submit" value="Sign-up">
            </form></center>
    </body>
</html>