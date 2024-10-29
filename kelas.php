<?php
class hewan {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$kucing = new hewan();
$kucing->set_name("Kucing");

echo $kucing->name;
?>