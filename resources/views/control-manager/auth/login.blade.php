<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>sign</title>
    <style>
      /* تعيين الخلفية للصورة */
      body {
        
      
        background-image: url("{asset('Boss/img/back.jpg')}}");
       
        
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
      }
      input[type=text], 
      input[type=password],
      input[type=email] {
			width: 150%;
			padding:40px 40px;
			margin: 22px 0;
			border: 3px solid #000;
			border-radius: 250px;
			box-sizing: border-box;
			background-color: rgba(255, 255, 255, 0.5);
			opacity: 0.8;
      font-size: 40px;
      		}
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
background-size: auto;
background-position: center;
            margin: 50px ;
			border: none;
			border-radius:50px;
			cursor: pointer;
			width: 40%;
      height:0% ;
			right: 40px;;
           
            
      text-align: 50%;
      left: 20px;
      font-size: 50px;
      position: relative;
     left: 30%;

    		}
       
            
        #button :hover {
            color: rgb(116, 112, 112);
                   }
      
       h2 {
            font-size: 150px;
            margin-bottom: 150px;
            color: rgba(0, 0, 0, 0.746);
        }
        
        p {
            font-size:60px;
            line-height: 2;
            margin-bottom: 30px;
            color: rgb(0, 0, 0);
            text-align: 40%;
            
        }
        p2 {
            font-size:60px;
            line-height: 1.5;
            margin-bottom: 70px;
            text-align: 70%;
            position: relative;
     left: 1% ;
        }
        a {
color: rgb(0, 0, 0);
text-decoration: none;

        }
       a:hover {
            color: rgb(116, 112, 112);
            
           
                   }
        h1{
			margin:-15px ;
      font-size:100px;
            line-height: 1.5;
           color: rgb(0, 0, 0);
            text-align: 40%;
            position: relative;
     left:12%;
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
        .error {
			color: red;
			margin-top: 5px;
		}
		span{
		  color: red;
            font-size: 250%;
		}
      </style>
</head>
<body>
<nav>
    <h2><a href="index-1.html"><</a></h2>
</nav>
<h1> WELCOME </h1>
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color: red;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Session::has('message'))
                    <h1 style="color: red;">{{ session('message') }}</h1>
                @endif

@csrf
    <p> Log in your account to continue</p>
          <input type="hidden"  id="companyName" name="companyName" placeholder="&#xf1ad; Enter your company name" >
         <!--<span id="companyNameError"></span>-->
     
     <input type="email" id="email" name="email" placeholder=" &#x1F4E7; Enter your email">
         <span id="emailError"></span>
     
     <input type="password" id="password" name="password" placeholder="&#x1F512;Enter your password">
         <span id="passwordError"></span>
         <br>
     
     <p2> <a href="index-4.html"> Forgot your password?</a></p2><br><br><br>
     
     <button id="button" type="submit" onclick="checkEmptyFields()"><b>Login</b></button>
     
    
<p> Don't have an account?<a href="{{ route('loginUp') }}"> Sign up</a></p>

</form>
<script>
  function checkEmptyFields() {
  var companyName = document.getElementById("companyName").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  var error = false;

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
  
}
</script>
</body>
</html>
