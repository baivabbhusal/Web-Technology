<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard Pattern</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 800px; /* 8 columns x 100px */
        }
        .square {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        for ($i = 0; $i < 64; $i++) {
            $row = floor($i / 8); // Current row (0-7)
            $col = $i % 8;        // Current column (0-7)
            
            // Alternate colors based on (row + column) parity
            $color = ($row + $col) % 2 == 0 ? '#ffffff' : '#000000';
            $textColor = $color == '#000000' ? 'white' : 'black';
            
            echo "<div class='square' style='background-color: $color; color: $textColor;'>" . ($i + 1) . "</div>";
        }
        ?>
    </div>
</body>
</html>