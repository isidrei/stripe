<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient("sk_test_51LgIK8GBGzw7rM6wB6iSDHIckquDuEDLt9vs8rUFfIqYJt8Bt1jETGzBm6BeaxY4oVzcynoe5C2ufz1hkuZw9QM9006PEfCiGf");

$product = $stripe->products->create([
  'name' => 'Starter Subscription',
  'description' => '$50/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
  'unit_amount' => 1200,
  'currency' => 'usd',
  'recurring' => ['interval' => 'month'],
  'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>