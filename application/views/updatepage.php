<div class="row banner2">
		<div class="col-sm-4 col-sm-push-8"><a href="<?php echo base_url() ?>home/catogories" class="banner2">Catagories</a></div>
		<div class="col-sm-4 col-sm-push-5"><a href="<?php echo base_url() ?>home/updatepage" class="banner2"><?php echo $result[0]->name; ?></a></div>
		<div class="col-sm-4 col-sm-push-2" style="padding-left:3%;"><a href="<?php echo base_url() ?>home/logout" class="banner2">Logout</a></div>
</div>



<div class="container">
	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_after_login">
			<p></p>
			<div class="row">
			    <div class="col-sm-6 col-sm-push-4">
			        <p style="margin-left:10%">
			             <?php echo validation_errors(); ?>
			        </p>
			    </div>
			</div>
			<p class="text-center wellcome_index">Update your data<p><br><br>
			

			<form action="<?php echo base_url() ?>home/updatedata" method="post" enctype="multipart/form-data">
				<div class="row ">
					
					<div class="row ">
						<div class="col-sm-6 signup_chatroomleft">
							<div class="form-group">
								<input type="text" class="form-group input-lg" name="name" placeholder="Name" 
								value="<?php echo $result[0]->name ?>">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="username" placeholder="Username"
								value="<?php echo $result[0]->username ?>">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="email" placeholder="Email"
								value="<?php echo $result[0]->email ?>">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="country" placeholder="Country"
								value="<?php echo $result[0]->country ?>">
							</div>


							<div class="form-group">
								<input type="text" class="form-group input-lg" name="school" placeholder="School"
								value="<?php echo $result[0]->school ?>">
							</div>


							<div class="form-group">
								<input type="text" class="form-group input-lg" name="college" placeholder="College"
								value="<?php echo $result[0]->college ?>">
							</div>

						</div>
						
						<div class="col-sm-6 signup_chatroomright">
							<div class="form-group">
								<input type="password" class="form-group input-lg" name="password" placeholder="Password"
								value="<?php echo $result[0]->password ?>">
							</div>

							<div class="form-group">
								<input type="password" class="form-group input-lg" name="rpassword" placeholder="Re-Password"
								value="<?php echo $result[0]->rpassword ?>">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="gender" placeholder="Gender"
								value="<?php echo $result[0]->gender ?>">
							</div>

							<div class="form-group">
								<LABEL>UPLOAD PROFILE PIC</LABEL>
								<input type="file" class="form-group input-lg" name="userfile" placeholder="Email"
								value="<?php echo base_url() ?>upload/<?php echo $result[0]->image ?>">
							</div>


							<div class="form-group">							
								<textarea class="form-control" rows="4" name="profession" placeholder="Professionally working as:"
								 style="width:60%;" value="<?php echo $result[0]->profession; ?>"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-sm-push-5 ">
							<button type="submit" class="btn btn-primary btn-lg" style="margin-left:12px" >UPDATE</button>
						</div>
					</div>

				</div>
			</form>


			
			

		</div>
	</div>
</div>