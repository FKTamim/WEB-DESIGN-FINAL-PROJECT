<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initialscale=1.0">
   <title>Contact</title>
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
    
    li {
        float: left;
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
    .bottomnavg {
            background-color: rgb(12, 12, 12);
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
</style>

<body>

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

</ul><br>
<?php include '5thpage.php'; ?><br>
   <H1 >REGISTRATION</H1>

   <b>
      <form   action="3rdpage.php" method="post" enctype="multipart/form-data">
      <div class="bottomnavg">

      <label for="name"><b>Name:</b></label>
         <input type="text" id="name" name="name" placeholder="Your Name"><br><br>
         <label for="Email"><b>Email:</b> </label>
         <input type="email" id="email" name="email" placeholder="Your Email"><br><br>
         <label for="password"><b> Password:</b> </label>
         <input type="password" id="password" name="pass" placeholder="Your Password"><br><br>
         <label for="file"><b>Select your picture:</b> </label>
         <input type="file" id="file" name="file"><br><br>
         <label for="date"><b>Birth of Date:</b> </label>
         <input type="date" id="date" name="date"><br><br>
         <label for="hobby"><b> Hobby:</b> </label><br>
         <input type="checkbox" name="hobby" value="Reading">Reading <br>
         <input type="checkbox" name="hobby" value="Writing">Writing <br>
         <input type="checkbox" name="hobby" value="Singing">Singing <br>
         <input type="checkbox" name="hobby" value="Dancing">Dancing <br><br>
         <label for="gander">Gander: </label>
         <input type="radio" id="gander" name="gender" value="Male">Male
         <input type="radio" id="gander" name="gender" value="Female">Female
         <input type="radio" id="gander" name="gender" value="Others">Others <br><br>
         <label for="comment">Comment: </label><br>
         <textarea id="comment" name="comment" cols="30" rows="10" placeholder="Write Your Comment"></textarea><br>
         <label for="sub">Department: </label>
         <select id="sub" name="sub">
            <option value="EEE">EEE</option>
            <option value="CSE" selected>CSE</option>
            <option value="BBA">BBA</option>
         </select><br><br>
         <button type="submit" value="submit"  id="submit" name="submit">Submit</button>
         <button type="reset">Reset</button>
    </div>

      </form><br>
      <H3>IF YOU HAVE ANY ACCOUNT?CLICK HERE ->>>><a href="7thpage.php">LOGIN</a></H3>
   
       <?php
         
         if(isset($_POST['submit'])){
            $name =$_POST["name"];
            $email =$_POST["email"]; 
            $pass =$_POST["pass"];
            $date =$_POST["date"];
            $hobby =$_POST["hobby"];
            $gender =$_POST["gender"];
            $comment =$_POST["comment"];
            $sub =$_POST["sub"];
            $p =rand(1000,10000)."-".$_FILES["file"]["name"];
            $tname =$_FILES["file"]["tmp_name"];
            move_uploaded_file($tname,"folder/".$p);

            $sql ="INSERT INTO contact(name,email,password,file,date,hobby,gender,comment,department)
        VALUES('$name','$email','$pass','$p','$date','$hobby','$gender','$comment','$sub')";
               if(mysqli_query($con ,$sql)){
                   echo "ADDED SUCCESSFULLY";
                 }
               else{
                    echo "Failed!!!<br>".mysqli_error($con);
                   }
         
                }
         ?>
   </b>

</body>

</html>