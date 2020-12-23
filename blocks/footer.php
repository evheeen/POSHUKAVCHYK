<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<footer class="siteFotter" id="siteFooter">
    <div class="container pt-1 border-bottom">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3 text-center">
                <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                </svg>
            </div>
            <div class="col-md-9 col-sm-12">
                    <div class="col-md-3 col-sm-6 col-6 pr-0 float-left mb-3">
                    <h5 class="mb-4 font-weight-bold text-uppercase">Хто ми?</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">Ми - Пошукавчик.</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">В нас краще ніж в сина маминої подруги.</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">З нами швидше</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">Все і більше знадеться у нас.</a></li>
                     </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-6 pl-0 mb-3 float-left">
                    <h5 class="mb-4 font-weight-bold text-uppercase">Послуги</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">Швидкий пошук товару</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">Обслуговування</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">Консультація</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                    <h5 class="mb-4 font-weight-bold text-uppercase">Навігація</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../about.php">Контакти</a></li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../services.php">Послуги</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                    <h5 class="mb-4 font-weight-bold text-uppercase">Також ми</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa fa-facebook mr-1"></i> Facebook</a>
                        </li>
                        <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fa fa-youtube mr-1"></i> YouTube</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-12">
                <div class="py-1 d-flex justify-content-center align-items-center">
                    <a class="mr-4" href="/index.php">Copyright by evheeen</a>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_COOKIE['log'] == ''):?>
    <div class="auth">
        <div class="py-1 d-flex justify-content-center align-items-center">
            <a class="mr-4 trigger-btn" href="#modalAuth" data-toggle="modal">Авторизуватись як адміністратор</a>
        </div>
    </div>
    <?php else:?>
        <div class="py-1 d-flex justify-content-center align-items-center">
            <a class="mr-4" id="exitAuth">Вийти з режиму адміністратора</a>
        </div>
    <?php endif;?>
</footer>

<div id="modalAuth" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Авторизація</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" id="login" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="pass" required="required">
                    </div>
                    <div class="alert mt-2" id="errorBlock"></div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" id="submitAuth" value="Увійти">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#submitAuth').click(function () {
        var login = $('#login').val();
        var pass = $('#pass').val();

        $.ajax({
           url: '../back/auth.php',
            type: 'POST',
            cache: false,
            data: {'login':login, 'pass':pass},
            dataType: 'html',
            success: function (data) {
               if (data == true) {
                   $('#errorBlock').text('Ви авторизувались як адміністратор');
                   document.location.replace('../dashboard.php');
               }else{
                   $('#errorBlock').show();
                   $('#errorBlock').text(data);
                   alert(data)
               }
            }
        });
    });

    $('#exitAuth').click(function () {
        $.ajax({
            url: '../back/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                document.location.reload(true);
            }
        });
    });
</script>
