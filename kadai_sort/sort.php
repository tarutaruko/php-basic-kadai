<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          
          function sort_2way($array,$order){
              if ($order===true){
              sort($array, $flags = SORT_REGULAR);
              echo "昇順にソートします。<br>";
    
              }else{
                rsort($array, $flags = SORT_REGULAR);
                echo "降順にソートします。<br>";
              }

              foreach($array as $key => $val){
                echo $val .'<br>';
              }
          }

          $nums = [15,4,18,23,10];
          $array = $nums;
          
          $order = true;
          sort_2way($array,$order) ;
          $order = false;
          sort_2way($array,$order) ;


        ?>
    </p>
</body>

</html>