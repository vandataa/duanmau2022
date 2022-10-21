<div class="flex">
    <div class="mt-2 w-[990px] m-1 rounded bg-white ">
        <h1>Thông tin đặt hàng</h1>
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="thongtinkhachhang">
<?php   
if(isset($_SESSION['user'])){
    $name = $_SESSION['user']['name'];
    $address = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $phone = $_SESSION['user']['phone'];
}
else{
    $name ='';
    $address ='';
    $email ='';
    $phone ='';
}
?>
            <h1>Người đặt hàng</h1>
            <input type="text" name="name" value="<?=$name?>" id="">
            <h1>Địa chỉ</h1>
            <input type="text" name="address" value="<?=$address?> ">
            <h1>Email</h1>
            <input type="text" name="email" value="<?=$email?> ">
            <h1>Số điện thoại</h1>
            <input type="text" name="phone"  value="<?=$phone?>">
            </div>
            <div class="phuongthuc">
                <input type="radio" name="chuyenkhoan" checked value="">Thanh toán online
                <input type="radio" name="nhanhang"  value="">Thanh toán khi nhận hàng
            </div>
            <div class="thongtinbill w-[1000px]">
               <table>

               <?php
             viewcart();
               ?>
               </table>
            </div>
            <div class="dathang">
                <input type="submit" name="dathang" value="Xác nhận đặt hàng">
            </div>
    </form>
    </div>