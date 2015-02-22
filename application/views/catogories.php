<div class="row banner2">
		<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories" class="banner2"">Catagories </a></div>
		<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage" class="banner2"><?php echo $result[0]->name; ?></a></div>
		<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/logout" class="banner2">Logout</a></div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_after_login">
			<p></p>
			<p class="text-center wellcome_index">CATOGORIES<p><br><br>
			
			<ul class="catogories">
				<li><a href="<?php echo base_url() ?>home/sports?cat_id=1" class="catogories">SPORTS</a> </li>
				<li><a href="<?php echo base_url() ?>home/sports?cat_id=2" class="catogories">PROGRAMMING</a></li>
				<li><a href="<?php echo base_url() ?>home/sports?cat_id=3" class="catogories">ENTERTAINMENT</a></li>
				<li><a href="<?php echo base_url() ?>home/sports?cat_id=4" class="catogories">GENERAL DISCUSSION</a></li>
			</ul>

			
			<br><br>

		</div>
	</div>
</div>