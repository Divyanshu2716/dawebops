<?php 
include 'config.php';

$state = "SELECT * FROM ag_states";
$states_qry = mysqli_query($conn, $state);



if(isset($_POST['save'])){
  include "config.php";

  $name =mysqli_real_escape_string($conn,$_POST['name']);
  $user =mysqli_real_escape_string($conn,$_POST['user']);
  $age =mysqli_real_escape_string($conn,$_POST['age']);
  $tnumber =mysqli_real_escape_string($conn,$_POST['tnumber']);
  $phone =mysqli_real_escape_string($conn,$_POST['phone']);
  $mail =mysqli_real_escape_string($conn,$_POST['mail']);
  $cnumber =mysqli_real_escape_string($conn,$_POST['cnumber']);
  $tname =mysqli_real_escape_string($conn,$_POST['tname']);
  $dexperience = mysqli_real_escape_string($conn,$_POST['dexperience']);
  $state = mysqli_real_escape_string($conn,$_POST['state']);
  $city = mysqli_real_escape_string($conn,$_POST['city']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));

  
  
  
  $sql = "SELECT user.user_id, user.name, user.username,user.mail,
                    user.password,user.usertype,user.moblie_number FROM driver
                    LEFT JOIN user ON driver.uid = user.user_id";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  if(mysqli_num_rows($result) < 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO user (name,username,moblie_number, mail, password)
              VALUES ('{$name}','{$user}','{$phone}','{$mail}','{$password}')";
    // $sql1 = "INSERT INTO driver (age,truck_number,truck_capacity,transpoter_name, driving_experience, state, city)
    //           VALUES ('{$age}','{$tnumber}','{$cnumber}','{$tname}','{$dexperience}','{$state}','{$city}')";

    
    if(mysqli_query($conn,$sql1)){



    $uidsql = "SELECT * from user WHERE username = '{$user}'";
    $result1= $conn->query($uidsql);
    $ans = $result1->fetch_assoc();
    $uid = $ans['user_id'];

        $sql2 = "INSERT INTO driver (uid,age,truck_number,truck_capacity,transpoter_name, driving_experience,state,city)
              VALUES ('{$uid}','{$age}','{$tnumber}','{$cnumber}','{$tname}','{$dexperience}','{$state}', '{$city}')";
        if(mysqli_query($conn,$sql2)){
            
      header("Location: {$hostname}/admin/index.php");
  
    }
}else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
  }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout31">
        <span class="fxt-shape fxt-animation-active"></span>
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <a href="index.php" class="fxt-logo"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">We're a Ready to Help YOU! </h1>
                    </div>
                    <div class="fxt-login-option">
                        <ul>
                            <li class="fxt-transformY-50 fxt-transition-delay-6"><a href="index.php">Login Driver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-page-switcher">
                    <h2 class="fxt-page-title mr-3">Register</h2>
                    <ul class="fxt-switcher-wrap">
                        <li><a href="index.php" class="fxt-switcher-btn">Login</a></li>
                        <li><a href="driver.php" class="fxt-switcher-btn active">Register</a></li>
                    </ul>
                </div>
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                     <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                          <label>Name</label>
                          <input id="name" name="name" placeholder="Name" class="form-control" value="" required pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="firstname lastname" aria-required="true" aria-describedby="name-format">
                          <span id="name-format" class="help">Format: firstname lastname</span>
                      </div>
                      <div class="col-12">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                        <div class="form-group">
                          <label>Age</label>
                          <input type="number" name="age" class="form-control" placeholder="Age" required>
                      </div> 
                      <div class="form-group">
                          <label>Truck Number</label>
                          <input type="number" name="tnumber" class="form-control" placeholder="Truck Number" required>
                      </div> 
                      <div class="form-group">
                          <label>Mobile Number</label>
                          <input type="tel" name="phone"pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" placeholder="123-45-678" required>
                      </div>
                      <div class="col-12">
                                    <div class="form-group">
                                         <label>Mail</label>
                                         <input type="email" id="mail" placeholder="MAIL" name="mail" class="form-control" value="" required aria-required="true">
                                    </div>
                                </div>
                      <div class="form-group">
                          <label>Truck Capacity(in Kg)</label>
                          <input type="number" name="cnumber" min="0.1" max="1000" class="form-control" placeholder="Capacity" required>
                      </div>
                      <div class="form-group">
                          <label>Transpoter Name</label>
                          <input type="text" name="tname" class="form-control" placeholder="Transpoter Name" required>
                      </div>
                      <div class="form-group">
                          <label>Driver Experience</label>
                          <input type="text" min="1" max="100" name="dexperience" class="form-control" placeholder="Driver Experience" required>
                      </div>
                      <div>
                    
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
                            </select>
                        </div>
               
                  </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                      <label>Password</label>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit"  name="save" class="fxt-btn-fill" value="Save" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/jquery.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>