<?php 
	include 'user.php';

	class Student extends User {

		public function add_demo() {
			echo "Test thu add student";
		}

	}

	$student = new Student();
	$student->add_demo();
?>