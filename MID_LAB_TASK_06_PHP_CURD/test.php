<?php 

	//print_r($_GET);
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['username'] == null){
			echo "invalid username...";
		}else{
			echo "success";
		}
	}

	//echo $_GET['id'];


	//print("Hello from PHP");
	//echo "test..."."another content...";

/*	$name = "alamin";
	$id = 12;
	$cgpa = 3.5;
	$email = "alamin@aiub.edu";*/

	//$student = array(1, 'alamin', 4.00, 'alamin@aiub.edu');
	/*$student = [1, 'alamin', 4.00, 'alamin@aiub.edu'];
	$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>4.00, 'email'=>'alamin@aiub.edu'];
	echo $student['email'];*/

	/*$students = [
					[1, 'alamin', 4.00, 'alamin@aiub.edu'],
					[2, 'xyz', 2.00, 'xyz@aiub.edu'],
					[3, 'abc', 3.00, 'abc@aiub.edu']
				];*/

	$students = [
					's1'=> ['id'=>1, 'name'=>'Hridoi', 'cgpa'=>4.00, 'email'=>'abcd@aiub.edu'],
					's2'=> ['id'=>2, 'name'=>'Mehedi', 'cgpa'=>3.00, 'email'=>'xyz@aiub.edu'],
					's3'=> ['id'=>3, 'name'=>'Hassan', 'cgpa'=>1.00, 'email'=>'efgh@aiub.edu']
				];

	//echo $students['s2']['email'];

	
/*	function sum($num1, $num2){
		echo $num1+$num2;
	}	
	sum(4,7);*/


	/*if(4==='4'){
		echo "true";
	}else{
		echo "false";
	}*/

	/*for ($i=0; $i < ; $i++) { 
		
	}*/

	/*foreach ($students as $s) {
		echo "<h1>".$s['name']."|".$s['email']."</h1>";
	}*/
?>