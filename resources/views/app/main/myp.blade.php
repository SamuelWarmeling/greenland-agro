<html lang="en">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Personal Information</title>
    <link rel="stylesheet" href="{{asset ('my2/profile/static/index/css/main.css?v=1738616930')}}">
    <link rel="stylesheet" href="{{asset ('my2/profile/static/css/swiper.min.css?v=1738616930')}}">
    <link rel="stylesheet" href="{{asset ('my2/profile/static/index/css/index.css?v=1738616930')}}">
    <style>
        body {
            font-family: 'fontb';
        }

        .smallwidth {
            width: 96%;
            height: 40px;
            margin: auto;
            position: relative;
            margin-top: 10px;
            border: 1px solid #14447B;
        }

        .smallwidth img {
            width: 100%;
            height: 42px;
        }

        .inputimg {
            font-size: 14px;
            color: #ffffff;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            line-height: 42px;
            box-sizing: border-box;
            padding-right: 20px;
        }

        .inputimg img {
            width: 20px;
            height: 20px;
            margin-left: 10px;
            margin-right: 22px;
            margin-top: 10px;
        }

        input {
            background: none;
            border: none;
            color: #c2c1c1;
            text-align: right;
            outline: none;
            width: 80%;
            z-index: 100;
            font-size: 15px;
        }

        .riInput {
            background: none;
            border: none;
            color: #c2c1c1;
            text-align: right;
            outline: none;
            width: 96%;
            font-size: 15px;
        }

        .username {
            position: absolute;
            top: 0px;
            left: 50px;
            color: #ffffff;
            z-index: 1;
        }

        .topheader {
            /*margin-bottom: 80px;*/
        }

        button {
            width: 100%;
            height: 42px;
            background: #00A4FF;
            color: #ffffff;
            line-height: 42px;
            border-radius: 21px;
            border: none;
            margin-top: 20px;
            font-size: 14px;
        }

        .morechange {
            width: 15px !important;
            height: 15px !important;
            margin-top: 14px !important;
            margin-right: 0px !important;
        }

        .riponei {
            width: 90%;
            height: 47px;
            margin: auto;
            margin-top: auto;
            margin-top: 10px;
            background-color: #031831;
            display: flex;
            border-radius: 25px;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;

        }

        .newiOP {
            display: flex;
            flex-direction: row;
            margin-left: 20px;
            /*align-items:center;*/
        }

        .texte {
            font-weight: bold;
            line-height: 19px;
            color: #009AEB;
            font-family: 'fonta';
            margin-left: 15px;

        }
    </style>
    <script bis_use="true" type="text/javascript" charset="utf-8"
        data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;,&quot;//lnkd.demdex.net/&quot;,&quot;//radar.cedexis.com/&quot;,&quot;//li.protechts.net/&quot;,&quot;challenges.cloudflare.com/&quot;,&quot;ogs.google.com&quot;]"
        src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script>
</head>

<body __processed_97ea6e5a-85fe-4437-8a1d-fd15fdb8a1d0__="true"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4xNyIsInNjb3JlIjoyMDAxN31d">


    <div class="headerTitle headerTOPtitle" bis_skin_checked="1">
        <a id="btn_back" class="spanRITHeader">
            <svg xmlns="http://www.w3.org/2000/svg" width="7.672" height="13.843" viewBox="0 0 7.672 13.843">
                <defs>
                    <style>
                        .cls-left {
                            fill: none;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 1.5px;
                        }
                    </style>
                </defs>
                <path class="cls-left" d="M1142.31,463.353l-5.861,5.861,5.861,5.861"
                    transform="translate(-1135.699 -462.292)"></path>
            </svg>
        </a>
        Personal Information
    </div>

    <!-- <div class="smallwidth">
    <div class="flex_be inputimg">
      <img src="/uploads/material/mine.png" alt="">
      <div class="username">ID</div>
      <input type="text" value="3042324661" disabled="" maxlength="15">
    </div>
  </div> -->
    <div class="riponei" bis_skin_checked="1">
        <div style="color:#fff" class="newiOP" bis_skin_checked="1">
            <img src="{{asset ('my2/myp/uploads/material/Personalren.png')}}" width="15px" height="17px" alt="">
            <div class="texte" style="width:110px" bis_skin_checked="1">User Name</div>
        </div>
        <div style="flex:1;overflow:hidden;margin-right:9px;" bis_skin_checked="1">
            <input type="text" value="{{user()->phone}}" disabled="" class="riInput" maxlength="15" style="margin-right:15px">
        </div>
    </div>
    <div id="btn_change"  onclick="window.location.href='{{route('user.change.password')}}'"  class="riponei" bis_skin_checked="1">
        <div style="color:#fff" class="newiOP" bis_skin_checked="1">
            <img src="{{asset ('my2/myp/uploads/material/Personalren02.png')}}" width="15px" height="17px" alt="">
            <div class="texte" bis_skin_checked="1">Change Password</div>
        </div>
        <div bis_skin_checked="1">
            <img src="{{asset ('my2/myp/uploads/material/rightPer.png')}}" width="6px" height="10px" style="margin-right:15px">
        </div>
    </div>
    <!-- <div class="smallwidth">
    <a class="flex_be inputimg" href="changepassword.html">
      <img src="/uploads/material/password.png" alt="">
      <div class="username">Change Password</div>
      <img src="/uploads/material/more.png" class="morechange">
    </a>
  </div> -->
   
    <!--<button class="sub">保存</button>-->
    <script src="/static/index/js/jquery-2.1.1.min.js?v=1738616930"></script>
    <script src="/static/index/js/scroll.js?v=1738616930"></script>
    <script>
        $('#btn_back').click(function () {
      window.history.back();
    });

    $('.back').click(function () {
      window.location.href = "/member/mine.html";
    });

    $(".sub").click(function () {
      var password = $("#password").val();
      $.post("", {
        password: password
      }, function (msg) {
        Toast(msg.msg, 2000);
      }, 'json')
    });

    $("#btn_change").click(function (){
      window.location.href = "/login/findpassword.html";
    });

    function Toast(msg, duration) {
      duration = isNaN(duration) ? 3000 : duration;
      var m = document.createElement('div');
      m.innerHTML = msg;
      m.style.cssText =
        "width:70%;padding:0 14px;color: rgb(255, 255, 255);padding:10px;text-align: center;border-radius: 4px;position: fixed;bottom: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 999999;background: rgba(0, 0, 0,.7);font-size: 14px;";
      document.body.appendChild(m);
      setTimeout(function () {
        var d = 0.5;
        m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';
        m.style.opacity = '0';
        setTimeout(function () {
          document.body.removeChild(m)
        }, d * 1000);
      }, duration);

    }
    </script>


</body>

</html>