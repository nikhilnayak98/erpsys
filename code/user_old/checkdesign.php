<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Faculty | Mega ATV Championship  </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                    <form data-parsley-validate method="post">

                    <div class="row">
                    	
                    	<label class="control-label col-sm-1 align-middle" for="mfrom" style="margin:-5px"><h2><span class="label label-info">From</span></h2></label>
                    	<div class="col-md-5 col-sm-6 col-xs-10">

                    	<input type="text"  class="form-control"  name="mfrom" placeholder="From" id="mfrom">
                    		
                    	</div>

                    	<label class="control-label col-sm-1 align-middle" for="to" style="margin:-5px"><h2><span class="label label-info">&nbspTo&nbsp</span></h2></label>
                    	<div class="col-md-5 col-sm-5 col-xs-10">
                    		
                    	<input type="text"  class="form-control"  name="mto" id="mto" placeholder="To">
                    		
                    	</div>
                    	

                    </div>
                    <br>
                    <br>

                    <div class="row">


                    	<label class="control-label col-sm-1 align-middle" for="subject" style="margin:-5px"><h2><span class="label label-info">Subject</span></h2></label>

                    	<div class="col-md-11 col-sm-11 col-xs-11">
                    		
                    	<input type="text"  class="form-control"  name="subject" id="subject" placeholder="Subject">
                    		
                    	</div>
                    </div>
                    </form>
                    </div>

	
<?php


  include "footer.php";
?>