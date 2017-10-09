<?php

require 'inc/head.php';

if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['number46'])) {
    setcookie('number46',$_POST['number46'], (time()+3600));
}

if (isset($_POST['number40'])) {
    setcookie('number46');
    unset($_COOKIE["number46"]);
}

if (isset($_POST['number36'])) {
    setcookie('number36',$_POST['number36'], (time()+3600));
}

if (isset($_POST['number30'])) {
    setcookie('number36');
    unset($_COOKIE["number36"]);
}

if (isset($_POST['number58'])) {
    setcookie('number58',$_POST['number58'], (time()+3600));
}

if (isset($_POST['number25'])) {
    setcookie('number58');
    unset($_COOKIE["number58"]);
}

if (isset($_POST['number32'])) {
    setcookie('number32',$_POST['number32'], (time()+3600));
}

if (isset($_POST['number20'])) {
    setcookie('number32');
    unset($_COOKIE["number32"]);
}

?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <form method="post" action="">
              <input type="hidden" value="Cookie_Pecan" name="number46">
              <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
          </form>
            <form method="post" action="">
                <input type="hidden" value="" name="number40">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form method="post" action="">
                <input type="hidden" value="Cookie_Chips" name="number36">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
            </form>
            <form method="post" action="">
                <input type="hidden" value="" name="number30">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form method="post" action="">
                <input type="hidden" value="Cookie_Chocolate" name="number58">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
            </form>
            <form method="post" action="">
                <input type="hidden" value="" name="number25">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form method="post" action="">
                <input type="hidden" value="Cookie_M&Ms" name="number32">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add to cart</button>
            </form>
            <form method="post" action="">
                <input type="hidden" value="" name="number20">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Retire to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
