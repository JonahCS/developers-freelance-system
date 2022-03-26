<?php include('../../includes/connection.php');?>
<html>
<head>
  <meta charset="UTF-8">
  <title>DFS</title>
  <link rel="stylesheet" type="text/css" href="../css/def.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
  <style type="text/css">

  body{
    background-color: white;
  }
  .input-fields{
  width: 20%;
  padding: 10px 0;
  margin: 5px 0;
  border-left: 0;
  border-top: 0;
  border-right: 0;
  border-bottom: 1px solid #999;
  background-color: white;
  }
  .submit-btnn
  {
  width: 15%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: darkgreen;
  border: 0;
  outline: none;
  border-radius: 30px;
  color: white;
  }
  h1 {
    color: green;
  }

  </style>
</head>
<body>

  <div class="full-page">
    <div class="nav-bar">
      <div>
        <h1>HIRE</h1>
      </div>
      <nav>
        <ul id = "MenuItems">
          <li><a href="../emp/employeer.php">HOME</a></li>
        </ul>
      </nav>
    </div>

    <div class="container">
      <center>
      
      <form method="POST" action="">
        <label>SELECT USER NAME OF THE FREELANCER</label>
        <select name="un" class="input-fields" >
          <?php

          $query1 = mysqli_query($conn, "SELECT User_Name from freelancer");
          while ($data1 = mysqli_fetch_array($query1)) {
            echo "<option value='".$data1['User_Name']."'>".$data1['User_Name']."</option>";
          }
          ?>
        </select><br><br>
        <input type="text" name="jt" class="input-fields" placeholder="Jop Title" required><br><br>
        <input type="text" name="jty" class="input-fields" placeholder="Jop type" required><br><br>
        <input type="text" name="pr" class="input-fields" placeholder="Period of work" required><br><br>
        <label>SELECT NAME OF YOUR ORGANIZATION</label>
        <select name="un1" class="input-fields">
          <?php

          $query1 = mysqli_query($conn, "SELECT Organizations_Name from employeer");
          while ($data1 = mysqli_fetch_array($query1)) {
            echo "<option value='".$data1['Organizations_Name']."'>".$data1['Organizations_Name']."</option>";
          }
          ?>
        </select>
        <button type="submit" class="submit-btnn" name="sum">HIRE</button>
      </form>
    </center>
    </div>
  </div>
  <?php

  if(isset($_POST['sum'])){
    
    $un=$_POST['un'];
    $jt=$_POST['jt'];
    $jty=$_POST['jty'];
    $period=$_POST['pr'];
    $organ_name=$_POST['un1'];

    $query = "INSERT INTO hire(User_name,job_type,job_title,period_of_work,Organization_name) VALUES('$un','$jt','$jty','$period','$organ_name')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      echo "hired";
    }else{
      echo "".mysqli_error($conn);
    }

}
  ?>
</body>
</html>