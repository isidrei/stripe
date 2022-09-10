<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIK8GBGzw7rM6wB6iSDHIckquDuEDLt9vs8rUFfIqYJt8Bt1jETGzBm6BeaxY4oVzcynoe5C2ufz1hkuZw9QM9006PEfCiGf'
  );
  $result = $stripe->products->delete(
    'prod_MP7sAL7dKoN5yK',
    []

  );
  var_dump($result);


?>