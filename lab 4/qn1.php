<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style="display:flex;">
    <?php
    for($i=1;$i<=10;$i++){
    if($i%2==0){
    echo "<div style='background-color:#ffffff; width:200px; height:100px;'></div>";
}
else{
    echo "<div style='background-color:#000000; width:200px; height:100px;'></div>";  
}
}
    
    ?>
</div>
</body>
</html>