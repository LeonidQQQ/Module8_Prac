<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo_inc.php' ?>
        <?php include 'menu_inc.php' ?>
    </div>

    <div class="about_me">

        <h1>  <?php  echo $p  ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php
                echo '<img src="img/elef.png">';
                ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $surname, ' ', $name . '<br>';
                    echo 'г.', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                <p> Замечательно справляемся с курсом </p>
                <p> И вообще все мы тут молодцы </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge_inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?> <br>

            <?php
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo $c, ',';
            ?>
            <?php
            echo $d;
            ?>

        </div>

        <div class="article">
            <h3 class="text">
                Добрый день, рад Вас видеть на тестовой странице!
            </h3>
        </div>

        <div class="downImg">
            <?php
            echo '<img src="img/hack_millitary.jpg">';
            ?>
        </div>
    </div>

    <?php include 'footer_inc.php' ?>

</div>


</body>
</html>