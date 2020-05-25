<?php require 'app/views/partials/head.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="/mangas"><i class="fa fa-arrow-left">Back</i></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anh</li>
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
                 <h3 class="card-title"><?php  echo $chapter['tenchap']; ?></h3>
                <div class="card-tools">
                    <a href="/images/store?chapter_id=<?php echo $chapter['id'];?>"><button class="btn btn-block btn-primary">Add New Images</button></a>
                </div>
              </div>
              <div class="card-body">
              <?php if (count($anh) < 1): ?>
                <h3>Images is empty</h3>
              <?php else: ?>
              <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Link</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($anh as $img): ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $img->imgAnh; ?></td>
                      <td><?= $img->ngaynhap; ?></td>
                      <td><a href="/images/show?id=<?php echo $img->id ?>" class="btn btn-block btn-primary">Edit</a></td>
                      <td><button onclick="imagesDelete(<?php echo $img->id?>)" class="btn btn-block btn-primary">Delete</button></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table> 
                <?php endif ?>
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
