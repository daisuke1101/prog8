<?php
// クラスの定義部分をここに移してください

class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}
// ここまでクラスの定義部分

?>