<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>    
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: sticky;
        top: 0;
        display: inline-block;
    
    }
    body{
    
        background-image: url(nature-1627475699679-8287.jpg) ;
        background-size: cover;
     
    }
    H1{
        text-align: center;  
        color: white;
      }
      
    li {
        float: left;
    }
    .main {
            overflow: hidden;
            background-color: ;
            border-radius: 10px;
        }
    .main a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 30px 30px;
            text-decoration: none;
        }
    li a,
    .botton {
        display: inline-block;
        text-align: center;
        padding: 10px 16px;
        text-decoration: none;
        margin: 2px;
        padding: 2px 10px;
        margin: 2px;
    }
    .dropdown-con {
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
    .dropdown-con a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    .dropdown:hover .dropdown-con {
        display: block;
    }

    @media screen and (max-width: 600px) {

        li {
            float: none;
        }
    }
    </style>
<body>
  <H1>WELCOME MY PAGE </H1><br>
  <ul class="main">
    <li><a href="1stpage.php" id="a1">Home</a></li>
    <li><a href="2ndpage.php" id="a2">News</a></li>
    <li><a href="3rdpage.php" id="a3">Contact</a></li>
    <li><a href="4thpage.php" id="a4">About</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="botton">Dropdown</a>
        <div class="dropdown-con">
            <a href="1stpage.php" id="a1">Home</a>
            <a href="2ndpage.php" id="a2">News</a>
            <a href="3rdpage.php" id="a3">Contact</a>
            <a href="4thpage.php" id="a4">About</a>
        </div>

    </li>

</ul><br><br><br><br><br>


</body>
</html>