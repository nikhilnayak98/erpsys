<?php

require("connect.php");

$site=$_POST['siteid'];

$date=date('Y/m/d');



$sql = "INSERT INTO sitetrans (siteid,property,date,quantity,rate,total) VALUES ";

if(!empty($_POST['fuelquant']) && !empty($_POST['fuelrate'])&& !empty($_POST['fueltotal']))	
	{
		$a = "('".$_POST['siteid']."','fuel','".$date."','".$_POST['fuelquant']."','".$_POST['fuelrate']."','".$_POST['fueltotal']."')";
		$sql .= $a; 
	}

if(!empty($_POST['ecquant']) && !empty($_POST['ecrate'])&& !empty($_POST['ectotal']))	
	{
		$a = ",('".$_POST['siteid']."','ec','".$date."','".$_POST['ecquant']."','".$_POST['ecrate']."','".$_POST['ectotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['transquant']) && !empty($_POST['transrate'])&& !empty($_POST['transtotal']))	
	{
		$a = ",('".$_POST['siteid']."','trans','".$date."','".$_POST['transquant']."','".$_POST['transrate']."','".$_POST['transtotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['advtquant']) && !empty($_POST['advtrate'])&& !empty($_POST['advttotal']))	
	{
		$a = ",('".$_POST['siteid']."','advt','".$date."','".$_POST['advtquant']."','".$_POST['advtrate']."','".$_POST['advttotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['foodquant']) && !empty($_POST['foodrate'])&& !empty($_POST['foodtotal']))	
	{
		$a = ",('".$_POST['siteid']."','food','".$date."','".$_POST['foodquant']."','".$_POST['foodrate']."','".$_POST['foodtotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['rentquant']) && !empty($_POST['rentrate'])&& !empty($_POST['renttotal']))	
	{
		$a = ",('".$_POST['siteid']."','rent','".$date."','".$_POST['rentquant']."','".$_POST['rentrate']."','".$_POST['renttotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['telebillquant']) && !empty($_POST['telebillrate'])&& !empty($_POST['telebilltotal']))	
	{
		$a = ",('".$_POST['siteid']."','telebill','".$date."','".$_POST['telebillquant']."','".$_POST['telebillrate']."','".$_POST['telebilltotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['elecbillquant']) && !empty($_POST['elecbillrate'])&& !empty($_POST['elecbilltotal']))	
	{
		$a = ",('".$_POST['siteid']."','elecbill','".$date."','".$_POST['elecbillquant']."','".$_POST['elecbillrate']."','".$_POST['elecbilltotal']."')";
		$sql .= $a;
	}

if(!empty($_POST['postchargequant']) && !empty($_POST['postchargerate'])&& !empty($_POST['postchargetotal']))	
	{
		$a = ",('".$_POST['siteid']."','postcharge','".$date."','".$_POST['postchargequant']."','".$_POST['postchargerate']."','".$_POST['postchargetotal']."')";
		$sql .= $a;
	}

	$query ="SELECT property FROM siteprop WHERE siteid='$site'"; 


if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_row($result))
    {
    
      foreach ($row as $val)
      {
      	  $quantid=$val."quant";
          $rateid=$val."rate";
          $totalid=$val."total";

          if(!empty($_POST[$quantid]) && !empty($_POST[$rateid])&& !empty($_POST[$totalid]))	
			{
				$a = ",('".$site."','".$val."','".$date."','".$_POST[$quantid]."','".$_POST[$rateid]."','".$_POST[$totalid]."')";
				$sql .= $a;
			}
      }
    }
}
$a = ";";
$sql .= $a;

if($conn->query($sql))
{
		echo "successful";

}
else
{
	 
  echo mysqli_error($conn);

}

?>