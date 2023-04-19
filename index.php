<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 11.7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Задание 1. Таблица истинности PHP</h1>
    <div>
        <p>1 - true, пустая клетка - false</p>
    </div>
    <div>
        <table>
            <tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>
            <tr>
                <?php
                    $a = 0; 
                    $b = 0;
                ?>
                <td id="val"><?php echo $a;?></td><td id="val"><?php echo $b;?></td>                                   
                <td><?php echo !$a;?></td><td><?php echo $a || $b;?></td><td><?php echo $a && $b;?></td><td><?php echo $a xor $b;?></td>
            </tr>
            <tr>
                <?php
                    $a = 0; 
                    $b = 1;
                ?>
                <td id="val"><?php echo $a;?></td><td id="val"><?php echo $b;?></td>
                <td><?php echo !$a;?></td><td><?php echo $a || $b;?></td><td><?php echo $a && $b;?></td><td><?php echo $a xor $b;?></td>
            </tr>
            <tr>
                <?php
                    $a = 1; 
                    $b = 0;
                ?>
                <td id="val"><?php echo $a;?></td><td id="val"><?php echo $b;?></td>
                <td><?php echo !$a;?></td><td><?php echo $a || $b;?></td><td><?php echo $a && $b;?></td><td><?php echo $a xor $b;?></td>
            </tr>
            <tr>
                <?php
                    $a = 1; 
                    $b = 1;
                ?>
                <td id="val"><?php echo $a;?></td><td id="val"><?php echo $b;?></td>
                <td><?php echo !$a;?></td><td><?php echo $a || $b;?></td><td><?php echo $a && $b;?></td><td><?php echo $a xor $b;?></td>
            </tr>       
        </table>
    </div>
    <h1>Задание 2. Таблица сравнения</h1>
    <h2>Нестрогое сравнение (==)</h2>
    <div>
        <?php 
            $x1 = true;
            $x2 = false;
            $x3 = 1;  
            $x4 = 0;
            $x5 = -1;
            $x6 = '1'; 
            $x7 = null; 
            $x8 = 'php'; 
        ?>
        <table>
            <tr>
                <th></th><th><?php echo 'true';?></th><th><?php echo 'false';?></th><th><?php echo $x3;?></th><th><?php echo $x4;?></th>
                <th><?php echo $x5;?></th><th><?php echo "\"1\"";?></th><th><?php echo 'null';?></th><th><?php echo "\"php\"";?></th>
            </tr>
            <tr>
                <th><?php echo 'true';?></th>
                <td><?php echo $x1 == $x1;?></td><td><?php echo $x1 == $x2;?></td><td><?php echo $x1 == $x3;?></td><td><?php echo $x1 == $x4;?></td>
                <td><?php echo $x1 == $x5;?></td><td><?php echo $x1 == $x6;?></td><td><?php echo $x1 == $x7;?></td><td><?php echo $x1 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo 'false';?></th>
                <td><?php echo $x2 == $x1;?></td><td><?php echo $x2 == $x2;?></td><td><?php echo $x2 == $x3;?></td><td><?php echo $x2 == $x4;?></td>
                <td><?php echo $x2 == $x5;?></td><td><?php echo $x2 == $x6;?></td><td><?php echo $x2 == $x7;?></td><td><?php echo $x2 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x3;?></th>
                <td><?php echo $x3 == $x1;?></td><td><?php echo $x3 == $x2;?></td><td><?php echo $x3 == $x3;?></td><td><?php echo $x3 == $x4;?></td>
                <td><?php echo $x3 == $x5;?></td><td><?php echo $x3 == $x6;?></td><td><?php echo $x3 == $x7;?></td><td><?php echo $x3 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x4;?></th>
                <td><?php echo $x4 == $x1;?></td><td><?php echo $x4 == $x2;?></td><td><?php echo $x4 == $x3;?></td><td><?php echo $x4 == $x4;?></td>
                <td><?php echo $x4 == $x5;?></td><td><?php echo $x4 == $x6;?></td><td><?php echo $x4 == $x7;?></td><td><?php echo $x4 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x5;?></th>
                <td><?php echo $x5 == $x1;?></td><td><?php echo $x5 == $x2;?></td><td><?php echo $x5 == $x3;?></td><td><?php echo $x5 == $x4;?></td>
                <td><?php echo $x5 == $x5;?></td><td><?php echo $x5 == $x6;?></td><td><?php echo $x5 == $x7;?></td><td><?php echo $x5 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo "\"1\"";?></th>
                <td><?php echo $x6 == $x1;?></td><td><?php echo $x6 == $x2;?></td><td><?php echo $x6 == $x3;?></td><td><?php echo $x6 == $x4;?></td>
                <td><?php echo $x6 == $x5;?></td><td><?php echo $x6 == $x6;?></td><td><?php echo $x6 == $x7;?></td><td><?php echo $x6 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo 'null';?></th>
                <td><?php echo $x7 == $x1;?></td><td><?php echo $x7 == $x2;?></td><td><?php echo $x7 == $x3;?></td><td><?php echo $x7 == $x4;?></td>
                <td><?php echo $x7 == $x5;?></td><td><?php echo $x7 == $x6;?></td><td><?php echo $x7 == $x7;?></td><td><?php echo $x7 == $x8;?></td>
            </tr>
            <tr>
                <th><?php echo "\"php\"";?></th>
                <td><?php echo $x8 == $x1;?></td><td><?php echo $x8 == $x2;?></td><td><?php echo $x8 == $x3;?></td><td><?php echo $x8 == $x4;?></td>
                <td><?php echo $x8 == $x5;?></td><td><?php echo $x8 == $x6;?></td><td><?php echo $x8 == $x7;?></td><td><?php echo $x8 == $x8;?></td>
            </tr>
        </table>
    </div>
    <div>
        <span>Если один из сравниваемых операндов логический, то второй интерпретируется так же. <br> 
        В случае, когда один из операндов числовой - сравнение выполняется в числовом контексте.</span>
    </div>
    <h2>Строгое сравнение (===)</h2>
    <div>
        <table>
            <tr>
                <th></th><th><?php echo 'true';?></th><th><?php echo 'false';?></th><th><?php echo $x3;?></th><th><?php echo $x4;?></th>
                <th><?php echo $x5;?></th><th><?php echo "\"1\"";?></th><th><?php echo 'null';?></th><th><?php echo "\"php\"";?></th>
            </tr>
            <tr>
                <th><?php echo 'true';?></th>
                <td><?php echo $x1 === $x1;?></td><td><?php echo $x1 === $x2;?></td><td><?php echo $x1 === $x3;?></td><td><?php echo $x1 === $x4;?></td>
                <td><?php echo $x1 === $x5;?></td><td><?php echo $x1 === $x6;?></td><td><?php echo $x1 === $x7;?></td><td><?php echo $x1 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo 'false';?></th>
                <td><?php echo $x2 === $x1;?></td><td><?php echo $x2 === $x2;?></td><td><?php echo $x2 === $x3;?></td><td><?php echo $x2 === $x4;?></td>
                <td><?php echo $x2 === $x5;?></td><td><?php echo $x2 === $x6;?></td><td><?php echo $x2 === $x7;?></td><td><?php echo $x2 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x3;?></th>
                <td><?php echo $x3 === $x1;?></td><td><?php echo $x3 === $x2;?></td><td><?php echo $x3 === $x3;?></td><td><?php echo $x3 === $x4;?></td>
                <td><?php echo $x3 === $x5;?></td><td><?php echo $x3 === $x6;?></td><td><?php echo $x3 === $x7;?></td><td><?php echo $x3 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x4;?></th>
                <td><?php echo $x4 === $x1;?></td><td><?php echo $x4 === $x2;?></td><td><?php echo $x4 === $x3;?></td><td><?php echo $x4 === $x4;?></td>
                <td><?php echo $x4 === $x5;?></td><td><?php echo $x4 === $x6;?></td><td><?php echo $x4 === $x7;?></td><td><?php echo $x4 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo $x5;?></th>
                <td><?php echo $x5 === $x1;?></td><td><?php echo $x5 === $x2;?></td><td><?php echo $x5 === $x3;?></td><td><?php echo $x5 === $x4;?></td>
                <td><?php echo $x5 === $x5;?></td><td><?php echo $x5 === $x6;?></td><td><?php echo $x5 === $x7;?></td><td><?php echo $x5 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo "\"1\"";?></th>
                <td><?php echo $x6 === $x1;?></td><td><?php echo $x6 === $x2;?></td><td><?php echo $x6 === $x3;?></td><td><?php echo $x6 === $x4;?></td>
                <td><?php echo $x6 === $x5;?></td><td><?php echo $x6 === $x6;?></td><td><?php echo $x6 === $x7;?></td><td><?php echo $x6 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo 'null';?></th>
                <td><?php echo $x7 === $x1;?></td><td><?php echo $x7 === $x2;?></td><td><?php echo $x7 === $x3;?></td><td><?php echo $x7 === $x4;?></td>
                <td><?php echo $x7 === $x5;?></td><td><?php echo $x7 === $x6;?></td><td><?php echo $x7 === $x7;?></td><td><?php echo $x7 === $x8;?></td>
            </tr>
            <tr>
                <th><?php echo "\"php\"";?></th>
                <td><?php echo $x8 === $x1;?></td><td><?php echo $x8 === $x2;?></td><td><?php echo $x8 === $x3;?></td><td><?php echo $x8 === $x4;?></td>
                <td><?php echo $x8 === $x5;?></td><td><?php echo $x8 === $x6;?></td><td><?php echo $x8 === $x7;?></td><td><?php echo $x8 === $x8;?></td>
            </tr>
        </table>
    </div>
    <div>
        <span>Оператор эквивалентности (строгое сравнение) сравнивает не только выражения, <br> 
        но и их типы. Приведение типов не выполняется.</span>
    </div>
</body>
</html>