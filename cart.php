<?php require 'inc/head.php';

if (isset($_POST['number40'])) {
    setcookie('number46');
    unset($_COOKIE["number46"]);
}

if (isset($_POST['number30'])) {
    setcookie('number36');
    unset($_COOKIE["number36"]);
}

if (isset($_POST['number25'])) {
    setcookie('number58');
    unset($_COOKIE["number58"]);
}

if (isset($_POST['number20'])) {
    setcookie('number32');
    unset($_COOKIE["number32"]);
}

?>
<section class="cookies container-fluid">
    <div class="row">

      <?php if (isset($_COOKIE['number46'])) { ?>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $_COOKIE['number46'] ?></h3>
                    <p>Cooked by Penny !</p>
                    <form method="post" action="">
                        <input type="hidden" value="" name="number40">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
                    </form>
                </figcaption>
            </figure>
        </div>

    <?php }?>

        <?php if (isset($_COOKIE['number36'])) { ?>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $_COOKIE['number36'] ?></h3>
                    <p>Cooked by Bernadette !</p>
                    <form method="post" action="">
                        <input type="hidden" value="" name="number30">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
                    </form>
                </figcaption>
            </figure>
        </div>

        <?php } ?>

      <?php if (isset($_COOKIE['number58'])) { ?>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $_COOKIE['number58'] ?></h3>
                    <p>Cooked by Bernadette !</p>
                    <form method="post" action="">
                        <input type="hidden" value="" name="number25">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
                    </form>
                </figcaption>
            </figure>
        </div>

        <?php } ?>

      <?php if (isset($_COOKIE['number32'])) { ?>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $_COOKIE['number32'] ?></h3>
                    <p>Cooked by Penny !</p>
                    <form method="post" action="">
                        <input type="hidden" value="" name="number20">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
                    </form>
                </figcaption>
            </figure>
        </div>

        <?php } ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
