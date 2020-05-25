
<?php require 'app/views/partials/head.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Images</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create new Img </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" id="quickForm" action="/images/create">
                <div class="card-body">
                <div class="form-group" style="display: none;">
                    <input type="text" name="chapter_id" value="<?php echo $chapter_id; ?>" require>
                </div>
                  <div class="form-group">
                   <label for="linkImg">Link Img</label>
                    <input type="text" name="linkImg" class="form-control" id="linkImg" placeholder="Enter Link Img" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Create New" />
                </div>
              </form>
            </div>
             <!-- /.card -->

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</script>
<?php require 'app/views/partials/footer.php'; ?>
