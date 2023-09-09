<?php include_once('header.php')?>
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          My Account
        </h2>
      </div>

      <div class="img-box">
        <img src="../upload/customer/<?php echo $fetch->file;?>"height="250px" weight="250px" alt="">
      </div>
      <div class="detail-box">
        <p><b>ID :</b><?php echo $fetch->uid;?></p>
        <p><b>name :</b><?php echo $fetch->name;?></p>
        <p><b>email :</b><?php echo $fetch->email;?></p>
        <p><b>gender :</b><?php echo $fetch->gender;?></p>
        <p><b>language:</b><?php echo $fetch->language;?></p>


          
        
        <div class="d-flex justify-content-center">
          <a href="edituser?edituid=<?php echo $fetch->uid;?>">
           Edit profile
          </a>
        </div>
      </div>
    </div>
  </section>



  
<?php include_once('footer.php') ?>

  <!-- end info section -->

  