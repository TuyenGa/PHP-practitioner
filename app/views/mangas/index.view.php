<?php require 'app/views/partials/head.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mangas</h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mangas Table</h3>

                <div class="card-tools">
                  <form action="/mangas/store">
                    <button type="submit" class="btn btn-block btn-primary">Add New</button>
                  </form>
                </div>
              </div>
              <div class="card-body">
              <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Chapter</th>
                      <th>Preview</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($mangas as $manga): ?>
                    <tr>
                      <td><?= $manga->id; ?></td>
                      <td><?= $manga->tenTruyen; ?></td>
                      <td><?= $manga->tenChap; ?></td>
                      <td><img style="width: 100px; height: 150px;" src="<?= $manga->linkAnh; ?>" /></td>
                      <td><a href="/mangas/show?id=<?php echo $manga->id ?>" class="btn btn-block btn-primary">Edit</a></td>
                      <td><button onclick="mangasDelete(<?php echo $manga->id; ?>)" class="btn btn-block btn-primary">Delete</button></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              </div>
            <!-- /.card -->

          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
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
<?php require 'app/views/partials/footer.php'; ?>
