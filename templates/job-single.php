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
    <div class="well">

        <a href="edit.php?id= <?= $job->id ?>" class=" btn btn-default">Edit</a>

        <form action="job.php" method="post" class="" style="display:inline">
            <input type="hidden" name="del_id" value="<?= $job->id ?>">

            <input type="submit" value="Delete" class="btn btn-danger">

        </form>


    </div>


</ul>
<?php include_once('inc/footer.php') ?>