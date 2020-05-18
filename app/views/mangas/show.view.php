<?php require 'app/views/partials/head.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mangas</li>
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
                <h3 class="card-title">Edit new Mangas </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form" id="quickForm" action="/mangas/update?id=<?php echo $manga['id'] ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="naeme">Name</label>
                    <input type="txt" name="name" class="form-control" id="name" placeholder="Enter Mangas Name" value="<?php echo $manga['tenTruyen']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="chapter">Chapter</label>
                    <input type="text" name="chapter" class="form-control" id="chapter" placeholder="Enter Chapter" value="<?php echo $manga['tenChap']; ?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="linkImage">Link Images</label>
                    <input type="text" name="linkImage" class="form-control" id="linkImage" placeholder="Enter Link image" value="<?php echo $manga['linkAnh']; ?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="preview">Link Images</label></br>
                    <img style="width: 100px; height: 150px;" id="prevew" src="<?php echo $manga['linkAnh']; ?>" />
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Update Manga" />
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
