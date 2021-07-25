<!DOCTYPE html>
    <head>
        <title> Counter</title>
    </head>
    <style>
        body{
            background-color:#d1edf2;
            text-align:center;
        }
        h1{
            color:maroon;
            
        }
        p{
            
        }
    </style>
    <body>
        
<?php
    $handle = fopen("count.txt", "r");
    if(!$handle) {
        echo "could not open file";
    }
    else  {
        $cnt = fgets($handle);
        fclose($handle);
        $cnt += 1;
        echo "<h1> You are visitor no $cnt </h1>";
        echo "<p> Refresh page </p>";
        $handle = fopen("count.txt", "w");
        fwrite($handle, $cnt);
        fclose($handle);        
    }
    

?>

</body>
</html>
