<?php include 'filesLogic.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>


<table class="table table-hover">
 
  <thead class="thead-dark">
                   <tr>
                       <th>Number</th>
                       <th>Title</th>
                       <th hidden="">Image</th>
                       <th>Action</th>
                       
                   </tr>
                   
</thead>
<tbody>
  <?php 
 
  foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['title']; ?></td>
      <td hidden=""><?php echo $file['image']; ?></td>
      
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>


</table>

</tbody>
</html>