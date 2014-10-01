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
          $.post('comet.php?mode=view', {}, function(data) {
            $view.html(data);
            checkUpdate();
          });
        }

        /**
         * 更新チェック
         */
        function checkUpdate() {
          $.post('comet.php?mode=check', {}, function(data) {
            $view.html(data);
            checkUpdate();
          });
        }

        $('#add').submit(function(event) {
          event.preventDefault();
          $.post('comet.php?mode=add', {data: $data.val()}, function(data) {
            $data.val('');
          });
        });

        getData();

        $('#status').html("正答中");

      });
    </script>

  </head>
  <body>
  
    <!-- ヘッダー -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h5> <?php echo $_GET['employeeId']; ?> さんこんにちは</h5>
      </div>
    </div>

    <!-- メッセージ -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <dl>
          <dd id="message">data is here.</dd>
        </dl>
      </div>
    </div>

    <!-- 回答フォーム -->

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <button id="ans1" type="button" class="btn btn-primary btn-lg btn-block"> 1番 </button>
        <button id="ans2" type="button" class="btn btn-info btn-lg btn-block"> 2番 </button>
        <button id="ans3" type="button" class="btn btn-danger btn-lg btn-block"> 3番 </button>
        <button id="ans4" type="button" class="btn btn-success btn-lg btn-block"> 4番 </button>
      </div>
    </div>

    <!-- ステータス -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h5 id="status">aaaaaa</h5>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>