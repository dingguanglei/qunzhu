<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>区块链帮助-发布群组</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/search.main.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
    	function Check_Publish(){//验证格式
    		var name=$(" input[ name='name' ] ").val();
		var wechat=$(" input[ name='wechat' ] ").val();
    		var about=$(" textarea[ name='about' ] ").val();
    		//alert(about);
    		//联系方式
		if(name==""){
    				alert ("请输入群名称");
			   		document.form.name.focus();
			   		return false;
    		}
		if(wechat==""){
    				alert ("请输入群主微信号");
			   		document.form.wechat.focus();
			   		return false;
    		}
    		if(about==""){
    				alert ("请输入群简介( ^3^ )比如为啥建群，群能给大家提供啥帮助*^_^*");
			   		document.form.about.focus();
			   		return false;
    		}
    	}
		function countChar(){<!--字数统计-->
			var curLength = document.getElementById("about").value.length;
				if (curLength>56){
					alert("超过字数限制，多出的字将被截断！" );
					document.getElementById("about").value = document.getElementById("about").value.substr(0,56);
					curLength = 56;
				}
			document.getElementById("counter").innerHTML = 56 - document.getElementById("about").value.length;
		};
		/*
		function $(m){
			 return document.getElementById(m);
		}*/
		function xiangying(){
		  if(/msie/i.test(navigator.userAgent)){
			  document.getElementById("about").onpropertychange = countChar;
			 } else {
			  document.getElementById("about").addEventListener("input",countChar,false);
			 }
		}
	    window.onload = xiangying;
    </script>
</head>
<body>
<header>
    <!--搜索链接跳转-->
    <div class="nav-btn nav-return">
        <!--返回需要跳转的页面暂时没写-->
		<?php 
		$from=$_GET['from'];
        if($from=="index"){
        	echo " <a href='../index.php'>";
        }else if($from=="inh"){
        	//echo " <a onclick='window.history.back()' style='float:left;'>";
        	echo " <a href='../inh.php'>";
        }
        ?>	
            <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
            <!--<div class="return">返回</div>-->
        </a>

    </div>
    <h2>发布群组</h2>
    <!--
    <div class="nav-btn nav-change">
        <a href="seekhouse_publish.html" >提交一下</a>
    </div>
    -->
</header>
<div class="body rent_bgcolor">
    <div class="select-type">
        <form name="form" id="form" action="../php/publish.php" method="post" onsubmit="return Check_Publish();">
			<fieldset class="form-middle">
				<div class="line-box">
                    <label for="district">群名称</label>
                    <input style="margin-left:60px;" type="text" class="associate" name="name" id="name" maxlength="20">
                </div>
	    </fieldset>
			<fieldset class="form-middle">
				<div class="line-box">
                    <label for="district">群主微信</label>
                    <input style="margin-left:60px;" type="text" class="associate" name="wechat" id="wechat" maxlength="30">
                </div>
            </fieldset>
            <fieldset class="form-middle">
					<div class="line-box">
                    <label class="big" for="about">群简介</label>
                    <!--<textarea name="about" id="about" cols="30" rows="10" placeholder="亲，房源信息描述完整清晰更好租哦！"></textarea>-->
										还可以输入<span id="counter">56</span>字<br/><!--字数统计结束&nbsp;&nbsp;--> 
	   								<textarea style="overflow-y:hidden;overflow-x:hidden" class="wenben" cols="20" rows="5" name="about" id="about" maxlength="56" onkeydown='countChar();' onkeyup='countChar();'></textarea>
        		    </div>
            </fieldset>
	    
            <fieldset class="form-bottom">
                <input class="rentout" type="submit" value="提交">
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>