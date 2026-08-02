<?php


$studentName = "Rahim Ahmed";
$studentID = "23-12345-1";
$choice = 1;
$quantity = 6;


switch($choice)
{
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid";
        $price = 0;
}


$subtotal = $price * $quantity;


if($subtotal >= 30)
{
    $discountPercent = 20;
}
else if($subtotal >= 20)
{
    $discountPercent = 10;
}
else
{
    $discountPercent = 0;
}

$discountAmount = ($subtotal * $discountPercent) / 100;
$finalBill = $subtotal - $discountAmount;


echo "<h2>UNIVERSITY CAFETERIA</h2>";
echo "================================<br>";

echo "Student Name : " . $studentName . "<br>";
echo "Student ID : " . $studentID . "<br>";
echo "Food Item : " . $foodItem . "<br>";
echo "Price : $" . $price . "<br>";
echo "Quantity : " . $quantity . "<br><br>";

echo "<b>Ordered Items:</b><br>";

for($i = 1; $i <= $quantity; $i++)
{
    echo "Item " . $i . " : " . $foodItem . "<br>";
}

echo "<br>";
echo "Subtotal : $" . $subtotal . "<br>";
echo "Discount : " . $discountPercent . "%<br>";
echo "Discount Amount : $" . $discountAmount . "<br>";
echo "Final Bill : $" . $finalBill . "<br><br>";

echo "Thank you for visiting!<br>";
echo "================================";

?>
