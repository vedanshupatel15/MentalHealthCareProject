  <?php include "Header.php" ?>
  <?php include "DBConnect.php" ?>
  <section class="contact-form-wrap section">
    <div class="container">
      <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Login Form</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post">
                    <div class="row">
                        <div class="col-lg-3"></div>    
                        <div class="col-lg-6">
                            <div class="form-group">
                              <select name="userType" class="form-control">
                                <option value="">--- Select User ---</option>
                                <option value="Patient">Patient</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Admin">Admin</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="username" id="name" type="text" class="form-control" placeholder="Username" >
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="password" id="password" type="text" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="sign_in" type="submit" value="Sign In"></input>
                        <a class="btn btn-main btn-round-full" href="register.php">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "Footer.php" ?>
<?php
if(isset($_REQUEST["sign_in"])){
  if($_REQUEST["userType"]=="Patient"){
    $sql = "select * from patient where username='".$_REQUEST["username"]."' AND password='".$_REQUEST["password"]."'";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['patient']=$row["name"];
      $_SESSION['patient_id']=$row["pid"];
      echo "<script>alert('Login success');window.location='index.php';</script>";
    } else {
      echo "<script>alert('Enter correct credential details')</script>";
      //echo "<script>window.location='Login.php';</script>";
    }
  } elseif ($_REQUEST["userType"]=="Doctor") {
    $sql = "select * from doctor where username='".$_REQUEST["username"]."' AND password='".$_REQUEST["password"]."'";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['doctor']=$row["name"];
      $_SESSION['doctor_id']=$row["did"];
      echo "<script>alert('Login success');window.location='index.php';</script>";
    } else {
      echo "<script>alert('Enter correct credential details')</script>";
      echo "<script>window.location='Login.php';</script>";
    }
  } else {
    echo "<script>alert('Select User Type')</script>";
  }

}
mysqli_close($conn);
?>
