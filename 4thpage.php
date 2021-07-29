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
    body{
    
    background-image: url(tips-for-using-background-textures-in-web-design.jpg) ;
    background-size: cover;
 
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

    table,tr,th,td{
        border:black 2px solid;
    }
    @media screen and (max-width: 600px) {

        li {
            float: none;
        }
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
<?php include '5thpage.php'; 
   $sql ="SELECT * FROM contact";
   $result = mysqli_query($con, $sql); 
?><br>
  <H1 >A TABLE </H1><br>
  <table>

  <tr >
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>FILE NAME</th>
      <th>DATE</th>
      <TH>HOBBY</TH>
      <TH>GENDER</TH>
      <TH>COMMENT</TH>
      <th>DEPARTMENT</th>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result)): ?>
    <tr >
      <TD><?php echo $row['name']; ?></TD>
      <TD><?php echo $row['email']; ?></TD>
      <TD><?php echo $row['password']; ?></TD>
      <TD><?php echo $row['file']; ?></TD>
      <TD><?php echo $row['date']; ?></TD>
      <TD><?php echo $row['hobby']; ?></TD>
      <TD><?php echo $row['gender']; ?></TD>
      <TD><?php echo $row['comment']; ?></TD>
      <TD><?php echo $row['department']; ?></TD>
    </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>