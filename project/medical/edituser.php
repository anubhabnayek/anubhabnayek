<?php include_once('header.php')?>
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2 style="color:blue; align-item:center;">
            Edit user 
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <div class="form_contaier">

            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $fetch->name;?>" class="form-control" required>
              </div>
              <div class="form-group">
              <label for="Gender">Gender</label><br>
              Male:<input type="radio" name="gender" value="male" <?php if($fetch->gender=="male"){echo"checked";}?>>
              female:<input type="radio" name="gender" value="female"<?php if($fetch->gender=="female"){echo"checked";}?>>
              Others:<input type="radio" name="gender" value="others"<?php if($fetch->gender=="others"){echo"checked";}?>>
              </div>
              <?php
              $lag=$fetch->language;
              $lag_arr=explode(",",$lag);
              ?>
              <div class="form-group">
                <label for="Language">Language</label><br>
                Bengali:<input type="checkbox" name="language[]" value="Bengali"<?php if(in_array("Bengali",$lag_arr)){echo"checked";}?>>
                English:<input type="checkbox" name="language[]" value="English">
                Hindi:<input type="checkbox" name="language[]" value="Hindi">
               </div>
                <div class="form-group">
                <label for="inputstate">Country</label><br>
                <select id="inputstate" name="c_id" class="form-control">
                  <option value="">Select Country</option>
                <?php 
                if(!empty($country_arr)){
                  foreach($country_arr as $c){
                    if($c->c_id==$fetch->c_id){
                    ?>
                <option value="<?php echo $c->c_id?>"><?php echo $c->country_name?></option>
                <?php
                  }
                  else{
                    ?>
                    <option value="<?php echo $c->c_id?>"><?php echo $c->country_name?></option>
                    <?php
                  }
                }
            }
                ?>


                </select>
                </div>
               
               <div class="form-group">
                <label for="image_upload">image upload</label></br>
                <input type="file" name="file" class="form-control">
                <img src="../upload/customer/<?php echo $fetch->file;?>"height="250px" weight="250px" alt="">

               </div>
               <button type="submit" name="save" class="">Save</button>
            </form>
          </div>
        </div>
       </div>
      
     </div>
  </section>

  

  <?php include_once('footer.php')?>