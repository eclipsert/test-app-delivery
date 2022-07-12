<?php

class DeliveryRuspost extends Delivery {

  public function PriceDelivery($weight) {
    if($weight < 10){
        return 100;
    }
    return 1000;
  }
}

?>