<?php
include 'inc/conn.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $q="DELETE FROM author WHERE id = $id";
  $delete=$conn->query($q);
}
if(isset($_POST['supmit'])){
  $authorname = $_POST['authorname'];
  $position = $_POST['position'];
$q="INSERT INTO author(authorname,position, date) VALUE('$authorname','$position', now())";
$insert=$conn->query($q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
include 'inc/nav.php';
?>
<div class="content-wrapper">
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Author</h3>
              </div>    
              <form action="author.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="authorname">Add Author</label>
                    <input type="text"name="authorname" class="form-control" id="authorname" placeholder="Add Author">
                  </div>
                  <div class="form-group">
                    <label for="position">Position</label>
                  <select class="form-control" name="position">
                    <option>Maneger</option>
                    <option>Writer</option>
                  </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="supmit" type="submit" class="btn btn-primary form-control">+ Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 </section> 
 <section class="content container-fluid">

<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
 <div class="card">
  <div class="card-header">
  <h3 class="card-title">Show Author</h3>
 </div>
 <div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
      
    <thead>
    <tr>
   <th>ID</th>
   <th>Author Name</th>
   <th>Author Position</th>
   <th>Date</th>
   <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $q="SELECT * FROM author";
      $reselt=$conn->query($q);
      foreach($reselt as $r){?>
        <tr>
       <td><?= $r['id'] ?></td>
      <td><?= $r['authorname'] ?></td>
      <td><?= $r['position'] ?></td>
       <td><?= $r['date'] ?></td>
       <td>
        <a href="author.php?id=<?= $r['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </td>
    </tr>    
    <?php } ?>
       </tbody>
        <tfoot>
       <tr>
       <th>ID</th>
       <th>Author Name</th>
       <th>Author Position</th>
      <th>Date</th>
      <th>Actions</th>
      </tr>
       </tfoot>
  </table>
    </div>
</div>
</div>
</div>
</div>  
</section> 
</div><!-- /.container-fluid -->
    <footer class="main-footer">
     <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
     </div>
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
