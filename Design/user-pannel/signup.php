<?php include_once('header.php')?>

<!-- contact section -->
<script>
function validate() {
    var name = document.forms["myform"]["name"].value;
    if (name == "" || name == null) {
        alert('Please fill out the User  Name');
        return false;
    }

    var email = document.forms["myform"]["email"].value;
    if (email == "" || email == null) {
        alert('Please fill out the email');
        return false;
    }

    var mail = /^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
    if (!mail.test(email)) {
        alert('Please fill in a proper email id');
        return false;
    }

    var password = document.forms["myform"]["password"].value;
    if (password == "" || password == null) {
        alert('Please fill out the password');
        return false;
    }

    if (!(password.length >= 3 && password.length <= 8)) {
        alert('Please provide a password with a minimum of 3 and a maximum of 8 characters');
        return false;
    }

    var gen_arr = document.getElementsByName("gender");
    if (gen_arr[0].checked == true) {

    } else if (gen_arr[1].checked == true) {

    } else {
        alert('Please Select Gender');
        return false;
    }

    var lan_arr = document.getElementsByName("language[]");
    if (lan_arr[0].checked == true) {

    } else if (lan_arr[1].checked == true) {

    } else if (lan_arr[2].checked == true) {

    } else {
        alert('Please Select at least one language');
        return false;
    }

    var selectElement = document.getElementById("inputstate");
    var selectedValue = selectElement.value;

    if (selectedValue === "") {
        alert("Please select a country.");
        return false;
    }
    
    // Validate the image file
    var fileInput = document.forms["myform"]["file"];
    var allowedExtensions = ["jpg", "jpeg", "png", "gif"]; // Allowed image file extensions
    var maxFileSizeInBytes = 5 * 1024 * 1024; // 5MB maximum file size

    if (fileInput.files.length === 0) {
        alert("Please select an image file.");
        return false;
    }

    var fileName = fileInput.files[0].name;
    var fileExtension = fileName.split(".").pop().toLowerCase();

    if (allowedExtensions.indexOf(fileExtension) === -1) {
        alert("Invalid file type. Allowed file types are: " + allowedExtensions.join(", "));
        return false;
    }

    if (fileInput.files[0].size > maxFileSizeInBytes) {
        alert("File size exceeds the maximum allowed size of 5MB.");
        return false;
    }

    // ... (the rest of your form validation code)
}


</script>
<section class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="custom_heading-container ">
                <h2 style="color: blue; align-item: center;">
                    Sign-up form
                </h2>
            </div>
        </div>
    </div>
    <div class="container layout_padding2">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="form_contaier">
                    <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                        <div class="form-group">
                            <label for="name">Name<span style="color: red">*</span></label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span style="color: red">*</span></label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password<span style="color: red">*</span></label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Gender">Gender<span style="color: red">*</span></label><br>
                            Male:<input type="radio" name="gender" value="male">
                            Female:<input type="radio" name="gender" value="female">
                            Others:<input type="radio" name="gender" value="others">
                        </div>
                        <div class="form-group">
                            <label for="Language">Language<span style="color: red">*</span></label><br>
                            Bengali:<input type="checkbox" name="language[]" value="Bengali">
                            English:<input type="checkbox" name="language[]" value="English">
                            Hindi:<input type="checkbox" name="language[]" value="Hindi">
                        </div>
                        <div class="form-group">
                            <label for="inputstate">Country<span style="color: red">*</span></label><br>
                            <select id="inputstate" name="c_id" class="form-control">
                                <option value="">Select Country</option>
                                <?php 
                                if(!empty($country_arr)){
                                    foreach($country_arr as $c){
                                ?>
                                <option value="<?php echo $c->c_id?>"><?php echo $c->country_name?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image_upload">Image Upload<span style="color: red">*</span></label><br>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php')?>