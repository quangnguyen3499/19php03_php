<?php 
	class User {

		// public, protected, private

		public $username = 'php03';
		public $phone;

		private function add() {
			echo "Add user";
		}

		public function delete() {
			$a = 5;
			$b = 7;
			return $a + $b;
		}

		public function add_demo() {
			$this->add();
		}
	}

?>