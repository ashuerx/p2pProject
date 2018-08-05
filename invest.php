<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/invest.css">
</head>

<body>
    <!-- 头部 -->
    <?php
    include_once('header.html');
    ?>
        <div class="container">
            <!-- 我要投资 -->
            <div class="invest">
                <h4>投资列表</h4>
                <div>
                    <span>标的状态</span>
                    <div class="btn-group paddingLeft" role="group" aria-label="">
                        <button type="button" class="btn btn-default">全部</button>
                        <button type="button" class="btn btn-default">招标中</button>
                        <button type="button" class="btn btn-default">还款中</button>
                    </div>
                </div>
            </div>

            <table class="table el-table table-hover">
                <thead>
                    <tr>
                        <th>借款人</th>
                        <th class="hide620">借款标题</th>
                        <th>年利率</th>
                        <th>金额</th>
                        <th class="hide620">还款方式</th>
                        <th>进度</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>lady</td>
                        <td class="hide620">公司周转</td>
                        <td class="text-info"> 10.00%
                        </td>
                        <td class="text-info">2,000.00</td>
                        <td class="hide620">
                            按月分期还款
                        </td>
                        <td>78.00%</td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">查看</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <!-- 尾部 -->
        <?php
    include_once('footer.html');
    ?>
</body>

</html>