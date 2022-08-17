<?= form_open('M1_CPP/m1_cpp_3')?>
<div class="cpp_container">
    <h2>Career Path Planning for <?= $career_prospect?></h2>
    <h5>Technical Skills Asessment</h5>
    <input type="text" name="Career_prospects" id = "Career_prospects" value="<?= $career_prospect;?>" hidden>
    <input type="text" name="ssc_ave" id="ssc_ave" value = "<?= $ssc_ave; ?>" hidden>
    <label for="customRange1" class="form-label">Critical Thinking</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange1" name ="tsc1"> <!--T.S.C Stands for Technical skill criteria.-->
    <label for="customRange2" class="form-label">Teamwork</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange2" name ="tsc2">
    <label for="customRange3" class="form-label">Time Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange3" name ="tsc3">
    <label for="customRange4" class="form-label">Stress Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange4" name ="tsc4">
    <label for="customRange5" class="form-label">Communication</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange" name ="tsc5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-primary">Proceed >></button>
        </div>
</div>
<!-- <?= $ssc_ave;?> -->

