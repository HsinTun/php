
<?php require __DIR__.'/parts/html-header.php'; ?>
<?php require __DIR__.'/parts/navber.php'; ?>

<div class="container">
    <div class="row">
        <pre>
            <?php print_r($_POST)  ?>
        </pre>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                    value=""
                    >

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>







<?php require __DIR__.'/parts/script.php'; ?>
<?php require __DIR__.'/parts/html-footer.php'; ?>
