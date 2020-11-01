<?php
  $title = "Contact";
  require_once "./template/header.php";
?>



    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal" method="post" >
			  	<fieldset>
				    <legend>Feedback</legend>
				    <p class="lead">I’d love to hear from you!</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name" name="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email" name="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Textarea</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" name="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" class="btn btn-primary">Submit</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
           
if(isset($_POST['Name']))
{
$data=$_POST['Name'];
$fp = fopen('data.txt', 'a');
fwrite($fp, "Name:  ");
fwrite($fp, $data);
fwrite($fp, " ");
fclose($fp);
}

if(isset($_POST['Email']))
{
$data=$_POST['Email'];
$fp = fopen('data.txt', 'a');
fwrite($fp, "Email:  ");
fwrite($fp, $data);
fwrite($fp, " ");
fclose($fp);
}
if(isset($_POST['textArea']))
{
$data=$_POST['textArea'];
$fp = fopen('data.txt', 'a');
fwrite($fp, "Feedback:  ");
fwrite($fp, $data);
fwrite($fp, "\n ");
fclose($fp);
}
?>
<?php
  require_once "./template/footer.php";
?>