<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<footer class="siteFotter" id="siteFooter">
    <div class="container pt-1 border-bottom">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3 text-center">
                <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                </svg>
            </div>
            <div class="py-1 d-flex justify-content-center align-items-center"><h1>ПОШУКАВЧИК</h1></div>
            <div class="col-md-12">
                <div class="py-1 d-flex justify-content-center align-items-center">
                    <a class="mr-4" href="/index.php">Copyright by evheeen</a>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_COOKIE['log'] != ''):?>
        <div class="py-1 d-flex justify-content-center align-items-center">
            <a class="mr-4" id="exitAuth">Вийти з режиму адміністратора</a>
        </div>
    <?php endif;?>
</footer>
<script>
    $('#exitAuth').click(function () {
        $.ajax({
            url: '../back/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                document.location.replace('/');
            }
        });
    });
</script>