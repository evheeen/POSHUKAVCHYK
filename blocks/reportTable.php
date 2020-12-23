<head>
    <link rel="stylesheet" href="../css/report.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="print" style="padding: 0; padding-top: 30px; justify-content: center; text-align: center">
    <button class="btn btn-primary" id="print" style="font-weight: bolder; " >Роздрукувати звіт</button>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 mb-3 text-center">
        <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
        </svg>
        <div class="py-1 d-flex justify-content-center align-items-center"><h1 style="font-size: 1rem">ПОШУКАВЧИК</h1></div>
    </div>
</div>
<div>
    <h2 style="padding-left: 15%; margin-top: -30px; font-size: 1rem; font-weight: normal">Львів, Україна</h2>
    <h2 style="padding-left: 15%; font-size: 1rem; font-weight: normal">ТМ "ПОШУКАВЧИК"</h2>
    <h2 style="padding-left: 15%; font-size: 1rem; font-weight: normal">E-Mail evheeen@gmail.com</h2>
    <h2 style="padding-left: 15%; padding-bottom: 2%; font-size: 1rem; font-weight: normal">Контакстне лице: Бочковський Євген</h2>
</div>
<h1 style="text-align: center; font-size: 1.2rem; padding-bottom: 15px">Звіт останніх замовлень</h1>
<div class="container-xl" style="max-width: 100%;">
    <div class="table-responsive-xl">
        <div class="table-wrapper">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ПІП</th>
                    <th>Тел.</th>
                    <th>Дост.</th>
                    <th>Оплата</th>
                    <th>Місто</th>
                    <th>Відділ.</th>
                    <th>Комент.</th>
                    <th>ID тов.</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require 'back/connectDb.php';
                $query = $pdo->query('SELECT * FROM `orders` ORDER BY `orderId` DESC');
                $i = 1;
                while($row = $query->fetch(PDO::FETCH_OBJ)){
                    echo '<tr>
                                <td>' . $i . '</td>
                                <td>' . $row->nameInfo . '</td>
                                <td>' . $row->phone . '</td>
                                <td>' . $row->delivery . '</td>
                                <td>' . $row->payment . '</td>
                                <td>' . $row->city . '</td>
                                <td>' . $row->postDepartment . '</td>
                                <td>' . $row->comment . '</td>
                                <td>' . $row->goodsId . '</td>
                                <td>' . $row->title . '</td>
                                <td>' . $row->price . '</td>
                                </tr>';
                    $i++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $('#print').click(function () {
        window.print();
    });
</script>