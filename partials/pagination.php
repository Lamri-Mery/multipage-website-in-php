<div id="loop" class="row">
		<?php 
			$mygoldbook = file_get_contents('goldbook.json');
			$mygoldbook = json_decode($mygoldbook, true);

			foreach ($mygoldbook as $key => $value) :
				//print_r($value['lastname']);
		?>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 goldbook">
			<p class="goldright"><?php echo $mygoldbook[$key]['date']; ?></p>
			<p>"<?php echo $mygoldbook[$key]['message']; ?>"</p>
			<p class="goldright">– <?php echo $mygoldbook[$key]['lastname']; echo " "; echo $mygoldbook[$key]['firstname'];?></p>
		</div>
		<?php endforeach ?>
	</div>
	<nav aria-label="myNavigation">
		<ul class="pagination">
			<li id="previous-page">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
		</ul>
	</nav>
</div>