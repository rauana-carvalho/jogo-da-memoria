<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_inicial.css">
    <title>Document</title>
</head>
<body>

    <img class="logo" src="img/logo TeacMemoryGame1.png" alt="">

    <div>
        <?php 
            if (file_exists("img/img_1.png")) {
                echo "<a href='game/index.html'> <button class='btn'>JOGO ANTERIOR</button></a>";
            }            
        ?>
        <a href="game/indexCopa.html"> <button class="btn">JOGO COPA DO MUNDO</button></a>
    </div>
    
   
    
</body>
</html>