<html>
    <head>
        <title>Demo系统登录</title>
        <!-- Custom Theme files -->
        <link href="/css/login.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- Custom Theme files -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Demo系统登录" />
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--Google Fonts-->
    </head>
    <body>
    <!--header start here-->
    <div class="login-form">
        <div class="top-login">
            <span><img src="/images/login/group.png" alt=""/></span>
        </div>
        <h1>Demo系统登录</h1>
        <div class="login-top">
            <form id="login-submit" action="/page" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="login-ic">
                    <i ></i>
                    <input type="text" value="" />
                    <div class="clear"> </div>
                </div>
                <div class="login-ic">
                    <i class="icon"></i>
                    <input type="password" value="" />
                    <div class="clear"> </div>
                </div>

                <div class="log-bwn">
                    <input type="submit" value="登陆" >
                </div>
            </form>
        </div>
        <p class="copy">© 2017.12.06 Develop By Lyn</p>
    </div>
    <!--header start here-->
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/login/login.js"></script>