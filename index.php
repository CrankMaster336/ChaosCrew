<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Wir sind die Chaos Crew auch auf Youtube, Twitch und Steam">
        <meta name="keywords" content="Chaos, Crew, Chaos Crew, Twitch Chaos">
        <title>Chaos Crew</title>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-49447606-3', 'auto');
            ga('send', 'pageview');
        </script>
        <style>
            html, body
            {
                height: 100%;
                overflow-y: hidden;
                overflow-x: hidden
            }
            body{
                font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif; 
                background: rgba(255,255,255,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(209,209,209,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(10%, rgba(255,255,255,1)), color-stop(100%, rgba(209,209,209,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(209,209,209,1) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(209,209,209,1) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(209,209,209,1) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(209,209,209,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#d1d1d1', GradientType=0 );
            }
            .wrapper{
                width: 766px;
                margin: 0 auto; 
                text-align: center;
            }
            .logo{
                height: 450px;
            }
            .clan{
                font-size: 90px;
                letter-spacing: 35px;
                margin-right: -29px;
                font-weight: lighter;
            }
            .name{
                font-size: 80px;
                letter-spacing: 30px;
                margin-right: -29px;
                font-weight: lighter;
            }
            .divider{
                height:5px;
                width: 100%;
                background-color: lightgray; 
                margin: 50px 0;
            }
            .copyright{
                position: absolute;
                right: 0px;
                bottom: 0px;
                color: gray
            }
            .links{
                
                margin: 10px auto; 
                width:1246px;
            }
            a{
                color: black;
            }
            .btn{
                height: 50px;
                width: 300px;
                border: solid 2px white;
                border-radius: 5px;
                float:left;
                margin-right:10px;
                line-height: 0px;
                text-align: center;
            }
            .ts{
                background: url('/img/ts.png') no-repeat 15px 10px;
                background-size: 30px;
            }
            .yt{
                background: url('/img/yt.png') no-repeat 65px 15px;
                background-size: 30px;
            }
            .tw{
                background: url('/img/tw.png') no-repeat 75px 15px;
                background-size: 40px;
            }
            .st{
                background: url('/img/st.png') no-repeat 40px 10px;
                background-size: 33px;
            }
            .ts p,.yt p,.tw p,.st p{
                font-size: 25px;
            }
            .st{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="wrapper">
            <div class="clan">Clan</div>
            <!--<img class="logo" src="img/img-cc-logo.png" alt="CC Logo">-->
            <img class="logo" src="img/img-cc-logo_1.png" alt="CC Logo">
            <div class="divider"></div>
            <div class="name">Chaos Crew</div>
            <div class="copyright">&copy;CC #KBSHS</div>
        </div>  
        <div class="links">
            <a href="ts3server://62.104.20.233?port=10069"><div class="btn ts"><p>Teamspeak Server</p></div></a>
            <a href="https://www.youtube.com/channel/UCcTkV19yJYMnRUG1B1B9uAA"><div class="btn yt"><p>Youtube</p></div></a>
            <a href="http://www.twitch.tv/x_warrior"><div class="btn tw"><p>Twitch</p></div></a>
            <a href="http://steamcommunity.com/groups/chaoscrew939"><div class="btn st"><p>Steam Group</p></div></a>
        </div>
    </body>
</html>
