<html>
<head>
    <meta content="yes" name="apple-mobile-web-app-capable" />
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="startup.gif" rel="apple-touch-startup-image" />    
    <link href="homescreen.gif" rel="apple-touch-icon" />
		<title>eJudge</title>
</head>
<body style='margin:0px'>
  <iframe src='init.php' width=100% height=100% border=1 id='main' ></iframe>
</body>
<script>
  function getApp()
  {
    var app = 'init.php';
    if (localStorage.getItem('eJudgeApp')!= null && localStorage.getItem('eJudgeApp')!='')
      app = localStorage.getItem('eJudgeApp');
  
    return app;
  }
  
  document.getElementById('main').src = getApp();   
</script>
</html>
