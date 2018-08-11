$(function () {
    $.get('../../api/checkState.php', function (result) {
        var htmlStr;
        if (result.isSuccess) {
            htmlStr = `
           <li><a href="#"><span class="glyphicon glyphicon-user"></span>${result.username}</a>  </li>
           <li><a href="#"><span class="glyphicon glyphicon-yen"></span>赶快充值</a></li>
           <li> <a href="../../api/loginOut.php"><span class="glyphicon glyphicon-log-out"></span>注销</a></li>
             `;
        }
        else {
            htmlStr = `
           <li><a href="login.php"><span class="fa fa-sign-in-alt"></span>立即登录</a></li>
           <li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>
           `
        }
        $("#homepage").after(htmlStr);
        // $("#homePage").css('backgroung','red');
        // console.log($("#homePage a"));


    }, "json");
    //接值
    var activePath = location.href;
    // console.log(activePath); 
    var pathId = activePath.split('=')[1];
    // console.log(pathId);
    $(".lineH li").eq(pathId).addClass("active").siblings().removeClass("active");
})