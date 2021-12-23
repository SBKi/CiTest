  	<div class="container">
    	<h1>프로필</h1>
    	Hi, <?php var_dump($this->session->userdata('username')); ?>
   </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
  </body>
</html>