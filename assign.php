<?php
session_start();
include 'db.php';

if(isset($_POST['action']) == 'yes'){

	   $run = $db->query("SELECT * FROM `project` WHERE allocation = 0 order by rand()");
	   $result = $run->fetchAll(PDO::FETCH_OBJ);

	   if($result){
	   	 echo json_encode($result);
	   	}else{
	   	  $message = array('project_name' => 'No project available to allocate, Please create project first.','project_case' => 'No project available to alloacate');
	   	  echo json_encode(array($message));
	   	}


}