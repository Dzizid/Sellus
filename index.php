<?
    $a = htmlspecialchars($_GET['number_One']);
    $b = htmlspecialchars($_GET['number_Two']);

    $c = $a * $b;

    echo htmlspecialchars($_GET['number_One']) . ' умноженное на ' . htmlspecialchars($_GET['number_Two']) . ' = ' . $c;

    $c = abs($c);

    if ($c < 10) {
        echo ' Однозначное ';
    } else if ($c < 100) {
        echo ' Двухзначное ';
    } else if ($c < 1000) {
        echo ' Трехзначное ';
    } else if ($c > 1000) {
        echo ' Такое мы не изучали ';
    }
?>