<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM project WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $r){
      $project_name = $r->project_name;
      $project_case = $r->project_case;
      $project_level = $r->project_level;
    }
}else{
	header('location: create-project.php');
}
?>

<body style="width:100vw; margin:auto;  background-color: lightblue;">
<?php include 'dashboard_navbar.php'; ?>
<h3 style="text-align: center; font-weight: bold">Edit Employee' Project</h3>
<?php include 'edit-form.php'; ?>
<?php include 'footer.php'; ?>
