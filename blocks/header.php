<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="../css/order.css">
    <link rel="stylesheet" href="/css/animate.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="/img/box.ico" type="image/x-icon">

    <title><?php echo $siteTitle ?></title>

    <nav class="site-header" id="#top">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="../index.php" aria-label="Goods">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-seam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                </svg>
            </a>
            <a class="py-2 d-none d-md-inline-block font-weight-bold" href="../index.php">Пошукавчик</a>
            <a class="py-2 d-none d-md-inline-block font-weight-bold" href="../services.php">Послуги</a>
            <a class="py-2 d-none d-md-inline-block font-weight-bold" href="../about.php">Контакти</a>
            <?php if ($_COOKIE['log'] != ''): ?>
            <a class="py-2 d-none d-md-inline-block font-weight-bold" href="../dashboard.php">Адмін панель</a>
            </div>
            <?php endif;?>
    </nav>
</head>