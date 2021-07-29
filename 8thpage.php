<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initialscale=1.0">
  <title>About</title>
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

  <?php include '5thpage.php'; 
    $email = $_POST['email'];
    $pass= $_POST['pass'];
   $sql ="SELECT * FROM details WHERE Email = '$email' and 
           Password ='$pass' LIMIT 1";
   $result = mysqli_query($con, $sql); 
   $row = mysqli_fetch_assoc($result);
   if(mysqli_num_rows($result)==1){
       
           include '1stpage.php' ;
      
   }
   else {
           echo "Invalid !!!!";
   }
?>

  </table>
</body>

</html>