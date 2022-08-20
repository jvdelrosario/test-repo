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
    <a href="<?= base_url('index.php/M2_Internship/data_privacy')?>" class="btn btn-outline-success">Terms and Condition FEU ADT</a>
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
<!-- Button trigger modal -->

<center>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     On Registration This would be provided
    </button>
</center>
<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Data Privacy Aggreement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quis alias impedit consequatur, id, repellat, quo voluptas libero temporibus veritatis eligendi! Quos, consectetur! Quidem quibusdam rerum expedita. Laudantium est, corporis ipsam fugiat autem perspiciatis! Ad laborum, nostrum rerum doloremque ipsam porro minima provident minus iure, quidem veritatis quibusdam quisquam sit, rem delectus. Aspernatur, dolore nostrum. Esse pariatur praesentium nostrum labore. Eligendi repudiandae porro, vel eaque error ducimus mollitia doloribus nam veritatis corrupti ad optio. Exercitationem, in dicta. A culpa molestiae sequi. Esse dolore quasi numquam, dolores ratione temporibus. Perspiciatis corrupti quibusdam error accusantium harum officiis facere assumenda explicabo sit illum.</p>
      <div class="input-group mb-3">
        <div class="input-group-text">
    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
    </div>
    <input type="text" class="form-control" aria-label="Text input with checkbox" readonly value="Do You Aggree With the Terms and Conditions?">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>