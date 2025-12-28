<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
         function sort_2way($array,$order) {
         
         if ($order === true) {
          echo '昇順にソートします。<br>';
          sort($array);
         } else {
          echo '降順にソートします。<br>';
          rsort($array) {
          }
         } 
         foreach($array as $num) {
           echo $num . '<br>';
         }
         }

         sort_2way($nums,true);
         echo '<br>';
         sort_2way($array,false);
        ?>
    </p>
</body>

</html>