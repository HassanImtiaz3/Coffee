<?php



$fName=$_POST['fName'];
$lName=$_POST['lName'];
$tableNumber=$_POST['tableNumber'];


$quantityCoffee = $_POST['quantity_coffee'];
$quantityTea = $_POST['quantity_tea'];
$quantityOrganic = $_POST['quantity_organic'];
$quantityMocca = $_POST['quantity_mocca'];
$quantityEspresso = $_POST['quantity_espresso'];
$quantityAmericano = $_POST['quantity_americano'];
$Qty = array($quantityCoffee,$quantityTea,$quantityOrganic,
$quantityMocca,$quantityEspresso,
$quantityAmericano);



$coffeePrice = 550;
$teaPrice = 250;
$organicPrice = 450;
$moccaPrice = 850;
$espressoPrice = 1250;
$americanoPrice = 1350;
$Price = array($coffeePrice, $teaPrice, $organicPrice,
$moccaPrice, $espressoPrice, $americanoPrice);


$coffee = "Coffee";
$tea = "Tea";
$organic = "Organic Tea";
$mocca = "Mocca Latte";
$espresso = "Espresso";
$americano = "Americano";
$Item = array($coffee,$tea,$organic,$mocca,$espresso,$americano);



$totalAmount1 = ($quantityCoffee * $coffeePrice);
$totalAmount2 = ($quantityTea * $teaPrice);
$totalAmount3= ($quantityOrganic * $organicPrice);
$totalAmount4 = ($quantityMocca * $moccaPrice);
$totalAmount5 = ($quantityEspresso * $espressoPrice);
$totalAmount6 = ($quantityAmericano * $americanoPrice);
$Total = array($totalAmount1,$totalAmount2,$totalAmount3,
$totalAmount4,$totalAmount5,$totalAmount6);


$sentConnection = new mysqli("localhost", "root", "", "coffee");


$sentData = "INSERT INTO firstname(fName) VALUES ('".$fName."')";
$sentConnection->query($sentData);
$sentData = "INSERT INTO lastname(lName) VALUES ('".$lName."')";
$sentConnection->query($sentData);
$sentData = "INSERT INTO tablenumber(tableNumber) VALUES ('".$tableNumber."')";
$sentConnection->query($sentData);




foreach ($Item as $key) {
	$sentData = "INSERT INTO menuitem(itemName) VALUES ('".$key."')";

    if ($sentConnection->query($sentData) !== true) {
        echo $sentConnection->error;
        break;
    }
}

foreach ($Qty as $key) {
	$sentData = "INSERT INTO itemqty(itemQuantity) VALUES ('".$key."')";

    if ($sentConnection->query($sentData) !== true) {
        echo $sentConnection->error;
        break;
    }
}

foreach ($Price as $key) {
    $sentData = "INSERT INTO itemprice (itemPrice) VALUES ('" . $key . "')";

    if ($sentConnection->query($sentData) !== true) {
        echo $sentConnection->error;
        break;
    }
}

foreach ($Total as $key) {
	$sentData = "INSERT INTO menutotalamount(totalAmount) VALUES ('".$key."')";

    if ($sentConnection->query($sentData) !== true) {
        echo $sentConnection->error;
        break;
    }
}



$sentConnection->close();


header('location:index.php');
