<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body class="media-body" id="siteContent">
<div class="mainContentConteiner">
    <div>
        <div class="mainProductsConteiner">
            <?php require 'back/db.php'?>
        </div>
    </div>
</div>
</body>

<div id="modalOrder" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Замовлення</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <?php require 'blocks/modalOrder.php' ?>
                </form>
            </div>
            <div class="modal-footer">
                <div class="alert mt-2" id="errorBlockOrder"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Відмінити</button>
                <button type="button" id="addOrder" class="btn btn-primary">Підтвердити</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.order').click(function () {
        var goodsId = $(this).data('goodsid');
        var title = $(this).data('title');
        var price = $(this).data('price');
        $('#goodsId').val(goodsId);
        $('#title').val(title);
        $('#price').val(price);
        $('#modalOrder').modal();
        return false;
    });

    $('#addOrder').click(function () {
        var goodsIdAdd = $('#goodsId').val();
        var titleAdd = $('#title').val();
        var priceAdd = $('#price').val();
        var nameInfo = $('#nameInfo').val();
        var phone = $('#phone').val();
        var delivery = $('#delivery').val();
        var payment = $('#payment').val();
        var city = $('#city').val();
        var postDepartment = $('#postDepartment').val();
        var comment = $('#comment').val();
        $.ajax({
            url: '../back/addOrder.php',
            type: 'POST',
            cache: false,
            data: {'goodsId':goodsIdAdd, 'title':titleAdd, 'price':priceAdd, 'nameInfo':nameInfo, 'phone':phone,
                'delivery':delivery, 'payment':payment, 'city':city, 'postDepartment':postDepartment,
                'comment':comment},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlockOrder').show();
                    $('#errorBlockOrder').text('Завмовлення успішно додано');
                    alert('Завмовлення успішно додано');
                    document.location.reload(true);
                }else{
                    $('#errorBlockOrder').show();
                    $('#errorBlockOrder').text(data);
                    alert(data);
                }
            }
        });
    });
</script>
