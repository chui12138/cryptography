<?php
	$alice = $_POST["text"];
	$key = $_POST["num"];
	$ml = "./yiwei ".$alice.' '.$key.'&& echo "NzM3NTYzNjM2NTczNzM=" '; 
	$info = shell_exec($ml);
	$suc = strpos($info, "NzM3NTYzNjM2NTczNzM=");
	if($info){
		if($suc){$bob = str_replace("NzM3NTYzNjM2NTczNzM=",'',$info);}
		else{$bob = "程序出现错误";}
	}
	else
		$bob = "出现错误或者无输出";
	// echo $info."<br>";
	// echo "*+".$suc."+*"."<br>";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>移位密码演示</title>
    <link rel="stylesheet" href="layui/css/layui.css" media="all">
    <script type="text/javascript" src="layui/layui.js"></script>
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>移位加密结果</legend>
    </fieldset>
    <form class="layui-form" action="yiwei.php" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">明文</label>
            <div class="layui-input-block" style="margin-right: 20px;">
                <textarea name="text" required lay-verify="required" placeholder="" autocomplete="off" class="layui-textarea"><?=$alice?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">密钥</label>
            <div class="layui-input-block" style="margin-right: 20px;margin-top: 20px;">
                <textarea name="num" required lay-verify="required" placeholder="" class="layui-textarea" id="demo2"><?=$key?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">密文</label>
            <div class="layui-input-block" style="margin-right: 20px;margin-top: 20px;">
                <textarea name="num" required lay-verify="required" placeholder="" class="layui-textarea" id="demo2"><?=$bob?></textarea>
                <div></div>
            	<a href="yiwei.html" class="layui-btn" >返回</a>
            </div>
        </div>
</body>

</html>