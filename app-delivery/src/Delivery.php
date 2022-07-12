<?php

abstract class Delivery {

    public $weight;

    abstract public function PriceDelivery($weight);
}

?>