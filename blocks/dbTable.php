<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<script>
    $(document).ready(function(){
        $(".collapse.show").each(function(){
            $(this).siblings(".card-header").find(".btn i").html("remove");
            $(this).prev(".card-header").addClass("highlight");
        });
        $(".collapse").on('show.bs.collapse', function(){
            $(this).parent().find(".card-header .btn i").html("remove");
        }).on('hide.bs.collapse', function(){
            $(this).parent().find(".card-header .btn i").html("add");
        });
    });
</script>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header highlight" id="headingOne">
            <h2 class="clearfix mb-0">
                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Перелік товарів що містить база даних<i class="material-icons">add</i></a>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="container-xl" style="max-width: 100%;">
                <div class="table-responsive-xl">
                    <div class="table-wrapper">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>IMG</th>
                                <th>Назва</th>
                                <th>Опис</th>
                                <th>Ціна</th>
                            </tr>
                            </thead>
                            <tbody><?php
                            require 'back/connectDb.php';
                            $query = $pdo->query('SELECT * FROM `goods` ORDER BY `goodsId` DESC');
                            $i = 1;
                            while($row = $query->fetch(PDO::FETCH_OBJ)){
                                echo '<tr>
                                <td>' . $i . '</td>
                                <td>' . $row->goodsId . '</td>
                                <td>' . $row->img . '</td>
                                <td>' . $row->title . '</td>
                                <td>' . $row->description . '</td>
                                <td>' . $row->price . '</td>
                                </tr>';
                                $i++;
                            }
                            ?></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Перелік замовлень що містить база даних<i class="material-icons">add</i></a>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
        </div>
    </div>
</div>
