<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="cart__form cart__form--mt35">
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;%">
        <div class="cart__form-label">Додати товар</div>
        <form method="post" action="">
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Заголовок" id="title" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Опис" id="description" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Ціна" id="price" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Зображення" id="img" required="required">
            </div>
            <div class="alert mt-2" id="errorBlock1"></div>
            <div class="form-group" style="width: 50%; padding-left: 25%">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="addGoods" value="Додати">
            </div>
        </form>
    </div>
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;">
        <div class="cart__form-label">Редагувати товар</div>
        <form method="post" action="">
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="ID товару для зміни" id="goodsIdEdit" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Заголовок" id="titleEdit" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Опис" id="descriptionEdit" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Ціна" id="priceEdit" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Зображення" id="imgEdit" required="required">
            </div>
            <div class="alert mt-2" id="errorBlock2"></div>
            <div class="form-group" style="width: 55%; padding-left: 25%">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="editGoods" value="Редагувати">
            </div>
        </form>
    </div>
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;">
        <div class="cart__form-label">Видалити товар</div>
        <form method="post" action="">
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="ID товару" id="goodsId" required="required">
            </div>
            <div class="alert mt-2" id="errorBlock3"></div>
            <div class="form-group" style="width: 50%; padding-left: 25%">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="deleteGoods" value="Видалити">
            </div>
        </form>
        <div class="cart__form-label" style="padding-top: 50px">Звітність</div>
        <div class="form-group" style="width: 70%; padding-left: 10%">
            <a type="submit" class="btn btn-primary btn-block btn-lg" id="deleteGoods" value="Сформувати звіт" href="../report.php" target="_blank">Сформувати звіт</a>
        </div>
    </div>
</div>
<hr>
<div class="cart__form cart__form--mt35">
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;%">
        <div class="cart__form-label">Додати адміністратора</div>
        <form method="post" action="">
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Login" id="login" required="required">
            </div>
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="Password" id="pass" required="required">
            </div>
            <div class="alert mt-2" id="errorBlock4"></div>
            <div class="form-group" style="width: 50%; padding-left: 25%">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="addAdmin" value="Додати">
            </div>
        </form>
    </div>
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;">
        <div class="cart__form-label">Видалити адмістратора</div>
        <form method="post" action="">
            <div class="form-group" style="width: 80%;">
                <input type="text" class="form-control" placeholder="ID адміністратора" id="userId" required="required">
            </div>
            <div class="alert mt-2" id="errorBlock5"></div>
            <div class="form-group" style="width: 50%; padding-left: 25%">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="deleteAdmin" value="Видалити">
            </div>
        </form>
    </div>
    <div class="cart__form-data" style="min-width: 30%; padding-left: 10px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Admin ID</th>
                <th>Login</th>
            </tr>
            </thead>
            <tbody><?php
            require 'back/connectDb.php';
            $query = $pdo->query('SELECT * FROM `admin` ORDER BY `userId` DESC');
            $i = 1;
            while($row = $query->fetch(PDO::FETCH_OBJ)){
                echo '<tr>
                                <td>' . $i . '</td>
                                <td>' . $row->userId . '</td>
                                <td>' . $row->login . '</td>
                                </tr>';
                $i++;
            }
            ?></tbody>
        </table>
    </div>
</div>
<script>
    $('#addGoods').click(function () {
        var title = $('#title').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var img = $('#img').val();
        $.ajax({
            url: '../back/addGoods.php',
            type: 'POST',
            cache: false,
            data: {'title' : title, 'description' : description, 'price' : price, 'img' : img},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlock1').show();
                    $('#errorBlock1').text('Товар успішно доданий');
                    alert('Товар успішно доданий');
                }else{
                    $('#errorBlock1').show();
                    $('#errorBlock1').text(data);
                }
            }
        });
    });

    $('#editGoods').click(function () {
        var goodsIdEdit = $('#goodsIdEdit').val();
        var titleEdit = $('#titleEdit').val();
        var descriptionEdit = $('#descriptionEdit').val();
        var priceEdit = $('#priceEdit').val();
        var imgEdit = $('#imgEdit').val();
        $.ajax({
            url: '../back/editGoods.php',
            type: 'POST',
            cache: false,
            data: {'goodsId' : goodsIdEdit, 'title' : titleEdit, 'description' : descriptionEdit, 'price' : priceEdit, 'img' : imgEdit},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlock2').show();
                    $('#errorBlock2').text('Товар успішно відредагований');
                    alert('Товар успішно відредагований');
                }else{
                    $('#errorBlock2').show();
                    $('#errorBlock2').text(data);
                    alert(data)
                }
            }
        });
    });

    $('#deleteGoods').click(function () {
        var goodsId = $('#goodsId').val();
        $.ajax({
            url: '../back/deleteGoods.php',
            type: 'POST',
            cache: false,
            data: {'goodsId' : goodsId},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlock3').show();
                    $('#errorBlock3').text('Товар успішно видалений');
                    alert('Товар успішно видалений');
                }else{
                    $('#errorBlock3').show();
                    $('#errorBlock3').text(data);
                }
            }
        });
    });

    $('#addAdmin').click(function () {
        var login = $('#login').val();
        var pass = $('#pass').val();
        $.ajax({
            url: '../back/addAdmin.php',
            type: 'POST',
            cache: false,
            data: {'login' : login, 'pass' : pass},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlock4').show();
                    $('#errorBlock4').text('Адмін успішно доданий');
                    alert('Адмін успішно доданий');
                }else{
                    $('#errorBlock4').show();
                    $('#errorBlock4').text(data);
                }
            }
        });
    });

    $('#deleteAdmin').click(function () {
        var userId = $('#userId').val();
        $.ajax({
            url: '../back/deleteAdmin.php',
            type: 'POST',
            cache: false,
            data: {'userId' : userId},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    $('#errorBlock5').show();
                    $('#errorBlock5').text('Адмін успішно видалений');
                    alert('Адмін успішно видалений');
                }else{
                    $('#errorBlock5').show();
                    $('#errorBlock5').text(data);
                }
            }
        });
    });
</script>