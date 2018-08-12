<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Livre d'or
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-vertical-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form action="validation.php" method="POST" role="form">
					<legend>Livre d'or</legend>
				
					<div class="form-group">
						<label for="">LastName</label>
						<input type="text" name="jlastname" class="form-control" id="" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">FirstName</label>
						<input type="text" name="jfirstname" class="form-control" id="" placeholder="Input field">
					</div>
					<textarea class="form-control" name="jmessage" rows="6" id="comment" placeholder="Please write your subject *"></textarea>
				
					<button type="submit" name="jsubmit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->