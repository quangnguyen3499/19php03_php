<!-- 2. Khai báo một đối tượng Customer gồm các thuộc tính

như của User và thêm địa chỉ giao hàng, mã khách hàng

Kế thừa các phương thức của users trừ Add user, list user

Thêm các phương thức như thanh toán, lịch sử mua hàng

Gọi các phương thức Register, thanh toán để ví dụ -->

<?php
include 'BT20a.php';
    class Customer extends User {
        public $ship_address;
        public $id_user;
        public function buy(){
            echo "You have bought this";
        }
        public function history(){
            echo "Things you bought";
        }
    }
    $user = new Customer();
    $user->register();
    echo "<br>";
    $user->buy();
?>