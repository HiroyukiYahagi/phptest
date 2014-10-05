<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FY15　テクコン忘年会</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script>
      jQuery(function($) {
        var $view = $('#view'),
            $data = $('input[name="data"]');

        /**
         * データ取得
         */
        function getData() {
          $.post('goToNext.php?mode=view', {}, function(data) {
            //$view.html(data);
            checkUpdate();
          });
        }

        /**
         * 更新チェック
         */
        function checkUpdate() {
          $.post('goToNext.php?mode=check', {}, function(data) {
            //var $buffer = '&employeeName=' + <?php echo $_GET['employeeName']; ?> ;
            window.location.href = 'question.php?employeeId=' + <?php echo $_GET['employeeId']; ?> + '&questionId=' + data;
            //window.location.href = 'question.php';
            checkUpdate();
          });
        }

        getData();

      });
    </script>

  </head>
  <body>
  
    <!-- ヘッダー -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h5> あなたの社員番号は<?php echo $_GET['employeeId']; ?> です</h5>
      </div>
    </div>

    <!-- メッセージ -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h5><?php echo $_GET['msg']; ?></h5>
        <h5>しばらくお待ちください</h5>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>