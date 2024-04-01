<?php
include 'inc/conn.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $q="DELETE FROM category WHERE id = $id";
  $delete=$conn->query($q);
}
if(isset($_POST['supmit'])){
  $categoryname = $_POST['categoryname'];
  $q="INSERT INTO category(categoryname, date) VALUE('$categoryname', now())";
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
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <form action="category.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="categoryname">Add Category</label>
                    <input type="text"name="categoryname" class="form-control" id="categoryname" placeholder="Add Category">
                  </div>
                </div>
                <div class="card-footer">
                  <button name="supmit" type="submit" class="btn btn-primary form-control">+ Submit</button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Show Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Show Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content container-fluid">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
 <div class="card">
  <div class="card-header">
  <h3 class="card-title">Show Category</h3>
 </div>
 <div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
      
    <thead>
    <tr>
    <th>ID</th>
    <th>Category Name</th>
     <th>Date</th>
    <th>Actions</th>               
  </tr>
    </thead>
    <tbody>
      <?php
        $q="SELECT * FROM category";
        $reselt=$conn->query($q);
        foreach($reselt as $r){?>
        <tr>
        <td><?= $r['id'] ?></td>
                 <td><?= $r['categoryname'] ?></td>
                 <td><?= $r['date'] ?></td>
                 <td>
                      <a href="category.php?id=<?= $r['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
      </tr>    
    <?php } ?>
       </tbody>
        <tfoot>
       <tr>
       <th>ID</th>
                   <th>Category Name</th>
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
    <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
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
