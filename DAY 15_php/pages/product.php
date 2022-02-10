<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product['Name']; ?></h3>
                            <h4 class="card-title"><?php echo $product['Price']; ?></h4>
                            <h5 class="card-title"><?php echo $product['Brand']; ?></h5>
                            <h5>Desciption: <?php echo $product['Description']; ?></h5>
                            <hr/>
                            <a href="action.php?pages=details" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
