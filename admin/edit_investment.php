<?php 
 require 'connection.php';

   
                                    
                    
        $query = "SELECT * FROM investment ";
        $select_investment = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_investment)){
          $id = $row['id'];
          $total_investment = $row['total_investment'];
          $unconfirmed_investment = $row['unconfirmed_investment'];
          $total_profit = $row['total_profit'];
            
        }
        if (isset($_POST['update_investment'])){
           
            $total_investment= $_POST['total'];
            $unconfirmed_investment = $_POST['unconfirmed'];
            $total_profit = $_POST['profit'];

            $query = "UPDATE investment 
            SET total_investment = '$total_investment', unconfirmed_investment = '$unconfirmed_investment', total_profit = '$total_profit'
            WHERE id = $id";
           
           
            $update = mysqli_query($conn, $query);
            if(!$update){
                die("FATAL ERROR". mysqli_error($conn));

            }else {
               
                echo "Record Updated!!!!";
            }

          
        }
    else{
    
    }


?>
                        <form method="post" id="msg_validate" action="" novalidate="novalidate" class="no-mb no-mt">
                            <div class="row">
                                <div class="col-xs-12">

                                  

                                  

                                   
                                    </div>
                                    <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <label class="form-label">Total invsetment</label>
                                            <div class="controls">
                                                <input value="<?php echo  $total_investment; ?>" name="total" class="form-control" id="exampleInputnumber" required=""  type="text" placeholder="Total investment">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pr">
                                    <div class="form-group">
                                            <label class="form-label">Unconfirmed Investment</label>
                                            <div class="controls">
                                                <input value="<?php echo $unconfirmed_investment; ?>" name="unconfirmed" class="form-control" id="exampleInputnumber" required=""  type="text" placeholder="Unconfirmed">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 no-pl">
                                    <div class="form-group">
                                            <label class="form-label">Profit</label>
                                            <div class="controls">
                                                <input value="<?php echo $total_profit;  ?>" name="profit" class="form-control" id="exampleInputnumber" required=""  type="text" placeholder="Total Profit">
                                            </div>
                                        </div>
                                                <button class="btn btn-primary mt-10 btn-corner right-15" name="update_investment">Update</button>
                                     </div>
                                      
                                    
                                   

                                    
                                        
                                        
                                   

                                </div>
                            </div>
                        </form>