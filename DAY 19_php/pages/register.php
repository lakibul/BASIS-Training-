<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-light bg-info"><h4>Registration Form</h4></div>
                    <div class="card-body">
                        <h4 class="text-success"><?php echo isset($result) ? $result: ' '; ?></h4>
                        <form action="action.php" method="post">

                            <div class="form-group row">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="name"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="mobile"/>
                                </div>
                            </div>



<!--                            <div class="form-group row">-->
<!--                                <label class="col-md-3">Subject</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Bangla"/> Bangla </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="English"/> English </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Math"/> Math </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Physics"/> Physics </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Chemistry"/> Chemistry </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Biology"/> Biology </label>-->
<!--                                </div>-->
<!--                            </div>-->


                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-dark" name="register_btn" value="Submit"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>
