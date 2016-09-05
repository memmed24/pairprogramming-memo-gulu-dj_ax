<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

class Calc {

    public $date1;
    public $date2;

    public function hesabla($date1,$date2){
        $this->date1 = date_create($date1);
        $this->date2 = date_create($date2);

        // var_dump($this->date1);
        // var_dump($this->date2);

        $diff = date_diff($this->date1,$this->date2);
        echo $diff->format("%R%a days");

    }
}

$new = new Calc;

$new->hesabla("2014-04-15","2016-09-10"); ?>