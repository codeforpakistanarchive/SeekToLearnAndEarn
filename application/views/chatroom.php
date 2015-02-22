 <div class="container">
	<div class="row ">
		<div class="col-sm-9 col-sm-push-1 content_index">

			<!--login form code starts here !-->

			<div class="row ">
				<div class="col-sm-1 color">
				
				<?php 
				if ($message) 
				{
					echo "Incorrect data";
				}
				?>
				</div>

				<div class="col-sm-12 login_chatroom">
					<form action="<?php echo base_url() ?>home/login" method="post" class="form-inline">
						
						<div class="form-group">
							<input type="text" class="form-group input-lg" name="email" placeholder="Email">
						</div>

						<div class="form-group">
							<input type="password" class="form-group input-lg" name="password" placeholder="Password">
						</div>

						<div class="form-group">
							<input type="text" class="form-group input-lg" name="option" placeholder="L fo Learner & E for Earner">
						</div>
							
						<button type="submit" class="btn btn-primary btn-lg">LOGIN</button>

					</form>
				</div>
			</div>

			<!-- login form code ends here !-->

			
			<p class="wellcome_signup">Create New Account</p>
             
             <div class="row">
             	<div class="col-sm-6 col-sm-push-4">
             		<p style="margin-left:10%">
             			<?php echo validation_errors(); ?>
             		</p>
             	</div>
             </div>
			
			
			<!-- this is for signup form !-->
			<form action="<?php echo base_url() ?>home/signup" method="post" enctype="multipart/form-data">
				<div class="row ">
					
					<div class="row ">
						<div class="col-sm-6 signup_chatroomleft">
							<div class="form-group">
								<input type="text" class="form-group input-lg" name="name" placeholder="Name">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="username" placeholder="Username">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="email" placeholder="Email">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="country" placeholder="Country">
							</div>
						</div>
						
						<div class="col-sm-6 signup_chatroomright">
							<div class="form-group">
								<input type="password" class="form-group input-lg" name="password" placeholder="Password">
							</div>

							<div class="form-group">
								<input type="password" class="form-group input-lg" name="rpassword" placeholder="Re-Password">
							</div>

							<div class="form-group">
								<input type="text" class="form-group input-lg" name="gender" placeholder="Gender">
							</div>

							<div class="form-group">
								<LABEL> <p style="color:white;">UPLOAD PROFILE PIC</p></LABEL>
								<input type="file" class="form-group input-lg" name="userfile" placeholder="Email">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-sm-push-5 ">
							<button type="submit" class="btn btn-primary btn-lg" style="margin-left:12px" >SIGNUP</button>
						</div>
					</div>

				</div>
			</form>

			
			

		</div>
	</div>
</div>