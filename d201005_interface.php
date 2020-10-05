<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Interface</h2>

<p>An Interface allows the users to create programs, specifying the public methods that a class must implement, without involving the complexities and details of how the particular methods are implemented. It is generally referred to as the next level of abstraction. It resembles the abstract methods, resembling the abstract classes. An Interface is defined just like a class is defined but with the class keyword replaced by the interface keyword and just the function prototypes. The interface contains no data variables. The interface is helpful in a way that it ensures to maintain a sort of metadata for all the methods a programmer wishes to work on.</p>

<p>Concrete Class: The class which implements an interface is called the Concrete Class. It must implement all the methods defined in an interface. Interfaces of the same name can’t be implemented because of ambiguity error. Just like any class, an interface can be extended using the extends operator as follows</p>


<?php  
  
interface MyInterfaceName{ 
  
    public function method1(); 
    public function method2(); 
  
} 
  
class MyClassName implements MyInterfaceName{ 
  
    public function method1(){ 
        echo "Method1 Called" . "\n"; 
    } 
  
    public function method2(){ 
        echo "Method2 Called". "\n"; 
    } 
}  
  
$obj = new MyClassName; 
$obj->method1(); 
$obj->method2(); 
  
?> 