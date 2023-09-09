<?php
/*class fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
       return $this->name;
    }
     function set_color($color){
        $this->color=$color;
    }
    function get_color(){
       return $this->color;
    }

}
$obj = new Fruit();
$obj->set_name('Apple');
$obj->set_color('Red');
echo "Name: " . $obj->get_name();
echo "<br>";
echo "Color: " .  $obj->get_color();

*/



?>
<?php 
class abc{
    public $a=10;
    public $b=20;

 function sum(){
    $c=10;
    echo $this->a+$this->b+$c;
    echo"<br>";
 }
 function multi(){
    $this->sum();
    echo $this->a*$this->b;
    echo"<br>";
 }
}
$obj= new abc;
$obj->multi();
echo $obj->a;

?>


