

<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIK8GBGzw7rM6wB6iSDHIckquDuEDLt9vs8rUFfIqYJt8Bt1jETGzBm6BeaxY4oVzcynoe5C2ufz1hkuZw9QM9006PEfCiGf');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LgIlsGBGzw7rM6wKQ4olMo9',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>