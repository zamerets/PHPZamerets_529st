<?php
$sender_name="vlad";
$sender_email="vladzamerets710@gmail.com";
$recepient_email="zameretsvlad@gmail.com";
$subject="Test email PHP";
$body="text";


if(mail($recepient_email, $subject, $body, "From: $sender_name <$sender_email>")){
    echo "email sent";
};
//В переменной n хранится двузначное число. Создайте программу,
//вычисляющую и выводящую на экран сумму цифр n.
$n = 25;
$firstNum = (int)($n / 10);
$secondNum = $n % 10;
$sum = $firstNum + $secondNum;
echo "Сумма цифр числа $n: $sum" . PHP_EOL;
//Натуральное положительное число записано в переменную n.
//Определить и вывести на экран, сколько цифр в числе n
function countDigits($n) {
    $count = 1;
    while ($n >= 10) {
        $n /= 10;
        $count++;
    }
    return $count;
}

$n = 12345;
$digitsCount = countDigits($n);
echo "В числе $n: $digitsCount цифр" . PHP_EOL;
?>