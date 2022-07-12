<?php

require __DIR__ . '/vendor/autoload.php';

if (isset($_POST['delivery'])) {
    if ($_POST['delivery'] == 1) {
        $price = new DeliveryRuspost();
    }
    if ($_POST['delivery'] == 2) {
        $price = new DeliveryDhl();
    }
    
    echo 'Цена доставки ' . $price->PriceDelivery($_POST['weight']) . ' руб.';
}
?>

<form action="index.php" method="post">
    <input type="text" name="weight" required>
    <select name="delivery">
        <option value="1">Почта России</option>
        <option value="2">DHL</option>
    </select>
    <button type="submit">Расчитать</button>
</form>