<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="jumbotron">
				<h1>建筑行业</h1>
			</div>
		</div>
	</div>
	<hr />

	<div class="row">
		<div class="col-xs-12 col-sm-12">
		<?php  
		foreach ($DATA->video as $item) {
			$attr = [];
			foreach ($item as $key => $value) {
				$attr[] = $key . '="'.$value . '"';
			}
			echo '<div class="col-xs-12 col-lg-6" ><embed '. join($attr , ' ') .' ></embed></div>';
		 }
		 ?>
		</div>
	</div>
	<hr />
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="row item-list">
				<?php  
				foreach ($DATA->trade as $item) {
					echo "<div class='col-xs-3 col-lg-2'>";
					echo "	<a href='http://www.baidu.com/s?wd=$item->name' target='_blank' ><img class='img-circle' src='upload/$item->img'></a>";
					echo "	<a href='http://www.baidu.com/s?wd=$item->name' target='_blank' ><h3 class='text-center'>$item->name</h3></a>";
					echo "</div>";
				 }
				 ?>
			</div><!--/row-->
		</div>
	</div><!--/row-->

	<hr>

	<footer>
		<p>© lcs <?php echo date('Y');?></p>
	</footer>

</div>