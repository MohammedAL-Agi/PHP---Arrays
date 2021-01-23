<style>
	* {
		font-family: Helvetica;
	}
</style>
<?php

echo "===========Q1===========";
echo "<br>";
$color = ['white', 'green', 'red', 'blue', 'black'];

echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
new president and his first lady.";
echo "<br>";
echo "===========Q2===========";
$color = ['white', 'green', 'red'];
echo "<ul>";
echo "<li> $color[1] </li>";
echo "<li> $color[2] </li>";
echo "<li> $color[0] </li>";
echo "</ul>";

echo "===========Q3===========";
echo "<br>";

$cities = [
	"Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
	"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
	"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
	"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
	"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
	"Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
	"Republic" => "Prague", "Estonia" => "Tallinn", "Hungary" => "Budapest"
];

ksort($cities);
foreach ($cities as $i => $val) {
	echo "The capital of $i is $val";
	echo "<br>";
}

echo "===========Q4===========";
echo "<br>";
$x = [1, 2, 3, 4, 5];
unset($x[3]);
$newarr = array_values($x); // to re_index the array elements
var_dump($newarr);
echo "<br>";

echo "===========Q5===========";
echo "<br>";

$color = [4 => 'white', 6 => 'green', 11 => 'red'];
echo $color[4];
echo "<br>";

echo "===========Q6===========";
echo "<br>";

$x = [1, 2, 3, 4, 5];
$x[0] = 0;
$x[5] = 6;
print_r($x);
echo "<br>";

echo "===========Q7===========";
echo "<br>";

$teachers = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];

// ascending by value
asort($teachers);
print_r($teachers);
echo "<br>";
// ascending by key
ksort($teachers);
print_r($teachers);
echo "<br>";
// descending by value
arsort($teachers);
print_r($teachers);
echo "<br>";
// descending by key
krsort($teachers);
print_r($teachers);
echo "<br>";

echo "===========Q8===========";
echo "<br>";

$temperatures = [
	78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
	73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
];
$average = array_sum($temperatures) / count($temperatures);
echo $average;
echo "<br>";
echo "List of seven lowest temperatures :";
sort($temperatures);
for ($i = 0; $i < 7; $i++) {

	echo $temperatures[$i] . ",";
}
echo "<br>";
echo "List of seven highest temperatures :";
rsort($temperatures);
for ($i = 0; $i < 7; $i++) {
	echo $temperatures[$i] . ",";
}
echo "<br>";

echo "===========Q9===========";
echo "<br>";

$r1 = array(array(70,40), array(25, 45));
$r2 = array("example", "com");
implode(" ",$r2);
print_r($r2);
// print_r(array_merge($r1, $r2));

echo "<br>";

echo "===========Q10===========";
echo "<br>";

$alphabet = ['A' => 'Blue', "B" => 'Green', "c" => 'Red'];

$convert = array_map("strtoupper", $alphabet);
echo "Values are in upper case:";
print_r($convert);
echo "<br>";

echo "Values are in lower case:";
$convert = array_map("strtolower", $alphabet);
print_r($convert);
echo "<br>";

echo "===========Q11===========";
echo "<br>";

for ($i = 200; $i <= 250; $i++) {
	for ($x = $i; $x % 4 == 0; $x++) {
		echo $x . ",";
	}
}
echo "<br>";

echo "===========Q12===========";
echo "<br>";

$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$lenght = array_map('strlen', $arr);
echo "The shortest is " . min($lenght);
echo "<br>";
echo "The longest is " . max($lenght);
echo "<br>";

echo "===========Q13===========";
echo "<br>";

$numbers = range(11, 20);
shuffle($numbers);
for ($i = 0; $i < 10; $i++) {
	echo $numbers[$i] . ",";
}
echo "<br>";

echo "===========Q14===========";
echo "<br>";

$arr = [1 => 'Hello', 2 => 'World', 3 => 'Mohammed', 4 => 'Ali', 5 => 'Ahmed'];
$largest = max(array_keys($arr));
print_r($largest);
echo "<br>";

