
<!DOCTYPE html>
<?php  
header("Content-type:text/html;charset=gb2312");  
?>  
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>物理/化学 选科排名</title>

    <!-- Bootstrap core CSS -->
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		$score = $_GET['score'];
		$subject=$_GET['subject'];
	?> 
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Grouped Ranking</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">成绩输入</a></li>
			<li><a href=<?php
				echo '"result.php?score=' . $score . '&subject=' . $subject . '"';
			?>>查询结果</a></li>
            <li><a href="#">详细信息</a></li>
			<li><a href="about.php">关于</a></li>
          </ul>
        </div>
      </div>
    </nav>
<form action="result.php" method="get"/>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		    <li><a href="index.php">成绩输入</a></li>
			<li><a href=<?php
				echo '"result.php?score=' . $score . '&subject=' . $subject . '"';
			?>>查询结果</a></li>
            <li class="active"><a href="#">详细信息 <span class="sr-only">(current)</span></a></li>
			<li><a href="about.php">关于</a></li>
            <!---->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Score Details</h2>
		  <div class="alert alert-info" role="alert">
			  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
			  <span class="sr-only">Hint:</span>
			  你的成绩将以蓝色高亮显示，若有多人并列则将全部高亮。
			</div>
		  <h3 class="sub-header"><?php echo $subject; ?></h3>

          <div class="table-responsive">

            <table class="table table-striped">
              <thead>
                <tr>
				  <th>排名</th>
				  <th>班级</th>
				  <th>语文</th>
				  <th>数学</th>
                  <th>英语</th>
				  <th><?php echo $subject; ?></th>
                  <th>总分</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr class="info">
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr><tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr><tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr><tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr><tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				<tr>
                  <td><b><i>1</i></b></td>
                  <td>12</td>
                  <td>100</td>
				  <td>150</td>
				  <td>100</td>
				  <td>100</td>
				  <td>450</td>
                </tr>
				
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
