<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Things | 女性のためのブログサービス</title>
		<meta property="fb:app_id" content="1761832180743115" />
		<meta name="description" content="Thingsは、女性のためのブログサービス" >
		<meta name="keywords" content="Things,シングス,恋愛,ブログ">
		<meta name="og:title" content="Things | 女性のためのブログサービス">
		<meta name="og:description" content="女性のためのブログサービス">
		<meta name="og:image" content="">
		<meta name="og:url" content="https://things.pe">
		<meta name="og:site_name" content="Things">
		<meta name="og:type" content="article">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@things_pe">
		<meta name="twitter:creator" content="@things_pe">
		<meta name="twitter:url" content="https://things.pe">
		<meta name="twitter:title" content="Things | 女性のためのブログサービス">
		<meta name="twitter:description" content="女性のためのブログサービス">
		<meta name="twitter:image" content="https://things.pe/img/logo.png">

		<link rel="canonical" href="https://things.pe">
		<link rel="apple-touch-icon" href="https://things.pe/img/things_logo_01.png">

    <!-- Bootstrap -->
    <link href="{{URL::to('editor/css/normalize.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{URL::to('editor/css/all.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{URL::to('editor/css/dante-editor.css')}}" media="screen" rel="stylesheet" type="text/css">
    <script src="{{URL::to('editor/js/deps.js')}}" type="text/javascript"></script><style type="text/css"></style>
    <script src="{{URL::to('editor/js/dante-editor.js')}}" type="text/javascript"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('icomoon/style.css')}}" rel="stylesheet">
	<!-- Custom CSS -->
    <!--<link href="css/animate.css" rel="stylesheet">-->
	<!-- Custom CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<!-- Outer Starts -->
		<div class="outer">
			<!-- Header Starts -->
			<div class="header">
				<nav class="navbar">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand navbar-black" href="{{route('login')}}"><img src="{{asset('img/logo-black.png')}}" alt="" /></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav navbar-right">
						<li>
							<form class="navbar-form" method="GET" action="{{route('search')}}">
								<div class="input-group add-on">
								  <div class="input-group-btn">
									<button class="btn btn-default btn-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								  </div>
								  <input type="text" class="form-control search-form" placeholder="タイトル、内容を検索" name="search">
								</div>
							</form>
						</li>
						<li>
							@if(!Sentry::check())
							<a  class="btn head-modal"  data-toggle="modal" data-target="#myModal">日記を書く</a>
							@else
							<a href="{{route('blog_editor')}}" class="btn">日記を書く</a>
							@endif
						</li>
						@if(Sentry::check())
						<li>
							<a class="btn-account" id="user_acc" data-toggle="collapse" style="display: inline-block;width: 35px;height: 35px;line-height: 33px;padding: 0px;text-align: center;color: #ccc;border-radius: 100%;border: 1px solid #ccc;margin: 8px 5px 0px;font-size: 18px;"><i class="fa fa-user"></i></a>
						</li>
                        @else
						<li>
							<a  class="btn btn-signin btn-green head-modal" data-toggle="modal" data-target="#myModal" style="color: #02b875; border-color: #02b875;">ログイン / 登録</a>
						</li>
						@endif
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
				
				<!-- Arrow Box -->
			
						<div class='arrow_box account' id="acc_box" style="right: -43px;width: 280px;">
						<ul>
							<li><a href="{{route('blog_editor')}}" style="text-decoration: none; color:inherit">新しい日記</li>
							<li><a href="{{route('drafts')}}" style="text-decoration: none; color:inherit">日記リスト</li>
						</ul>
						<hr/>
						<ul style="font-size: 12px;">
							<li><a href="{{route('profile')}}" style="text-decoration: none; color:inherit">プロフィール</li>
							<li><a href="{{route('settings_medium')}}" style="text-decoration: none; color:inherit">設定</li>
							<li><a href="{{route('logout')}}" style="text-decoration: none; color:inherit">ログアウト</li>
						</ul>
					</div>
			<div class="modal fade" id="myModal" style="padding-right: 0px !important;">
			<div class="modal-dialog">
				<div class="modal-content" style="padding: 220px 0px;">
					<div class="modal-header" style="position: relative;top: -200px;border: 0px;padding: 15px 50px;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body text-center">
						<div class="first-content">
							<div class="main-content">
								<img src="{{asset('img/logo-black.png')}}" alt="" style="width: 100px;" />
								<h4>ログイン、または新しいアカウントを登録</h4>
								<a class=" btn btn-green sign-link" style="border-radius: 50px;padding: 5px 14px;">ログイン</a>
								<a  class="btn btn-green signup-link" style="border-radius: 50px;padding: 5px 14px;">登録</a>
							</div>
							
							<div class="signin-content signin" style="margin: 0px;">
								<h2>Things</h2>
								<h4>メールアドレスとパスワードを入力してログインする</h4>
								<form method="POST" action="{{route('login')}}">
									<div class="form-group">
										<input type="" name="email" class="form-control" id="exampleInputEmail1" placeholder="yourname@example.com">
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<button type="submit" class="btn btn-default btn-green" style="border-radius: 50px;padding: 5px 14px;">ログイン</button>
									<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 50px;padding: 5px 14px;">キャンセル</button>
								</form>
							</div>

							<div class="signin-content signup" style="margin: 0px;">
								<h2>Things</h2>
								<h4 style="color:red">現在、招待制とさせていただきます。</h4>
								<h4>招待された方のみ、下記名前、メールアドレスとパスワードを入力して登録する</h4>
								<form method="POST" action="{{route('register')}}">
									<div class="form-group">
										<input name="username" type="text" class="form-control" placeholder="Username" value="{{Input::old('username')}}" required>
										<input type="" name="email" class="form-control" id="exampleInputEmail1" placeholder="yourname@example.com">
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<button type="submit" class="btn btn-default btn-green" style="border-radius: 50px;padding: 5px 14px;">登録</button>
									<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 50px;padding: 5px 14px;">キャンセル</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Header Ends -->