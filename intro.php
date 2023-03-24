    <?php
    echo "Hello World";
    print "<h2>This is php page</h2>";
    $name = "mg mg";
    $phone = 4;
    $prize=0.111;
    $animal=array("cat","dog","goat");
    $mgmg =true;
    $kyawkyaw =false;
    $hlahla =19;
    $hlahla =null;
    var_dump($phone,$name,$prize,$animal,$mgmg,$hlahla);
    class dog {
      public $name;
      public $age;
      public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
      }
      public function message() {
        return "<br> Dog name is" . $this->name . " . Age is " . $this->age ;
      }
    }

    $myCar = new dog("Buggy", "4");
    echo $myCar -> message();

    define("hello","mg mg");
    echo "<br>";
    echo hello;
    echo "<hr>";

    $car=array("BMW","TOYOTA","MAX");
    echo "Number Of Car".count($car);
    echo "<br>";
    echo "I like ".$car[0];
    echo "<br>";

    $color = array("BMW"=>"red","TOYOTA"=>"black","MAX"=>"orange");
    echo $car[0]." is ".$color['BMW']. ".";
    echo "<br>";

    $prize = array(
      array(25000,30000,35000),
      array(40000,40500,30000)
    );
    echo $car[0]." is ".$color['BMW']. " and prize is".$prize[0][2].".";
    echo "<hr>";

    $apple = 1000;
    $orange = 1500;
    $total=$apple+$orange;
    echo " Apple is ".$apple ;
    echo " Orange is ".$orange ;
    echo " Total is ". $total;
    echo "<br>";
    $apple*=5;
    echo " Apple is ".$apple ;
    echo "<br>";

    $banana = 1500;
    var_dump($banana>=$orange);

    echo "<br>";
    //ternary 
    $status = (empty($userName)) ? "User Name Is Need" : "Thanks You" ;
    echo $status;
    echo "<br>";
    $people = $people ?? "Mg Mg";
    echo $people;

    $post = [
      "title"=>"Myanmer",
      "about"=>"Bagan"
    ];
    $post["author"] ??= "Default Name";
    echo "<br>";
    echo $post["author"];
    echo "<br>";

    class User {
      public $password;
      public function hash(){
        echo "your password is hashed";
      }
    }
    $user=null;
    $user=new User();
    $user?->hash();
    echo "<hr>";

    //match 
    $age =33;
    $realAge =match ($age){
        33 => "your true",
        40 => "your false"
    };
    echo $realAge;
    echo "<br>";

    //loop
    $length=count($car);
    for ($i=0; $i < $length; $i++) { 
        echo $car[$i];
        echo "<br>";
    };
    echo "<br>";
    $customer = 1;
    while ($customer <= 10) {
        echo "Your Luckiest Customer $customer <br>";
        $customer++;
    }

    echo "<br>";
    $x = 0;
    
    while($x < 10) {
      if ($x == 4) {
        $x++;
        continue;
      }
      echo "The number is: $x <br>";
      $x++;
    }

    function modulus(int $a, int $b) : float {
        return $a / $b;
      }
      
      $m = modulus ( 52 , 12 ); 
      echo $m;
      echo "<br>";
      $multiply=fn($a,$b)=>$a*$b;
      echo $multiply(2,2);

    echo "<hr>";
    echo str_replace("world","Peter","Hello world!");

    ?>
