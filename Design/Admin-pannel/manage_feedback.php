

<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Feedback</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if(!empty($data_feedback)){
                                        foreach($data_feedback as $d){
                                            ?>
                                        
                                        <tr>
                                        <td><?php echo $d->contact_id;?></td>
                                        <td><?php echo $d->name;?></td>
                                        <td><?php echo $d->email;?></td>
                                        <td><?php echo $d->message;?></td>


                                        <td><button type="button" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                        <a href="delete?delcontact_id=<?php echo $d->contact_id ?>" class="btn btn-danger">Delete</a>

                                      </td>
                                    </tr>
                                   <?php
                                    }
                                }
                                    else{
                                        ?>
                                       <tr>
                                        <td>DATA NOT FOUND</td>
                                       </tr>
                                   <?php    
                                    }
                                    
                                    ?>    
                                        
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>