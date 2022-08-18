<br>
<button class="btn-internship-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu</button>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Internship</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="d-grid gap-2 mx-auto" style="text-align: start ;">
    <a href="<?= base_url('index.php/M2_Internship')?>" class="btn btn-outline-success">Home</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Internship Form</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Terms and Condition FEU ADT</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Student Resume</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Internship Status</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Internship Search</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Internship Prospects</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Internship Application Status</a>
    <a href="<?= base_url('index.php/M2_Internship/internship_form')?>" class="btn btn-outline-success">Support</a>
    </div>
  </div>
</div>

<h1 class="form-header"><?= $im_header?></h1>
<hr>

<div class="internship_form">
  <center><h4>Internship Application Form</h4></center>
  <hr style="border-style:dashed; border-width: 2px;">
  <!-- First Line -->
  <div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
    <label for="floatingInput">Last Name</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
    <label for="floatingInput">First Name</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
    <label for="floatingInput">Middle Name</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="date" class="form-control" id="floatingInput" placeholder="DOB">
    <label for="floatingInput">Date Of Birth</label>
    </div>
  </div>
</div>
<!-- Second Line -->
<div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" disabled>
    <label for="floatingInput">Local Address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
    <label for="floatingInput">Street</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
    <label for="floatingInput">City</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="DOB">
    <label for="floatingInput">Zip</label>
    </div>
  </div>
</div>
<!-- Third Line -->
<div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" disabled>
    <label for="floatingInput">Permanent Address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
    <label for="floatingInput">Street</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
    <label for="floatingInput">City</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="DOB">
    <label for="floatingInput">Zip</label>
    </div>
  </div>
</div>
<!-- Fourth Line -->
<div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Home Phone" disabled>
    <label for="floatingInput">Home Phone</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="tel" class="form-control" id="floatingInput" placeholder="Contact #">
    <label for="floatingInput">Contact </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Work Phone" Disabled>
    <label for="floatingInput">Work Phone</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="tel" class="form-control" id="floatingInput" placeholder="Contact #">
    <label for="floatingInput">Contact </label>
    </div>
  </div>
</div>
<hr>
<center><h4>IN CASE OF EMERGENCY CONTACT</h4></center>
<hr style="border-style:dashed; border-width: 2px;">
<div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Name">
    <label for="floatingInput">Name</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="tel" class="form-control" id="floatingInput" placeholder="Relationship">
    <label for="floatingInput">Relationship </label>
    </div>
  </div>
  <div class="row g-1">
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Home Phone" disabled>
    <label for="floatingInput">Home Phone</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="tel" class="form-control" id="floatingInput" placeholder="Contact #">
    <label for="floatingInput">Contact </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="text" class="form-control" id="floatingInput" placeholder="Work Phone" Disabled>
    <label for="floatingInput">Work Phone</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating mb-1">
    <input type="tel" class="form-control" id="floatingInput" placeholder="Contact #">
    <label for="floatingInput">Contact </label>
    </div>
  </div>
</div>
 



