<?php
  function clearInt($data){
      return (int)$data;
  }
  function clearStr($data){
      return trim(strip_tags($data));
  }
  $output = "";
  if($_SERVER["REQUEST_METHOD"]==="POST") {
     $n1 = clearInt($_POST["num1"]);
     $n2 = clearInt($_POST["num2"]);
     $op = clearStr($_POST["operator"]);
     //TODO: Проверить поля
      $output = "$n1 $op $n2 = ";
      switch($op) {
          case "+":
              $output .= $n1 + $n2;
              break;
          case "-":
              $output .= $n1 - $n2;
              break;
          case "*":
              $output .= $n1 * $n2;
              break;
          case "/":
              if($n2 === 0) {
                  $output = "Деление на 0 запрещено!";
              } else {
                  $output .= $n1 / $n2;
              }
              break;
          case "ˆ":
              $output .= $n1 ** $n2;
              break;
          default: $output = "Неизвестный оператор!";
      }
  }
?>
<!-- Область основного контента -->
    <?php

      if($output) {
          echo "<h3>Результат: $output</h3>";
      }
    ?>
    <form action='' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' value="<?php echo $n1 ?>"/>
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' value="<?php echo $op ?>"/>
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' value="<?php echo $n2 ?>"/>
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
<!-- Область основного контента -->