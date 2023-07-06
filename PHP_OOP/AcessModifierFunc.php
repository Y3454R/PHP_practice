<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
 
  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
  
  function acess_set_color($color) {
  	$this->set_color($color);
  }
  
  function acess_set_weight($w) {
  	$this->set_weight($w);
  }
  
  function show() {
  	echo "name: ".$this->name." color: ".$this->color." weight: ".$this->weight."\n";
  }
}

$mango = new Fruit();
$mango->set_name('Mango');
$mango->acess_set_color('Green');
$mango->acess_set_weight('300 gm');

$mango->show();
?>
 
</body>
</html>
