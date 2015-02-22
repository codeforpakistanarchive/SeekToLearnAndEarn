<div class="container">
	<div class="home ">
		<div class="col-sm-9 col-sm-push-1 content_index">
			<p></p>
			<p class="text-center wellcome_index">WELLCOME <?php echo $result[0]->name; ?><p>
			<p>
				<img src="<?php echo base_url() ?>upload/<?php echo $result[0]->image; ?>"  
					 		width="130px" height="100px" alt="..." >
			</p>
			<br><br>

			<form action="<?php echo base_url() ?>home/portifolio_data" method="post" enctype="multipart/form-data">
				<div class="row ">
						<div class="col-sm-6 col-sm-push-3 ">
							
                            <select id="subject" name="subject" class="form-control" required="required" style="width:60%;">
                                <option value="na" selected="">Your are good at?</option>
                                <option value="1">Tailor</option>
                                <option value="2">Cake design</option>
                            </select>
                            <p></p>


							<div class="form-group">							
								<textarea class="form-control" rows="5" name="profession" placeholder="Your detail description:"
								 style="width:60%;" ></textarea>
							</div>



							<div class="form-group">
								<LABEL> <p style="color:white;">UPLOAD PROFILE PIC</p></LABEL>
								<input type="file" class="form-group input-lg" name="userfile" placeholder="Email">
							</div>

							<p></p>
    						<div class="map">
    							<p style="color:white;"><h1> Click On Your Current Location</h1></p>
  							</div>
  							
  							<div id="googleMap" style="width:100%;height:610px; border-style:solid; border-width:1px;"></div>

  						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 col-sm-push-3 ">
							<button type="submit" class="btn btn-primary btn-lg" style="margin-left:12px" >UPDATE</button>
						</div>
					</div>



				</div>
			</form>	

		</div>
	</div>
</div>