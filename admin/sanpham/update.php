<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpad="../uploads/".$img;
    if(is_file($hinhpad)){
        $hinh = "<img src='".$hinhpad."' width='400'>";
    }
    
    else{
        $hinh ='no photo';
    }
?>
<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?act=update_sp" enctype="multipart/form-data" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Danh Muc</h1>
        <select name="iddm" id="">
            <?php
            foreach($listdm as $dm){
                extract($dm);
                if($iddm==$id)echo '<option value="'.$id.'" selected>'.$tendanhmuc.'</option>';
                echo'<option value="'.$id.'">'.$tendanhmuc.'</option>';
            }
            ?>
        </select>
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên sản phẩm</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="tensp" value="<?php if(isset($name)&&($name!='')) echo $name?>">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Giá</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="gia" value="<?php if(isset($price)&&($price!='')) echo $price?>">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Hình</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="file" name="hinh" value="<?php if(isset($img)&&($img!='')) echo $img?>" >
        <?= $hinh ?>
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Mô tả</h1>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="update" id="update" value="Cập nhật">
        <input type="hidden" name="id" value="<?php  if(isset($id)&&($id>0)) echo $id?>">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=lsp">Danh sách sản phẩm</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
