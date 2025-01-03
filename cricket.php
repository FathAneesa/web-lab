<html>
<center>
<body>
<?php
$name=["Virat Kohli","Rohit Sharma","Ravichandran Ashwin","Ruturaj Gaikwad","Ajinkya Rahane","Srikar Bharat","Axar Patel","Navdeep Saini","Yashasvi Jaiswal","K 's Bharat"];
echo" <h4>INDIAN CRICKET PLAYERS <h4>
<table border='1px'>
<tr><th>Sl No</th> <th>NAME</th> </tr>";
for($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><td>$sl</td><th>$name[$i]</th></tr>";
}
echo "</table>";
?>
</body>
</html>
