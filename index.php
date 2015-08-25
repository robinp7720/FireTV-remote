<?php

error_reporting(-1);


if (isset($_GET["key"])){
exec('"C:\Program Files (x86)\Android\android-sdk\platform-tools\adb" connect 192.168.178.23');
$key = (int) $_GET["key"];
exec('"C:\Program Files (x86)\Android\android-sdk\platform-tools\adb" shell input keyevent '.$key,$output,$test);
}

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        html,body {
            background-color:#111;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .keys {
            margin: 0 auto;
            width:600px;
            height:600px;
        }
        .row {
            width:600px;
            height:200px;
        }
        .keys a{
            display:block;
            float:left;
            line-height: 200px;
            vertical-align: middle;
        }
        .keys a i{
            line-height: 200px;
            height: 100%;
            width:100%;
            text-align: center;
            color: black;
            font-size: 2em
        }
        .keys .full {
            width:200px;
            height: 200px;
        }

        .middle {
            background: aquamarine;
        }
        .bottom-left {
            background: aquamarine;
            border-top-right-radius: 100%;
            border-bottom-left-radius: 20%;
        }
        .bottom-right {
            background: aquamarine;
            border-top-left-radius: 100%;
            border-bottom-right-radius: 20%;
        }

        .top-left {
            background: aquamarine;
            border-bottom-right-radius: 100%;
            border-top-left-radius: 20%;
        }
        .top-right {
            background: aquamarine;
            border-bottom-left-radius: 100%;
            border-top-right-radius: 20%;
        }
        .up {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 100px 200px 100px;
            border-color: transparent transparent #007bff transparent;

        }

        .down {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 200px 100px 0 100px;
            border-color: #007bff transparent transparent transparent;
        }

        .left {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 100px 200px 100px 0;
            border-color: transparent #007bff transparent transparent;

        }

        .right {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 100px 0 100px 200px;
            border-color: transparent transparent transparent #007bff;
        }
    </style>
</head>
<body>
<div class="keys">
    <div class="row">
        <a href="" class="full top-left"></a>
        <a href="?key=19" class="up"></a>
        <a href="" class="full top-right"></a>
    </div>
    <div class="row">
        <a href="?key=21" class="left"></a>
        <a href="?key=66" class="full middle"></a>
        <a href="?key=22" class="right"></a>
    </div>
    <div class="row">
        <a href="?key=4" class="full bottom-left"><i class="fa fa-undo"></i></a>
        <a href="?key=20" class="down"></a>
        <a href="?key=3" class="full bottom-right"><i class="fa fa-home"></i></a>
    </div>
    <!-- 23 = enter -->
</div>
</body>
</html>