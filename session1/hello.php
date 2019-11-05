<?php
    echo "Hello PHP03";
?>
<?php
$name = "Quang Nguyễn";
$country = "Quảng Nam";
$phonenumber = "..........";
function display($a, $b, $c)
{
echo "$a - $b - $c";
}
display($name,$country,$phonenumber);

$number = randint(0,20);
function checkmonth()
{
if($number <= 12 && $number >= 1)
{
switch ($number) {
    case 1: $day = 31;
    case 2: $day = 29;
    case 3: $day = 31;
    case 4: $day = 30;
    case 5: $day = 31;
    case 6: $day = 30;
    case 7: $day = 31;
    case 8: $day = 31;
    case 9: $day = 30;
    case 10: $day = 31;
    case 11: $day = 30;
    case 12: $day = 31;
}    
}
}
?>