<div id="login_container">

</div>

<script src="https://g.alicdn.com/dingding/dinglogin/0.0.5/ddLogin.js"></script>
<script>
    var obj = DDLogin({
        id:"login_container",//这里需要你在自己的页面定义一个HTML标签并设置id，例如<div id="login_container"></div>或<span id="login_container"></span>
        goto: "", //请参考注释里的方式
        style: "border:none;background-color:#FFFFFF;",
        width : "365",
        height: "400"
    });

    var handleMessage = function (event) {
        var origin = event.origin;
        console.log("origin", event.origin);
        if( origin == "https://login.dingtalk.com" ) { //判断是否来自ddLogin扫码事件。
            var loginTmpCode = event.data;
            //获取到loginTmpCode后就可以在这里构造跳转链接进行跳转了

            console.log("loginTmpCode", loginTmpCode);
        }
    };
    if (typeof window.addEventListener != 'undefined') {
        window.addEventListener('message', handleMessage, false);
    } else if (typeof window.attachEvent != 'undefined') {
        window.attachEvent('onmessage', handleMessage);
    }
</script>
