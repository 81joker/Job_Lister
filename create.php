<?php include_once('config/init.php'); ?>
<?php
$job = new Job();
if ($_POST['submit']) {
    $data = array();
    $data['company']       = $_POST['company'];
    $data['category_id']   = $_POST['category_id'];
    $data['job_title']     = $_POST['job_title'];
    $data['description']   = $_POST['description'];
    $data['salary']        = $_POST['salary'];
    $data['location']      = $_POST['location'];
    $data['contact_user']  = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];
}

echo "git hup";

$template = new Template('templates/job-create.php');
$template->categories = $job->category();
echo $template;



?>
