<?php
// Cria um objeto de preferĂȘncia
$preference = new MercadoPago\Preference();

// Cria um item na preferĂȘncia
$item = new MercadoPago\Item();
$item->title = 'Meu produto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>