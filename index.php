<?
    $a = htmlspecialchars($_GET['number_One']);
    $b = htmlspecialchars($_GET['number_Two']);

    $c = $a * $b;

    echo htmlspecialchars($_GET['number_One']) . ' умноженное на ' . htmlspecialchars($_GET['number_Two']) . ' = ' . $c;

    $c = abs($c);

    function recursion($c) {
        if ($c < 10) {
            echo ' Однозначное ';
        } elseif ($c < 100) {
            echo ' Двухзначное ';
        } else {
            echo ' Трехзначное ';
        }
    }

    echo recursion($c);
?>