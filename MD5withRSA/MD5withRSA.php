<?php
	$alice = $_POST["text"];
	$ml = '/usr/java/jdk-15.0.1/bin/java -jar MD5withRSA.jar '.$alice.' && echo "NzM3NTYzNjM2NTczNzM=" '; 
	$info = shell_exec($ml);
	$suc = strpos($info, "NzM3NTYzNjM2NTczNzM=");
	if($info){
		if($suc){
            $bob = str_replace("NzM3NTYzNjM2NTczNzM=",'',$info);
        }
		else{$bob = "程序出现错误，请检查输入是否正确";}
        // else $bob = $info;
	}
	else
		$bob = "出现错误或者无输出";
    // $bob = $ml;
	// echo $info."<br>";
	// echo "*+".$suc."+*"."<br>";
	// $bob = $ml."****".$info

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MD5withRSA</title>
    <link rel="stylesheet" href="layui/css/layui.css" media="all">
    <script type="text/javascript" src="layui/layui.js"></script>
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>MD5withRSA</legend>
    </fieldset>
    <form class="layui-form" action="MD5withRSA.php" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">明文</label>
            <div class="layui-input-block" style="margin-right: 20px;">
                <textarea name="text" required lay-verify="required" placeholder="" autocomplete="off" class="layui-textarea"><?=$alice?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">结果</label>
            <div class="layui-input-block" style="margin-right: 20px;margin-top: 20px;">
                <textarea name="num" required lay-verify="required" placeholder="" class="layui-textarea" id="demo2"><?=$bob?></textarea>
                <div></div>
            	<a href="MD5withRSA.html" class="layui-btn" >返回</a>
            </div>
        </div>
</body>

</html>