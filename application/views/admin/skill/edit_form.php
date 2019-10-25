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
                <h3 class="card-title">Edit Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/skill/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $skill->id_skill ?>" />
				
                <div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/images/skill/'. $skill->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $skill->foto ?>" />
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="keahlian">Keahlian</label>
                    <input type="text" value="<?php echo $skill->keahlian ?>" class="form-control <?php echo form_error('keahlian') ? 'is-invalid':'' ?>" id="keahlian" placeholder="Keahlian" name="keahlian">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_skill') ?>
                    </div>
                </div>
				  
				<div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" value="<?php echo $skill->keterangan ?>" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" id="keterangan" placeholder="Keterangan" name="keterangan">
                    <div class="invalid-feedback">
                        <?php echo form_error('persentase') ?>
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