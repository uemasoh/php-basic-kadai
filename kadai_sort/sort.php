<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums =[15,4,18,23,10];   
       
        function sort_2way(array $array, bool $order): array{
            if ($order) {
            echo "昇順にソートします。<br>";
            sort($array);
            foreach($array as $arr){
            echo $arr."<br>";
                } 
            }
            else {
            echo "降順にソートします。<br>";
            rsort($array);
            foreach($array as $arr){
            echo $arr."<br>";
                }
            return $array;
            }
        }
        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
        
    </p>
</body>

</html>