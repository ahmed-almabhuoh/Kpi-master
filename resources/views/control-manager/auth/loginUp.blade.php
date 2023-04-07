<!DOCTYPE html>
<html>
  <head>
    <title>SignUp</title>
    <style>
      /* تعيين الخلفية للصورة */
      body {
        background-image: url("{{asset('Boss/img/back.jpg')}}");
        background-size: cover;
      }
      input[type=text],
      input[type=text],
      input[type=text],
      input[type=email],
      input[type=password],
      input[type=password]
       {
        
		
    	width: 150%;
			padding:40px 40px;
			margin: 22px 0;
			border: 3px solid #000;
			border-radius: 250px;
			box-sizing: border-box;
			background-color: rgba(255, 255, 255, 0.5);
			opacity: 0.8;
      font-size: 40px;}
      /* تحديد حجم الفورم */
      form {
                width: 25%;
                height: 0%;
                padding: -8px -2px;
                transform: translate(150px);
              }
              #button {
    background-color:#000; 


			color: #fff;
			padding: 50px 20px;
			margin: 50px 0;
			border: none;
			border-radius:50px;
			cursor: pointer;
			width: 40%;
      height: 0%;
			right:40;
      text-align: 50%;
      left: 20px;
      font-size: 50px;
      position: relative;
     left: 30%;
    		}
       
            
        #button :hover {
            color: rgb(116, 112, 112);
                   }
                   h1 {
            font-size: 800px;
            margin-bottom: 200px;
            color: rgb(0, 0, 0);
            line-height: 1.5;
            text-align: left  ;
            transform: translate(180px);
        }
        /* p3 {
            font-size:40px;
            line-height: 1.5;
            margin-bottom: 30px;
            text-align: 40%;
            position: relative;
     left:66%;
        } */
        
        a {
color: rgb(116, 112, 112);
text-decoration: none;

        }
       a:hover {
            color: rgb(116, 112, 112);
            
                   }
        
        p {
            font-size:60px;
            line-height: 1.5;
            margin-bottom: 70px;
            color: rgb(0, 0, 0);
            text-align: 70%;
            position: relative;
     left:1%;
        }
        nav a {
            color: rgb(0, 0, 0);
            text-decoration: none;
           margin-top: 3px;
           font-size: 90px;
            position: relative;
     left:1%;
        }
    
        nav a:hover {
            color: rgb(116, 112, 112);
        }
        h1{
			margin:-15px ;
      font-size:100px;
            line-height: 1.5;
           color: rgb(0, 0, 0);
            text-align: 40%;
		}
    .error {
			color: red;
			margin-top: 5px;
		}
		span{
		  color: red;
            font-size: 300%;
		} 
    </style>
  </head>
  <body>
    <nav>  <h2><a href="index-2.html"><</a></h2> </nav>
    <h1> sign up</h1>
  

      <input type="text" id="firstName" name="firstName" placeholder="First name">
  <i class="fas fa-user"></i>
  <span id="firstNameError"></span>
      <input type="text" id="lastName" name="lastName" placeholder="Last name">
  <i class="fas fa-user"></i>
  <span id="lastNameError"></span>
 <input type="hidden" id="companyName" name="companyName" placeholder="Enter your company name">
     <i class="fas fa-building"></i>
  <span id="companyNameError"></span> 
      <input type="email" id="email" name="email" placeholder="Enter your email">
  <i class="fas fa-envelope"></i>
  <span id="emailError"></span>
    <input type="password" id="password" name="password" placeholder="Password">
  <i class="fas fa-lock"></i>
  <span id="passwordError"></span>
      <input type="hidden" id="confirmPassword" name="confirmPassword" placeholder="Retype password">
  <i class="fas fa-lock"></i>
  <span id="confirmPasswordError"></span> <br>
      <button id="button" type="submit" onclick="checkEmptyFields()"><b>Login</b></button>
    
    <div id="result"></div>
    <p> Already have any account?<a href="index-2.html"> sign in!</a></p> 
  

     
         
   
<script>
  function checkEmptyFields() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var companyName = document.getElementById("companyName").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;

  var error = false;

  if (firstName.trim() == "") {
      document.getElementById("firstNameError").innerHTML = "Please enter your first name.";
      error = true;
  } else {
      document.getElementById("firstNameError").innerHTML = "";
  }
  if (lastName.trim() == "") {
      document.getElementById("lastNameError").innerHTML = "Please enter your last name.";
      error = true;
  } else {
      document.getElementById("lastNameError").innerHTML = "";
  }
  if (companyName.trim() == "") {
      document.getElementById("companyNameError").innerHTML = "Please enter your company name.";
      error = true;
  } else {
      document.getElementById("companyNameError").innerHTML = "";
  }
  if (email.trim() == "") {
      document.getElementById("emailError").innerHTML = "Please enter your email.";
      error = true;
  } else {
      document.getElementById("emailError").innerHTML = "";
  }
  if (password.trim() == "") {
      document.getElementById("passwordError").innerHTML = "Please enter your password.";
      error = true;
  } else {
      document.getElementById("passwordError").innerHTML = "";
  }
  if (confirmPassword.trim() == "") {
      document.getElementById("confirmPasswordError").innerHTML = "Please confirm your password.";
      error = true;
  } else {
      document.getElementById("confirmPasswordError").innerHTML = "";
  }
  if (password != confirmPassword) {
      document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match.";
      error = true;
  } else {
      document.getElementById("confirmPasswordError").innerHTML = "";
  }
}
</script>
</body>
</html>
