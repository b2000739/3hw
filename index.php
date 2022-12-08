<?
$sum = 0;
for ($i = 100; $i < 1000; $i++) {
	if ($i % 3 == 0) {
		$sum += $i;
		echo $i . ' ';
	}
}
echo '<br><br>';
echo $sum;
$sum2 = 0;
for ($i = 1; $i <= $sum; $i += 3) {
	$sum2 += $i;
}
echo '<br><br>' . $sum2;
