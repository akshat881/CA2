<?php
class marks {
  
  public $m1;
  public $m2;
  public $r;

  
  function set_name($ca1,$ca2) {
    $this->m1 = $ca1;
    $this->m2 = $ca2;
    $this->r=$this->m1+$this->m2;
 return $this->r;
  }

}
class result extends marks{
public $t;
  function final() {
   $this->t=($this->r/60)*25;
    return $this->t;
  }
}
$a=$_POST['ca1'];
$b=$_POST['ca2'];
$ob=new result();
$ob->set_name($a,$b);
echo "out of 25 you got ".$ob->final();


?>