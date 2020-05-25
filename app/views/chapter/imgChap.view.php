<?php require 'app/views/partials/head.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="/mangas"><i class="fa fa-arrow-left"></i> Back</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chapter</li>
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
                 <h3 class="card-title"><?php  echo $truyen['tenTruyen']; ?></h3>
                <div class="card-tools">
                    <a href="/chapter/store?truyen_id=<?php echo $truyen['id'];?>"><button class="btn btn-block btn-primary">Add New Chapter</button></a>
                </div>
              </div>
              <div class="card-body">
              <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Chap</th>
                      <th>Update at</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($chapters as $chapter): ?>
                    <tr>
                      <td><?= $chapter->id; ?></td>
                      <td><?= $chapter->tenchap; ?></td>
                      <td><?= $chapter->ngaynhap; ?></td>
                      <td><a href="/chapter/show?id=<?php echo $chapter->id ?>" class="btn btn-block btn-primary">Edit</a></td>
                      <td><a href="/chapter/update/img?chapter_id=<?php echo $chapter->id ?>" class="btn btn-block btn-primary">Update Anh</a></td>
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
