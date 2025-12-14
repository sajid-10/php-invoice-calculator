<?php
function calculateInvoiceTotal(array $products, float $taxrate = 0, float $couponAmount = 0): float
{
    //implement
    return 0;
}

$products = [
    ['unitPrice' => 200, 'quantity' => 2],
    ['unitPrice' => 150, 'quantity' => 3],

];

$taxrate = 15;
$couponAmount = 50;
echo "Total Invoice Amount: " . calculateInvoiceTotal($products, $taxrate, $couponAmount);
?>