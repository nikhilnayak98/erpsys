<?php


  include "header.php";

$site=$_POST['siteid'];




?>




 

  <title>Add Expense Site | Smart Solar  </title>


   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                  <div class="row" id="body2">
  <form>


 	<div class="row" id="body2">



            <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12" >
          <form action="../php/addexpensetositecontroller.php" method="post">
                      <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site</span></label>

                         <?php echo"<input type='text'  readonly='true' name='siteid' value='$site' class='form-control'>" ?>
                </div>

            
      </div>

            <div class="row">

            <div class="ln_solid"></div>



          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Quantity</span></label>

                   <input type="number" class="qtys form-control" name="fuelquant" id="fuelquant"  placeholder="Quantity" onchange="total('fuel')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Rate</span></label>
                   <input type="number" class="qtys form-control" name="fuelrate" id="fuelrate"  placeholder="Rate"   onchange="total('fuel')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Total</span></label>

                  <input type="text" class="tots form-control" name="fueltotal" id="fueltotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>
                

            <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Quantity</span></label>

                   <input type="number" class="qtys form-control" name="ecquant" id="ecquant"  placeholder="Quantity" onchange="total('ec')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Rate</span></label>
                   <input type="number" class="qtys form-control" name="ecrate" id="ecrate"  placeholder="Rate"  onchange="total('ec')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Total</span></label>

                  <input type="text" class="tots form-control" name="ectotal" id="ectotal"  placeholder="Employee Conveyance Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Quantity</span></label>

                   <input type="number" class="qtys form-control" name="transquant" id="transquant"  placeholder="Quantity" onchange="total('trans')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Rate</span></label>
                   <input type="number" class="qtys form-control" name="transrate" id="transrate"  placeholder="Rate"  onchange="total('trans')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Total</span></label>

                  <input type="text" class="tots form-control" name="transtotal" id="transtotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Quantity</span></label>

                   <input type="number" class="qtys form-control" name="advtquant" id="advtquant"  placeholder="Quantity" onchange="total('advt')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Rate</span></label>
                   <input type="number" class="qtys form-control" name="advtrate" id="advtrate"  placeholder="Rate"  onchange="total('advt')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Total</span></label>

                  <input type="text" class="tots form-control" name="advttotal" id="advttotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Quantity</span></label>

                   <input type="number" class="qtys form-control" name="foodquant" id="foodquant"  placeholder="Quantity" onchange="total('food')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Rate</span></label>
                   <input type="number" class="qtys form-control" name="foodrate" id="foodrate"  placeholder="Rate" onchange="total('food')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Total</span></label>

                  <input type="text" class="tots form-control" name="foodtotal" id="foodtotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Quantity</span></label>

                   <input type="number" class="qtys form-control" name="rentquant" id="rentquant"  placeholder="Quantity" onchange="total('rent')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Rate</span></label>
                   <input type="number" class="qtys form-control" name="rentrate" id="rentrate"  placeholder="Rate"  onchange="total('rent')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Total</span></label>

                  <input type="text" class="tots form-control" name="renttotal" id="renttotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Quantity</span></label>

                   <input type="number" class="qtys form-control" name="telebillquant" id="telebillquant"  placeholder="Quantity" onchange="total('telebill')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Rate</span></label>
                   <input type="number" class="qtys form-control" name="telebillrate" id="telebillrate"  placeholder="Rate"  onchange="total('telebill')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Total</span></label>

                  <input type="text" class="tots form-control" name="telebilltotal" id="telebilltotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Electricity Bill Quantity</span></label>

                   <input type="number" class="qtys form-control" name="elecbillquant" id="elecbillquant"  placeholder="Quantity" onchange="total('elecbill')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info"Electricity Bill>Electricity Bill Rate</span></label>
                   <input type="number" class="qtys form-control" name="elecbillrate" id="elecbillrate"  placeholder="Rate"   onchange="total('elecbill')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Electricity Bill Total</span></label>

                  <input type="text" class="tots form-control" name="elecbilltotal" id="elecbilltotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Quantity</span></label>

                   <input type="number" class="qtys form-control" name="postchargequant" id="postchargequant"  placeholder="Quantity" onchange="total('postcharge')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Rate</span></label>
                   <input type="number" class="qtys form-control" name="postchargerate" id="postchargerate"  placeholder="Rate"   onchange="total('postcharge')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Total</span></label>

                  <input type="text" class="tots form-control" name="postchargetotal" id="postchargetotal"  placeholder="Total" readonly="true" >     
            </div>


          

      </div>


      <br>


      


      <?php

