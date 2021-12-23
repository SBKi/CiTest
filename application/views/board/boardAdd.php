<div class="container-sm">
    	<h1>게시글 등록</h1>
    	
    	<form action="/CiProject/index.php/auth/login" method="POST">
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="subject">제목</span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="subject" name="subject">
			</div>
		  <div class="input-group mb-3">
  			<span class="input-group-text" id="content">내용</span>
  			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"  aria-describedby="content" ></textarea>
			</div>
		  <div class="form-group d-grid gap-2">
		  	<button type="submit" class="btn btn-outline-secondary btn-block" name="login">등록</button>
		  </div>
		</form>
   </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
  </body>
</html>