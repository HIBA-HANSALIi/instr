<div class="modal fade" id="update<?php echo $row["id"] ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="script.php" method="POST" id="form_task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Instrument</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing instrument Index  -->
							<div class="mb-3">
								<label class="form-label">Image</label>
                
                <img src="./images/<?php echo $row["image"] ?>" class="rounded img-fluid mb-2" width="150"/>

								<input type="file" class="form-control" id="instrument_image" name="image"  data-parsley-required/>
							</div>
							<input type="hidden" id="instrument_id" name="instrument_id" value="<?php  echo $row["id"] ?>">
							<div class="mb-3">
								<label class="form-label">Nom</label>
								<input type="text" class="form-control" id="instrument_title" name="nom" value="<?php  echo $row["title"] ?>"  data-parsley-required/>
							</div>
							
							
							<div class="mb-3">
								<label class="form-label">Categorie</label>
								<select class="form-select" id="instrument_categorie" name="categorie" data-parsley-required>
									<option value="<?php echo $row["categorie_id"] ?>"><?php echo $row["titleCat"] ?></option>
									<option value="1">piano</option>
									<option value="2">guitare</option>
									
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Prix</label>
								<input type="number" step="0.50" min="0" class="form-control" id="instrument_prix" name="prix" value="<?php echo $row["price"] ?>"  data-parsley-required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Quantité</label>
								<input type="text" class="form-control" id="instrument_quantite" name="quantite" value="<?php echo $row["quantite"] ?>"  data-parsley-required/>
							</div>
							
							
			
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="10" id="instrument_description" name="description" ><?php echo $row["description"] ?></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="instrument-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="instrument-update-btn">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
