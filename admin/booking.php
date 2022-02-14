<?php

	include 'header.php';

?>


<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <!-- <a class="add-new" href="add-user.php">add user</a> -->
              </div>
              <div class="col-md-12">
                <?php
                        include "config.php";

                        $user_id = $_GET['id'];

                        $sql = "SELECT user.user_id,user.name, user.mail,user.moblie_number,driver.age,driver.truck_number,driver.truck_capacity,driver.transpoter_name,driver.driving_experience,driver.state,driver.city FROM user
                        LEFT JOIN driver ON driver.uid = user.user_id
                        WHERE user.user_id = {$user_id}";

                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>
                  <table class="content-table">
                      <thead>
                          <th>DRIVER</th>
                          <th>DETAILS</th>
                      </thead>
                      <tbody>
                        
                          <tr>
                              <td>NAME</td>
                              <td style="text-align: center;"><?php echo $row['name']; ?></td>
                              
                          </tr>
                          <tr>
                              <td>AGE</td>
                              <td style="text-align: center;"><?php echo $row['age']; ?></td>
                              
                          </tr><tr>
                              <td>MAIL</td>
                              <td style="text-align: center;"><?php echo $row['mail']; ?></td>
                              
                          </tr><tr>
                              <td>MOBILE NUMBER</td>
                              <td style="text-align: center;"><?php echo $row['moblie_number']; ?></td>
                              
                          </tr><tr>
                              <td>TRUCK NUMBER</td>
                              <td style="text-align: center;"><?php echo $row['truck_number']; ?></td>
                              
                          </tr><tr>
                              <td>TRUCK CAPACITY</td>
                              <td style="text-align: center;"><?php echo $row['truck_capacity']; ?></td>
                              
                          </tr><tr>
                              <td>TRANSPOTER NAME</td>
                              <td style="text-align: center;"><?php echo $row['transpoter_name']; ?></td>
                              
                          </tr><tr>
                              <td>DRIVING-EXPERIENCE</td>
                              <td style="text-align: center;"><?php echo $row['driving_experience']; ?></td>
                              
                          </tr><tr>
                              <td>STATE</td>
                              <td style="text-align: center;"><?php echo $row['state']; ?></td>
                              
                          </tr><tr>
                              <td>CITY</td>
                              <td style="text-align: center;"><?php echo $row['city']; ?></td>
                              
                          </tr>
                       
                      </tbody>
                  </table>

           <div class="col-md-2" >
                     <a style="text-decoration: none;" class="add-new" href=""><input type="submit" name="submit" class="btn btn-primary" value="" required />
Book KNOW!</a>
              </div>
                  <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        ?>
              </div>
          </div>
      </div>
  </div>

<?php

	include 'footer.php';

?>


