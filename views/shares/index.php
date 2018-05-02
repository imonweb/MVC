<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-info btn-share">Share Something</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card">
		  <div class="card-body card-block">
		    <h3><?php echo $item['title']; ?></h3>
		    <small><?php echo $item['create_date']; ?></small>
		    <hr>	
		    <p><?php echo $item['body']; ?></p>
		    <br>
		    <a href="<?php echo $item['link']; ?>" target="_blank" class="btn btn-light">Go to website</a>
		  </div>
		</div>
		<br>
		 
	<?php endforeach; ?>
</div>