<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>회원가입</title>
    <link href="<?php echo base_url();?>static/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/">CI 테스트 홈페이지</a>
    <form class="d-flex">
    	<?php if(isset($_SESSION['userlogin'])){?>
    	<button class="btn btn-outline-success me-2" type="button" onclick="location.href='<?php echo base_url();?>index.php/auth/profile'"><?php echo ($_SESSION['username']);?></button> 
    	<button class="btn btn-outline-success me-2" type="button" onclick="location.href='<?php echo base_url();?>index.php/auth/logout'">로그아웃</button>  		
    	<?php }else{ ?>
      	<button class="btn btn-outline-success me-2" type="button" onclick="location.href='<?php echo base_url();?>index.php/auth/login'">로그인</button>
      	<button class="btn btn-outline-secondary" type="button" onclick="location.href='<?php echo base_url();?>index.php/auth/register'">회원가입</button>
      	<?php } ?>
    </form>
  </div>
</nav>