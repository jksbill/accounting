<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>记账简易版</title>
 	<script type="text/javascript" src="/Public/bootstrap/js/jquery-1.11.2.min.js"></script>
 	<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
 	<style type="text/css" media="screen">
 	body{
 		color:#666;
 	}
 	.content{
 		width:80%;margin:50px 10%;
 	}
	.bs-example {position: relative; padding: 45px 15px 15px; margin: 0 -15px 15px; border-color: #e5e5e5 #eee #eee; border-style: solid; margin-right: 0; margin-left: 0; background-color: #fff; border-color: #ddd; border-width: 1px; border-radius: 4px 4px 0 0; -webkit-box-shadow: none; box-shadow: none; 
	} 
	.title{
		font-size:30px;text-align: center;margin-top:50px;
	}
	.mark-account{
		padding:40px 20px 20px 20px;
	}
	.mark-account form{
		background:whitesmoke;padding:40px 75px 20px 0;border: 1px solid #ccc;border-radius: 10px;
	}
	label{

	}
 	</style>
 </head>
 <body>
 	<div class="box">
	 	<div class="title">
 			欢迎使用本记账系统
 		</div>
 		<div class="content">
 			<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
			    <ul id="myTabs" class="nav nav-tabs" role="tablist">
			      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">记账</a></li>
			      <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">查账</a></li>
			    </ul>
			    <div id="myTabContent" class="tab-content">
			      <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
			       		<div class="mark-account">
							    <form action="/admin/login/dologin" class="form-horizontal">
							      <div class="form-group">
							        <label for="inputEmail3" class="col-sm-2 control-label">标题：</label>
							        <div class="col-sm-10">
							          <input type="text" name="title" class="form-control" id="inputEmail3" value="<?php echo date('Y-m-d');?>记账明细" placeholder="请输入记账标题">
							        </div>
							      </div>
							      <div class="form-group">
							        <label for="inputPassword3" class="col-sm-2 control-label">金额：</label>
							        <div class="col-sm-10">
							          <input type="text" name="money" class="form-control" id="inputPassword3" placeholder="请输入花费金额">
							        </div>
							      </div>
								  <div class="form-group">
							        <label for="inputPassword3" class="col-sm-2 control-label">记账描述：</label>
							        <div class="col-sm-10">
								      <textarea name="subscript" class="form-control" rows="3"></textarea>
							        </div>
							      </div>
							      <div class="form-group">
							        <div class="col-sm-offset-10 col-sm-2">
							          <button type="submit" class="btn btn-default">保存</button>
							        </div>
							      </div>

							    </form>
			       		</div>
			      </div>
			      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
			        <table class="table table-striped table-hover">
					    <thead>
					      <tr>
					        <th>#</th>
					        <th>First Name</th>
					        <th>Last Name</th>
					        <th>Username</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <th scope="row">1</th>
					        <td>Mark</td>
					        <td>Otto</td>
					        <td>@mdo</td>
					      </tr>
					      <tr>
					        <th scope="row">2</th>
					        <td>Jacob</td>
					        <td>Thornton</td>
					        <td>@fat</td>
					      </tr>
					      <tr>
					        <th scope="row">3</th>
					        <td>Larry</td>
					        <td>the Bird</td>
					        <td>@twitter</td>
					      </tr>
					    </tbody>
					  </table>
			      </div>
			    </div>
			  </div>
 		</div>
	</div>
 </body>
 </html>