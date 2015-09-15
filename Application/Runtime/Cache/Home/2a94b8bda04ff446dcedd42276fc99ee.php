<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>记账简易版</title>
 	<script type="text/javascript" src="/Public/bootstrap/js/jquery-1.11.2.min.js"></script>
 	<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="/Public/calculator/cal.js"></script>
 	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" href="/Public/calculator/cal.css">
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
	.form-group{
		margin-bottom:30px;
	}
	.no-msg{
		padding-top:20px;text-align: center;
	}
	label{

	}
 	</style>
 </head>
 <body>
	<script type="text/javascript">
	function show_tip () {
		alert('<?php echo ($_GET['tip']); ?>');
	}
	<?php if(session('status') == 'success'): ?>show_tip();
 		<?php echo session('status', null);?>
 	<?php elseif(session('status') == 'error'): ?>
 		show_tip();
 		<?php echo session('status', null); endif; ?>
	</script>
 	<div class="box">
		<div class="cal">
			<div class="calBox">	
			    <div class="calu">
			    	<input type="text" id="text">    	
			        <ul class="one clearfix">
			            <li class="orange on">开机</li>
			            <li class="orange off">关机</li>
			            <li class="orange clea">清屏</li>
			            <li class="black zheng">+/-</li>
			            <li class="black rec">1/x</li>
			            <li class="num">7</li>
			            <li class="num">8</li>
			            <li class="num">9</li>
			            <li class="gray oper">/</li>
			            <li class="black oper">%</li>
			            <li class="num">4</li>
			            <li class="num">5</li>
			            <li class="num">6</li>
			            <li class="gray oper">*</li>
			            <li class="black sq">√</li>           
			            <!--  -->           
			        </ul>
			        <div class="clearfix">
			            <div class="twoBox fl">
			            	<ul class="one fl two">
			                    <li class="num">1</li>
			                    <li class="num">2</li>
			                    <li class="num">3</li>
			                    <li class="gray oper">-</li>
			                    <li class="zero num">0</li>
			                    <li class="num">.</li>
			                    <li class="gray oper">+</li>
			                </ul>
			            </div>
			            <ul class="one three clearfix fl">
			                <li class="black deng fl">=</li>
			            </ul>        
			        </div>
			        <div class="clearfix">
			        	<a href="javascript" class="btn btn-primary btn-lg btn-block" style="width: 93%;" title="">将计算结果设置为花费金额</a>
			        </div>
			    </div>
			</div>
			<input type="text" id="per" style="display:none">
			<input type="text" id="text1" style="display:none">
		</div>

	 	<div class="title">
 			欢迎使用本记账系统
 		</div>
 		<div class="content">
 			<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
			    <ul id="myTabs" class="nav nav-tabs" role="tablist">
			      <li role="presentation" <?php if(empty($_GET['tab']) or $_GET['tab'] == account): ?>class="active"<?php endif; ?> ><a href="#account" id="account-tab" role="tab" data-toggle="tab" aria-controls="account" aria-expanded="false">记账</a></li>
			      <li role="presentation" <?php if($_GET['tab'] == check): ?>class="active"<?php endif; ?>><a href="#check" role="tab" id="check-tab" data-toggle="tab" aria-controls="check" aria-expanded="true">查账</a></li>
			      <li role="presentation" <?php if($_GET['tab'] == finance): ?>class="active"<?php endif; ?>><a href="#finance" role="tab" id="finance-tab" data-toggle="tab" aria-controls="finance" aria-expanded="true">理财</a></li>
			    </ul>
			    <div id="myTabContent" class="tab-content">
			      <div role="tabpanel" class="tab-pane fade <?php if(empty($_GET['tab']) or $_GET['tab'] == account): ?>in active<?php endif; ?>" id="account" aria-labelledby="account-tab">
			       		<div class="mark-account">
							    <form action="/index/add_account" method="post" class="form-horizontal">
							      <div class="form-group">
							        <label for="inputEmail3" class="col-sm-2 control-label">标题：</label>
							        <div class="col-sm-10">
							          <input type="text" name="title" class="form-control" id="inputEmail3" value="<?php if($edit_account['title']): echo ($edit_account['title']); ?>
							          	<?php else: ?>
							          	<?php echo date('Y-m-d');?>记账汇总<?php endif; ?>" placeholder="请输入记账标题">
							        </div>
							      </div>
							      <div class="form-group">
							        <label for="inputPassword3" class="col-sm-2 control-label">金额：</label>
							        <div class="col-sm-10">
							          <input type="text" name="money" class="form-control" id="inputPassword3" value="<?php echo ($edit_account['money']); ?>" placeholder="请输入花费金额 (若填写账单明细后，此将项自动计算)">
							        </div>
							      </div>
								  <div class="form-group">
							        <label for="inputPassword3" class="col-sm-2 control-label">记账描述：</label>
							        <div class="col-sm-10">
								      <textarea name="subscript" class="form-control" rows="3" placeholder="请输入描述"><?php echo ($edit_account['subscript']); ?></textarea>
							        </div>
							      </div>
							      <div class="form-group">
							        <div class="col-sm-offset-10 col-sm-2">
							          <button type="submit" class="btn btn-default">保存</button>
							        </div>
							      </div>
									<input type="hidden" name="id" value="<?php echo I('get.id');?>">
							    </form>
			       		</div>
			      </div>
			      <div role="tabpanel" class="tab-pane fade <?php if($_GET['tab'] == check): ?>in active<?php endif; ?> >" id="check" aria-labelledby="check-tab">
			        <table class="table table-striped table-hover">
				    	<?php if(empty($account)): ?><div class="no-msg">
				    			暂无数据
				    		</div>
			    		<?php else: ?>
					    	<thead>
							    <tr>
							        <th>序号</th>
							        <th>标题</th>
							        <th>花费金额</th>
							        <th>操作</th>
							    </tr>
						    </thead>
						    <tbody>
						        <?php if(is_array($account)): foreach($account as $key=>$single): ?><tr>
								        <th scope="row">1</th>
								        <td><?php echo ($single['title']); ?></td>
								        <td><?php echo ($single['money']); ?> 元</td>
								        <td>
								        	<a href="javascript:;" title="">查看</a>
								        	<a href="/?id=<?php echo ($single['id']); ?>" title="">修改</a>
								        	<a href="/index/delete/id/<?php echo ($single['id']); ?>" onclick="javascript:return confirm('删除后不能恢复，你确定要删除吗？');" title="">删除</a>
								        </td>
							        </tr><?php endforeach; endif; ?>
						    </tbody><?php endif; ?>
				    </table>
			      </div>
			      <div role="tabpanel" class="tab-pane fade <?php if($_GET['tab'] == finance): ?>in active<?php endif; ?> >" id="finance" aria-labelledby="finance-tab">
					理财
			      </div>
			    </div>
			  </div>
 		</div>
	</div>
 </body>
 </html> 
 <script type="text/javascript">
 	$(".cal").click(function (ev) {
 		$(".calBox").show();
 		ev.preventDefault();
 		ev.stopPropagation();
 	});
 	$("body").click(function () {
 		$(".calBox").hide();
 	})
 </script>