

<?php include_once('header.php')?>
   
<script>
	$(document).ready(function() 
	{
		$('#table').DataTable();
	} );
</script>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Customer</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Language</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($data_customer)){
                                            foreach($data_customer as $d){
                                            ?>
                                            <td><?php echo $d->uid;?></td>
                                            <td><?php echo $d->name;?></td>
                                            <td><?php echo $d->gender;?></td>
                                            <td><?php echo $d->language;?></td>
                                            <td><?php echo $d->email;?></td>

                                            <td>
                                            <a href="status?statusuid=<?php echo $d->uid;?>" class="btn btn-primary"><?php echo $d->Status;?></a>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <a href="delete?delcustomers_id=<?php echo $d->uid;?>" class="btn btn-danger">Delete</a>

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
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>