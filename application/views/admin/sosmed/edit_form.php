<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partial/admin/header.php") ?>
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">


	<div class="content-wrapper">


		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Sosmed</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/sosmed/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $sosmed->id_sosmed ?>" />
				
                <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" value="<?php echo $sosmed->class ?>" class="form-control <?php echo form_error('class') ? 'is-invalid':'' ?>" id="class" placeholder="Class" name="class">
                    <div class="invalid-feedback">
                        <?php echo form_error('class') ?>
                    </div>
                </div>

				<div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" value="<?php echo $sosmed->link ?>" class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>" id="link" placeholder="Link" name="link">
                    <div class="invalid-feedback">
                        <?php echo form_error('link') ?>
                    </div>
                </div>

                
				
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("_partial/admin/footer.php") ?>

</div>
<!-- /#wrapper -->

    
</body>
</html>