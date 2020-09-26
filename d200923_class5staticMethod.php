<a href="./"><h2>GO back to LPU FOLDER</h1></a>

	<h2>PHP OOP - Static Methods</h2>
<p>Static methods can be called directly - without creating an instance of a class. <br>
Static methods are declared with the static keyword</p>


	<?php
class sayhi {
  public static function welcome() {
    echo "<h3>Hello World!</h3>";
  }
}

// Call static method - no need to make object of class
sayhi::welcome(); 
?>

<p>A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)</p>


<?php
class greeting {
  public static function welcome() {
    echo "<h4>Hello World!</h4>";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>

<p>Static methods can also be called from methods in other classes. To do this, the static method should be public:</p>

<?
class SomeOtherClass {
  public function message() {
    greeting::welcome(); //call function from greeting class
  }
}

$obj3 = new SomeOtherClass();
$obj3 -> message();

?>

<p>To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.</p>

<?php
class domain {
  protected static function getWebsiteName() {
    return "<h3>http://banuka.epizy.com/Hangman_v3/</h3>";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>

<h2>PHP - Static Properties</h2>

<p>Static properties can be called directly - without creating an instance of a class. <br>
Static properties are declared with the static keyword: <br>
To access a static property use the class name, double colon (::), and the property name
</p>

<?php
class pi1 {
  public static $value = 3.14159;
}

// Get static property. no need to create object of class
echo pi1::$value;
?>

<p>A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the <b>self</b> keyword and double colon (::)</p>

<?php
class pi2 {
  public static $value=3.1415;
  public function f1_callstatic() {
    return self::$value;
  }
  // public function f2_callstatic(){
  //   return $this->value;  //cannot do this. //EROR: Accessing static property pi2::$value as non static
  // }
}

$piobj = new pi2();
echo $piobj->f1_callstatic();

// echo $piobj->f2_callstatic();
?>

<p>To call a static property from a child class, use the <b>parent</b> keyword inside the child class: </p>

<?php
class pi_parent {
  public static $value=3.14159;
}

class x extends pi_parent {
  public function xStatic() {
    return parent::$value;
    # return $this->value; ##cannot do this. ERROR:  Accessing static property x::$value as non static in
  }
}

// Get value of static property directly via child class
echo x::$value;
echo "<br>";
// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>