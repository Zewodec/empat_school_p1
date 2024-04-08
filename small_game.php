<?php
session_start();

// Перевірка, чи встановлені куки для балів, якщо ні - встановлюємо значення за замовчуванням
if (!isset($_SESSION['points'])) {
    $_SESSION['points'] = 0;
}

if (!isset($_COOKIE['last_sum'])) {
    $_SESSION['last_sum'] = 0;
}

$first_number = rand(1, 10);
$second_number = rand(1, 10);
$waiting_sum = $first_number + $second_number;

echo 'Скільки буде ' . $first_number . ' + ' . $second_number . '?';
echo '<br>';

// Перевірка, чи передане значення суми
if (isset($_GET['sum'])) {
    $sum = $_GET['sum'];

    // Перевірка, чи сума введена коректно і відповідає правильному значенню
    if ($sum == $_COOKIE['last_sum']) {
        // Додавання 1 балу
        $_SESSION['points']++;
    } else {
        // Зменшення 2 балів
        $_SESSION['points'] -= 1;
    }
}

setcookie('last_sum', $waiting_sum, time()+606024*30, "/");

if ($_SESSION['points'] < 0) {
    $_SESSION['points'] = 0;
}

// Збереження балів у куках
setcookie('points', $_SESSION['points'], time()+606024*30, "/");

if (isset($_SESSION['points']) && isset($_GET['points']) && abs($_SESSION['points'] - $_GET['points']) > 1) {
    echo '<h3>Грайте чесно!!!!</h3>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бали</title>
</head>
<body>
<form action="" method="get">
    <input type="hidden" name="points" value="<?php echo $_SESSION['points']; ?>">
    <label for="sum">Введіть суму:</label>
    <input type="text" id="sum" name="sum">
    <button type="submit">Перевірити</button>
</form>
<p>Кількість балів: <?php echo $_SESSION['points']; ?></p>
</body>
</html>
