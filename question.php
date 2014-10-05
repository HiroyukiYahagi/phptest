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

    <script type="text/javascript">
      function answered(ans_num){
        //window.location.href="answer.php?employeeId=" + <?php echo $_GET['employeeId']; ?> + "&answer_num=" + ans_num + "&employeeName=" + <?php echo $_GET['employeeName']; ?> ;
        
        //$var = <?php echo $_GET['question_num'] ?>;
        window.location.href="answer.php?employeeId=" + <?php echo $_GET['employeeId']; ?> + "&answer_num=" + ans_num + "&questionId=1";
      }
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
          <h5 id="message">第<?php echo $_GET['questionId'] ?>問</h5>
      </div>
    </div>

    <!-- 回答フォーム -->

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <button id="ans1" onClick="javascript:answered(1);" type="button" class="btn btn-primary btn-lg btn-block"> 1番 </button>
        <button id="ans2" onClick="javascript:answered(2);" type="button" class="btn btn-info btn-lg btn-block"> 2番 </button>
        <button id="ans3" onClick="javascript:answered(3);" type="button" class="btn btn-danger btn-lg btn-block"> 3番 </button>
        <button id="ans4" onClick="javascript:answered(4);" type="button" class="btn btn-success btn-lg btn-block"> 4番 </button>
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