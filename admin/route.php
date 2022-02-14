<?php

  include 'header.php';
  include 'config.php';

$state = "SELECT * FROM ag_states";
$states_qry = mysqli_query($conn, $state);

$city = "SELECT * FROM ag_cities";
$cities_qry = mysqli_query($conn, $city);

?>

<section style="padding: 20px;font-size: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: blue;padding: 20px;">First Intrested Route</h1>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                     <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-xl-6">
                                	<div>
				<h1>TO STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                 <div class="col-xl-6">
                 	<div>
				<h1>FROM STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                   <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit"  name="save" class="fxt-btn-fill" value="SUBMIT" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
		</div>
		
		</div>
	</div>
</div>
</section>
<section style="padding: 20px;font-size: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: blue;padding: 20px;">Second Intrested Route</h1>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                     <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-xl-6">
                                	<div>
				<h1>TO STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                 <div class="col-xl-6">
                 	<div>
				<h1>FROM STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                   <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit"  name="save" class="fxt-btn-fill" value="SUBMIT" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
		</div>
		
		</div>
	</div>
</div>
</section>
<section style="padding: 20px;font-size: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: blue;padding: 20px;">Third Intrested Route</h1>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                     <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-xl-6">
                                	<div>
				<h1>TO STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                 <div class="col-xl-6">
                 	<div>
				<h1>FROM STATE AND CITY</h1>
			</div>
                      <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($states_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                          </select>
                      </div>
                       <div class="form-group">
                        <label>City</label>
                            <select class="form-control" id="city" name="city">
                            		<option selected disabled>Select City</option>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                  </div>
                   <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit"  name="save" class="fxt-btn-fill" value="SUBMIT" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
		</div>
		
		</div>
	</div>
</div>
</section>

<script type="text/javascript">

  $('#state').on('change', function() {
        var state_id = this.value;
        console.log(state_id);
        $.ajax({
            url: 'ajax/city.php',
            type: "POST",
            data: {
                stateID: state_id
            },
            success: function(data) {
                $('#city').html(data);
                console.log(data);
            }
        })
    });
    </script>
<?php

  include 'footer.php';

?>

