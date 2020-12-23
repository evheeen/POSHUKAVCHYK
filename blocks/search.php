<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet" />
    <link href="../css/searcher.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<section>
<div class="searchBlock">
    <form method="post" action="">
        <div class="inner-form">
            <div class="input-field">
                <button class="btn-search" type="button" name="find" id="find">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg>
                </button>
                <input class="form-control" id="search" name="search" type="text" placeholder="Знайти" value="">
            </div>
        </div>
    </form>
</div>
<script>
    $('#find').click(function () {
        var keyWord = $('#search').val();
        $.ajax({
            url: '../back/db.php',
            type: 'POST',
            cache: false,
            data: {'keyWord':keyWord},
            dataType: 'html',
            success: function (data) {
                if (data == true) {
                    alert(keyWord);
                }
                return false;
            }
        });
    });
    // $(document).on('click', '#find', (function () {
    //     var keyWord = $('#search').val();
    //     $.ajax({
    //         url: '../back/db.php',
    //         type: 'POST',
    //         cache: false,
    //         data: {'keyWord' : keyWord},
    //         dataType: 'html',
    //         success: function (data) {
    //             if (data == true) {
    //                 alert(keyWord);
    //             }
    //             return false;
    //         }
    //     });
    // });
</script>
</section>