<div class="flex mt-2">
    <div class="sanpham max-w-5xl mr-2">
        <div class="img mb-2">
            <img class="rounded" src="./uploads/ahMaDme.jpeg" alt="">
            <div class="">
                
            </div>
        </div>

        <div class="grid grid-cols-3 gap-2 w-[1000px] bg-white p-3">
            <?php

foreach ($spnew as $spn) {
    extract($spn);
    $hinh = $img_pad . $img;
    $ctsp = "index.php?act=ctsp&id=" . $id;
    echo '
        <div class="sp border border-slate-800">
            <a href="' . $ctsp . '"><img class="mx-auto w-[200px] h-auto mt-2" src="' . $hinh . '" alt=""></a>
            <a href="' . $ctsp . '"><h1 class="text-center text-[18px] font-bold">' . $name . '</h1></a>
            <h1 class="text-center text-[18px] font-bold text-orange-400">' . $price . ' $</h1> 
            <form action="index.php?act=addtocart" method="POST">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" class="ml-[90px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700 hover:text-orange-400" name="addtocart" value="Mua">
                <input type="submit" class="ml-[10px] bg-blue-300 p-[3px] rounded mb-[10px] text-white hover:bg-sky-700 hover:text-orange-400" name="addtocart" value="Thêm Giỏ hàng">
            </form>
        </div>';
}
?>
        </div>
    </div>
    <div class="thongtin max-w-2xl ">
       