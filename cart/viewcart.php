<div class="flex">
<div class="giohang  w-[1000px] bg-white ">
<h1>Giỏ hàng</h1>
<table>
    <tr>
        <td>Stt</td>
        <td>Hình</td>
        <td>Sản phẩm </td>
        <td>Đơn giá</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td></td>
    </tr> 
    
    <?php 
    $stt = 0;
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $stt++;
        $hinh = $img_path.$cart[2];
        $ttien =  $cart[3]*$cart[4];
        $tong+=$ttien;
        echo '
        <tr>
        <td>'.$stt.'</td>
        <td><img src="'.$hinh.'" height="80px" alt=""></td>
        <td>'.$cart[1].'</td>
        <td>'.$cart[3].'</td>
        <td>'. $ttien.'</td>
        <td><input type="" name="" id="" value="Xóa"></td>
        </tr>
        ';
    }
    echo '
    <tr>
        <td colspan="5"> Tổng tiền</td>
        <td>'.$tong.'</td>
    </tr>
    ';
    ?>
</table>
</div>
