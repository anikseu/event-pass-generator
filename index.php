<html>

<head>

<meta charset='UTF-8'><meta name="robots" content="noindex">
<title>Big Event - Generate Your Entrance Pass</title>




<div class="jumbotron">
<center>
    <h1>Event Name</h1>
    <small> Some placeholder, fillup with details</small>
</center>

  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

</head>


<body>


    <div class="container">

    <form action="register.php" class="well form-horizontal" method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Full Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>



  <div class="form-group"> 
  <label class="col-md-4 control-label">Select Entrance Time</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="time" class="form-control selectpicker" required>
      <option value="">Select your Desired time</option>
      <option>10 AM</option>
      <option>3 PM</option>
      <option >8 PM</option>
   
    </select>
  </div>
</div>
</div>
  

 

<!-- Email -->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Phone -->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="eg. 017xxxxxxxx" class="form-control" type="text" required>
    </div>
  </div>
</div>



<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>

    <button type="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>





<form action="search.php" class="well form-horizontal" method="GET"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Print Ticket</b></h2></legend>
<small>Already registered with your contact Information? Get a printout with your unique id</small></center><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon">S</span>
  <input  name="unid" placeholder="Unique ID" class="form-control"  type="text" required>
    </div>
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>

    <button type="submit" class="btn btn-warning" >SEARCH <span class="glyphicon glyphicon-search"></span></button>
  </div>
</div>

</fieldset>
</form>






<hr/> 



</div>


<div style="margin-top:80px;"></div>



<!-- Footer --> 

<?php include('footer.php'); ?> 



    </div><!-- /.container -->

</body>
</html>