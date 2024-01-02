<?php
$conn = mysql_connect("localhost","root","") or 
die("error in connection");

$db = mysql_select_db("company", $conn) or
die("db not found");
$empnoPattern = '/^[0-9]{1,7}$/';
$namePattern = '/^[a-zA-Z]{3,}$/';
$salaryPattern = '/^[0-9]{1,4}$/';
$addressPattern = '/^[a-zA-Z0-9]+$/';
$deptnoPattern = '/^(10|20)$/';


$query1 = "INSERT INTO emp (Empno, Ename, Address, Salary, Deptno) VALUES ('{$_POST['empno']}', '{$_POST['name']}', 
'{$_POST['address']}', {$_POST['salary']}, '{$_POST['dept']}')";
$query2  = "delete from emp where Salary > 100;";
$query3 = "update emp set Salary = Salary + 10;";
#section A

#section B
#perform the insert 
if(isset($_POST['insert']))
{
if(preg_match($empnoPattern, $_POST['empno']) && preg_match($namePattern, $_POST['name'] ) && 
preg_match($salaryPattern, $_POST['salary']) && preg_match($addressPattern, $_POST['address']) &&
preg_match($deptnoPattern, $_POST['dept']))
{
	$result1 = mysql_query($query1) or die("Error");
	$affectedrows = mysql_affected_rows();
echo "$affectedrows record inserted";
}
else 
{
	echo "Something wrong with your entered values please enter the values again";
}

	

}

#perform Delete
elseif(isset($_POST['delete']))
{
if(preg_match($empnoPattern, $_POST['empno']) && preg_match($namePattern, $_POST['name'] ) && 
preg_match($salaryPattern, $_POST['salary']) && preg_match($addressPattern, $_POST['address']) &&
preg_match($deptnoPattern, $_POST['dept'])){
	$result2 = mysql_query($query2) or die("could not delete the record");
echo "Successfully Deleted";	}
else 
{
	echo "Something wrong with your entered values please enter the values again";
}
	
}
#perfom update
elseif(isset($_POST['update']))
{
	if(preg_match($empnoPattern, $_POST['empno']) && preg_match($namePattern, $_POST['name'] ) && 
preg_match($salaryPattern, $_POST['salary']) && preg_match($addressPattern, $_POST['address']) &&
preg_match($deptnoPattern, $_POST['dept'])){
	$result3 = mysql_query($query3);
	$affectedrows = mysql_affected_rows();
	echo $affectedrows." row updated.";
}
else 
{
	echo "Something wrong with your entered values please enter the values again";
}
	
}

?>