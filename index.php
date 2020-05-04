<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my first PHP file</title>

  <style>
  * {
    padding: 0;
    margin: 0;
  }

  body>h1 {
    text-align: center;
    background: orange;
    padding: 20px;
    color: white;
  }

  body div {
    float: left;
  }

  #string,
  #multidimensional_array,
  #number,
  #array {
    background-color: blue;
    color: lightblue;
    width: 50%;
    text-align: center;
    font-size: 20px;
    display: inline-block;
    height: 400px;
  }
  </style>
</head>
<?php
  $name = "Lê Anh Vũ";
  define("name1", "Lê Anh Vũ");
  
  // string
  $one = 'My email is: ';
  $two = 'lav@gmail.com';
  
  
?>

<body>
  <h1 style="padding:0px;margin: 0;width: 50%; float: left; line-height: 100px;">
    My name is
    <?php
      echo $name;
    ?>
  </h1>
  <h2
    style="text-align: center;padding:0px;margin: 0;width: 50%; float: left; background-color: black; color: orange; line-height: 100px;">
    Learn basic
    php</h2>
  <main style="clear: both;">
    <div id="string">
      <?php echo $one . $two?>
      <br />
      <?php echo "show content $one" . $two?>
      <br />
      <?php echo $one[3]?>
      <br />
      <?php echo strlen($one)?>
      <br />
      <?php echo strtoupper($one)?>
      <br />
      <?php echo strtolower($one)?>
      <br />
      <?php echo str_replace('e','r',$one)?>
    </div>

    <div id="number">
      <?php 
        $radius = 25;
        $pi = 3.14;
        echo "$radius * $pi = ". $radius * $pi;
        echo 2 * (4 + 9) / 3;
        echo $radius++. "<br/>";
        echo $radius. "<br/>";

        echo --$radius. "<br/>";
        echo $radius. "<br/>";

        echo floor($pi). "<br/>";
        echo ceil($pi). "<br/>";
        echo pi(). "<br/>";
      ?>
    </div>

    <div id="array">
      <?php
        $peopleOne = ['mot','hai'];
        $peopleTwo = ['batboy','bonito'];
        $peopleThree = array();
        
        print_r($peopleOne);
        print_r($peopleTwo);
        $peopleThree = array_merge($peopleOne,$peopleTwo);
        print_r($peopleThree);
        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "<br />";
        $ninja = ['name' => 'le anh vu','age'=>20];
        print_r($ninja);
        echo "<br />";
        ?>
    </div>

    <div id="multidimensional_array">
      <?php
        
        $peopleThree = [
          ['batboy','bonito'],
          ['mot','hai']
        ];
        
        print_r($peopleThree);
        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "<br />";
        $ninja = ['name' => 'le anh vu','age'=>20];
        print_r($ninja);
        echo "<br />";
        ?>

    </div>
  </main>

</body>

</html>