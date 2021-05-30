<?php include_once('inc/header.php'); ?>

<h2 class="page-header">Create Job Listing</h2>

<form method="post" action="create.php">

    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" name="company" id="company" class="form-control" placeholder="Company">
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" id="category_id">
            <option value="0">Chios Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->id; ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="job_title">Job Title</label>
        <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Job Title">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Description">
    </div>

    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary" class="form-control" placeholder="Salary">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" class="form-control" placeholder="Location">
    </div>

    <div class="form-group">
        <label for="contact_user">User</label>
        <input type="text" name="contact_user" id="contact_user" class="form-control" placeholder="User">
    </div>


    <div class="form-group">
        <label for="contact_email">Email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control" placeholder="Email">
    </div>

    <input type="submit" class="btn btn-default" name="submit" value="Submit">

</form>
<?php include_once('inc/footer.php'); ?>