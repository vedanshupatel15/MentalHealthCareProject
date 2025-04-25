<?php
if($_REQUEST["user"]=="Patient"){
  ?>
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group">
      <input name="patient_name" id="name" type="text" class="form-control" placeholder="Full Name" >
    </div>
  </div>
  <div class="col-lg-3"></div>
  
  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="gender" id="gender" type="text" class="form-control" placeholder="Gender" >
    </div>
  </div>
   <div class="col-lg-3">
    <div class="form-group">
      <input name="age" id="age" type="text" class="form-control" placeholder="Age" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="weight" id="weight" type="text" class="form-control" placeholder="Weight" >
    </div>
  </div>
   <div class="col-lg-3">
    <div class="form-group">
      <input name="contact" id="contact" type="text" class="form-control" placeholder="Contact" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group">
      <input name="email" id="name" type="email" class="form-control" placeholder="Email" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group-2 mb-4">
      <textarea name="address" id="address" class="form-control" rows="8" placeholder="Address"></textarea>
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="username" id="username" type="text" class="form-control" placeholder="Username" >
    </div>
  </div>
   <div class="col-lg-3">
    <div class="form-group">
      <input name="password" id="password" type="password" class="form-control" placeholder="Password" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-12">
  <div class="text-center">
      <input class="btn btn-main btn-round-full" name="patient_registration" type="submit" value="Register">
  </div>
</div>
<?php }
elseif ($_REQUEST["user"]=="Doctor"){
  ?>

  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group">
      <input name="doctor_name" id="name" type="text" class="form-control" placeholder="Full Name" >
    </div>
  </div>
  <div class="col-lg-3"></div>
  
  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="gender" id="name" type="text" class="form-control" placeholder="Gender" >
    </div>
  </div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="contact" id="contact" type="text" class="form-control" placeholder="Contact" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="degree" id="degree" type="text" class="form-control" placeholder="Degree" >
    </div>
  </div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="specialist" id="specialist" type="text" class="form-control" placeholder="Specialist" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group">
      <input name="email" id="name" type="email" class="form-control" placeholder="Email" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <div class="form-group-2 mb-4">
      <textarea name="address" id="address" class="form-control" rows="8" placeholder="Address"></textarea>
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-3"></div>
  <div class="col-lg-3">
    <div class="form-group">
      <input name="username" id="username" type="text" class="form-control" placeholder="Username" >
    </div>
  </div>
   <div class="col-lg-3">
    <div class="form-group">
      <input name="password" id="password" type="password" class="form-control" placeholder="Password" >
    </div>
  </div>
  <div class="col-lg-3"></div>

  <div class="col-lg-12">
  <div class="text-center">
      <input class="btn btn-main btn-round-full" name="doctor_registration" type="submit" value="Register">
  </div>
</div>  
  <?php
 } ?>