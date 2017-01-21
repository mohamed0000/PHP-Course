<!DOCTYPE html>
<html>
<head>
	<title>Array Methods Test</title>
	<style type="text/css">
		h3{
			color: red;
		}
		pre{
			color: #000080;			
		}
		h2{
			color: #0000A0;
			text-decoration: underline;

		}
		body{
			background-color: #F2F2F2;
		}
		hr{
			color: black;
		}
		span{
			color: #804040;
			font-size: larger;
		}
		.random{
			color: #900;
		}
		.sort{
			color: #FF0000;
		}
		.rsort{
			color: #4D0000;
		}
	</style>
</head>
<body>

</body>
</html>

<?php

$lang =array(
	"HTML",
	"HTML5",
	"CSS",
	"CSS3",
	"JavaScript",
	"BootStrap",
	"JQuery",
	"PHP"
	);

$arr = array(
	"HTML" => "40%",
	"JS" => "24%",
	"CSS" => "36%"
	);

$CAF_4D = array("Egypt" ,"Ghana","Uganda","Maly");

$numbers = array(1,2,5,3,2,1,4,5,8,4,2,5,6,4);

$CAF_CUP = array("Guinea-Bissau","Cameroon","Gabon","Burkina Faso","Algeria", "Tunisia", "Senegal", "Zimbabwe","Togo", "Ivory Coast","Morocco","Democratic Republic of Congo","Egypt" ,"Ghana","Uganda","Maly");
$langs =array(
	"HTML",
	"9",
	"HTML5",
	0,
	"CSS",
	"CSS3",
	4,
	"JavaScript",
	"BootStrap",
	"2",
	"JQuery",
	"PHP",
	);
/*==============================================================================*/

//remove last item

echo "<pre>";

echo "<h2>remove last item From Array :-<br></h2>";

print_r($lang);

echo "<pre>";

$removeLastItem= array_pop($lang);

echo "<pre>";

print_r($lang);
echo "<br><h3>The item which removed is : " .  $removeLastItem . "</h3>";

echo "<pre>";

/*==============================================================================*/

//remove first item

echo "<pre>"; 	
echo "<hr>";
echo "<h2>remove first item from Array :-<br></h2>";

print_r($lang);

echo "<pre>";

$removefirstItem= array_shift($lang);

echo "<pre>";

print_r($lang);
echo "<br><h3>The item which removed is : " .  $removefirstItem . "</h3>";

echo "<pre>";

/*==============================================================================*/

//add first items

echo "<pre>"; 	
echo "<hr>";
echo "<h2>add items in the first of Array:-<br></h2>";

print_r($lang);
$arrayBeforeAddingItemsFirst=count($lang);

echo "<pre>";

array_unshift($lang, "HTML","XML");
$arrayAfterAddingItemsFirst=count($lang);

echo "<pre>";
$sumArray=$arrayAfterAddingItemsFirst-$arrayBeforeAddingItemsFirst;
print_r($lang);

echo "<br><h3>The item which added is : ";
for ($i=0; $i <$sumArray ; $i++) { 
	echo $lang[$i];

	if ($i<$sumArray-1) {
		echo ", ";
	}
}

echo "</h3>";
echo "<pre>";

/*==============================================================================*/

//add first items

echo "<pre>"; 	
echo "<hr>";
echo "<h2>add items in the last of Array:-<br></h2>";

print_r($lang);
$arrayBeforeAddingItemsLast=count($lang);

echo "<pre>";

array_push($lang, "JSON","Cookies","ADF");
$arrayAfterAddingItemsLast=count($lang);

echo "<pre>";

print_r($lang);

echo "<br><h3>The item which added is : ";
for ($i=$arrayBeforeAddingItemsLast; $i < $arrayAfterAddingItemsLast; $i++) { 
	echo $lang[$i];

	if ($i<$arrayAfterAddingItemsLast-1) {
		echo ", ";
	}
}

echo "</h3>";
echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Search Items without Index in Array:-<br></h2>";

print_r($lang);


$item = "Javacript";

if(in_array($item, $lang)){
	echo "<br><h3>" . $item . ", is found in array </h3>";
}
else{
	echo "<br><h3>" . $item . ", isn't found in array </h3>";
}

echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Search Items with Index in Array:-<br></h2>";

print_r($lang);

$item = "JavaScript";
$arrayIndex=array_search($item, $lang);