require("../php/connect.php");

$a=array("fuel", "ec", "trans", "advt", "food", "rent", "tele", "elec", "postcharge");

$count =0;
$query ="SELECT property FROM siteprop WHERE siteid='$site'"; 


if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_row($result))
    {
    
      foreach ($row as $val) 
      { 
          array_push($a,$val);
          $quantid=$val."quant";
          $rateid=$val."rate";
          $totalid=$val."total";
          $oc="'$val'";

            echo "<div class='row'> <div class='ln_solid'></div><div class='col-md-4 col-sm-4 col-xs-12'  ><label for='$val' class='col-md-1 col-sm-1 col-xs-1'><span class='label label-info'>$val Quantity</span></label><input type='text'  name='$quantid' id='$quantid' class='form-control qtys'";
                  echo 'placeholder="Quantity" onchange="total('.$oc.')"> </div>';
            echo'<div class="col-md-4 col-sm-4 col-xs-12"  >
                      <label for="$val" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">'.$val.' Rate'.'</span></label>';

                  echo "<input type='text' name='$rateid' id='$rateid' class='form-control'";
                  echo 'placeholder="Rate" onchange="total('.$oc.')"> </div>';
            echo'<div class="col-md-4 col-sm-4 col-xs-12"  >
                      <label for="$val" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">'.$val.' Total'.'</span></label>';

                  echo "<input type='text' class='tots form-control' name='$totalid' id='$totalid' ";
                  echo"placeholder='Total' readonly='true'>     
            </div></div><br>";

      }
      
    }

}

?>



                    <button class="btn btn-success col-md-7 pull-center col-sm-7 col-xs-7" style="margin-top:8px"> Add Tddransaction</button>

                    </div>
                    </form>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
              

	

  <script type="text/javascript">
    
    function total(name)
    {
        var getqid="#"+name+"quant";
        var getrid="#"+name+"rate";
        var gettotal="#"+name+"total";


        var quantity=$(getqid).val();
        var rate=$(getrid).val();

        var total=quantity*rate;


        $(gettotal).attr("value",total);

       

      }



      $(document).on("change", ".qtys", function() {
    var sum = 0;
    $(".qtys").each(function(){
        sum += +$(this).val();
    });
    $(".qtyst").val(sum);
});


/*
$("#senddata").on("click",regc);
        
function regc()
  {
    var siteid=$('#siteid');   ;
        var property='fuel';
        var date = new Date();
        var quantity=$('#fuelquantity');
        var rate=$('#fuelrate');
        var total=$('#fueltotal');

    var data={'siteid':siteid,'property':property,'date':date,'quantity':quantity,'rate':rate,'total':total};
  var allprop = " <?php echo $a ?> ";
   var i;
  for (i = 1; i < allprop.length; i++)
  {
      var str = "total";
      var str1 = "quantity";
      var str2 = "rate";
      var tot = allprop[i].concat(str);
      var quant = allprop[i].concat(str1);
      var ratee =allprop[i].concat(str2);
      if(document.getElementById(tot).value > 0)
      {
         data.siteid=$('#siteid')   
         data.property=allprop[i];
         data.date = new Date();
         data.quantity=document.getElementById(quant).value;
         data.rate=document.getElementById(ratee).value;
         data.total=document.getElementById(tot).value;
       
      }    
  }

   $.post('../php/addexpensetositecontroller.php',data,function(info){
      alert("bhitare");
            if(info!=0)
            {
               
                    alertify.alert("Succesful");                  
        

            }
            else if(info==0)
            {
               
            $("#querymsg").addClass('alert alert-danger');
              $('#querymsg').fadeIn();
            $("#querymsg").html("Mail Not Sent,Contact 7978555567 ");
             $('#querymsg').delay(2000).fadeOut();
            
            }
        });
}
*/
  </script>




<?php


  include "footer.php";
?>