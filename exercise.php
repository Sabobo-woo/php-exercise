<?php 
$cars_i_want = [];

$cars_i_want[] = 'Aston Martin';
$cars_i_want[] = 'Bugatti';
$cars_i_want[] = 'Ferrari';
$cars_i_want[] = 'Lamborghini';
$cars_i_want[] = 'Maserati';
$cars_i_want[] = 'Mercedes';
$cars_i_want[] = 'Porsche';
$cars_i_want[] = 'Skoda';
var_dump($cars_i_want);
echo "<hr>";

echo "For myself I would buy {$cars_i_want[1]}<br>";
echo "For my spouse I would buy {$cars_i_want[3]}<br>";

echo "<ul>";
foreach($cars_i_want as $car) {
    echo "<li>". $car . "</li>";
}
echo "</ul><br>";

$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];
echo "You can have a Porsche for just {$car_prices['Porsche 911']} CZK.<br>";

foreach( $car_prices as $key => $val ) {
    echo "You can have a {$key} for just {$val} CZK.<br>";

}

$students =[];
$students[] = 'Thomas';
$students[] = 'Kathy';
$students[] = 'Eve';
$students[] = 'Bernard';

echo "<ul>";
foreach($students as $name) {
    echo "<li>". $name . "</li>";
}
echo "</ul><br>";



