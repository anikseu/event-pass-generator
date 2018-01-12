<?php 

require('connect.php');

$num=0; 
//$unid = $_GET('unid'); 
$query= mysqli_query($connection, "SELECT * FROM `user` WHERE `uniqueID` = '".$_GET['unid']."' ")or die(mysql_error());
$arr = mysqli_fetch_array($query);
$num = mysqli_num_rows($query);


?> 


<html>

<head>

<meta charset='UTF-8'><meta name="robots" content="noindex">
<title>Big Event - Generate Your Entrance Pass</title>

<div class="jumbotron">
<center>
   
 <h2> Print Ticket </h2>
</center>

  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

</head>


<body>


    <div class="container">
    <center>

    <?php 

    if($num>0){

    ?> 
      
    <div id="ticket" style="width: 450px;
    border: 5px solid green;
    padding: 25px;
    margin: 25px;">

    <h2>Big Event</h2>

    Full Name: <b><?php echo $arr['name']; ?></b>  <br/>Entrance Time: <b><?php echo $arr['rtime']; ?></b> <br/> 
    Email:   <?php echo $arr['email']; ?>  |     Phone: <?php echo $arr['phone']; ?> <br/>  <br/>  <br/> 
    Unique ID: <big> S-<?php echo $arr['uniqueID']; ?>  </big> <br/> <br/> 

    <?php  date_default_timezone_set("Asia/Dhaka");
    echo "Generated on: " . date("Y/m/d-h:i:sa");
    ?> 
    </center> 

    </div>


    <br/> <br/> 



    <center><input type="button" onclick="printDiv('ticket')" value="Print" />
    </center>
    
    <?php  
    }
    else{
      echo '<div class="alert alert-failure" role="alert" id="failure_message"><i class="glyphicon glyphicon-thumbs-down"></i> Wrong Unique ID!<br/><a href="index.php">Try Again!</a></div>'; 
    }


    ?> 
    

    <center> <br/><br/><br/> <a href="index.php">Back To Home</a> </center>


     
   <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
   </script>.

</div>


<div style="margin-top:80px;"></div>



<!-- Footer --> 

<?php include('footer.php'); ?> 



    </div><!-- /.container -->


</body>
</html>