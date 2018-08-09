$(function () {
    $('#userform')
        .bootstrapValidator({
            message: 'This value is not valid',//表单出错的全局提示信息
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//通过
                invalid: 'glyphicon glyphicon-remove',//失败
                validating: 'glyphicon glyphicon-refresh'//正在验证
            },
            //需要验证的内容
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6-18之间'
                        },
                    }
                },
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        },
                    }
                },
                password2: {
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        },
                        identical: {
                            field: 'password1',//比较
                            message: '两次密码不一致'
                        },
                    }
                },
                //手机号码的验证
                mobile: {
                    validators: {
                        notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //正则表达式的验证
                        regexp: {
                            regexp: /^[1][3,4,5,7,8,9][0-9]{9}$/,
                            message: '手机号码格式不正确，格式：13900000000'
                        }
                    }
                },

                //真实姓名
                realname: {
                    validators: {
                        notEmpty: {
                            message: '真实姓名不能为空'
                        }
                    },




                    sex: {
                        validators: {
                            notEmpty: {
                                message: '性别不能为空'
                            },
                        },
                    },
                    isAgree: {
                        validators: {
                            notEmpty: {
                                message: '请选择协议'
                            },
                        },
                    },
                }
            }
        })


        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // 使用ajax发送提交表单的数据请求
            var postUrl = "../../api/userAdd.php";
            var postData = $form.serialize();
            // console.log("发送的数据", postData);
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData, function (result) {
                console.log("服务器返回结果", result);
                //根据ajax返回的结果处理前端的业务逻辑
                $("#regLoginModal .modal-title").text('用户注册提示');
                if (result.isSuccess) {
                    $("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>" + result.msg + "等待 <span id='count'>3</span> 秒后自动跳转");
                    $("#regLoginModal").modal("show");
                    //倒计时
                    var num = 3;
                    var timeid = setInterval(function () {
                        num--;
                        $("#count").text(num);
                        if (num == 0) {
                            clearInterval(timeid);
                            location.href = "../../login.php";
                        }
                    }, 1000)
                }
                else {
                    //注册失败
                    $("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>" + result.msg);
                    $("#regLoginModal").modal("show");
                    console.log(result.msg);
                }
            }, 'json');
        });
});

// 登录验证
$(function () {
    $('#loginform')
        .bootstrapValidator({
            message: 'This value is not valid',//表单出错的全局提示信息
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//通过
                invalid: 'glyphicon glyphicon-remove',//失败
                validating: 'glyphicon glyphicon-refresh'//正在验证
            },
            //需要验证的内容
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6-18之间'
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        },
                    }
                },
            }
        })


        .on('success.form.bv', function (e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // 使用ajax发送提交表单的数据请求
            var postUrl = "../../api/loginCheck.php";
            var postData = $form.serialize();
            // console.log("发送的数据", postData);
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData, function (result) {
                // console.log("服务器返回结果", result);
                //根据ajax返回的结果处理前端的业务逻辑
                $("#regLoginModal .modal-title").text('用户注册提示');
                if (result.isSuccess) {
                    $("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>" + result.msg + "等待 <span id='count'>3</span> 秒后自动跳转");
                    $("#regLoginModal").modal("show");
                    //倒计时
                    var num = 3;
                    var timeid = setInterval(function () {
                        num--;
                        $("#count").text(num);
                        if (num == 0) {
                            clearInterval(timeid);
                            location.href = "../../personal.php";
                        }
                    }, 1000)
                }
                else {
                    //登录失败
                    $("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>" + result.msg);
                    $("#regLoginModal").modal("show");
                    console.log(result.msg);
                }
            }, 'json');
        });
});

