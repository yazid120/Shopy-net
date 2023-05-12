<?php 

?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Css link style -->
<link rel="stylesheet" href="views/style/404_denied.css">
<title>404 Page</title>
</head>
<body>
  <style>
    .error_404{
            text-align: center;
        }
    .mic_wrappe_err{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - (1.625rem * 2));
    text-align: center;
  }
    .heading{
    font-weight: 500;
    line-height: 1.1;
    color: #566a7f;
    }
</style>

<div class="mic_wrappe_err">
		<div class="inner-content">
			<h1 class="heading">Page Not Found :(</h1>
			<p class="subheading">Oops! 😖 The requested URL was not found on this server.</p>
		</div>
      <a href="/" class="btn-primary btn">return to home</a>
    <div>
    <img src="http://localhost/Shopy-net/src/views/images/page-misc-error-light.png" alt="page-misc-error-light" width="500"
     class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png" 
    data-app-light-img="illustrations/page-misc-error-light.png">
    </div>
</div>
  
</body>
</html>