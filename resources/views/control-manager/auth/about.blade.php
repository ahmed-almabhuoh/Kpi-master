<!DOCTYPE html>
<html>
    <html lang="ar">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            
         
            background-image: url("{{asset('begin/1..1.jpg')}}");
   background-repeat: BLACK;
  background-size:cover; 
  background-position: center;
  height: 100vh;
 
  
        }
        
        h1 {
            font-size: 90px;
            margin-bottom: 20px;
            color: rgb(0, 0, 0);
            position: relative;
     left:15%;
        }      
      
        h2 {
            font-size: 60px;
            margin-bottom: 20px;
            color: rgb(0, 0, 0);
            position: relative;
     left:1%;
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
        nav a {
            color: white;
            text-decoration: none;
            margin: 25px;
            padding-left: 0px;
            font-size: 40px;
        }
    
        nav a:hover {
            color: rgb(116, 112,112);
        }
    </style>
</head>
<body>
    
    <br> <br> <br> <br> <br> <br> <br> <br> <br> 
    <h1>Key Performance Indicators Evaluation System<h1>
    <h2>   
        It is a system that helps you identify, measure, understand and monitor performance in your company by monitoring effectiveness,<br> 
        efficiency, forecasting, measuring and planning business in performance monitoring and measuring it digitally by converting goals<br> 
         and processes into a form that can be measured and gives statistics, reports and charts That help you to ensure that the work is <br> 
         well done and the organization of the administrative work within your company Facilitating decision-making and higher management <br> 
         ability to evaluate the company's performance and helping you to know the strength or weakness of the link between the administrative<br> 
         levels and raising awareness within your company.
        </h2>
        
        <header>
            <a href="#" class="logo"></a>
                    <nav>
                <a href="{{ route('begin') }}">Home</a>
                <a href="#">About Us</a>
               
            </nav>
        </header>
</body>
</html>
