  	<div class="container-sm">
    	<h1>게시글 목록</h1>
    	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		  <button class="btn btn-outline-secondary me-md-2" type="button" onclick="location.href='<?php echo base_url();?>index.php/board/add'">글쓰기</button>
		</div>
    	<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col" style="width: 60%; text-align: center;">글제목</th>
		      <th scope="col">작성자</th>
		      <th scope="col">작성일자</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($boards as $row) {?>
		  	<tr>
		      <th scope="row"><?php echo($row->no);?></th>
		      <td style="text-align: center;"><?php echo($row->subject);?></td>
		      <td><?php echo($row->writer);?></td>
		      <td><?php echo($row->reg_date);?></td>
		    </tr>	
		  	<?php } ?>
		  </tbody>
		</table>
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>

		    <li class="page-item"><a class="page-link" href="#"><?php var_dump($pagesize); ?></a></li>
		    	
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
   </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
  </body>
</html>