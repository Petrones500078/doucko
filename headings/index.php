<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> 
    <form action="" method="post">
        <input type="text" name="heading">
        <input type="number" name="level"> 
        <input type="text" name="paragraph"> 
        <input type="submit" value="ODESLAT">
    </form>



    <?php

    $heading = filter_input(INPUT_POST,'heading');
    $paragraph = filter_input(INPUT_POST,'paragraph');
    $level = filter_input(INPUT_POST,'level');

    /*
    linknu si classu,
     z proměnné jménem nadpis jsem udělal objekt Nadpis,
     do něj jsem uložil 'JÁ JSEM IRON MAN'
     poté jsem jej nechal vypsat.
    */
    require 'class/headings.php';
    $nadpis = new Headings();
    $nadpis->nastav_nadpis($heading,$level);
    $nadpis->uka_nadpis();

    require 'class/paragraph.php';
    $odstavec = new Paragraph();
    $odstavec->nastav_odstavec($paragraph);
    $odstavec->uka_odstavec();

    ?>
</body>
</html>






<!--$apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?> 