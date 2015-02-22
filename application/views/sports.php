<div class="row banner3">
		<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories" class="banner3">Catagories</a></div>
		<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage" class="banner3"><?php echo $result[0]->name; ?></a></div>
		<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/logout" class="banner3">Logout</a></div>
</div>

	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_sports">
			<p></p>
			<p class="text-center wellcome_index">Answer The Question<p><br><br>
				
				<div class="row">
					<div class="col-sm-12">
						<?php foreach ($topics as $r) { ?>
							<div class="table_sports">
								<table  style="margin:10px 0px; min-height:10%">
									<tr>
										<td style="padding-right:10px; color:white;">
											QUESTION:
										</td>

										<td>
										    
										    	<a href="<?php echo base_url() ?>home/show_question?topic_id=<?php echo $r->id; ?>" class="sports">
												<?php echo $r->name; ?></a>
										</td>
									</tr>
								</table>
							</div>
							
						 <br>
						<?php } ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-push-4">
						<p style="margin-left:10%">
             				<?php echo validation_errors(); ?>
             			</p>
             		</div>
             	 </div>

				<div class="row">
					<div class="col-sm-8">
						<p class="text-center wellcome_index" style="padding-left:44%">Ask New Question<p><br><br>
						
							<form method="post" action="<?php echo base_url() ?>home/question">
								<div class="form-group">
									<textarea class="form-control" rows="4" name="question"></textarea>
							    </div>

								<input type="hidden" name="cat_id" value="<?php echo $_GET["cat_id"]; ?>"> </input>
								
								<button type="submit" class="btn btn-primary">Enter</button>
							</form>

					</div>
				</div>
			
		</div>
	</div>
