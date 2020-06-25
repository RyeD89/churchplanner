<!DOCTYPE html>
<html lang="en">
<head>
<title>Login - Church Planner</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
</head>
<body class="fix-menu">

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
</div>
</div>
</div>

<section class="login-block">

<div class="container">
<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
@csrf
<div class="text-center">
<img src="../files/assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center">Sign In</h3>
</div>
</div>
<div class="form-group form-primary">
<input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
@error('email')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group form-primary">
<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="row m-t-25 text-left">
<div class="col-12">
<div class="checkbox-fade fade-in-primary d-">
<label>
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">Remember me</span>
</label>
</div>
<div class="forgot-phone text-right f-right">
<a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-10">
<p class="text-inverse text-left m-b-0">Thank you.</p>
<p class="text-inverse text-left"><a href="/"><b class="f-w-600">Back to website</b></a></p>
</div>
<div class="col-md-2">
<img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
</div>
</div>
</div>
</div>
</form>

</div>

</div>

</div>

</section>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript" src="../files/assets/js/common-pages.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="fbdf649483c85d21909c47a5-text/javascript"></script>
<script type="fbdf649483c85d21909c47a5-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="fbdf649483c85d21909c47a5-|49" defer=""></script></body>
</html>
