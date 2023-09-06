<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <?php 
        echo("<h1>This is Php</h1>");
        $data = "Ali Baba";//string
        echo "<p>$data</p>"; 
        echo "<p>".$data."</p>"; 
        echo '<p>"'.$data.'"</p>';
        var_dump($data);
        echo "<br />";        
        $data = 15;//int
        var_dump($data);
        echo "<br />";
        $data = 15.75;//float
        var_dump($data);
        echo "<br />";
        $data = true;//bool
        var_dump($data);
        echo "<br />";
        $data = null;//null
        var_dump($data);
        echo "<br />";
        $data = ["Ali Baba",15,15.75,true,null];//array
        var_dump($data);
        echo "<br />";
        echo "<pre>";
        print_r($data);
        echo "</pre>";


             
        


    ?>
    <script>
        let p;
        p = 12;
        var a = "Ali";
        let x = true;
        const data = 15;
    </script>
</body>
</html>