<?php
include 'inc/conn.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $q="DELETE FROM post WHERE id = $id";
  $delete=$conn->query($q);
}
if(isset($_POST['supmit'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  $newDescription = mysqli_real_escape_string($conn,$description);
  $type = $_POST['type'];
  $imagename = $_FILES['image']['name'];
  $imageloc = $_FILES['image']['tmp_name'];
  $r=rand();
  $newloc="images/$r$imagename";
  move_uploaded_file($imageloc , $newloc);
  
$category = $_POST['category'];
  $author = $_POST['author'];
$q="INSERT INTO post(title,description,type,category,author,image, date) VALUE('$title','$newDescription','$type','$category','$author','$newloc', now())";
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
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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
                <h3 class="card-title">Add Post</h3>
              </div>    
              <form action="post.php" method="post" enctype="multipart/form-data">
                <div class="card-body">	
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"name="title" class="form-control" id="title" placeholder="Title">
                  </div>
                  
                  <div class="form-group">
                    <label for="summernote">Description</label>
                    <textarea name="description" class="form-control" id="summernote" placeholder="description"></textarea>
                  </div>
                  <div class="form-group" >
                  <label for="image">Type</label>
                <select name="type"  class="form-control">
                  <option class="form-control" value="image">Image</option>
                  <option class="form-control" value="Video">Video</option>
                </select>  
                </div>
                  <div class="form-group" >
                    <label for="image">file</label>
                    <input type="file"name="image" class="form-control" placeholder="file">
                  </div>
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category">
                    <?php
      $q="SELECT * FROM category";
      $reselt=$conn->query($q);
      foreach($reselt as $r){?>
                    <option><?= $r['categoryname']?></option>
                  <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="author">Author</label>
                  <select class="form-control" name="author">
                  <?php
      $q="SELECT * FROM author";
      $reselt=$conn->query($q);
      foreach($reselt as $r){?>
                    <option><?= $r['authorname']?></option>
                  <?php }?>
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
  <h3 class="card-title">Show Post</h3>
 </div>
 <div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
   <th>ID</th>
   <th>Title</th>
   <th>Description</th>
   <th>Type</th>
   <th>File</th>
   <th>Category</th>
   <th>Author</th>
   <th>Date</th>
   <th>Actions</th>
   </tr>
    </thead>
    <tbody>
      <?php
      $q="SELECT * FROM post";
      $reselt=$conn->query($q);
      foreach($reselt as $r){?>
        <tr>
       <td><?= $r['id'] ?></td>
      <td><?= $r['title'] ?></td>
      <td><?= $r['description'] ?></td>
      <td><?= $r['type'] ?></td>
      <td> <?= $r['type'] ?> </td>
      <td><?= $r['category'] ?></td>
      <td><?= $r['author'] ?></td>
       <td><?= $r['date'] ?></td>
       <td>
        <a href="post.php?id=<?= $r['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </td>
    </tr>    
    <?php } ?>
       </tbody>
        <tfoot>
       <tr>
       <th>ID</th>
   <th>Title</th>
   <th>Description</th>
   <th>Type</th>
   <th>File</th>
   <th>Category</th>
   <th>Author</th>
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

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
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
<script>
  $(function () {
    $('#summernote').summernote()

  });
</script>
</body>
</html>
