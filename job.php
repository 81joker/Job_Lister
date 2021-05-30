<?php include_once('config/init.php'); ?>
<?php
$job = new Job();
$template = new Template('templates/job-single.php');
$id_job = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($id_job);
echo $template;



?>
