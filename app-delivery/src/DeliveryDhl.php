<?php

class DeliveryDhl extends Delivery {

  public function PriceDelivery($weight) {
    return $weight*100;
  }
}