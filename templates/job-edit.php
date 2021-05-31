<?php include_once('inc/header.php'); ?>

<h2 class="page-header">Create Job Listing</h2>

<form method="post" action="edit.php?id=<?= $job->id ?>">
    <!-- <input type="hidden" value="<?= $job->id  ?>" name="job_id"> -->

    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" name="company" id="company" class="form-control" value="<?= $job->company ?>" placeholder="Company">
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" id="category_id">
            <option value="0">Chios Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->id ?>" <?= (($category->id == $job->category_id) ? " selected = 'selected'" : '') ?>><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" name="job_title" id="job_title" class="form-control" value="<?= $job->job_title ?>" placeholder="Job Title">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" value="<?= $job->description ?>" placeholder="Description">
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary" class="form-control" value="<?= $job->salary ?>" placeholder="Salary">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" class="form-control" value="<?= $job->location ?>" placeholder="Location">
    </div>

    <div class="form-group">
        <label for="contact_user">User</label>
        <input type="text" name="contact_user" id="contact_user" class="form-control" value="<?= $job->contact_user ?>" placeholder="User">
    </div>


    <div class="form-group">
        <label for="contact_email">Email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control" value="<?= $job->contact_email ?>" placeholder="Email">
    </div>

    <input type="submit" class="btn btn-default" name="submit" value="Submit">

</form>
<?php include_once('inc/footer.php'); ?>