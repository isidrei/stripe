<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIK8GBGzw7rM6wB6iSDHIckquDuEDLt9vs8rUFfIqYJt8Bt1jETGzBm6BeaxY4oVzcynoe5C2ufz1hkuZw9QM9006PEfCiGf'
);
$product = $stripe->products->retrieve(
	'prod_MP6zYV7ofzrlQc',
	[]
);
$price = $stripe->prices->retrieve('price_1LgIlsGBGzw7rM6wKQ4olMo9',[]);
#echo '<pre>';
#var_dump($product);
#var_dump($price);
#echo '</pre>';
?><!DOCTYPE html>
<html>
  <head>
    <center>
    <title>Buy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body style="background-color:#FEF5E7">
  <header style="font-size:40px"><center> <b>The Third World </center> </b> </header> <br> <br> <br>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images);?>" alt="<?php echo $product->name; ?>"  width="300" height="300"/>
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      Quantity <input type="number" name="quantity" min="0" max="10"> 
     <center> <form action="my-product.php" method="POST"> 
       <BR> <button type="submit" id="checkout-button">Checkout</button> </center>
      </form>
    </section>
  </body>
</center>
</html>