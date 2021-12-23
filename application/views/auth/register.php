
  	<?php if(isset($_SESSION['success'])){?>
  		<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
  	<?php } ?>
  	 
  	<div class="container">
    	<h1>회원가입</h1>
    	<?php  echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		<form action="/CiProject/index.php/auth/register" method="POST">
			<div class="input-group mb-3">
  			<span class="input-group-text" id="Name">Name</span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="Name" name="name" value="<?php echo set_value('name');?>">
		  </div>
 		  <div class="input-group mb-3">
  			<span class="input-group-text" id="Email">Email</span>
  			<input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="Email" name="email" value="<?php echo set_value('email');?>">
		  </div>
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="Password">Password</span>
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="Password" name="password" value="<?php echo set_value('password');?>">
		  </div>
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="Password2">Confirm Password</span>
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="Password2" name="password2" value="<?php echo set_value('password2');?>">
		  </div>
		  <div class="form-group d-grid gap-2">
		  	<button type="submit" class="btn btn-outline-secondary btn-block" name="register">회원가입</button>
		  </div>
		</form>
   </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
  </body>
</html>