<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>记账简易版</title>
 	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
 	<style type="text/css" media="screen">
 		*{
 			margin:0;padding:0;
 		}
 		html,body{
 			height:100%;overflow: hidden;color:white;
 		}
 		body{
 			background:url('/Public/images/login_bg.jpg') 50% 50% no-repeat;background-size:cover;
 		}
 		.title{
 			font-size:50px;text-align: center;margin-top:100px;
 		}
 		.subscript{
 			text-align: center;font;margin:20px 0;font-size:20px;
 		}
 	</style>
 </head>
 <body>
 	<div class="title">简易记账本</div>
 	<div class="subscript">幸福一家</div>
	<div class="row show-grid">
        <div class="col-md-4"></div>
        <div class="col-md-4">
			<div>
		 		<div class="bs-example" data-example-id="simple-horizontal-form">
				    <form action="/login/dologin" class="form-horizontal">
				      <div class="form-group">
				        <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
				        <div class="col-sm-10">
				          <input name="username" class="form-control" id="inputEmail3" placeholder="请输入账号">
				        </div>
				      </div>
				      <div class="form-group">
				        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
				        <div class="col-sm-10">
				          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
				        </div>
				      </div>
				      <div class="form-group">
				        <div class="col-sm-offset-2 col-sm-10">
				          <div class="checkbox">
				            <label>
				              <!-- <input type="checkbox"> Remember me -->
				            </label>
				          </div>
				        </div>
				      </div>
				      <div class="form-group">
				        <div class="col-sm-offset-2 col-sm-10">
				          <button type="submit" class="btn btn-default">登录</button>
				        </div>
				      </div>
				    </form>
				</div>
		 	</div>
        </div>
        <div class="col-md-4"></div>
    </div>
 	
 </body>
 </html>