<!DOCTYPE html>
<html>
<head>

<title>Live chatbox</title>
<style type="text/css">
.chat-box {
    position:fixed;
    right:15px;
    bottom:0;
    box-shadow:0 0 0.1em #000;
	border-radius:8px;
}

.chat-closed {
    width: 250px;
    height: 35px;
    background:#101010;
    line-height: 35px;
    font-size: 18px;
    text-align: center;
    border:1px solid #777;
    color: white;
	border-radius:8px;
}

.chat-header {
    width: 250px;
    height: 35px;
    background: #101010;
    line-height: 33px;
    text-indent: 20px;
    border:1px solid #777;
    border-bottom:none;
	border-radius:8px;
	color: white;
}

.chat-content{
    width:250px;
    height:300px;
    background:#ffffff;
    border:1px solid #777;
    overflow-y:auto;
    word-wrap: break-word;
	border-radius:8px;
}

.box{
    width:10px;
    height:10px;
    background:green;
    float:left;
    position:relative;
    top: 11px;
    left: 10px;
    border:1px solid #ededed;
	border-radius:8px;
	
}

.hide {
    display:none;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}

</style>
</head>
<body>
<div class="chat-box">
<button class="chat-closed"><span class="glyphicon glyphicon-menu-up"></span>&nbsp;</span>Chat Now</button>
<div class="chat-header hide"><div class="box"></div>Live Chat</div>
<div class="chat-content hide">

<p style= "padding-left:10px" ><font size="2">Have any question?</p>
<p style= "padding-left:10px"><font size="2">Take online support!!</p>

<div class="container">
  <img src="slide_images/chat.jpg" alt="Avatar" style="width:100%;">
  <p><font size="2">Assalamualaikum. How can Freshy Food help you?</p>
  <span class="time-right">11:00</span>
</div>



</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".chat-closed").on("click",function(e){
        $(".chat-header,.chat-content").removeClass("hide");
        $(this).addClass("hide");
    });

    $(".chat-header").on("click",function(e){
        $(".chat-header,.chat-content").addClass("hide");
        $(".chat-closed").removeClass("hide");
    });
});
</script>
</body>

</html>