@include('partials.header2')			
			<!-- Main Content Starts -->
		 <style>
    	article{
    		margin-top: 0px;
			margin-left:5%;
			//margin-right:5%;
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

    <?php 
          $user_id=$story->user_id;
          $user=User::find($user_id);?>

			<div class="main-content">
				<div class="cd-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- Content Left -->
								<div class="c-display" style="padding: 0px 80px;max-width: 800px;margin: 0px auto;">
									<div class="c-head" style="margin-top: 60px;">
										<div class="c-top clearfix" style="margin-left:-10%">
											<a href="{{route('userpage',array($story->user_id))}}" style="text-decoration:none">
											<div class="cl-head pull-left">
												<?php $image=($user->picture)?$user->picture:Config::get('app.default_dp');?>
												<img src="{{asset($image)}}" alt="">
												<div class="user-details" style="margin-top: -8px;">
													<h5>
														{{$user->username}} <br>
														
													</h5>
												</div>
											</div>
										</a>
											<div class="pull-right">
												<i class="fa fa-heart" style="color: #ccc;margin-right: 3px;"></i>
												<p style="display: inline;margin: 0px;color: #ccc;font-size: 13px;"><a  style="color: #ccc;"><a  id ="head_rec" style="color: #ccc;">{{$rec_count}}人</a>がおすすめしました。</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			 <div id="display-story" style="margin-left:-5%;" edit="false">
   					 {{$story->content}}
				</div>
					<div class="content-display">
					<div class="container" style="max-width: 800px;">
					
							
							<div class="cd-item clearfix">
								<div class="cd-item-icon pull-left">
									@if(!Sentry::check())
									<a  data-toggle="modal" data-target="#myModal"><i class="<?php if($flag==0)echo "fa fa-heart-o";else echo "fa fa-heart" ?>" style=""></i> <span id="rec_span">{{$rec_count}}</span></a>
									<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-comment-o" style="color: rgba(0,0,0,0.6);"></i> <span id="comment_span">{{count($comments)}}</span> </a>
									@else
									
									<a style="text-decoration:none"><i id="recommend" class="<?php if($flag==0)echo "fa fa-heart-o";else echo "fa fa-heart" ?>" style=""></i> <span id="rec_span">{{$rec_count}}</span></a>
									<a id="comment" href="#"><i class="fa fa-comment-o" style="color: rgba(0,0,0,0.6);"></i> <span id="comment_span">{{count($comments)}}</span> </a>
									@endif

									

								</div>
								@if(Sentry::check())
								<?php $crr_user=User::find(Sentry::getUser()->id);
									  $current_user=$crr_user->username;
									  $image=($crr_user->picture)?$crr_user->picture:Config::get('app.default_dp');
								?>
								<input type="hidden" id="currentname" value="{{$current_user}}">
								<input type="hidden" id="image" value="{{$image}}">
								@endif
								<input type="hidden" id="username" value="{{$user->username}}">
								<div class="cd-item-right-icon pull-right">
								<?php 
		$html = $story->content;
		$doc = new Htmldom($html);
		$title = $doc->find('.graf--first',0);
		$de_url = urlencode(Request::url());
		$de_text = urlencode(strip_tags($title) . ' | ' . $user->username . ' | Things（女性のためのブログ）')
		?>
<!-- シェアボタン [ここからコピー] -->
<div class="social-area-syncer">
	<ul class="social-button-syncer">
		<!-- Twitter ([Tweet]の部分を[ツイート]にすると日本語にできます) -->
		<li class="sc-tw"><a data-url="{{Request::url()}}" href="https://twitter.com/intent/tweet?url={{$de_url}}&text={{$de_text}}&hashtags=things&" data-text="{{strip_tags($title)}} | {{$user->username}} | things（女性のためのブログ）"  class="twitter-share-button" data-hashtags="things" data-url="Request::url()" data-lang="ja" data-count="vertical" data-dnt="true" target="_blank"><svg viewBox="0 0 29 29" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M21.967 11.8c.018 5.93-4.607 11.18-11.177 11.18-2.172 0-4.25-.62-6.047-1.76l-.268.422-.038.5.186.013.168.012c.3.02.44.032.6.046 2.06-.026 3.95-.686 5.49-1.86l1.12-.85-1.4-.048c-1.57-.055-2.92-1.08-3.36-2.51l-.48.146-.05.5c.22.03.48.05.75.08.48-.02.87-.07 1.25-.15l2.33-.49-2.32-.49c-1.68-.35-2.91-1.83-2.91-3.55 0-.05 0-.01-.01.03l-.49-.1-.25.44c.63.36 1.35.57 2.07.58l1.7.04L7.4 13c-.978-.662-1.59-1.79-1.618-3.047a4.08 4.08 0 0 1 .524-1.8l-.825.07a12.188 12.188 0 0 0 8.81 4.515l.59.033-.06-.59v-.02c-.05-.43-.06-.63-.06-.87a3.617 3.617 0 0 1 6.27-2.45l.2.21.28-.06c1.01-.22 1.94-.59 2.73-1.09l-.75-.56c-.1.36-.04.89.12 1.36.23.68.58 1.13 1.17.85l-.21-.45-.42-.27c-.52.8-1.17 1.48-1.92 2L22 11l.016.28c.013.2.014.35 0 .52v.04zm.998.038c.018-.22.017-.417 0-.66l-.498.034.284.41a8.183 8.183 0 0 0 2.2-2.267l.97-1.48-1.6.755c.17-.08.3-.02.34.03a.914.914 0 0 1-.13-.292c-.1-.297-.13-.64-.1-.766l.36-1.254-1.1.695c-.69.438-1.51.764-2.41.963l.48.15a4.574 4.574 0 0 0-3.38-1.484 4.616 4.616 0 0 0-4.61 4.613c0 .29.02.51.08.984l.01.02.5-.06.03-.5c-3.17-.18-6.1-1.7-8.08-4.15l-.48-.56-.36.64c-.39.69-.62 1.48-.65 2.28.04 1.61.81 3.04 2.06 3.88l.3-.92c-.55-.02-1.11-.17-1.6-.45l-.59-.34-.14.67c-.02.08-.02.16 0 .24-.01 2.12 1.55 4.01 3.69 4.46l.1-.49-.1-.49c-.33.07-.67.12-1.03.14-.18-.02-.43-.05-.64-.07l-.76-.09.23.73c.57 1.84 2.29 3.14 4.28 3.21l-.28-.89a8.252 8.252 0 0 1-4.85 1.66c-.12-.01-.26-.02-.56-.05l-.17-.01-.18-.01L2.53 21l1.694 1.07a12.233 12.233 0 0 0 6.58 1.917c7.156 0 12.2-5.73 12.18-12.18l-.002.04z" /></svg></a></li>

		<!-- Facebook -->
		<li class="sc-fb"><a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="fb-like" data-href="{{Request::url()}}" data-layout="box_count" data-action="recommend" data-show-faces="true" data-share="false" target="_blank"><svg viewBox="0 0 29 29" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16.39 23.61v-5.808h1.846a.55.55 0 0 0 .546-.48l.36-2.797a.551.551 0 0 0-.547-.62H16.39V12.67c0-.67.12-.813.828-.813h1.474a.55.55 0 0 0 .55-.55V8.803a.55.55 0 0 0-.477-.545c-.436-.06-1.36-.116-2.22-.116-2.5 0-4.13 1.62-4.13 4.248v1.513H10.56a.551.551 0 0 0-.55.55v2.797c0 .304.248.55.55.55h1.855v5.76c-4.172-.96-7.215-4.7-7.215-9.1 0-5.17 4.17-9.36 9.31-9.36 5.14 0 9.31 4.19 9.31 9.36 0 4.48-3.155 8.27-7.43 9.15M14.51 4C8.76 4 4.1 8.684 4.1 14.46c0 5.162 3.75 9.523 8.778 10.32a.55.55 0 0 0 .637-.543v-6.985a.551.551 0 0 0-.55-.55H11.11v-1.697h1.855a.55.55 0 0 0 .55-.55v-2.063c0-2.02 1.136-3.148 3.03-3.148.567 0 1.156.027 1.597.06v1.453h-.924c-1.363 0-1.93.675-1.93 1.912v1.78c0 .3.247.55.55.55h2.132l-.218 1.69H15.84c-.305 0-.55.24-.55.55v7.02c0 .33.293.59.623.54 5.135-.7 9.007-5.11 9.007-10.36C24.92 8.68 20.26 4 14.51 4" /></svg></a></li>

		<!-- はてなブックマーク -->
		<li class="sc-hatena"><a href="http://b.hatena.ne.jp/entry/{{Request::url()}}" class="hatena-btn-icon-link" target="_blank"><span class="icon-hatena"></span></a></li>
	
	
	</ul>

<!-- Facebook用 -->
<div id="fb-root"></div>

</div>
<!-- シェアボタン [ここまでコピー] -->


									@if(Sentry::check())
										@if($bkmrk_flag==0)
										<a href="#" class="btn-bookmark"><i id="bookmark" style="color:#808080"  class="fa fa-bookmark"></i></a>
										@else
										<a href="#" class="btn-bookmark"><i id="bookmark" style="color:#00ab6b" class="fa fa-bookmark bookmark"></i></a>
										@endif
										@else
										<a href="#" class="btn-bookmark" data-toggle="modal" data-target="#myModal"><i id="bookmark" style="color:#808080"  class="fa fa-bookmark"></i></a>
										@endif
										  <?php

										    $throttle = Sentry::findThrottlerByUserId($user->id);
										  ?>
										  @if(Sentry::check())
										  @if(Sentry::getUser()->hasAccess('admin'))
										    <a href="{{route('delete-story',array($story->id))}}" class="btn btn-success" style="border-radius: 50px;"> Delete </a> </td>
										  @endif
										  @endif
								</div>
							</div>
							
							<hr>
							
							<div class="cd-response clearfix">
								<div class="text-disabled clearfix" id="text_comment">
									<span class="circle"><i class="fa fa-user"></i></span>
									<div class="form-group form-display">
										@if(Sentry::check())
										<a class="response" href="#">
											<input type="text" class="form-control" placeholder="コメントを残す" >
										</a>
										@else
										<a href="#" data-toggle="modal" data-target="#myModal">
											<input type="text" class="form-control" placeholder="コメントを残す" >
										</a>
										@endif

									</div>
								</div>
								<div class="display-editor clearfix">
									<div class="form-write clearfix">
										<span  class="circle" style="float: none;"><i class="fa fa-user"></i></span> <strong><?php if(Sentry::check()) echo Sentry::getUser()->username ;?></strong>
									</div>
									
									<div class="display-hidden">
										<div class="form-group form-display">
											<textarea id="comment_txt" class="form-control"　placeholder="Type your comment here" rows="3"></textarea>
										</div>
									</div>
									<div class="btn-group">
										<button class="btn btn-green" id="comment_submit" type="submit" style="border-radius: 50px;">公開</button>
									</div>
								</div>
							</div> 	
							
							<hr>
							
							<h5 style="color: #000;margin-top: 50px;">コメント</h5>
							<hr>
						
							<div class="cd-respond clearfix">
								<br/>
								<a href="#" class="btn btn-default btn-response-show" type="submit" style="border-radius: 50px;margin: 15px 0px;">コメントを表示</a>
							</div>
							
							<div class="display-response clearfix" id="response">
							@foreach($comments as $comment)
							<?php $user=User::find($comment->user_id);?>
								<div class="dr-item">
									<div class="cl-head">
										<?php $image=($user->picture)?$user->picture:Config::get('app.default_dp');?>
										<img src="{{asset($image)}}" alt="">
										<div class="user-details" style="margin-top: -8px;">
											<h5>
												{{$user->username}} <br>
											</h5>
										</div>
										<p style="margin: 20px 0px;">{{$comment->content}}</p>
									</div>
								</div>
								
								<hr>
							 @endforeach
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Main Content Ends -->
		</div>
		


	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    editor = new Dante.Editor(
            {
                id:"{{$story->id}}",
                el: "#display-story",
                debug: false,
                upload_url: "{{route('upload-story-image')}}",
                oembed_url: "{{Config::get('app.embedly_app_oembed_url') . '?key=' . Config::get('app.embedly_app_key') . '&url='}}",
                extract_url: "{{Config::get('app.embedly_app_extract_url') . '?key=' . Config::get('app.embedly_app_key') . '&url='}}"
            }
    )
    editor.start()
    </script>
	
	<script>
		$(document).ready(function(){
			$(".modal-body .signin-content").hide();
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				if (scroll >= 70) {
					$(".c-right").addClass("active");
				}else {
					$(".c-right").removeClass("active");
				}
			});
			
						$(".modal-body .signup").hide();
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				if (scroll >= 650) {
					$(".header").removeClass("non-active").addClass("active");
				}else {
					$(".header").removeClass("active");
				}
			});
			
			$("a.sign-link").click(function(e){
				e.preventDefault();
				$(".modal-body .main-content").hide();
				$(".modal-body .signin").show();
			});
			$("a.signup-link").click(function(e){
				e.preventDefault();
				$(".modal-body .main-content").hide();
				$(".modal-body .signup").show();
			});
			$("a.btn-notify").click(function(e){
				e.preventDefault();
				if(!($(".notification").hasClass("active"))){
					$(".notification").fadeIn().addClass("active");	
					$(".account").fadeOut().removeClass("active");
				}
				else{
					$(".notification").fadeOut().removeClass("active");	
				}
			});
			
			$("a.btn-account").click(function(e){
				e.preventDefault();
				if(!($(".account").hasClass("active"))){
					$(".account").fadeIn().addClass("active");	
					$(".notification").fadeOut().removeClass("active");
				}
				else{
					$(".account").fadeOut().removeClass("active");	
				}
			});
			
			$(".bookmark").click(function(e){
				e.preventDefault();
				if(!($(this).hasClass("active"))){
					$(this).children("i").addClass("fa-bookmark").removeClass("fa-bookmark-o");
					$(this).addClass("active");
				}
				else{
					$(this).children("i").addClass("fa-bookmark-o").removeClass("fa-bookmark");
					$(this).removeClass("active");
				}
			});
			
			$(".response").click(function(e){
				e.preventDefault();
				$(this).parents(".text-disabled").addClass("hidden");
				$(".display-editor").addClass("active");

			});
			
			$("#comment").click(function(e){
				e.preventDefault();
				if($('#username').val()!=-1)
				{
				//alert("hello");
				$("#text_comment").addClass("hidden");
				$(".display-editor").addClass("active");
				}
			});
			
			
			$("a.btn-response-show").click(function(e){
				e.preventDefault();
				//alert("hello");
					$(this).addClass("active").children("i").addClass("fa-times").removeClass("fa-plus");
					$(".display-response").addClass("active");
					$(".cd-respond").addClass("hidden");
			});

			$("a.head-modal").click(function(e){
				e.preventDefault();
				$(".modal-body .main-content").show();
				$(".modal-body .signin").hide();
				$(".modal-body .signup").hide();
			});
				

			$("#comment_submit").click(function(){
				var html=document.getElementById("response").innerHTML;
				$.ajax({
			    type:"POST",
			    url:"{{route('update-comment')}}",
			    data:{'story_id' : "{{$story->id}}",'comment' : $("#comment_txt").val()},
			    success:function(data)
			    {
			    	$(".display-editor").removeClass("active");	
			    	$("#text_comment").removeClass("hidden");
			    	var img_value=$('#image').val();
				    html +="<div class='dr-item'><div class='cl-head'><img src='{{asset('')}}"+img_value+"' alt=''><div class='user-details' style='margin-top: -8px;''><h5>"+$('#currentname').val()+"<br></h5></div><p style='margin: 20px 0px;'>"+$('#comment_txt').val()+"</p>";

					document.getElementById("response").innerHTML = html;
					$("#comment_span").text(data);
			    	
			    }

			  });
		  });

			    $('#recommend').click(function(){
			    if($("#recommend").hasClass("fa fa-heart-o"))
			    {
			        $("#recommend").attr('disabled','disabled');
			        $("#recommend").removeClass("fa fa-heart-o");
			        $("#recommend").addClass("fa fa-heart");
			        $.ajax({
			        type:"POST",
			        url:"{{route('recommend')}}",
			        data:{'story_id': "{{$story->id}}"},
			        success:function(data)
			        {
			            $("#recommend").removeAttr('disabled');
			            $("#rec_span").text(data);
			            $("#head_rec").text(data);
			        }
			    });
			    }
			    else
			    {
			        $("#recommend").attr('disabled','disabled');
			        $("#recommend").removeClass("fa fa-heart");
			        $("#recommend").addClass("fa fa-heart-o"); 
			        $.ajax({
			        type:"POST",
			        url:"{{route('undo-recommend')}}",
			        data:{'story_id': "{{$story->id}}"},
			        success:function(data)
			        {
			            $("#recommend").removeAttr('disabled');
			            $("#rec_span").text(data);
			            $("#head_rec").text(data);
			        }
			    });  
			    }
			 
			});

			  $("a.btn-bookmark").click(function(e){
				e.preventDefault();
				if($("#bookmark").hasClass("bookmark"))
				{
				$.ajax({
			   		type:"POST",
			   		url:"{{route('unbookmark')}}",
			   		data:{'story_id' : "{{$story->id}}"},
			   		success:function(data)
			   		{
			   			$("#bookmark").css("color","#808080");
			   			$("#bookmark").removeClass("bookmark")
			   		}
			   	});	
			   }
			   else
			   {
			   	$.ajax({
					type:"POST",
					url:"{{route('bookmark')}}",
					data:{'story_id': "{{$story->id}}"},
					success:function(data)
					{
						$("#bookmark").css("color", "#00ab6b");
						$("#bookmark").addClass("bookmark")
					}

				});
			   }

			
			});
			
		});	

		/* DOMの読み込み完了後に処理 */
if(window.addEventListener) {
	window.addEventListener( "load" , shareButtonReadSyncer, false );
}else{
	window.attachEvent( "onload", shareButtonReadSyncer );
}

/* シェアボタンを読み込む関数 */
function shareButtonReadSyncer(){

// 遅延ロードする場合は次の行と、終わりの方にある行のコメント(//)を外す
// setTimeout(function(){

// Twitter (オリジナルボタンを使用するので、コメントアウトして無効化)
// window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));

// Facebook
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Google+
var scriptTag = document.createElement("script");
scriptTag.type = "text/javascript"
scriptTag.src = "https://apis.google.com/js/platform.js";
scriptTag.async = true;
document.getElementsByTagName("head")[0].appendChild(scriptTag);

// はてなブックマーク
var scriptTag = document.createElement("script");
scriptTag.type = "text/javascript"
scriptTag.src = "https://b.st-hatena.com/js/bookmark_button.js";
scriptTag.async = true;
document.getElementsByTagName("head")[0].appendChild(scriptTag);

// pocket
(!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js"));

//},5000);	//ページを開いて5秒後(5,000ミリ秒後)にシェアボタンを読み込む

}
	</script>
  </body>
</html>