<?
    $a = $_GET['number_One'];
    $b = $_GET['number_Two'];

    $c = $a * $b;

    echo $_GET['number_One'] . ' умноженное на ' . $_GET['number_Two'] . ' = ' . $c;
    
    $foo = intval($c);

    $sim = strlen(string:$foo);

    echo '<br>' . $foo . ' в данном числе ' . $sim . ' символов';
?>