if(array_search($item, $lang)){
	echo "<br><h3>" . $item . ", is found in array and its Index is : array[" .$arrayIndex . "]</h3>";
}
else{
	echo "<br><h3>" . $item . ", isn't found in array </h3>";
}

echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Search Items without Index in Array Associative:-<br></h2>";

print_r($arr);

$item = "CSS";

if(array_key_exists($item, $arr)){
	echo "<br><h3>" . $item . ", is found in array</h3>";
}
else{
	echo "<br><h3>" . $item . ", isn't found in array </h3>";
}

echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Reverse(Make reverse for array) :-<br></h2>";

echo "<pre>";

print_r($lang);

echo "<pre>";

$reversedArray = array_reverse($lang);

echo "<pre>";

print_r($reversedArray);


/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Shuffle(Make random array) :-<br></h2>";

echo "<pre>";

print_r($CAF_4D);

echo "<pre>";

shuffle($CAF_4D);

echo "<pre>";

print_r($CAF_4D);

echo "<pre>";

echo "<pre>";

echo "<br><h3>First Group D is : ". $CAF_4D[0] ."</h3>";

echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Unique(Make array's items unique) :-<br></h2>";

echo "<pre>";

print_r($numbers);

echo "<pre>";

$unique = array_unique($numbers);

echo "<pre>";

print_r($unique);

echo "<pre>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Chunk(Convert into smaller arrays) :-<br></h2>";

echo "<pre>";

print_r($CAF_CUP);

echo "<pre>";

$Groups = array_chunk($CAF_CUP, 4);

print_r($Groups);

echo "<pre>"; 	

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Random(Make random array) :-<br></h2>";

echo "<pre>";

print_r($Groups);

echo "<pre>";

$advancedTeams = array_rand($Groups,2);

shuffle($Groups[0]);
shuffle($Groups[1]);
shuffle($Groups[2]);
shuffle($Groups[3]);

echo "<pre>";

print_r($Groups);

echo "<pre class ='random'> ";

print_r($advancedTeams);

echo "</pre>";

echo "<h3><span>Group A : </span>" . $Groups[0][$advancedTeams[0]] . ", " . $Groups[0][$advancedTeams[1]] . "</h3>";
echo "<h3><span>Group B : </span>" . $Groups[1][$advancedTeams[0]] . ", " . $Groups[1][$advancedTeams[1]] . "</h3>";
echo "<h3><span>Group C : </span>" . $Groups[2][$advancedTeams[0]] . ", " . $Groups[2][$advancedTeams[1]] . "</h3>";
echo "<h3><span>Group D : </span>" . $Groups[3][$advancedTeams[0]] . ", " . $Groups[3][$advancedTeams[1]] . "</h3>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Sort-Index(Sort, Rsort) :-<br></h2>";
/*
	SORT_REGULAR
	SORT_STRING
*/
echo "<pre>";

print_r($langs);

echo "<pre>";

sort($langs,SORT_STRING);

echo "<pre class = 'sort'>";

print_r($langs);

echo "<pre>";

Rsort($langs,SORT_REGULAR);

echo "<pre class = 'rsort'>";

print_r($langs);

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Sort-Associative for values(ASort, ARsort) :-<br></h2>";
/*
	SORT_REGULAR
	SORT_STRING
*/
echo "<pre>";

print_r($arr);

echo "<pre>";

Asort($arr,SORT_STRING);

echo "<pre class = 'sort'>";

print_r($arr);

echo "<pre>";

ARsort($arr,SORT_REGULAR);

echo "<pre class = 'rsort'>";

print_r($arr);

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Sort-Associative for Keys(KSort, KRsort) :-<br></h2>";
/*
	SORT_REGULAR
	SORT_STRING
*/
echo "<pre>";

print_r($arr);

echo "<pre>";

Ksort($arr,SORT_STRING);

echo "<pre class = 'sort'>";

print_r($arr);

echo "<pre>";

KRsort($arr,SORT_REGULAR);

echo "<pre class = 'rsort'>";

print_r($arr);

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Sum of Array :-<br></h2>";

echo "<pre>";

print_r($langs);

$sum = array_sum($langs);

echo "<br><h3>Array-Sum = ". $sum ."</h3>";

/*==============================================================================*/

echo "<pre>"; 	
echo "<hr>";
echo "<h2>Array Fill:-<br></h2>";

echo "<pre>";

print_r($arr);

echo "<pre>";

$fill = array_fill(1, 4, $arr);

echo "<pre>";

print_r($fill);

echo "<pre>";