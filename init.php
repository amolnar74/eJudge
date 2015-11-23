<html>
<head>
    <meta content="yes" name="apple-mobile-web-app-capable" />
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="homescreen.gif" rel="apple-touch-icon" />
    <script src="./dist/js/jquery.js"></script>                                   
    <script src="./dist/js/jquery-ui.js"></script>    
    <script src="./dist/js/bootstrap.min.js" ></script>

    <link href="./dist/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="./dist/css/jquery-ui.css" rel="stylesheet">

</head>
<body style='background-color: #CCD1F7;'>
<div class=container style='padding-top:45vh'>
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" class="form-control input-lg" placeholder="application path..." id=path>
      <span class="input-group-btn">
        <button class="btn btn-default input-lg" type="button" onclick='javascript:load_app()'>Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->                      

</div>
<script>
  function load_app()
  {
    localStorage.setItem('eJudgeApp',document.getElementById('path').value);
    location.href = document.getElementById('path').value;
  }
</script>
</body>
</html>
