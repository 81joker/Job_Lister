<?php include_once('config/init.php'); ?>
<?php
$job = new Job();

$job_id  = isset($_GET['id']) ? $_GET['id']  : NULL;


if (isset($_POST['submit'])) {

    $data = array();
    $data['company']       = $_POST['company'];
    $data['category_id']   = $_POST['category_id'];
    $data['job_title']     = $_POST['job_title'];
    $data['description']   = $_POST['description'];
    $data['salary']        = $_POST['salary'];
    $data['location']      = $_POST['location'];
    $data['contact_user']  = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];
    // $job_id = $_POST['job_id'];


    if ($job->update($job_id, $data)) {
        redirect('index.php', 'Your job has been Updated ', 'success');
    } else {
        redirect('index.php', 'Something went worng ', 'error');
    }
}
$template = new Template('templates/job-edit.php');
$template->job = $job->getJob($job_id);
$template->categories = $job->category();

echo $template;



?>
