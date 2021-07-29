<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    
    background-image: url(do-stunning-background-videos-for-your-website.png) ;
    background-size: cover;
 
     }
    h1,b, p{
        color: white;
    }
        form{
         margin:100px 500px;
         padding:80px 25px;
        }
       
        input {
            font-size: 70%;
            margin: 5px;
        }
        button{
         margin:10px 50px;
         padding:10px 40px;
         font-size: 15px;
        }
        a{
            text-decoration: none;
        }
        </style>
</head>
<body>

<?php include '5thpage.php'; ?>
<h1 style="text-align: center;"><b><u>LOGIN PAGE</u></b></h1>
<form action="8thpage.php"method="post">
       <p> E-mail: <input type="text" name="email" placeholder="Email"><br><br><p>
       <p> Password:<input type="password" name="pass" placeholder="Password"><br><br><p>
        <b><br>For create a  here  > <a href="6thpage.php">registration</a></b><br>
         <button type="submit" value="submit"  id="sub" name="Submit">SUBMIT</button>
         <button type="reset" id="res" >RESET</button>
         
        </form>
       
       
</body>
</html>