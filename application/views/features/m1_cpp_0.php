<!-- This is for the Initial Career Prospects selection -->
<?= form_open('M1_CPP/m1_cpp_1');?>
<div class="cpp_container">
    <h2>Career Path Planning</h2>
    <hr>
    <h5>Career Prospects</h5>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault1" value = "Software Developer">
            <label class="form-check-label" for="flexRadioDefault1">
                Software Developer
            </label>
            </div>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault2" value = "Web Developer">
            <label class="form-check-label" for="flexRadioDefault2">
                Web Developer
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault3" value = "Information and Security Analyst">
            <label class="form-check-label" for="flexRadioDefault3">
                Information and Security Analyst
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault4" value = "Database Administrator and Architect">
            <label class="form-check-label" for="flexRadioDefault4">
                Database Administrator and Architect
            </label>
            </div>
            </div>
            <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault1" value = "Systems Analyst">
            <label class="form-check-label" for="flexRadioDefault1">
                Systems Analyst
            </label>
            </div>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault2" value = "Computer Programmer">
            <label class="form-check-label" for="flexRadioDefault2">
                Computer Programmer
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault3" value = "Network and Computer Systens Administrator">
            <label class="form-check-label" for="flexRadioDefault3">
                Network and Computer Systens Administrator
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="Career_prospects" id="flexRadioDefault4" value = " Database Administration and Architect">
            <label class="form-check-label" for="flexRadioDefault4">
                Database Administration and Architect
            </label>
            </div>
            </div>
        </div>
        <hr>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-primary">Proceed >></button>
        </div>
    </div>
</div>
<?= form_close(); ?>