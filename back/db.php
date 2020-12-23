<?php
$keyWord = trim(filter_var($_POST['keyWord'], FILTER_SANITIZE_STRING));
require 'connectDb.php';
if ($keyWord == ''){
    $query = $pdo->query('SELECT * FROM goods');
}else{
    $query = $pdo->query("SELECT * FROM goods WHERE title LIKE '".$keyWord."'");
}
while($row = $query->fetch(PDO::FETCH_OBJ)){
    echo
        '<div class="mainProductItem">
                <div>
                    <a class="order" href="#modalOrder" data-toggle="modal" data-goodsId="'.$row->goodsId.'" data-title="'.$row->title.'" data-price="'.$row->price.'">
                        <div class="productCardConteiner">
                            <div class="productCardImageContainer">
                                <div class="productCardImage">
                                    <img src="' . $row->img . '" alt="" title="" class="">
                                </div>
                            </div>
                            <div class="productCardInfo">
                                <span class="productCardInfoTitle">' . $row->title . '</span>
                                <span class="productCardInfoDescription">' . $row->descroption . '</span>
                                <div>
                                    <span class="productCardInfoPrice" style="color: rgb(0, 0, 0);">' . $row->price .'</span>
                                </div>
                            </div>
                            <a type="button" class="btn btn-outline-success my-2 order" href="#modalOrder" data-toggle="modal" data-goodsid="'.$row->goodsId.'" data-title="'.$row->title.'" data-price="'.$row->price.'">Замовити</a>
                        </div>
                    </a>
                </div>
            </div>';
}
?>


