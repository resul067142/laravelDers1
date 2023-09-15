<?php
$items = ['z','a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j' , 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u' , 'v', 'y', 'z'];
echo 'Birinci eleman => ' . $items[0];
echo '<br>';
echo 'ikinci eleman: ' . $items[1];
echo '<br>';
echo 'üçüncü eleman' . $items[2];
echo '<br>';
echo 'dördüncü eleman: ' . $items[3];
echo '<br>';
echo 'beşinci eleman: ' . $items[4];
echo '<br>';
echo 'altıncı eleman: ' . $items[5];
echo '<br>';
echo 'yedinci eleman: ' . $items[6];
echo '<br>';
echo 'son eleman: ' . $items[count($items) - 1];
echo 'Eleman sayısı: ' . count($items);
echo '<br>';

for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'a')
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'b')
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'c')
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) { // detaylı ne işe yarar bu kod? => 1. elemanı yazdırır
    if ($items[$i] == 'd') // 2. elemanı yazdırır
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'e')
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'f')
        echo $items[$i];
}
for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'g')
        echo $items[$i];
}

echo '<br>';

$numbers = [10, 20, 30, 40, 50 , 60, 70, 80, 90, 100];
$searchValues = [20, 40, 60, 70, 80, 90, 100];


$s = [22, 44, 66, 88, 100];
$n = [11, 22, 33, 44, 55, 66, 77, 88, 99];

for ($i = 0; $i < count($searchValues); $i++) {
    if (in_array($searchValues[$i], $numbers)) {
        echo $searchValues[$i];
    }
}

for ($i = 0; ($i < 7); $i++) {
    if (in_array($s[$i], $s)) {
        echo $s[$i];
    }
}















