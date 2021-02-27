
<?php
error_reporting(0) ;
include('dbregister.php') 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<style>
span.field-icon {
  position: absolute;
  display: inline-block;
  cursor: pointer;
  right:0.5rem;
  top: 0.7rem;
  color: $input-label-color;
  z-index: 2;
}
span{
	margin:0px 10px;
}
</style>
	<div style="margin-top:5%;">
	<div class="container" >
<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">
<div class="card">
		<form method="post" action="dbregister.php" onsubmit="return myfun()" >

		
<h5 class="card-header info-color white-text text-center py-3" >
        <strong>Sign up</strong>
    </h5>
    <div style="padding: 10px;" >
    	<div class="md-form md-outline"  >
                        <input type="text" id="materialuserid" class="form-control" name="name" required>
                        <label for="materialuserid">Enter your name</label>
                    </div>
		<div class="md-form md-outline"  >
                        <input type="text" id="materialuserid" class="form-control" name="username" required>
                        <label for="materialuserid">Create an id</label>
                    </div>
		<div class="md-form mt-0 md-outline" >
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" required>
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>
         
          <div class="md-form md-outline" >
  <input type="password" name="password1" id="input-pwd" class="form-control"   required ">
  <label data-error="wrong" for="input-pwd"> Create Password  </label>

<span toggle="#input-pwd"  class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>

          </div>

            <div class="md-form md-outline" >
  <input type="password" name="password2" id="input-pwd1" class="form-control"   required>
  <label    > Confirm Password  </label>
<span toggle="#input-pwd1"  class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
          </div>
           <span  id="messages1"></span>

		<div class="input-group">
			<button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="register_btn" value="myfun()">Register</button>
		</div>

		<p>
			Already a member? <a href="http://localhost/programz-website/">Sign in</a>
		</p>
    </div>
		
	</form>
</div>
	</div>

	<div class="col-sm-3">
</div>
</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<script type="text/javascript">
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script>
    function myfun()
    {
    var a=document.getElementById("input-pwd").value;
    var b=document.getElementById("input-pwd1").value;
    if(a.length<5)
    {
    document.getElementById("messages1").innerHTML="password length must be greater than  5 digits ";
    return false;
    }
    if(a!=b)
    {
     document.getElementById("messages1").innerHTML="both the passwords are not same ";
    return false;

    }

    }
</script>





</body>
</html>
