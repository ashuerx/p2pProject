<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/min/index.min.css">

</head>

<body>

    <?php
    include_once("./header.html");
    ?>
        <!-- 轮播 -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./dist/images/banner01.jpg" alt="">
                </div>
                <div class="item">
                    <img src="./dist/images/banner02.jpg" alt="">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- 特色 -->
        <div class="container">
            <div class="row flex">
                <div class="col-lg-4 col-md-6 col-xs-12 dflex">
                    <img src="./dist/images/feature01.png" alt="">
                    <div class="padLeft">
                        <h4>投资理财</h4>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 dflex">
                    <img src="./dist/images/feature01.png" alt="">
                    <div class="padLeft">
                        <h4>投资理财</h4>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 dflex">
                    <img src="./dist/images/feature01.png" alt="">
                    <div class="padLeft">
                        <h4>投资理财</h4>
                        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
                    </div>
                </div>
            </div>
        </div>

        <!--投资信息列表-->
        <div class="container" id="invest">
            <!--面板的结构-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>借款进行中</h1>
                    <p>
                        <a href="#">进入投资列表</a>
                    </p>
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
                            <td class="hide620">@ladyladyladyladyladyladyladylady</td>
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
                        <tr>
                            <td>lady</td>
                            <td class="hide620">ladyladyladyladyladyladylady</td>
                            <td class="text-info"> 12.00%
                            </td>
                            <td class="text-info">100.00</td>
                            <td class="hide620">
                                按月到期还款
                            </td>
                            <td>100.00%</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">查看</a>
                            </td>
                        </tr>
                        <tr>
                            <td>lady</td>
                            <td class="hide620">ladyladyladyladyladyladylady</td>
                            <td class="text-info"> 12.00%
                            </td>
                            <td class="text-info">100.00</td>
                            <td class="hide620">
                                按月到期还款
                            </td>
                            <td>100.00%</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">查看</a>
                            </td>
                        </tr>
                        <tr>
                            <td>lady</td>
                            <td class="hide620">ladyladyladyladyladyladylady</td>
                            <td class="text-info"> 12.00%
                            </td>
                            <td class="text-info">100.00</td>
                            <td class="hide620">
                                按月到期还款
                            </td>
                            <td>100.00%</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">查看</a>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

        <!--文章信息-->
        <div class="container" id="article">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <!--面板的结构-->
                    <div class="panel panel-default">
                        <!--标题-->
                        <div class="panel-heading">
                            <h1>进行中借款</h1>
                            <p>
                                <a href="#">进入投资列表</a>
                            </p>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <!--面板的结构-->
                    <div class="panel panel-default">
                        <!--标题-->
                        <div class="panel-heading">
                            <h1>进行中借款</h1>
                            <p>
                                <a href="#">进入投资列表</a>
                            </p>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <!--面板的结构-->
                    <div class="panel panel-default">
                        <!--标题-->
                        <div class="panel-heading">
                            <h1>进行中借款</h1>
                            <p>
                                <a href="#">进入投资列表</a>
                            </p>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <!--面板的结构-->
                    <div class="panel panel-default">
                        <!--标题-->
                        <div class="panel-heading">
                            <h1>进行中借款</h1>
                            <p>
                                <a href="#">进入投资列表</a>
                            </p>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                                <li>央视力挺互联网金融
                                    <span>发表日期：2015-03-23</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <?php
    include_once("./footer.html");
    ?>
</body>
<script src="./lib/jquery/jquery-1.11.0.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>

</html>