echo "===========Q15===========";
echo "<br>";

function lowest($n)
{
	echo min($n);
}
lowest([2, -50, 30, 8, 10, 15]);
echo "<br>";

echo "===========Q16===========";
echo "<br>";

function floorDecimal($n, $p, $s)
{
	$number = explode($s, $n);
	$number[1] = substr_replace($number[1], $s, $p, 0);
	if($number[0] > 0) {
		$number[1] = floor($number[1]);
	}else{
		$number[1] = ceil($number[1]);
	}
	$res = [$number[0], $number[1]];
	return implode($s, $res);
}
print_r(floorDecimal(1.155, 2, "."));
echo "<br>";

echo "===========Q17===========";
echo "<br>";

$colors = ["color" => [
	"a" => 'Red',
	 "b" => 'Green', 
	 "c" => 'White',
		"numbers" => 
		[1, 2, 3, 4, 5, 6], 

		"holes" => 
		['First', 5 => "second", "third"]
		]];

print_r($colors["color"]["holes"][5]);
print_r($colors["color"]["a"]);
echo "<br>";

echo "===========Q18===========";
echo "<br>";
$data = array(
   "item1"=>"1",
   "item2"=>"3",
   "item3"=>"5",
   "item4"=>"2",
   "item5"=>"4"
);

usort($data, "sortByPredefinedOrder");

function sortByPredefinedOrder($left, $right){
  $order = array("5","4","3","2","1");

  $flipped = array_flip($order);

  $leftPos = $flipped[$left];
  $rightPos = $flipped[$right];
  // return $leftPos >= $rightPos;   
	// echo $leftPos. ",";
	

	echo $rightPos. ",";
}
print_r($data);

echo "<br>";

echo "===========Q19===========";
echo "<br>";

$arr = ["red", "green", "blue", "yellow"];

sort($arr, SORT_NATURAL | SORT_FLAG_CASE);

foreach($arr as $key => $val) {
	echo $key . "= " . $val;	
}

// inside class 

	// $multi = array(array(1,2,3),
	// 							array(3,4,5),
	// 							array(6,7,8)
	// 						);
	// $s = array(1,2,3);

	// $v = array('a' => 1, "b" => 2, "c" => 3 );

	// foreach($v as $x => $y){
				// 	if(is_array($y)){
				// 		foreach($y as $key => $val){
				// 			echo $key . " " . $val. "<br>";
				// 		}
				// 	}else{
				// 		echo $x . " ". $y. "<br>";
				// 	}
				// 		}

						
// foreach($salary as $k=>$soso){
// 	//if(is_array($soso)){}
// 	//if(gettype($soso) == 'array'){}
// 	if(is_array($soso)){
// 		foreach ($soso as $key => $value) {
// 			echo $key." ".$value."<br>";
// 		}
// 	}else{
// 		echo $k." ".$soso."<br>";
// 	}
// }


// $multi = array(
// 	array(1,"anas","IT"),
// 	array(2,"jinan","Kitchen"),
// 	array(3,"heba","sales"),
// 	array(4,"ahmad","HR")
// );
// $id    = array();
// $names = array();
// $dept  = array();

// for($i=0; $i< count($multi); $i++){
// array_push($id,$multi[$i][0]); 
// array_push($names,$multi[$i][1]); 
// array_push($dept,$multi[$i][2]); 
// }
// echo "<pre>";

// print_r($id);
// print_r($names);
// print_r($dept);



// $mutli2 = array(
// 	array(1,2,3,4),
// 	array("anas","jinan","heba","ahmad"),
// 	array("IT","Kitchen","sales","HR"),
	
// ); 

// $array = [[], [], []];
// $i=0;
// foreach($mutli2 as $k => $v) {
// 	if(is_array($v)) {
// 		foreach($v as $h => $m){
			
// 		}
// 	}

// }
