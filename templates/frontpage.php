<?php include_once('inc/header.php'); ?>


<div class="jumbotron">
    <h1>Jumbotron heading</h1>
    <!-- <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
    <form method="get" action="index.php">
        <select name="category" class="form-control">
            <option value="0">Chios Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->id; ?>"><?= $category->name ?></option>
            <?php endforeach; ?>

        </select>
        <br>
        <input type="submit" class="btn btn-lg btn-success" value="Find">
    </form>
</div>

<h4><?= $title; ?></h4>
<?php foreach ($jobs as $job) :   ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?= $job->job_title ?></h4>
            <p><?= $job->description ?></p>
        </div>
        <div class="btn btn-2"><a href="job.php?id=<?= $job->id; ?>" class="btn btn-default">View</a></div>
    </div>
<?php endforeach; ?>


<?php include_once('inc/footer.php') ?>