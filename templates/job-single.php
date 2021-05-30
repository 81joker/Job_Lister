<?php include_once('inc/header.php'); ?>
<h2 class="page-header"><?php echo $job->job_title; ?>(<?php echo $job->location; ?>)</h2>
<small>Posted By <?= $job->contact_user  ?> On <?= $job->post_date; ?></small>
<hr>
<p class="lead"><?= $job->description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Compony: </strong><?= $job->coompany; ?></li>
    <li class="list-group-item"><strong>Salary: </strong><?= $job->salary; ?></li>
    <li class="list-group-item"><strong>Contact Email: </strong><?= $job->contact_email; ?></li>
    <br><br>
    <a href="index.php" class="">Go Back</a>
    <br><br>


</ul>
<?php include_once('inc/footer.php') ?>