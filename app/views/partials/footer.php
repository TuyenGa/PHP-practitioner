  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/pages/dashboard3.js"></script>
<script>
  function mangasDelete(id){
    let c = confirm("Are you sure Delete this Mangas? id = " + id)
    if (c) {
      window.location.href = "/mangas/delete?id=" + id;
    }
  };
  function imagesDelete(id){
    let c = confirm("Are you sure Delete this Images? id = " + id)
    if (c) {
      window.location.href = "/images/delete?id=" + id;
    }
  };
</script>
</body>
</html>