<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
        padding:80px 25px;
        margin:100px 500px;
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

        select {
            font-size: 70%;
            border: solid 2px rgb(0, 119, 128);
            border-radius: 5px;
            margin: 5px;
        }
        .name{ 
          float:right;
        }
      
        a{
            text-decoration: none;
        }
        .bottomnavg {
            background-color: rgb(12, 12, 12);
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        </style>
</head>
<body>

<?php include '5thpage.php'; ?>
<h1 style="text-align: centre"><b><u>REGISTRATION </u></b></h1>

<div class="bottomnavg">

        FirstName: <input type="text" class="fname" name="firstname" placeholder="Firstname"><br>
        Lastname:  <input type="text" class="lname" name="lastname" placeholder="Lastname"><br>
        Number:<input type="int" name="num" placeholder="Mobile Number"><br>
        E-mail: <input type="text" name="email" placeholder="Email"><br>
        Password:<input type="password" name="pass" placeholder="Password"><br>
        <label for="dept">Department: </label>
         <select id="dept" name="dept">
            <option value="EEE">EEE</option>
            <option value="CSE" selected>CSE</option>
            <option value="BBA">BBA</option>
         </select><br>
         <button type="submit" value="submit"  id="sub" name="Submit">SUBMIT</a>
         </button>
         <button type="reset" id="res" >RESET</button><br>
         <b>A account?=> <a href="7thpage.php">login</a></b>
        </div>

        </form>
        <?php  
         if(isset($_POST['Submit'])){
            $fname =$_POST["firstname"];
            $lname =$_POST["lastname"];
            $num =$_POST["num"];
            $email =$_POST["email"];
            $pass =$_POST["pass"];
            $dept =$_POST["dept"];
          
        $sql ="INSERT INTO details(firstname,lastname,number,email,password,department)
               VALUES('$fname','$lname','$num','$email','$pass','$dept')";
               if(mysqli_query($con ,$sql)){
                   echo "YOUR ACCOUNT CREATED SUCCESSFULLY";
                 }
               else{
                    echo "Failed!!!<br>".mysqli_error($con);
                   }
         }  
            
        
        ?>
</body>
</html>