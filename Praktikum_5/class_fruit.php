
<?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name= $name;
            $this->color = $color;

        }
        public function intro(){
            echo "the fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    class Strawberry extends Fruit{
        public function massage(){
            echo "am i a fruit or a berry?";
        }
    }

$Strawberry = new Strawberry ("Strawberry", "red");
$Strawberry -> massage();
$Strawberry->intro();
?>

