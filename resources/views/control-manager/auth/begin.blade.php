 <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            
         
  background: linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)),url("{{asset('begin/1.jpg')}}");
  
  background-repeat: BLACK;
  background-size:cover; 
  background-position: center;
  height: 100vh;
 
  
        }
        
              
        header {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 20;
            z-index: 999;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            position: fixed;
            top:0;
            left: 0;

        }
        
        .logo {
        text-decoration: none;
            color: rgb(21, 38, 24);
            text-transform: uppercase;
            font-weight: 700;
            font-size:35px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 25px;
            padding-left: 0px;
            font-size: 30px;
        }
    
        nav a:hover {
            color: rgb(116, 112,112);
        }
    
        
        #button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 50px70px;
            border-radius: 20px;
            cursor: pointer;
            height: 44px;
            width: 200px;
            font-size: 30px;
               
        }
       #button :hover {
            color: rgb(116, 112, 112);
                   }
        
        #content {
            text-align: center;
            margin-top: 25%;
        }
        
        h1 {
            font-size: 80px;
            margin-bottom: 20px;
            color: white;
        }
        
        p {
            font-size: 60px;
            line-height: 1.5;
            margin-bottom: 50px;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo"></a>
                <nav>
            <a href="#">Home</a>
            <a href="{{route('abouting')}}">About Us</a>
          
        </nav>
    </header>
    <div id="content">
        <h1>Hello</h1>
        <p><b>This System will Take Your Company<br> 
To Achieve the Best.</p></b>

       <a href="{{ route('login') }}" target="_blank" >
        <button id="button"> <b>Get started</b> </button></a>
        
    </div>
</body>
</html>
