<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card text-light bg-success">
                    <div class="card-header">
                        <h4>Please input the fields carefully.</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($messege)) { ?>
                            <h2 class="text-center text-success font-weight-bold"><?php echo $messege ?></h2>
                        <?php } ?>

                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Author Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="author_name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-file"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-light btn-block" name="btn" value="Save"/>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
