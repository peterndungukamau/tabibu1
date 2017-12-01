<?php require_once('includes/connection.php'); //include the template top ?>
<div class="row">
 <div class="col-md-10">
    
    <div class="panel panel-primary">
     <div class="panel-heading">
         <h3 class="panel-title pull-left">Appointments</h3>

        <a  href="index.php" class="btn btn-default pull-right">Close</a>
        <div class="clearfix"></div>
      </div>
    <div class="panel-body">

 <button type="button" class="btn btn-info" onclick="javascript:printDiv('print')">Print Report</button> <a href="appointment-add.php" class="btn btn-primary">Add New Appointment</a>
           <form class="form-inline" style="float: right;" action="edit.php" method="get">
           <input type="text" name="s" class="form-control" placeholder="Search..."   required />
           <button type="submit" class="btn btn-success">Search</button>
           <a class="btn btn-default" href="edit.php">View All</a>
           </form>
        <div style="clear:both;"></div>
        <br>
                     <div class="table-responsive">           
                     <table class="table table-condensed table-hover table-bordered table-striped">
                     <thead>
                     <tr>
                     <th style="text-align:center"></th>
                      <td>firstname</td>
                      <td>lastname</td>
                       <td>surname</td>
                        <td>email</td>
                         <td>checkin</td>
                          <td>checkout</td>
                           <td>nopatient</td>
                            <td>arrival</td>
                     <th style="text-align:center">Action</th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php
            $count = 1;
            if(isset($_GET['s'])){
               $search_criteria = mysqli_real_escape_string($conn, $_GET['s']);
               $query = "SELECT * FROM tbl_appointment WHERE  (firstname LIKE '%$search_criteria%' OR lastname LIKE '%$search_criteria%' OR email LIKE '%$search_criteria%'
               OR checkin LIKE '%$search_criteria%' OR checkout LIKE '%$search_criteria%' OR nopatient LIKE '%$search_criteria%' OR arrival LIKE '%$search_criteria%' ) ORDER BY id ASC";
                
              
            }else{
            $query = "SELECT * FROM tbl_appointment ORDER BY id ASC";
            }
            $result= mysqli_query($conn,$query) OR die("Query Failed: ".mysqli_error()) ;
              while($row= mysqli_fetch_array($result)){ 
           ?>
                      <tr>
                     <td style="text-align:center"><?php echo $count; ?></td>
                     <td><?php echo '<td>'.$row['firstname'].'';?></td>
                    <td><?php  echo '<td>'.$row['lastname'].'';?></td>
                    <td><?php  echo '<td>'.$row['surname'].'';?></td>
                    <td><?php  echo '<td>'.$row['email'].'';?></td>
                    <td><?php  echo '<td>'.$row['checkin'].'';?></td>
                    <td><?php  echo '<td>'.$row['checkout'].'';?></td>
                    <td><?php  echo '<td>'.$row['nopatient'].'';?></td>
                    <td><?php  echo '<td>'.$row['arrival'].'';?></td>
                     
                    
                     <td style="text-align:center"><a class="btn btn-danger btn-xs" onclick="return confirm('DELETE?')" href="includes/process.php?cancel=<?php echo $row["id"]; ?>" > Cancel </a></td>
                     </tr>
                    <?php 
          $count++;
            }
           ?> 
                     </tbody>
                     </table>
                     </div>
                     
                     
                     <div id="print" class="table-responsive" style="display:none;">          
                     <table class="table table-condensed table-hover table-bordered table-striped">
                     <thead>
                    <tr>
                     <th style="text-align:center"></th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>surname</th>
                        <th>email</th>
                        <th>checkin</th>
                        <th>checkout</th>
                        <th>nopatient</th>
                        <th>arrival</th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php
            $count = 1;
            if(isset($_GET['s'])){
               $search_criteria = mysqli_real_escape_string($connection, $_GET['s']);
               $query = "SELECT * FROM tbl_appointment WHERE  (firstname LIKE '%$search_criteria%' OR lastname LIKE '%$search_criteria%' OR email LIKE '%$search_criteria%'
               OR checkin LIKE '%$search_criteria%' OR checkout LIKE '%$search_criteria%' OR nopatient LIKE '%$search_criteria%' OR arrival LIKE '%$search_criteria%' ) ORDER BY id ASC";
                
              
            }else{
            $query = "SELECT * FROM tbl_appointment ORDER BY id ASC";
            }
            $result= mysqli_query($connection,$query) OR die("Query Failed: ".mysqli_error()) ;
              while($row= mysqli_fetch_array($result)){ 
           ?>
                      <tr>
                     <td style="text-align:center"><?php echo $count; ?></td>
                 
                     <td><?php echo '<td>'.$row['firstname'].'';?></td>
                    <td><?php  echo '<td>'.$row['lastname'].'';?></td>
                    <td><?php  echo '<td>'.$row['surname'].'';?></td>
                    <td><?php  echo '<td>'.$row['email'].'';?></td>
                    <td><?php  echo '<td>'.$row['checkin'].'';?></td>
                    <td><?php  echo '<td>'.$row['checkout'].'';?></td>
                    <td><?php  echo '<td>'.$row['nopatient'].'';?></td>
                    <td><?php  echo '<td>'.$row['arrival'].'';?></td> 
                     </tr>
                    <?php 
          $count++;
            }
           ?> 
                     </tbody>
                     </table>
                     </div>
    </div>
   </div>

  </div>
</div>
<?php require_once('includes/connection.php'); //include footer template ?>