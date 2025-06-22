<?php
// Завдання 2: вибір дії залежно від дня тижня

if (isset($_GET['day'])) {
    $day = (int)$_GET['day'];

    echo "<h2>День №$day</h2>";

    switch ($day) {
        case 1:
            echo "Понеділок – робочий день.";
            break;
        case 2:
            echo "Вівторок – робочий день.";
            break;
        case 3:
            echo "Середа – робочий день.";
            break;
        case 4:
            echo "Четвер – робочий день.";
            break;
        case 5:
            echo "П’ятниця – робочий день.";
            break;
        case 6:
            echo "Субота – вихідний.";
            break;
        case 7:
            echo "Неділя – вихідний.";
            break;
        default:
            echo "Помилка: день тижня має бути від 1 до 7.";
    }
} else {
    echo "Будь ласка, вкажіть день через параметр <code>?day=...</code>";
}
?>
