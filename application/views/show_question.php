<div class="row banner3">
	<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories" class="banner3">Catagories</a></div>
	<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage" class="banner3"><?php echo $result[0]->name; ?></a></div>
	<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/logout" class="banner3">Logout</a></div>
</div>
	
	<div class="row">
		<div class="col-sm-9 col-sm-push-1 content_sports">
			
			<div class="table_answer">
				<table>
					<tr>
						<td width="100px">
							<p style="border-right:solid; border-width:1px; border-color:grey; height:70px; 
									 padding-right:10%; padding-top:6%;">
											<a href="<?php echo base_url() ?>home/profile?id=<?php echo $question[0]->user_id; ?>">
												<img src="<?php echo base_url() ?>upload/<?php echo $question[0]->image; ?>"  
						             			width="90px" height="70px" alt="..." >
						             		</a>	
						    </p>
						   
						</td>			
						
						<td>
							<p style="padding-left:2%;" class="question_font">
								<?php echo $question[0]->name; ?>
							</p>	
						</td>
					</tr>
				</table>
			</div>

			<br>
			
			

			<?php foreach ($answer as $a) 
			{
			?>
			
			<div class="table_answer1">
				<table>
					<tr>
						<td width="100px">
							<p style="border-right:solid; border-width:1px; border-color:white; height:70px; 
									 padding-right:10%; padding-top:6%;">
								
								<a href="<?php echo base_url() ?>home/profile?id=<?php echo $a->user_id; ?>">
									<img src="<?php echo base_url() ?>upload/<?php echo $a->image ?>"  
									width="90px" height="70px" alt="...">
								</a>
						  	</p>
						  	
						</td>
						
						<td>
						<p style="padding-left:4%;" class="answer_font">
								<?php echo $a->answer; ?>
							</p>	
						</td>
					</tr>
				</table>
			</div>

			<?php } ?>
			


			<div class="row">
				<div class="col-sm-6 col-sm-push-4">
					<p style="margin-left:10%">
						<?php echo validation_errors(); ?>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<p class="text-center wellcome_index" style="padding-left:55%;">Write your answer<p><br>
						<form method="post" action="<?php echo base_url() ?>home/answer">
							<div class="form-group">							
								<textarea class="form-control" rows="4" name="answer"></textarea>
							</div>
							<input type="hidden" name="topic_id" value="<?php echo $_GET["topic_id"]; ?>"> </input>
							<button type="submit" class="btn btn-primary">Enter</button>
						</form>

				</div>
			</div>
		</div>
	</div>
