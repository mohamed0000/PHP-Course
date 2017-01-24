<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Explode Test</title>
	<style type="text/css">
	body{
   		background-size: cover;
   		background-attachment: fixed;
   }
	h1{
		font-weight: normal;
		text-shadow: 10px 2px 10px #d47878;
	}
	.cursor{
		display: inline-flex;
		width: 100%;
		border-top: 30px;
		border-color: #4D0000;
		border-style: solid;
		flex-wrap: wrap;
		background-color: white;
		opacity: .9;
	}
	.cursor > div {
   		float: left;
   		box-sizing: border-box;
   		width: 20%;
   		padding: 10px 2px;
   		text-align: center;  
   		white-space: nowrap;
   	}
   .cursor > div:nth-child(even) {
    	background: #eee;     
   }
   .cursor:hover{
   	opacity: 1;
   }
   .cursor >div:hover {
    	opacity: 0.25
   }
   
}
	</style>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXBVchf0-qLeCzPZFiGRo76Hu4QBPO9RgZuUXnecy9yKrkohpk">

</body>
</html>

<?php

//========================================================

$cursors = "auto,default,none,context-menu,help,pointer,progress,wait,cell,crosshair,text,vertical-text,alias,copy,move,no-drop,not-allowed,all-scroll,col-resize,row-resize,n-resize,s-resize,e-resize,w-resize,ns-resize,ew-resize,ne-resize,nw-resize,se-resize,sw-resize,nesw-resize,nwse-resize";

$cursor = explode(",", $cursors); //Explode an string

//=======================================================

// Style of page(CSS)

echo "<style type='text/css'>" ;

for ($i=0; $i < count($cursor); $i++) { 
	echo "." . $cursor[$i] . "{ cursor :" . $cursor[$i] . ";}";
}

echo "</style>";

//=======================================================

// HTML of page
echo "<h1>Cursors</h1>";
echo "<div class = 'cursor'>";

for ($i=0; $i <count($cursor) ; $i++) { 
	echo "<div class = '" . $cursor[$i] ."'>". $cursor[$i] ."</div>";
}

echo "</div>";

//=======================================================