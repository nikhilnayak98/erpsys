<?php


  include "header.php";
?>

  <title>View site transaction | Smart Solar  </title>

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Transaction For </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="row" id="body2">
            
              
                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                           
                              <tr align='center'>
                                 
                                <th>site ID</th>
                                <th>property</th>
                                <th>date</th>
                                <th>quantity</th>
                                <th>rate</th>
                                <th>total</th> 

                              </tr>
                             
                            </thead>


                            <tbody>
                              
                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT * FROM sitetrans"; 

                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 

                                                             echo "<tr align='center'>";

        
        echo "<td>".$row['siteid']."</td>";
        echo "<td>".$row['property']."</td>";
        
      
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['rate']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "</tr>";

                                                    }
                                                            }
                                        ?>
                          
                                

                            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                                </div>
                            </div>
                        </div>
                    </div>
 
<?php

include "footer.php";

?>