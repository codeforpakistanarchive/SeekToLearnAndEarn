<div class="row banner2">
		<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories" class="banner2">Catagories</a></div>
		<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage" class="banner2"><?php echo $result[0]->name; ?></a></div>
		<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/logout" class="banner2">Logout</a></div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_after_login">
			<p></p>
			<div classs="row">
				<div class="col-sm-9 col-sm-push-1">
					<p class="text-center wellcome_index">
						<?php echo $info[0]->name; ?> PORFILE
					</p>
				</div>

				<div class="col-sm-3 col-sm-push-1">	
					<img src="<?php echo base_url() ?>upload/<?php echo $info[0]->image; ?>"  
					 			 width="130px" height="100px" alt="..." >
				</div>
			</div>	
			
			<div class="row">
				<div class="col-sm-6 col-sm-push-3" >
					<table class="table table-bordered">
						<tr>
							<td width="20%" class="question_font">
								NAME
							</td>
							<td class="answer_font">
								<?php echo $info[0]->name ?>
							</td>
						</tr>

						<tr>
							<td class="question_font">
								USERNAME
							</td>
							<td class="answer_font">
								<?php echo $info[0]->username ?>
							</td>
						</tr>

						<tr>
							<td class="question_font">
								COUNTRY
							</td>
							<td class="answer_font">
								<?php echo $info[0]->country; ?>
							</td>
						</tr>

						<tr>
							<td class="question_font">
								SCHOOL
							</td>
							<td class="answer_font">
								<?php echo $info[0]->school; ?>
							</td>
						</tr>

						<tr>
							<td class="question_font">
								COLLEGE
							</td>
							<td class="answer_font">
								<?php echo $info[0]->college; ?>
							</td>
						</tr>

						<tr>
							<td class="question_font">
								PROFESSION
							</td>
							<td class="answer_font">
								<?php echo $info[0]->profession; ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<br><br>
		</div>
	</div>
</div>