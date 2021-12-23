  	<div class="container-sm">
    	<h1>로그인</h1>
    	<?php  echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    	<?php if(isset($_SESSION['error'])){?>
  		<div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
  		<?php } ?>
		<form action="/CiProject/index.php/auth/login" method="POST">
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="Email">Email</span>
  			<input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="Email" name="email">
			</div>
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="Password">Password</span>
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="Password" name="password">
			</div>
		  <div class="form-group d-grid gap-2">
		  	<button type="submit" class="btn btn-outline-secondary btn-block" name="login">로그인</button>
		  </div>
		</form>
   </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
  </body>
</html>