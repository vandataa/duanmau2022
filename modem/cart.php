<?php 
function viewcart(){
    global $img_pad;
    echo '  <tr>
                <td class="w-[10px]">Stt</td>
                <td class="w-[80px]">Hình</td>
                <td class="w-[90px]">Sản phẩm </td>
                <td class="w-[400px]">Đơn giá</td>
                <td class="w-[80px]">Số lượng</td>
                <td class="w-[90px]">Thành tiền</td>
                <td class="w-[50px]"></td>
                </tr>';
$tong = 0;
$stt=0;
    foreach ($_SESSION['mycart'] as $cart) {
       
        $hinh = $img_pad . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoacart = '<a href="index.php?act=delete_cart&idcart='.$stt.'"><input type="button" value="Xóa"></a>';
           echo '
                <tr>
                    <td>' . $stt . '</td>
                    <td><img src="' . $hinh . '" class="w-[60px] h-auto" alt=""></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . '</td>
                    <td>' . $xoacart . '</td>
                </tr>
                ';
           $stt += 1;
    }
    echo '
                <tr>
                    <td colspan="5"> Tổng tiền</td>
                    <td>' . $tong . '</td>
                </tr>
                ';
}
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3]*$cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($name,$email,$address,$tel,$ngaydathang,$tongdonhang,$total){
    $sql = "INSERT INTO `bill`(name,email,address,tel,) value ('$name','$email','$address','$tel','$ngaydathang','$tongdonhang','$total')";
    pdo_execute($sql);
}
?>