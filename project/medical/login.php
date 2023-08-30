<?php
if(isset($_SESSION['user'])){
  echo"<script>
  window.location='index';
  </script>";
}

?>
<?php include_once('header.php')?>


  
    
    <script>
        function validate() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Validate if both fields are empty
            if (email === "" || password === "") {
                document.getElementById("errorDiv1").innerText = "email are required.";
                document.getElementById("errorDiv").innerText = "password are required.";
                return false;
            }
            if(!(password.length >=3  && password.length <= 8))
	{ 
            document.getElementById("errorDiv2").innerText ="Please,provide min 3 & max 8 char in pass.";

		//alert('Please,provide min 3 & max 8 char in pass');
		return false;
	}
	

            // Reset error message
            // document.getElementById("errorDiv").innerText = "";

            // // Continue with your login validation
            // if (username === "email" && password === "password") {
            //     alert("Login successful!");
            //     // Here, you can redirect the user or perform other actions.
            // } else {
            //     alert("Invalid email or password. Please try again.");
            // }
        }
        </script>



<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2 align="center">
            Login form
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
       <div class="offset-md-3 col-md-5">
          <div class="form_contaier">
            <form action="" method="post" onsubmit="return validate()">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"  class="form-control" id="email">
                <div id="errorDiv1" style="color: red;"></div>

              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <div id="errorDiv" style="color: red;"></div>

              </div>

              
              
              <button type="submit" name="submit">submit</button>
              <a class="float-right" href="signup">If you allready then click signup</a>
            </form>
          </div>
        </div>
        
      </div>
    </div>
    <!-- <div id="errorDiv" style="color: red;"></div> -->

  </section>
  <?php
 
  ?>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +01 123567894
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  demo@gmail
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="medicine.php"> Medicine </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buy.php"> Online Buy </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-md-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <?php include_once('footer.php')?>