<?php
class Point {
    public $x="saroj";
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function show(){
        echo "x is: ",$this->x;
        echo "<br>y is: ",$this->y;
          }
}

// Pass both parameters.
// $p1 = new Point(4, 5);
// Pass only the required parameter. $y will take its default value of 0.
// $p2 = new Point(4);
// With named parameters (as of PHP 8.0):
$p3 = new Point(y: 5, x: "saroj");
$p3->show();
?>
