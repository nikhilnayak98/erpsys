<?php


  include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Select Site | Smart Soalar </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">



<?php

require("../php/connect.php");



$query ="SELECT property FROM siteprop WHERE siteid="; 



if($result=mysqli_query($conn,$query))
{
	 while ($row=mysqli_fetch_row($result))
    {
   	
    	foreach ($row as $val) 
    	{	
    				echo'<div class="col-md-12 col-sm-12 col-xs-12"  >
              		  	<label for="$val" class="col-md-4 col-sm-4 col-xs-4"><span class="label label-info">'.$val.'</span></label>

            			<input type="text" name="$val" id="$val" class="form-control"';
            			echo"placeholder='$val' >			
    				</div><br>";

    	}
    	
    }

}

?>
</table>
</div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>