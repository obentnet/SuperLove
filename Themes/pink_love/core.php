<?php
    $Name = $_GET['name'];
    $Say = $_GET['say'];
    $Name_B = $_GET['name_b'];
?>
<html>
    <head>
        <title>你来啦~<?php echo $Name;?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
        <style>
            body{
                background-color:#F8BBD0;
            }
            .main{
                margin-top:5%;
                text-align:center;
            }
            .name{
                font-size:60px;
                
            }
            .say{
                font-size:30px;
            }
            .chose{
                padding-top:5%;
            }
            /**BUTTON STYLE**/
            .btn1{
                height:50px;
                width: 70px;
                border-width: 0px;
                border-radius: 7px;
                background-color:green;
            }
            .btn2{
                height:50px;
                width: 70px;
                border-width: 0px;
                border-radius: 7px;
                background-color:red;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="name">
                <p class="name"><?php echo $Name;?></p>
            </div>
            <div class="say">
                <?php echo $Say."&nbsp;&nbsp;——".$Name_B;?>
            </div>
            <div class="img">
                <img src="https://s2.ax1x.com/2019/11/18/Ms7GVS.jpg" style="border-radius:20px;margin-top:3%;" alt="">
            </div>
            <div class="chose">
                <button class="btn1" id="yes">好啊</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn2" id="no">不要</button>
            </div>
        </div>
        <footer>
            <script>
                var Dianji=0;
                window.onload=function(){
                	var buhao = document.getElementById("no");
                	var hao = document.getElementById("yes");
                	no.onclick=function(){
                		Dianji++;
                		if(Dianji==1){
                	   			alert("小可爱在考虑下嘛~");
                	   }else if(Dianji==2){
                		   		alert("看见你的第一眼我就心动了");
                	   }else if(Dianji==3){
                		   		alert("做我女朋友，啥都给你");
                	   }else if(Dianji==4){
                		   		alert("天天陪你");
                	  }else if(Dianji==5){
                		   		alert("消息秒回");
                	  }else if(Dianji==6){
                		   		alert("我只想跟你在一起");
                	  }else if(Dianji==7){
                		   		alert("别的女生看都不看一眼");
                                Dianji=1;
                	  }
                	}
                	yes.onclick=function(){
                		alert("小姐姐终于同意了，我爱你");
                	}
                }
            </script>
        </footer>
    </body>
</html>