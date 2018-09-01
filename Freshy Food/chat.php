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
	background-image:url("slide_images/background.png");
}

.chat-closed {
    width: 300px;
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
    width: 300px;
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
    width:300px;
    height:350px;
    background-image:url("slide_images/background.png");
    border:1px solid #777;
    overflow-y:auto;
    word-wrap: break-word;
	border-radius:8px;
}

.box{
    width:10px;
    height:10px;
    background:#29c1aa;
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

.chat-container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
	border-radius:8px;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.chat-container::after {
    content: "";
    clear: both;
    display: table;
}

.chat-container img {
    float: left;
    max-width: 60px;
    width: 20%;
    border-radius: 50%;
}

.chat-container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}


</style>
</head>
<body>
<div class="chat-box">
<button class="chat-closed"><span class="glyphicon glyphicon-menu-up"></span>&nbsp;</span>Chat Now</button>
<div class="chat-header hide"><div class="box"></div>Live Chat</div>
<div class="chat-content hide">
<br>
<center><p style= "padding-left:10px; color:#29c1aa;"><font size="3">We are Team Freshy Food! We are ready to help</p></center>

<div class="chat-container">
  <img src="slide_images/chat.jpg" alt="Avatar" style="width:100%;">
  <p  style="float: left; padding-top:15px;  padding-left:5px; text-color:#29c1aa;"><font size="2">Assalamualaikum.<br>
  How can Freshy Food help you?</p>  
</div>
<br>
<br>
<br>
<br>


<div class="chat-container" style="float: bottom; padding-bottom:10px">
  <span style="float: left; padding-left:5px"><i> your message...</i></span>
  <a href="#"><span style="float: right; padding-left:5px" class="glyphicon glyphicon-earphone"></span>
  <span style="float: right; padding-left:5px" class="glyphicon glyphicon-thumbs-up"></span></a>
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
