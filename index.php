<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ここちきんCMS管理画面</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:500&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper"><!--wrapperエリアの開始-->
        <div id="left_box"><!--left_boxエリアの開始-->
            <div class="globalmenu">
                <ul class="accordion">
                    <li>
                        <a class="panel-heading" href="#">メニュー</a>
                        <ul class="shutter-panel-collapse">
                            <li><a href="php/menu/menuadd.php">追加</a></li>
                            <li><a href="php/menu/menuupdate.php">更新</a></li>
                            <li><a href="php/menu/menudelete.php">削除</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="panel-heading" href="#">ギャラリー</a>
                        <ul class="shutter-panel-collapse">
                            <li><a href="php/gallery/galleryadd.php">追加</a></li>
                            <li><a href="php/gallery/galleryupdate.php">更新</a></li>
                            <li><a href="php/gallery/gallerydelete.php">削除</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="panel-heading" href="#">予約</a>
                        <ul class="shutter-panel-collapse">
                            <li><a href="php/reservation/reservationnotmail.php">予約未確定メール</a></li>
                            <li><a href="php/reservation/reservationmail.php">予約確定メール</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="panel-heading" href="#">お知らせ</a>
                        <ul class="shutter-panel-collapse">
                            <li><a href="php/news/newsadd.php">追加</a></li>
                            <li><a href="php/news/newsupdate.php">更新</a></li>
                            <li><a href="php/news/newsdelete.php">削除</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--globalmenuエリア-->
        </div><!--left_boxエリア-->
        <div id="right_box"><!--right_boxエリアの終了-->

        </div>
    </div><!--wrapperエリアの終了-->
<script src="js/jquery-2.0.2.min.js"></script>
<script src="js/jpix.min.js"></script>
<script>
    $(function () {
		  $('ul.accordion').pixiefyAccordion();
		})
</script>
</body>
</html>