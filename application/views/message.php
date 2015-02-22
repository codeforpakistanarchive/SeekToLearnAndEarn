<div class="row banner2">
		<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories">Catagories</a></div>
		<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage"><?php echo $result[0]->name; ?></a></div>
		<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/catogories">Logout</a></div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_after_login">
			<p></p>
			<p class="text-center wellcome_index">Conversation<p><br><br>
			
			<?php 
				foreach ($msg as $a) 
				{
			?>
			<table>
				<tr>
					<td>
						<img src="<?php echo base_url() ?>upload/<?php echo $a->image; ?>"  
						          width="90px" height="70px" alt="..." >
					</td>
					<td>
						<?php echo $a->message; ?>
					</td>
				</tr>
			</table>

			<?php } ?>
			
			<br><br>

			<div class="row">
				<div class="col-sm-8">
					
						<form method="post" action="<?php echo base_url() ?>home/msg">
							<div class="form-group">							
								<textarea class="form-control" rows="4" name="answer"></textarea>
							</div>
							<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"> </input>
							
							<button type="submit" class="btn btn-primary">SEND IT</button>
						</form>

				</div>
			</div>

		</div>
	</div>
</div>