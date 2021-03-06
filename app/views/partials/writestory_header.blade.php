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
		<script src="{{URL::to('editor/js/medium-editor-mobile-plugin.min.js')}}"></script>
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
    <style>
    	article{
    		margin-top: 0px;
    	}
    	.main-content p{
    		margin: 0px;
    	}
    	.arrow_box.publish:after, .arrow_box.publish:before {
		  left: 83%;
		}
		.arrow_box.more:after, .arrow_box.more:before {
		  left: 71%;
		}
		.arrow_box.more {
		  margin-right: 8px;
		}

    </style>

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
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand navbar-black" href="{{route('login')}}"><img src="{{asset('img/logo-black.png')}}" alt="" /></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav nav-text nav-profile">
						<li></li>
					  </ul>
					 
					  <ul class="nav navbar-nav navbar-right">
						<li>
							<a  class="btn btn-green btn-publish">公開　<i class="fa fa-angle-down"></i></a>
						</li>
						<li>
							<a  class="btn-drop btn-account"><i class="fa fa-user"></i></a>
						</li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>	
				
				<!-- Arrow Box -->
				<div class="arrow_box publish clearfix">
					<h5>下書きを保存しました。公開しますか？</h5>	
					<span style="color: #aaa;">タグを入力して、たくさんの人に見てもらいましょう！</span>
					<form id="publish_form" method="POST" action="{{route('publish')}}">
					<input type="text" class="form-control" name="tag_name" rows="3" placeholder="例：女子会">
					<input type="hidden" name="story_id" value="{{$id}}">
					<hr>
					<span style="color: #aaa;position: relative;top: 5px;">用意できました</span>
					<button class="btn btn-green btn-sm pull-right" style="border-radius: 50px;" type="submit">公開</button>
					</form>
				</div>	
				
						<div class='arrow_box account' style="right: -43px;width: 280px;">
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
									<h2>Things</h2>
									<h4>Sign in to Medium or create an account</h4>
									<a class=" btn btn-green sign-link" style="border-radius: 50px;padding: 5px 14px;">Sign In</a>
									<a  class="btn btn-green signup-link" style="border-radius: 50px;padding: 5px 14px;">Sign Up</a>
								</div>
								
								<div class="signin-content signin" style="margin: 0px;">
									<h2>Medium</h2>
									<h4>Enter your credentials to sign in</h4>
									<form method="POST" action="{{route('login')}}">
										<div class="form-group">
											<input type="" name="email" class="form-control" id="exampleInputEmail1" placeholder="yourname@example.com">
											<input type="password" name="password" class="form-control" placeholder="Password" value="admin" required>
										</div>
										<button type="submit" class="btn btn-default btn-green" style="border-radius: 50px;padding: 5px 14px;">Sign in</button>
										<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 50px;padding: 5px 14px;">Cancel</button>
									</form>
								</div>

								<div class="signin-content signup" style="margin: 0px;">
									<h2>Medium</h2>
									<h4>Enter your credentials to sign up</h4>
									<form method="POST" action="{{route('register')}}">
										<div class="form-group">
											<input name="username" type="text" class="form-control" placeholder="Username" value="{{Input::old('username')}}" required>
											<input type="" name="email" class="form-control" id="exampleInputEmail1" placeholder="yourname@example.com">
											<input type="password" name="password" class="form-control" placeholder="Password" value="admin" required>
										</div>
										<button type="submit" class="btn btn-default btn-green" style="border-radius: 50px;padding: 5px 14px;">Sign Up</button>
										<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 50px;padding: 5px 14px;">Cancel</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			</div>	
			
			<!-- Header Ends -->