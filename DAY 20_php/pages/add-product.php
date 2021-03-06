<?php include 'pages/header.php'?>

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Add Product Form</div>
                    <div class="card-body">

                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="product_btn" class="btn btn-outline-danger" value="Submit"/>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
