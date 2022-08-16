<!-- This is for the Initial Career Prospects selection -->
<!-- <div class="cpp_container">
    <h2>Career Path Planning</h2>
    <hr>
    <h5>Career Prospects</h5>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Software Developer
            </label>
            </div>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Web Developer
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
                Information and Security Analyst
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Database Administrator and Architect
            </label>
            </div>
            </div>
            <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Systems Analyst
            </label>
            </div>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Computer Programmer
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3">
                Network and Computer Systens Administrator
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">
                Database Administration and Architect
            </label>
            </div>
            </div>
        </div>
        <hr>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-primary">Proceed >></button>
        </div>
    </div>
 
</div> -->
<!-- This is for the soft skills assessment portion -->
<?=form_open('m1_cpp/m1_cpp_2');?>
<div class="cpp_container">
    <h2>Career Path Planning for <?= $career_prospect;?></h2>
    <h5>Soft Skills Assessment</h5>
    <input type="text" name="Career_prospects" id = "Career_prospects" value="<?= $career_prospect;?>" hidden>
    <label for="customRange1" class="form-label">Critical Thinking </label>
    <input type="range" class="form-range" min="1" max="10" id="customRange1" name ="ssc1"> <!--S.S.C Stands for soft skill criteria.-->
    <label for="customRange2" class="form-label">Teamwork</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange2" name ="ssc2">
    <label for="customRange3" class="form-label">Time Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange3" name ="ssc3">
    <label for="customRange4" class="form-label">Stress Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange4" name ="ssc4">
    <label for="customRange5" class="form-label">Communication</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange" name ="ssc5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="close" class="btn btn-outline-primary">Proceed >></button>
        </div>
</div>
<?=form_close()?>
<!-- <div class="cpp_container">
    <h2>Career Path Planning</h2>
    <h5>Technical Skills Asessment</h5>
     <label for="customRange1" class="form-label">Critical Thinking</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange1" name ="ssc1"> S.S.C Stands for soft skill criteria.
    <label for="customRange2" class="form-label">Teamwork</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange2" name ="ssc2">
    <label for="customRange3" class="form-label">Time Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange3" name ="ssc3">
    <label for="customRange4" class="form-label">Stress Management</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange4" name ="ssc4">
    <label for="customRange5" class="form-label">Communication</label>
    <input type="range" class="form-range" min="1" max="10" id="customRange" name ="ssc5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-outline-primary">Proceed >></button>
        </div>
</div>
<div class="cpp_container">
    <h2>Career Path Planning</h2>
    <h5>Career Path</h5>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, non Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Laborum deserunt nobis nam cumque sequi mollitia, explicabo minima eos sapiente quod Lorem ipsum dolor sit amet Lorem, ipsum.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptatum libero dolorem, aut veniam ex perferendis in 
    dnihil necessitatibus facere deserunt assumenda laborum delectus quos, explicabo blanditiis.
</div> -->
