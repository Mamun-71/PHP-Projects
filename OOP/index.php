<?php
//   spl_autoload_register();

//   function myAutoLoader($className)
//   {
//      $path = "classes";
//      $extension =".class.php";
//      $fullPath = $path . $className . $extension;

//      include_once $fullPath;
//   }

// include_once "abstract/paymenttypes.abstract.php";
// include_once "classes/BuyProduct.class.php";

// $buyProduct = new BuyProduct();
// echo $buyProduct->getPayment();

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();


//Anonymous class

$newObj = new class()
{
   public function helloWorld()
   {
      echo "Hello World";
   }
};

$newObj->helloWorld();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php
    
    // $name01 = "Daniel";
    // $eyeColor01 = "Blue";
    // $age01 = 28;

    // $name02 = "Daniel";
    // $eyeColor02 = "Blue";
    // $age02 = 28;

    // $person1 = new Person();
    // $person1->setName("Mamun");
    // echo $person1->name;

    // $person2 = new Person();
    // $person2->setName('Samin');
    // echo $person2->name;

    // $person1 = new Person('Mamun','Blue',28);

    // echo $person1->name;
    // echo $person1->eyeColor;
    // $person1->setName("Samin");

    // echo $person1->getName();

    // echo Person::$drinkingAge;
    // Person::setDrinkingAge(18);
    // echo Person::$drinkingAge;


   ?>
</body>
</html>