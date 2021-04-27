<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>TEST</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="starting date">starting date:</label>
      <input type="date" class="form-control"   name="startdate">
    </div>
    <div class="form-group">
      <label for="endingdate">endingdate:</label>
      <input type="date" class="form-control" id="pwd" name="enddate">
    </div>
    <button type="submit" class="btn btn-default" name="submit">submit</button>
  </form> 
  <br>
  <?php
  if(isset ($_POST['submit']))
  {
      $startdate=$_POST['startdate'];
      $enddate=$_POST['enddate'];

      $getDay = date('d',strtotime($startdate)); //02
      $getDay2 = date('d',strtotime($enddate)); //25

      $getMonth = date('m',strtotime($startdate)); // 04
      $getMonth2 = date('m',strtotime($enddate)); // 04

      $then = $getMonth2 - $getMonth;

      $billingStart = "20"; 
      $billingEnd = "19"; 

      if($getDay <= $billingEnd) // 02 <= 19
      {
        $x = '1';
       }
      else
      {
        $x = "0";
      }



      if($getDay2 >= $billingStart) // 25 >= 20
      {
        $b = '1';
      }
      else
      {
        $b = "0";
      }


      $final = $x + $b + $then;

      echo "The billing cycles is ".$final."";




  }

  ?>
</div>
</body>
</html>