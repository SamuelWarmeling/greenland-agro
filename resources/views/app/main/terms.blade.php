<html style="font-size: 50px;">


<head>
    <meta charset="utf-8">
    <title>SOpti Rise rules </title>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no,viewport-fit=cover">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
  
    <style type="text/css">
        .page-loading-con {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .page-loading {
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            position: relative;
        }

        .loader-outter,
        .loader-inner {
            position: absolute;
            border: 0.1em solid #f79102;
            border-radius: 50%;
        }

        .loader-outter {
            border-left-color: transparent;
            border-bottom: 0;
            width: 100%;
            height: 100%;
            -webkit-animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-outter 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        .loader-inner {
            width: 1em;
            height: 1em;
            left: calc(50% - 0.5em);
            top: calc(50% - 0.5em);
            border-right: 0;
            border-top-color: transparent;
            -webkit-animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
            animation: loader-inner 1s cubic-bezier(0.42, 0.61, 0.58, 0.41) infinite;
        }

        @-webkit-keyframes loader-outter {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loader-outter {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes loader-inner {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @keyframes loader-inner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }
    </style>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            position: relative;
        }
    </style>

    <style type="text/css">
        .fullScreen_bg[data-v-4f4d919c] {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #1d1e26;
            z-index: -1;
        }
    </style>
    <style type="text/css">
        .page-loading-con[data-v-2cac872d] {
            padding: 0.5rem;
            z-index: 999;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 0.12rem;
        }

        .overlay[data-v-2cac872d] {
            z-index: 999;
        }

        .page-loading-con p[data-v-2cac872d] {
            margin-top: 1em;
            white-space: nowrap;
            font-size: 0.5em;
            line-height: 0.5em;
            color: #f79102;
        }
    </style>
    <style type="text/css">
        .btn1 {
            height: 0.9rem;
            border-radius: 0.24rem;
            color: #171d2e;
            font-size: 0.28rem;
            width: 100%;
            background: none;
            border: 0.02rem solid #eee;
        }

        .btn2 {
            height: 0.9rem;
            border-radius: 1.8rem;
            background: #f79102;
            color: #fff;
            font-weight: bold;
            font-size: 0.28rem;
            width: 100%;
            border: 0;
        }

        .btn2.on {
            opacity: 0.5;
        }

        .tipsBox .name {
            color: #fff;
            font-size: 0.28rem;
            align-items: center;
            margin-bottom: 0.2rem;
        }

        .tipsBox .name img {
            width: 0.32rem;
            height: 0.32rem;
            margin-right: 0.14rem;
        }

        .tipsBox .s {
            line-height: 1.4;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .bg-item {
            border-radius: .32rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0.32rem 0 rgba(255, 255, 255, 0.32) inset;
        }

        .theme {
            color: #f79102 !important;
        }

        .valMob.common {
            border-radius: .24rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0.32rem 0 rgba(255, 255, 255, 0.32) inset;
            padding: .28rem;
        }

        .valMob.common:focus-within {
            border-color: #f79102;
        }

        .valMob.common .inp {
            padding: 0;
            border: none;
        }

        .valMob .cname {
            margin-bottom: 0.2rem;
            line-height: 0.26rem;
            font-size: .24rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.6);
        }

        .valMob .inp {
            color: var(--COcolor1);
            padding: 0.24rem 0.28rem;
            align-items: center;
            border-radius: 0.2rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
        }

        .valMob .inp:focus-within {
            border-color: #f79102;
        }

        .valMob .inp input {
            height: 0.48rem;
            background: none;
            border: 0;
            width: 100%;
            color: var(--COcolor1);
        }

        .valMob .inp input::placeholder {
            color: #7b7d82;
        }

        .valMob .inp .yj img {
            height: 0.32rem;
        }

        .adorn {
            position: relative;
        }

        .adorn:before {
            content: "";
            display: block;
            width: 0.07921rem;
            height: 0.55446rem;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAA4CAYAAADevImVAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJYSURBVHgBbVS7jhNBEOzH3OmCMyK4GEFEREREREbED/CdpIiHdBKRE9BJXMAHWFwMstfTTXX37K6NGFv76Jmp7q6qWfp47a9vb3xD/wwxnZ7vD4e3nx7/eXo2ITSR83Hjbm8+bH6/uiO/jIlGmFAhdiPHqhe7R9Oz28tf75uSEf7esUpjKffrPtG73EFz8GQ0yQkZr7ZcsSNA+nitBXFFjolm/I5f3E2Mq6oBpOMq1j0nRFGbd0a3PudBcjx0C9wluDaIDtGIMxlHt1TJkdon5gg4JjyzexPNBj1qMmIE3QXPjdA/sBDvI8+oTBUJfc95lyNnATKNPkAiKZrjugd0E0AVGXJOYqyoUKflJszFVa/8GUdQGeV2PyKx+Ayh4KkaZDxI56QFKy12olFwdUhpo7dZC2L11LxjReCuNdkgkYuS83JDc1SScQ6eJOiKHP0sR+wU6NUgBPBt9VVcQ1rlY+KvvgpoKRJPWYJG0N58GG4dYqVJi8zlKSq5rfwF2vfQQFirr0ofhlPtbFGiRJyBj5MCuPSuSDgnmgv8kqylzggG/rAW2EbnagcfvEVyH70jOeozy8O48B5sNbKpguvxGOzKtPYxbwk9dOgwvIw3eAD8L5TMSGltyzxThmuBhdAcBbVwSJyngul8AZiyDx2DA3CdfC2GSGkNnwwZRdh8BlMorEaXHgKFesuEjm8Ji3J6OaTVoXHpMfn8KciqAmI9yFDU7HMrWrGpzx8Y/XL18O2+XWD7bE5X+nq1u7tfkycVF1ve/fi+slu+2vLDzy2dDr958pL+M/4Cnns/VZokU6gAAAAASUVORK5CYII=) no-repeat;
            background-size: 100% 100%;
            position: absolute;
            top: 0.31683rem;
            left: 0;
        }

        .mt32 {
            margin-top: .32rem;
        }

        .mb32 {
            margin-bottom: .32rem;
        }

        .van-picker {
            background-color: #1f161f !important;
        }

        .van-picker .van-picker-column__item {
            color: #fff !important;
        }

        .van-picker .van-picker__mask {
            background: none !important;
        }

        .van-picker__confirm {
            color: #f79102 !important;
        }

        html,
        body {
            background: #000000;
        }

        #app {
            position: relative;
            max-width: 8rem;
            margin: 0 auto;
            width: 100%;
            min-height: 100%;
            word-wrap: break-word;
            word-break: normal;
            background: #000;
            color: #fff;
            background-size: 100% 100%;
        }

        .bg {
            position: absolute;
            top: 0;
        }

        .van-popup--bottom {
            left: auto !important;
            max-width: 8rem;
        }

        .pop_type {
            border-radius: 0.24rem 0.24rem 0 0;
            margin: 0 .32rem;
        }

        .pop_type .name {
            line-height: 1rem;
            padding: 0 0.28rem;
        }

        .pop_type ul {
            border-radius: .24rem;
            text-align: center;
            overflow: auto;
            max-height: 8rem;
            background: #1f161f;
        }

        .pop_type ul li {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.08);
            line-height: 1rem;
            padding: 0 0.28rem;
        }

        .pop_type ul li:last-child {
            border-bottom: none;
        }

        .pop_type ul li.on {
            color: #f79102;
        }

        .pop_type .cancel {
            cursor: pointer;
            background: #1f161f;
            margin-top: .24rem;
            text-align: center;
            line-height: 1rem;
            color: #fff;
            border-radius: 1.8rem;
            margin-bottom: .24rem;
        }

        .van-cell-group,
        .van-cell {
            background: none !important;
            margin: -0.02rem 0;
        }

        .van-cell {
            padding: 0.28rem 0.28rem !important;
            color: #fff !important;
        }

        .van-cell::after {
            border-bottom: 0.0198rem solid #e2e8f0 !important;
        }

        .area_pop {
            background: #1f161f;
        }

        .area_pop .title {
            font-size: 0.32rem;
            text-align: center;
            padding: 0.3rem;
        }

        .area_pop .title .abs {
            right: 0.3rem;
            top: 0.35rem;
        }

        .area_pop .title .abs i {
            font-size: 0.32rem;
        }

        .area_pop .tip {
            padding: 0.2rem 0.3rem;
            border-top: 0.02rem solid #eee;
            display: none;
        }

        .area_pop .so {
            height: 0.8rem;
            border-radius: 0.16rem;
            background: rgba(0, 0, 0, 0.24);
            margin: 0 0.3rem;
            padding: 0 0.1rem;
        }

        .area_pop .so .ico {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAcCAYAAAB2+A+pAAADNUlEQVRIS8WXz2sTQRTHv292a1UUEQR/Xnrw51WQqiTZTTezBUWqVBAPgv4FHtTij6O0tif9B1QQerGgiB52k2bTBmpRvCqtopfWKghFFLTN7jzZTTfGtjatpHFuy857n3lvvm/mDaHGYGZy3eEEaXyMGYcB7Abz5siMaBrAWyI854CeSZksEhHX8hmZLjXJcbxOCNwEY+9ynIEwBoUbtm0O1Jq/KNhxhlpAqh9Aay0Hf/k/ChZnbTv14W/2C8Cum08p0AABW2IjZkwLQY+Z+IkG/bWm+R/Df0Gg7wjgHyCmE0pxBxHKWwCAgS8C3Cllemgx+B/gEMoQLsBryluIH8x8W1DQm8lkvi4VfTab3aRY6yKii8xYV55LswQlF4NXwGF6mdSLqkgnmnS9I51OvFpJuvP54sGS7z8GsCuOnFgcmp/232DXe161pxO61tza1nZkciXQeO7g4MhOP5gZjeEARm1phhVRGRE4Ui/hYZxeXdMTK410/gLDyP3AL1bSzjhdrXaK6jRXeBOXDIG6pTSu/0uk820cN98N0NXydmNMWsb+uM7JGRxKIlCR8kL1asJvqSWk5S4qFFyg9A8VtbNI2XZqOFqHk833gelyOc10T2aMC8t1vJx5brZwl5nPR/4F9UnL6JoDF4bBnIicCJy0LTNUZN2Gk/M6oPConG4q2hkjGYOnwLwt/NCEvteyEuN1owLI5Yp7AuWPzYE/2Rljexnsej8BNIcfa5qw0TTN7/UEe563YbaEb3M+Z2xprv0f4B+2NNc3PtXApC3N6EQjJ9s4cRFQkNI0I7CbK/Sy4iuNKCeQuGVnUtGB0tgDRBNH7bbUSASef2QC3GPL9LV6KLv6yCSicZkxKp3MKl8SQZGZo7uZQOekNB7EATXqWpxhpbW0tyenFoJXqRGogIheC/LTlmV9LmegatSn9REX4/Qy86wQItRR01zVVOCr2uzpgk4F4K3E1F8N90vCWJX2loheCtLOWFbifRipk/M6/4AL3KlvQw+8EyR6LCt5n4hU9TaGcCiEvXoTAZeWBIeGUZ3nhxNQwXFAhA3+gicMoEYhtKcyvfQTxvO8faWStlPK5OAvifHh2lNc2NwAAAAASUVORK5CYII=) no-repeat center center;
            width: 0.5rem;
            height: 0.8rem;
            background-size: 0.3rem auto;
        }

        .area_pop .so .flexs {
            margin-left: 0.16rem;
        }

        .area_pop .so input {
            width: 100%;
            background: none;
            border: 0;
        }

        .area_pop .so input::placeholder {
            color: #999;
        }

        .area_pop .so .closes {
            margin-right: 0.1rem;
        }

        .area_pop .so .closes img {
            height: 0.32rem;
        }

        .area_pop ul {
            height: 6rem;
            overflow: auto;
            margin: 0 0.3rem;
        }

        .area_pop ul li {
            border-bottom: 0.02rem solid #393c44;
            padding: 0.22rem 0;
            font-size: 0.24rem;
        }

        .area_pop ul li .ico {
            margin-right: 0.2rem;
        }

        .area_pop ul li .ico img {
            height: 0.32rem;
        }

        .password_pop .van-number-keyboard {
            position: relative;
        }

        .password_pop .van-password-input__security li {
            width: 0.94rem;
            height: 0.9rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 0.16rem;
            color: #222;
            border: 0.02rem solid #213266;
        }

        .password_pop .van-password-input {
            margin: 0;
        }

        .password_pop .van-number-keyboard {
            background: none;
        }

        .password_pop .van-number-keyboard .van-key {
            width: 2.3rem;
            height: 0.96rem;
            background: #fff;
            border-radius: 0.08rem;
        }

        .password_pop .pass {
            max-width: 7rem;
            background: #ffffff;
            padding: 0.28rem;
        }

        .password_pop .pass .box {
            padding: 0.3rem 0;
            position: relative;
        }

        .password_pop .pass .box input {
            position: absolute;
            width: 100%;
            height: 1rem;
            background: none;
            border: 0;
            z-index: 2;
            opacity: 0;
        }

        .password_pop .jianpan {
            background: #fff;
            margin-top: 1rem;
        }

        .password_pop .jianpan p {
            line-height: 0.76rem;
            text-align: center;
            color: #999999;
        }

        .password_pop .title {
            font-size: 0.3rem;
            font-weight: 500;
            line-height: 0.42rem;
        }

        .password_pop .title .abs {
            right: 0;
            top: 0;
        }

        .password_pop .title .abs i {
            font-size: 0.3rem;
        }

        .color1 {
            color: var(--theme-colr);
        }

        .po_center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .flex_center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        :root {
            --COcolor1: #ffffff;
            --COcolor2: #f79102;
            --COcolor3: #5f5f5f;
            --COcolor4: #000000;
            --COcolor5: #808080;
            --COcolor6: rgba(255, 255, 255, 0.4);
            --COborder1: 0.02rem solid rgba(255, 255, 255, 0.2);
            --COborder2: 0.02rem solid #f79102;
            --COborder3: 0.02rem solid #ffadb5;
            --CObackgroundLinear1: linear-gradient(90deg, #E48A1E 0%, #E4711E 100%);
            --CObackgroundLinear2: #f79102;
            --CObackgroundLinear3: #0e0f10;
            --CObackgroundLinear4: #272a2d;
            --CObackgroundLinear5: linear-gradient(180deg, #BA0EFF 0%, #FF1519 100%);
        }

        .custom-image .van-empty__image {
            width: 2.5rem;
            height: auto;
        }
    </style>
    <style type="text/css">
        @charset "utf-8";

        body {
            font: 400 .28rem/100% "\5FAE\8F6F\96C5\9ED1", Helvetica;
            color: #333333;
            -webkit-user-select: none;
            -webkit-text-size-adjust: none;
            word-break: break-all
        }

        body,
        div,
        dl,
        dt,
        dd,
        del,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        fieldset,
        input,
        textarea,
        p,
        blockquote,
        th,
        td,
        menu {
            margin: 0;
            padding: 0;
        }

        input[type=text],
        textarea {
            -webkit-appearance: none;
            outline: 0
        }

        button {
            outline: 0
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        fieldset,
        img {
            border: 0
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        th,
        var {
            font-style: normal;
            font-weight: 400
        }

        ol,
        ul,
        li {
            list-style: none
        }

        caption,
        th {
            text-align: left
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: 400;
            font-style: normal
        }

        q:before,
        q:after {
            content: ''
        }

        abbr,
        acronym {
            border: 0
        }

        header,
        section,
        footer {
            display: block;
            margin: 0;
            padding: 0
        }

        a {
            text-decoration: none;
            color: #333333
        }

        .c:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

        .c {
            *zoom: 1;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: top;
        }

        .rel {
            position: relative;
        }

        .abs {
            position: absolute;
        }

        .fl {
            float: left;
            display: inline;
        }

        .fr {
            float: right;
            display: inline;
        }

        .tac {
            text-align: center;
        }

        .tar {
            text-align: right;
        }

        /* 等分 */
        .table {
            display: table;
            table-layout: fixed;
            width: 100%;
        }

        .table li,
        .cell {
            display: table-cell;
            vertical-align: middle;
        }

        /* 行内 */
        .inline-box {
            font-size: 0;
            text-align: center;
        }

        .inline-box li,
        .inlineb {
            display: inline-block;
            vertical-align: middle;
        }

        .db {
            display: flex;
            display: -webkit-box;
            box-align: center;
            -webkit-box-align: center;

        }

        .db li,
        .flexs {
            -moz-box-flex: 1.0;
            -webkit-box-flex: 1.0;
            box-flex: 1.0
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
        }

        .flex1 {
            flex: 1;
        }


        .line_2x {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            word-break: break-all;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .hide {
            display: none;
        }

        .text-overflow {
            display: block;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .container {
            padding: 0 .26rem;
        }

        input:focus {
            outline: 0
        }

        /*解决苹果下滚动不平滑*/
        ::-webkit-scrollbar {
            display: none;
        }

        /*移动端点击的时候有背景问题*/
        * {
            -webkit-overflow-scrolling: touch;
        }

        /*元素转180度*/
        .xc180 {
            transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            display: block;
        }

        .xc90 {
            transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            display: block;
        }

        .xc_90 {
            transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            display: block;
        }


        .bet {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            -webkit-justify-content: space-between
        }

        .wrap {
            -webkit-flex-flow: wrap;
            flex-flow: wrap;
        }


        .bg-f4 {
            background: #F4F5F9;
        }

        .bg-fff {
            background: #fff;
        }

        .c-red {
            color: rgba(217, 55, 40, 1)
        }

        .c-999 {
            color: #999
        }

        .c-fff {
            color: #222;
        }

        i.iconfont {
            font-size: .48rem;
        }

        .j {
            border: .08rem solid transparent;
            width: 0;
            height: 0;
            border-top-color: #000;
            display: inline-block;
            vertical-align: middle;
        }

        .btn {
            width: 100%;
            height: .84rem;
            font-size: .32rem;
            color: #fff;
            border: 0;
            background: var(--theme-colr);
            border-radius: .12rem;
        }

        .btn.on {
            background: #213266;
            color: #fff;
        }

        ::-webkit-input-placeholder {
            color: #d2d2d2;
        }

        ::-moz-placeholder {
            color: #d2d2d2;
        }

        /* firefox 19+ */
        :-ms-input-placeholder {
            color: #d2d2d2;
        }

        /* ie */
        input:-moz-placeholder {
            color: #d2d2d2;
        }

        .h100 {
            height: 1.1rem;
        }


        input::placeholder {
            color: #999;

        }

        .ellipsis {
            /*white-space: nowrap; !* 禁止文本换行 *!*/
            /*overflow: hidden; !* 隐藏溢出部分的内容 *!*/
            /*text-overflow: ellipsis; !* 使用省略号表示被截断的文本 *!*/
            -webkit-line-clamp: 1;
            /* 用来限制在一个块元素显示的文本的行数*/
            display: -webkit-box;
            /*将对象作为弹性伸缩盒模型显示*/
            -webkit-box-orient: vertical;
            /*设置或检查伸缩盒对象的子元素的排列方式*/
            text-overflow: ellipsis;
            /* 在多行文本的情况下，用...隐藏超出范围的文本*/
            word-break: break-all;
            overflow: hidden;
        }

        /*
组件动画
调用<transition name="相应类名">
必须加上相应的定位类名
从下面滑出在根元素加上类名pop_bottom
*/
        .pop_bottom {
            bottom: 0
        }

        /*从下面滑出动画*/
        .slideToggle-enter {
            visibility: hidden;
            bottom: -3rem;
        }

        .slideToggle-enter-active {
            transition: all .32s;
        }

        .slideToggle-leave-active {
            transition: all 0s;
        }

        .slideToggle-leave-to {
            visibility: visible;
            bottom: 0
        }

        /*从中心展开*/
        .slide-scalc-enter {
            transform: scale(0.51, 0.51);
        }

        .slide-scalc-enter-active {
            transition: all .32s;
        }

        .slide-scalc-leave-active {
            transition: all 0s;
        }

        .slide-scalc-leave-to {
            transform: scale(1, 1);
        }


        .mint-toast-text {
            font-size: .28rem;
            padding: .2rem !important;
        }

        .van-image-preview__overlay {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .van-image-preview {
            max-width: 8rem;
            position: absolute;
            left: 50% !important;
            transform: translateX(-50%);
        }

        @media screen and (min-width: 1080px) {}

        @media screen and (min-width: 320px) and (max-width: 479px) {}

        @media screen and (max-width: 319px) {}
    </style>
    <style type="text/css">
        html {
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Helvetica Neue', Helvetica, Segoe UI, Arial, Roboto, 'PingFang SC', miui, 'Hiragino Sans GB', 'Microsoft Yahei', sans-serif
        }

        a {
            text-decoration: none
        }

        button,
        input,
        textarea {
            color: inherit;
            font: inherit
        }

        [class*=van-]:focus,
        a:focus,
        button:focus,
        input:focus,
        textarea:focus {
            outline: 0
        }

        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .van-ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .van-multi-ellipsis--l2 {
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical
        }

        .van-multi-ellipsis--l3 {
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical
        }

        .van-clearfix::after {
            display: table;
            clear: both;
            content: ''
        }

        [class*=van-hairline]::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            top: -50%;
            right: -50%;
            bottom: -50%;
            left: -50%;
            border: 0 solid #ebedf0;
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        .van-hairline,
        .van-hairline--bottom,
        .van-hairline--left,
        .van-hairline--right,
        .van-hairline--surround,
        .van-hairline--top,
        .van-hairline--top-bottom {
            position: relative
        }

        .van-hairline--top::after {
            border-top-width: 0.0198rem
        }

        .van-hairline--left::after {
            border-left-width: 0.0198rem
        }

        .van-hairline--right::after {
            border-right-width: 0.0198rem
        }

        .van-hairline--bottom::after {
            border-bottom-width: 0.0198rem
        }

        .van-hairline--top-bottom::after,
        .van-hairline-unset--top-bottom::after {
            border-width: 0.0198rem 0
        }

        .van-hairline--surround::after {
            border-width: 0.0198rem
        }

        @-webkit-keyframes van-slide-up-enter {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @keyframes van-slide-up-enter {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @-webkit-keyframes van-slide-up-leave {
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @keyframes van-slide-up-leave {
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @-webkit-keyframes van-slide-down-enter {
            from {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @keyframes van-slide-down-enter {
            from {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @-webkit-keyframes van-slide-down-leave {
            to {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @keyframes van-slide-down-leave {
            to {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @-webkit-keyframes van-slide-left-enter {
            from {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @keyframes van-slide-left-enter {
            from {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @-webkit-keyframes van-slide-left-leave {
            to {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @keyframes van-slide-left-leave {
            to {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @-webkit-keyframes van-slide-right-enter {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @keyframes van-slide-right-enter {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @-webkit-keyframes van-slide-right-leave {
            to {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @keyframes van-slide-right-leave {
            to {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @-webkit-keyframes van-fade-in {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes van-fade-in {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes van-fade-out {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes van-fade-out {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @-webkit-keyframes van-rotate {
            from {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes van-rotate {
            from {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .van-fade-enter-active {
            -webkit-animation: .3s van-fade-in both ease-out;
            animation: .3s van-fade-in both ease-out
        }

        .van-fade-leave-active {
            -webkit-animation: .3s van-fade-out both ease-in;
            animation: .3s van-fade-out both ease-in
        }

        .van-slide-up-enter-active {
            -webkit-animation: van-slide-up-enter .3s both ease-out;
            animation: van-slide-up-enter .3s both ease-out
        }

        .van-slide-up-leave-active {
            -webkit-animation: van-slide-up-leave .3s both ease-in;
            animation: van-slide-up-leave .3s both ease-in
        }

        .van-slide-down-enter-active {
            -webkit-animation: van-slide-down-enter .3s both ease-out;
            animation: van-slide-down-enter .3s both ease-out
        }

        .van-slide-down-leave-active {
            -webkit-animation: van-slide-down-leave .3s both ease-in;
            animation: van-slide-down-leave .3s both ease-in
        }

        .van-slide-left-enter-active {
            -webkit-animation: van-slide-left-enter .3s both ease-out;
            animation: van-slide-left-enter .3s both ease-out
        }

        .van-slide-left-leave-active {
            -webkit-animation: van-slide-left-leave .3s both ease-in;
            animation: van-slide-left-leave .3s both ease-in
        }

        .van-slide-right-enter-active {
            -webkit-animation: van-slide-right-enter .3s both ease-out;
            animation: van-slide-right-enter .3s both ease-out
        }

        .van-slide-right-leave-active {
            -webkit-animation: van-slide-right-leave .3s both ease-in;
            animation: van-slide-right-leave .3s both ease-in
        }

        .van-overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .7)
        }

        .van-info {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            min-width: 0.31683rem;
            padding: 0 0.05941rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.23762rem;
            font-family: -apple-system-font, Helvetica Neue, Arial, sans-serif;
            line-height: 1.2;
            text-align: center;
            background-color: #ee0a24;
            border: 0.0198rem solid #fff;
            border-radius: 0.31683rem;
            -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
            -webkit-transform-origin: 100%;
            transform-origin: 100%
        }

        .van-info--dot {
            width: 0.15842rem;
            min-width: 0;
            height: 0.15842rem;
            background-color: #ee0a24;
            border-radius: 100%
        }

        .van-sidebar-item {
            position: relative;
            display: block;
            box-sizing: border-box;
            padding: 0.39604rem 0.23762rem;
            overflow: hidden;
            color: #323233;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            background-color: #f7f8fa;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-sidebar-item:active {
            background-color: #f2f3f5
        }

        .van-sidebar-item__text {
            position: relative;
            display: inline-block;
            word-break: break-all
        }

        .van-sidebar-item:not(:last-child)::after {
            border-bottom-width: 0.0198rem
        }

        .van-sidebar-item--select {
            color: #323233;
            font-weight: 500
        }

        .van-sidebar-item--select,
        .van-sidebar-item--select:active {
            background-color: #fff
        }

        .van-sidebar-item--select::before {
            position: absolute;
            top: 50%;
            left: 0;
            width: 0.07921rem;
            height: 0.31683rem;
            background-color: #ee0a24;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            content: ''
        }

        .van-sidebar-item--disabled {
            color: #c8c9cc;
            cursor: not-allowed
        }

        .van-sidebar-item--disabled:active {
            background-color: #f7f8fa
        }

        .van-icon {
            position: relative;
            display: inline-block;
            font: normal normal normal 0.27723rem/1 vant-icon;
            font: normal normal normal 0.27723rem/1 var(--van-icon-font-family, 'vant-icon');
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased
        }

        .van-icon:before {
            display: inline-block
        }

        .van-icon-contact:before {
            content: '\e753'
        }

        .van-icon-notes:before {
            content: '\e63c'
        }

        .van-icon-records:before {
            content: '\e63d'
        }

        .van-icon-cash-back-record:before {
            content: '\e63e'
        }

        .van-icon-newspaper:before {
            content: '\e63f'
        }

        .van-icon-discount:before {
            content: '\e640'
        }

        .van-icon-completed:before {
            content: '\e641'
        }

        .van-icon-user:before {
            content: '\e642'
        }

        .van-icon-description:before {
            content: '\e643'
        }

        .van-icon-list-switch:before {
            content: '\e6ad'
        }

        .van-icon-list-switching:before {
            content: '\e65a'
        }

        .van-icon-link-o:before {
            content: '\e751'
        }

        .van-icon-miniprogram-o:before {
            content: '\e752'
        }

        .van-icon-qq:before {
            content: '\e74e'
        }

        .van-icon-wechat-moments:before {
            content: '\e74f'
        }

        .van-icon-weibo:before {
            content: '\e750'
        }

        .van-icon-cash-o:before {
            content: '\e74d'
        }

        .van-icon-guide-o:before {
            content: '\e74c'
        }

        .van-icon-invitation:before {
            content: '\e6d6'
        }

        .van-icon-shield-o:before {
            content: '\e74b'
        }

        .van-icon-exchange:before {
            content: '\e6af'
        }

        .van-icon-eye:before {
            content: '\e6b0'
        }

        .van-icon-enlarge:before {
            content: '\e6b1'
        }

        .van-icon-expand-o:before {
            content: '\e6b2'
        }

        .van-icon-eye-o:before {
            content: '\e6b3'
        }

        .van-icon-expand:before {
            content: '\e6b4'
        }

        .van-icon-filter-o:before {
            content: '\e6b5'
        }

        .van-icon-fire:before {
            content: '\e6b6'
        }

        .van-icon-fail:before {
            content: '\e6b7'
        }

        .van-icon-failure:before {
            content: '\e6b8'
        }

        .van-icon-fire-o:before {
            content: '\e6b9'
        }

        .van-icon-flag-o:before {
            content: '\e6ba'
        }

        .van-icon-font:before {
            content: '\e6bb'
        }

        .van-icon-font-o:before {
            content: '\e6bc'
        }

        .van-icon-gem-o:before {
            content: '\e6bd'
        }

        .van-icon-flower-o:before {
            content: '\e6be'
        }

        .van-icon-gem:before {
            content: '\e6bf'
        }

        .van-icon-gift-card:before {
            content: '\e6c0'
        }

        .van-icon-friends:before {
            content: '\e6c1'
        }

        .van-icon-friends-o:before {
            content: '\e6c2'
        }

        .van-icon-gold-coin:before {
            content: '\e6c3'
        }

        .van-icon-gold-coin-o:before {
            content: '\e6c4'
        }

        .van-icon-good-job-o:before {
            content: '\e6c5'
        }

        .van-icon-gift:before {
            content: '\e6c6'
        }

        .van-icon-gift-o:before {
            content: '\e6c7'
        }

        .van-icon-gift-card-o:before {
            content: '\e6c8'
        }

        .van-icon-good-job:before {
            content: '\e6c9'
        }

        .van-icon-home-o:before {
            content: '\e6ca'
        }

        .van-icon-goods-collect:before {
            content: '\e6cb'
        }

        .van-icon-graphic:before {
            content: '\e6cc'
        }

        .van-icon-goods-collect-o:before {
            content: '\e6cd'
        }

        .van-icon-hot-o:before {
            content: '\e6ce'
        }

        .van-icon-info:before {
            content: '\e6cf'
        }

        .van-icon-hotel-o:before {
            content: '\e6d0'
        }

        .van-icon-info-o:before {
            content: '\e6d1'
        }

        .van-icon-hot-sale-o:before {
            content: '\e6d2'
        }

        .van-icon-hot:before {
            content: '\e6d3'
        }

        .van-icon-like:before {
            content: '\e6d4'
        }

        .van-icon-idcard:before {
            content: '\e6d5'
        }

        .van-icon-like-o:before {
            content: '\e6d7'
        }

        .van-icon-hot-sale:before {
            content: '\e6d8'
        }

        .van-icon-location-o:before {
            content: '\e6d9'
        }

        .van-icon-location:before {
            content: '\e6da'
        }

        .van-icon-label:before {
            content: '\e6db'
        }

        .van-icon-lock:before {
            content: '\e6dc'
        }

        .van-icon-label-o:before {
            content: '\e6dd'
        }

        .van-icon-map-marked:before {
            content: '\e6de'
        }

        .van-icon-logistics:before {
            content: '\e6df'
        }

        .van-icon-manager:before {
            content: '\e6e0'
        }

        .van-icon-more:before {
            content: '\e6e1'
        }

        .van-icon-live:before {
            content: '\e6e2'
        }

        .van-icon-manager-o:before {
            content: '\e6e3'
        }

        .van-icon-medal:before {
            content: '\e6e4'
        }

        .van-icon-more-o:before {
            content: '\e6e5'
        }

        .van-icon-music-o:before {
            content: '\e6e6'
        }

        .van-icon-music:before {
            content: '\e6e7'
        }

        .van-icon-new-arrival-o:before {
            content: '\e6e8'
        }

        .van-icon-medal-o:before {
            content: '\e6e9'
        }

        .van-icon-new-o:before {
            content: '\e6ea'
        }

        .van-icon-free-postage:before {
            content: '\e6eb'
        }

        .van-icon-newspaper-o:before {
            content: '\e6ec'
        }

        .van-icon-new-arrival:before {
            content: '\e6ed'
        }

        .van-icon-minus:before {
            content: '\e6ee'
        }

        .van-icon-orders-o:before {
            content: '\e6ef'
        }

        .van-icon-new:before {
            content: '\e6f0'
        }

        .van-icon-paid:before {
            content: '\e6f1'
        }

        .van-icon-notes-o:before {
            content: '\e6f2'
        }

        .van-icon-other-pay:before {
            content: '\e6f3'
        }

        .van-icon-pause-circle:before {
            content: '\e6f4'
        }

        .van-icon-pause:before {
            content: '\e6f5'
        }

        .van-icon-pause-circle-o:before {
            content: '\e6f6'
        }

        .van-icon-peer-pay:before {
            content: '\e6f7'
        }

        .van-icon-pending-payment:before {
            content: '\e6f8'
        }

        .van-icon-passed:before {
            content: '\e6f9'
        }

        .van-icon-plus:before {
            content: '\e6fa'
        }

        .van-icon-phone-circle-o:before {
            content: '\e6fb'
        }

        .van-icon-phone-o:before {
            content: '\e6fc'
        }

        .van-icon-printer:before {
            content: '\e6fd'
        }

        .van-icon-photo-fail:before {
            content: '\e6fe'
        }

        .van-icon-phone:before {
            content: '\e6ff'
        }

        .van-icon-photo-o:before {
            content: '\e700'
        }

        .van-icon-play-circle:before {
            content: '\e701'
        }

        .van-icon-play:before {
            content: '\e702'
        }

        .van-icon-phone-circle:before {
            content: '\e703'
        }

        .van-icon-point-gift-o:before {
            content: '\e704'
        }

        .van-icon-point-gift:before {
            content: '\e705'
        }

        .van-icon-play-circle-o:before {
            content: '\e706'
        }

        .van-icon-shrink:before {
            content: '\e707'
        }

        .van-icon-photo:before {
            content: '\e708'
        }

        .van-icon-qr:before {
            content: '\e709'
        }

        .van-icon-qr-invalid:before {
            content: '\e70a'
        }

        .van-icon-question-o:before {
            content: '\e70b'
        }

        .van-icon-revoke:before {
            content: '\e70c'
        }

        .van-icon-replay:before {
            content: '\e70d'
        }

        .van-icon-service:before {
            content: '\e70e'
        }

        .van-icon-question:before {
            content: '\e70f'
        }

        .van-icon-search:before {
            content: '\e710'
        }

        .van-icon-refund-o:before {
            content: '\e711'
        }

        .van-icon-service-o:before {
            content: '\e712'
        }

        .van-icon-scan:before {
            content: '\e713'
        }

        .van-icon-share:before {
            content: '\e714'
        }

        .van-icon-send-gift-o:before {
            content: '\e715'
        }

        .van-icon-share-o:before {
            content: '\e716'
        }

        .van-icon-setting:before {
            content: '\e717'
        }

        .van-icon-points:before {
            content: '\e718'
        }

        .van-icon-photograph:before {
            content: '\e719'
        }

        .van-icon-shop:before {
            content: '\e71a'
        }

        .van-icon-shop-o:before {
            content: '\e71b'
        }

        .van-icon-shop-collect-o:before {
            content: '\e71c'
        }

        .van-icon-shop-collect:before {
            content: '\e71d'
        }

        .van-icon-smile:before {
            content: '\e71e'
        }

        .van-icon-shopping-cart-o:before {
            content: '\e71f'
        }

        .van-icon-sign:before {
            content: '\e720'
        }

        .van-icon-sort:before {
            content: '\e721'
        }

        .van-icon-star-o:before {
            content: '\e722'
        }

        .van-icon-smile-comment-o:before {
            content: '\e723'
        }

        .van-icon-stop:before {
            content: '\e724'
        }

        .van-icon-stop-circle-o:before {
            content: '\e725'
        }

        .van-icon-smile-o:before {
            content: '\e726'
        }

        .van-icon-star:before {
            content: '\e727'
        }

        .van-icon-success:before {
            content: '\e728'
        }

        .van-icon-stop-circle:before {
            content: '\e729'
        }

        .van-icon-records-o:before {
            content: '\e72a'
        }

        .van-icon-shopping-cart:before {
            content: '\e72b'
        }

        .van-icon-tosend:before {
            content: '\e72c'
        }

        .van-icon-todo-list:before {
            content: '\e72d'
        }

        .van-icon-thumb-circle-o:before {
            content: '\e72e'
        }

        .van-icon-thumb-circle:before {
            content: '\e72f'
        }

        .van-icon-umbrella-circle:before {
            content: '\e730'
        }

        .van-icon-underway:before {
            content: '\e731'
        }

        .van-icon-upgrade:before {
            content: '\e732'
        }

        .van-icon-todo-list-o:before {
            content: '\e733'
        }

        .van-icon-tv-o:before {
            content: '\e734'
        }

        .van-icon-underway-o:before {
            content: '\e735'
        }

        .van-icon-user-o:before {
            content: '\e736'
        }

        .van-icon-vip-card-o:before {
            content: '\e737'
        }

        .van-icon-vip-card:before {
            content: '\e738'
        }

        .van-icon-send-gift:before {
            content: '\e739'
        }

        .van-icon-wap-home:before {
            content: '\e73a'
        }

        .van-icon-wap-nav:before {
            content: '\e73b'
        }

        .van-icon-volume-o:before {
            content: '\e73c'
        }

        .van-icon-video:before {
            content: '\e73d'
        }

        .van-icon-wap-home-o:before {
            content: '\e73e'
        }

        .van-icon-volume:before {
            content: '\e73f'
        }

        .van-icon-warning:before {
            content: '\e740'
        }

        .van-icon-weapp-nav:before {
            content: '\e741'
        }

        .van-icon-wechat-pay:before {
            content: '\e742'
        }

        .van-icon-warning-o:before {
            content: '\e743'
        }

        .van-icon-wechat:before {
            content: '\e744'
        }

        .van-icon-setting-o:before {
            content: '\e745'
        }

        .van-icon-youzan-shield:before {
            content: '\e746'
        }

        .van-icon-warn-o:before {
            content: '\e747'
        }

        .van-icon-smile-comment:before {
            content: '\e748'
        }

        .van-icon-user-circle-o:before {
            content: '\e749'
        }

        .van-icon-video-o:before {
            content: '\e74a'
        }

        .van-icon-add-square:before {
            content: '\e65c'
        }

        .van-icon-add:before {
            content: '\e65d'
        }

        .van-icon-arrow-down:before {
            content: '\e65e'
        }

        .van-icon-arrow-up:before {
            content: '\e65f'
        }

        .van-icon-arrow:before {
            content: '\e660'
        }

        .van-icon-after-sale:before {
            content: '\e661'
        }

        .van-icon-add-o:before {
            content: '\e662'
        }

        .van-icon-alipay:before {
            content: '\e663'
        }

        .van-icon-ascending:before {
            content: '\e664'
        }

        .van-icon-apps-o:before {
            content: '\e665'
        }

        .van-icon-aim:before {
            content: '\e666'
        }

        .van-icon-award:before {
            content: '\e667'
        }

        .van-icon-arrow-left:before {
            content: '\e668'
        }

        .van-icon-award-o:before {
            content: '\e669'
        }

        .van-icon-audio:before {
            content: '\e66a'
        }

        .van-icon-bag-o:before {
            content: '\e66b'
        }

        .van-icon-balance-list:before {
            content: '\e66c'
        }

        .van-icon-back-top:before {
            content: '\e66d'
        }

        .van-icon-bag:before {
            content: '\e66e'
        }

        .van-icon-balance-pay:before {
            content: '\e66f'
        }

        .van-icon-balance-o:before {
            content: '\e670'
        }

        .van-icon-bar-chart-o:before {
            content: '\e671'
        }

        .van-icon-bars:before {
            content: '\e672'
        }

        .van-icon-balance-list-o:before {
            content: '\e673'
        }

        .van-icon-birthday-cake-o:before {
            content: '\e674'
        }

        .van-icon-bookmark:before {
            content: '\e675'
        }

        .van-icon-bill:before {
            content: '\e676'
        }

        .van-icon-bell:before {
            content: '\e677'
        }

        .van-icon-browsing-history-o:before {
            content: '\e678'
        }

        .van-icon-browsing-history:before {
            content: '\e679'
        }

        .van-icon-bookmark-o:before {
            content: '\e67a'
        }

        .van-icon-bulb-o:before {
            content: '\e67b'
        }

        .van-icon-bullhorn-o:before {
            content: '\e67c'
        }

        .van-icon-bill-o:before {
            content: '\e67d'
        }

        .van-icon-calendar-o:before {
            content: '\e67e'
        }

        .van-icon-brush-o:before {
            content: '\e67f'
        }

        .van-icon-card:before {
            content: '\e680'
        }

        .van-icon-cart-o:before {
            content: '\e681'
        }

        .van-icon-cart-circle:before {
            content: '\e682'
        }

        .van-icon-cart-circle-o:before {
            content: '\e683'
        }

        .van-icon-cart:before {
            content: '\e684'
        }

        .van-icon-cash-on-deliver:before {
            content: '\e685'
        }

        .van-icon-cash-back-record-o:before {
            content: '\e686'
        }

        .van-icon-cashier-o:before {
            content: '\e687'
        }

        .van-icon-chart-trending-o:before {
            content: '\e688'
        }

        .van-icon-certificate:before {
            content: '\e689'
        }

        .van-icon-chat:before {
            content: '\e68a'
        }

        .van-icon-clear:before {
            content: '\e68b'
        }

        .van-icon-chat-o:before {
            content: '\e68c'
        }

        .van-icon-checked:before {
            content: '\e68d'
        }

        .van-icon-clock:before {
            content: '\e68e'
        }

        .van-icon-clock-o:before {
            content: '\e68f'
        }

        .van-icon-close:before {
            content: '\e690'
        }

        .van-icon-closed-eye:before {
            content: '\e691'
        }

        .van-icon-circle:before {
            content: '\e692'
        }

        .van-icon-cluster-o:before {
            content: '\e693'
        }

        .van-icon-column:before {
            content: '\e694'
        }

        .van-icon-comment-circle-o:before {
            content: '\e695'
        }

        .van-icon-cluster:before {
            content: '\e696'
        }

        .van-icon-comment:before {
            content: '\e697'
        }

        .van-icon-comment-o:before {
            content: '\e698'
        }

        .van-icon-comment-circle:before {
            content: '\e699'
        }

        .van-icon-completed-o:before {
            content: '\e69a'
        }

        .van-icon-credit-pay:before {
            content: '\e69b'
        }

        .van-icon-coupon:before {
            content: '\e69c'
        }

        .van-icon-debit-pay:before {
            content: '\e69d'
        }

        .van-icon-coupon-o:before {
            content: '\e69e'
        }

        .van-icon-contact-o:before {
            content: '\e69f'
        }

        .van-icon-descending:before {
            content: '\e6a0'
        }

        .van-icon-desktop-o:before {
            content: '\e6a1'
        }

        .van-icon-diamond-o:before {
            content: '\e6a2'
        }

        .van-icon-description-o:before {
            content: '\e6a3'
        }

        .van-icon-delete:before {
            content: '\e6a4'
        }

        .van-icon-diamond:before {
            content: '\e6a5'
        }

        .van-icon-delete-o:before {
            content: '\e6a6'
        }

        .van-icon-cross:before {
            content: '\e6a7'
        }

        .van-icon-edit:before {
            content: '\e6a8'
        }

        .van-icon-ellipsis:before {
            content: '\e6a9'
        }

        .van-icon-down:before {
            content: '\e6aa'
        }

        .van-icon-discount-o:before {
            content: '\e6ab'
        }

        .van-icon-ecard-pay:before {
            content: '\e6ac'
        }

        .van-icon-envelop-o:before {
            content: '\e6ae'
        }

        @font-face {
            font-weight: 400;
            font-family: vant-icon;
            font-style: normal;
            font-display: auto;
            src: url('data:font/woff2;charset=utf-8;base64,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') format('woff2'), url(//at.alicdn.com/t/c/font_2553510_kfwma2yq1rs.woff?t=1694918397022) format('woff')
        }

        .van-icon__image {
            display: block;
            width: 1em;
            height: 1em;
            object-fit: contain
        }

        .van-tabbar-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: #646566;
            font-size: 0.23762rem;
            line-height: 1;
            cursor: pointer
        }

        .van-tabbar-item__icon {
            position: relative;
            margin-bottom: 0.07921rem;
            font-size: 0.43564rem
        }

        .van-tabbar-item__icon .van-icon {
            display: block
        }

        .van-tabbar-item__icon img {
            display: block;
            height: 0.39604rem
        }

        .van-tabbar-item--active {
            color: #1989fa;
            background-color: #fff
        }

        .van-tabbar-item .van-info {
            margin-top: 0.07921rem
        }

        .van-step {
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            color: #969799;
            font-size: 0.27723rem
        }

        .van-step__circle {
            display: block;
            width: 0.09901rem;
            height: 0.09901rem;
            background-color: #969799;
            border-radius: 50%
        }

        .van-step__line {
            position: absolute;
            background-color: #ebedf0;
            -webkit-transition: background-color .3s;
            transition: background-color .3s
        }

        .van-step--horizontal {
            float: left
        }

        .van-step--horizontal:first-child .van-step__title {
            margin-left: 0;
            -webkit-transform: none;
            transform: none
        }

        .van-step--horizontal:last-child {
            position: absolute;
            right: 0.0198rem;
            width: auto
        }

        .van-step--horizontal:last-child .van-step__title {
            margin-left: 0;
            -webkit-transform: none;
            transform: none
        }

        .van-step--horizontal:last-child .van-step__circle-container {
            right: -0.17822rem;
            left: auto
        }

        .van-step--horizontal .van-step__circle-container {
            position: absolute;
            top: 0.59406rem;
            left: -0.15842rem;
            z-index: 1;
            padding: 0 0.15842rem;
            background-color: #fff;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .van-step--horizontal .van-step__title {
            display: inline-block;
            margin-left: 0.05941rem;
            font-size: 0.23762rem;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        @media (max-width:321px) {
            .van-step--horizontal .van-step__title {
                font-size: 0.21782rem
            }
        }

        .van-step--horizontal .van-step__line {
            top: 0.59406rem;
            left: 0;
            width: 100%;
            height: 0.0198rem
        }

        .van-step--horizontal .van-step__icon {
            display: block;
            font-size: 0.23762rem
        }

        .van-step--horizontal .van-step--process {
            color: #323233
        }

        .van-step--vertical {
            display: block;
            float: none;
            padding: 0.19802rem 0.19802rem 0.19802rem 0;
            line-height: 0.35644rem
        }

        .van-step--vertical:not(:last-child)::after {
            border-bottom-width: 0.0198rem
        }

        .van-step--vertical .van-step__circle-container {
            position: absolute;
            top: 0.37624rem;
            left: -0.29703rem;
            z-index: 1;
            font-size: 0.23762rem;
            line-height: 1;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .van-step--vertical .van-step__line {
            top: 0.31683rem;
            left: -0.29703rem;
            width: 0.0198rem;
            height: 100%
        }

        .van-step:last-child .van-step__line {
            width: 0
        }

        .van-step--finish {
            color: #323233
        }

        .van-step--finish .van-step__circle,
        .van-step--finish .van-step__line {
            background-color: #07c160
        }

        .van-step__icon,
        .van-step__title {
            -webkit-transition: color .3s;
            transition: color .3s
        }

        .van-step__icon--active,
        .van-step__icon--finish,
        .van-step__title--active,
        .van-step__title--finish {
            color: #07c160
        }

        .van-rate {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-rate__item {
            position: relative
        }

        .van-rate__item:not(:last-child) {
            padding-right: 0.07921rem
        }

        .van-rate__icon {
            display: block;
            width: 1em;
            color: #c8c9cc;
            font-size: 0.39604rem
        }

        .van-rate__icon--half {
            position: absolute;
            top: 0;
            left: 0;
            width: .5em;
            overflow: hidden
        }

        .van-rate__icon--full {
            color: #ee0a24
        }

        .van-rate__icon--disabled {
            color: #c8c9cc
        }

        .van-rate--disabled {
            cursor: not-allowed
        }

        .van-rate--readonly {
            cursor: default
        }

        .van-notice-bar {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 0.79208rem;
            padding: 0 0.31683rem;
            color: #ed6a0c;
            font-size: 0.27723rem;
            line-height: 0.47525rem;
            background-color: #fffbe8
        }

        .van-notice-bar__left-icon,
        .van-notice-bar__right-icon {
            min-width: 0.47525rem;
            font-size: 0.31683rem
        }

        .van-notice-bar__right-icon {
            text-align: right;
            cursor: pointer
        }

        .van-notice-bar__wrap {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 100%;
            overflow: hidden
        }

        .van-notice-bar__content {
            position: absolute;
            white-space: nowrap;
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear
        }

        .van-notice-bar__content.van-ellipsis {
            max-width: 100%
        }

        .van-notice-bar--wrapable {
            height: auto;
            padding: 0.15842rem 0.31683rem
        }

        .van-notice-bar--wrapable .van-notice-bar__wrap {
            height: auto
        }

        .van-notice-bar--wrapable .van-notice-bar__content {
            position: relative;
            white-space: normal;
            word-wrap: break-word
        }

        .van-nav-bar {
            position: relative;
            z-index: 1;
            line-height: 0.43564rem;
            text-align: center;
            background-color: #fff;
            -webkit-user-select: none;
            user-select: none
        }

        .van-nav-bar--fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%
        }

        .van-nav-bar--safe-area-inset-top {
            padding-top: constant(safe-area-inset-top);
            padding-top: env(safe-area-inset-top)
        }

        .van-nav-bar .van-icon {
            color: #1989fa
        }

        .van-nav-bar__content {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 0.91089rem
        }

        .van-nav-bar__arrow {
            margin-right: 0.07921rem;
            font-size: 0.31683rem
        }

        .van-nav-bar__title {
            max-width: 60%;
            margin: 0 auto;
            color: #323233;
            font-weight: 500;
            font-size: 0.31683rem
        }

        .van-nav-bar__left,
        .van-nav-bar__right {
            position: absolute;
            top: 0;
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 0.31683rem;
            font-size: 0.27723rem;
            cursor: pointer
        }

        .van-nav-bar__left:active,
        .van-nav-bar__right:active {
            opacity: .7
        }

        .van-nav-bar__left {
            left: 0
        }

        .van-nav-bar__right {
            right: 0
        }

        .van-nav-bar__text {
            color: #1989fa
        }

        .van-grid-item {
            position: relative;
            box-sizing: border-box
        }

        .van-grid-item--square {
            height: 0
        }

        .van-grid-item__icon {
            font-size: 0.55446rem
        }

        .van-grid-item__icon-wrapper {
            position: relative
        }

        .van-grid-item__text {
            color: #646566;
            font-size: 0.23762rem;
            line-height: 1.5;
            word-break: break-all
        }

        .van-grid-item__icon+.van-grid-item__text {
            margin-top: 0.15842rem
        }

        .van-grid-item__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            box-sizing: border-box;
            height: 100%;
            padding: 0.31683rem 0.15842rem;
            background-color: #fff
        }

        .van-grid-item__content::after {
            z-index: 1;
            border-width: 0 0.0198rem 0.0198rem 0
        }

        .van-grid-item__content--square {
            position: absolute;
            top: 0;
            right: 0;
            left: 0
        }

        .van-grid-item__content--center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .van-grid-item__content--horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row
        }

        .van-grid-item__content--horizontal .van-grid-item__icon+.van-grid-item__text {
            margin-top: 0;
            margin-left: 0.15842rem
        }

        .van-grid-item__content--surround::after {
            border-width: 0.0198rem
        }

        .van-grid-item__content--clickable {
            cursor: pointer
        }

        .van-grid-item__content--clickable:active {
            background-color: #f2f3f5
        }

        .van-goods-action-icon {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            min-width: 0.9505rem;
            height: 100%;
            color: #646566;
            font-size: 0.19802rem;
            line-height: 1;
            text-align: center;
            background-color: #fff;
            cursor: pointer
        }

        .van-goods-action-icon:active {
            background-color: #f2f3f5
        }

        .van-goods-action-icon__icon {
            position: relative;
            width: 1em;
            margin: 0 auto 0.09901rem;
            color: #323233;
            font-size: 0.35644rem
        }

        .van-checkbox {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            overflow: hidden;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-checkbox--disabled {
            cursor: not-allowed
        }

        .van-checkbox--label-disabled {
            cursor: default
        }

        .van-checkbox--horizontal {
            margin-right: 0.23762rem
        }

        .van-checkbox__icon {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            height: 1em;
            font-size: 0.39604rem;
            line-height: 1em;
            cursor: pointer
        }

        .van-checkbox__icon .van-icon {
            display: block;
            box-sizing: border-box;
            width: 1.25em;
            height: 1.25em;
            color: transparent;
            font-size: .8em;
            line-height: 1.25;
            text-align: center;
            border: 0.0198rem solid #c8c9cc;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-property: color, border-color, background-color;
            transition-property: color, border-color, background-color
        }

        .van-checkbox__icon--round .van-icon {
            border-radius: 100%
        }

        .van-checkbox__icon--checked .van-icon {
            color: #fff;
            background-color: #1989fa;
            border-color: #1989fa
        }

        .van-checkbox__icon--disabled {
            cursor: not-allowed
        }

        .van-checkbox__icon--disabled .van-icon {
            background-color: #ebedf0;
            border-color: #c8c9cc
        }

        .van-checkbox__icon--disabled.van-checkbox__icon--checked .van-icon {
            color: #c8c9cc
        }

        .van-checkbox__label {
            margin-left: 0.15842rem;
            color: #323233;
            line-height: 0.39604rem
        }

        .van-checkbox__label--left {
            margin: 0 0.15842rem 0 0
        }

        .van-checkbox__label--disabled {
            color: #c8c9cc
        }

        .van-coupon {
            margin: 0 0.23762rem 0.23762rem;
            overflow: hidden;
            background-color: #fff;
            border-radius: 0.15842rem;
            box-shadow: 0 0 0.07921rem rgba(0, 0, 0, .1)
        }

        .van-coupon:active {
            background-color: #f2f3f5
        }

        .van-coupon__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-sizing: border-box;
            min-height: 1.66337rem;
            padding: 0.27723rem 0;
            color: #323233
        }

        .van-coupon__head {
            position: relative;
            min-width: 1.90099rem;
            padding: 0 0.15842rem;
            color: #ee0a24;
            text-align: center
        }

        .van-coupon__amount,
        .van-coupon__condition,
        .van-coupon__name,
        .van-coupon__valid {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .van-coupon__amount {
            margin-bottom: 0.11881rem;
            font-weight: 500;
            font-size: 0.59406rem;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .van-coupon__amount span {
            font-weight: 400;
            font-size: 40%
        }

        .van-coupon__amount span:not(:empty) {
            margin-left: 0.0396rem
        }

        .van-coupon__condition {
            font-size: 0.23762rem;
            line-height: 0.31683rem;
            white-space: pre-wrap
        }

        .van-coupon__body {
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            border-radius: 0 0.15842rem 0.15842rem 0
        }

        .van-coupon__name {
            margin-bottom: 0.19802rem;
            font-weight: 700;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-coupon__valid {
            font-size: 0.23762rem
        }

        .van-coupon__corner {
            position: absolute;
            top: 0;
            right: 0.31683rem;
            bottom: 0
        }

        .van-coupon__description {
            padding: 0.15842rem 0.31683rem;
            font-size: 0.23762rem;
            border-top: 0.0198rem dashed #ebedf0
        }

        .van-coupon--disabled:active {
            background-color: #fff
        }

        .van-coupon--disabled .van-coupon-item__content {
            height: 1.46535rem
        }

        .van-coupon--disabled .van-coupon__head {
            color: inherit
        }

        .van-image {
            position: relative;
            display: inline-block
        }

        .van-image--round {
            overflow: hidden;
            border-radius: 50%
        }

        .van-image--round img {
            border-radius: inherit
        }

        .van-image__error,
        .van-image__img,
        .van-image__loading {
            display: block;
            width: 100%;
            height: 100%
        }

        .van-image__error,
        .van-image__loading {
            position: absolute;
            top: 0;
            left: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: #969799;
            font-size: 0.27723rem;
            background-color: #f7f8fa
        }

        .van-image__loading-icon {
            color: #dcdee0;
            font-size: 0.63366rem
        }

        .van-image__error-icon {
            color: #dcdee0;
            font-size: 0.63366rem
        }

        .van-radio {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            overflow: hidden;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-radio--disabled {
            cursor: not-allowed
        }

        .van-radio--label-disabled {
            cursor: default
        }

        .van-radio--horizontal {
            margin-right: 0.23762rem
        }

        .van-radio__icon {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            height: 1em;
            font-size: 0.39604rem;
            line-height: 1em;
            cursor: pointer
        }

        .van-radio__icon .van-icon {
            display: block;
            box-sizing: border-box;
            width: 1.25em;
            height: 1.25em;
            color: transparent;
            font-size: .8em;
            line-height: 1.25;
            text-align: center;
            border: 0.0198rem solid #c8c9cc;
            -webkit-transition-duration: .2s;
            transition-duration: .2s;
            -webkit-transition-property: color, border-color, background-color;
            transition-property: color, border-color, background-color
        }

        .van-radio__icon--round .van-icon {
            border-radius: 100%
        }

        .van-radio__icon--checked .van-icon {
            color: #fff;
            background-color: #1989fa;
            border-color: #1989fa
        }

        .van-radio__icon--disabled {
            cursor: not-allowed
        }

        .van-radio__icon--disabled .van-icon {
            background-color: #ebedf0;
            border-color: #c8c9cc
        }

        .van-radio__icon--disabled.van-radio__icon--checked .van-icon {
            color: #c8c9cc
        }

        .van-radio__label {
            margin-left: 0.15842rem;
            color: #323233;
            line-height: 0.39604rem
        }

        .van-radio__label--left {
            margin: 0 0.15842rem 0 0
        }

        .van-radio__label--disabled {
            color: #c8c9cc
        }

        .van-tag {
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 0 0.07921rem;
            color: #fff;
            font-size: 0.23762rem;
            line-height: 0.31683rem;
            border-radius: 0.0396rem
        }

        .van-tag--default {
            background-color: #969799
        }

        .van-tag--default.van-tag--plain {
            color: #969799
        }

        .van-tag--danger {
            background-color: #ee0a24
        }

        .van-tag--danger.van-tag--plain {
            color: #ee0a24
        }

        .van-tag--primary {
            background-color: #1989fa
        }

        .van-tag--primary.van-tag--plain {
            color: #1989fa
        }

        .van-tag--success {
            background-color: #07c160
        }

        .van-tag--success.van-tag--plain {
            color: #07c160
        }

        .van-tag--warning {
            background-color: #ff976a
        }

        .van-tag--warning.van-tag--plain {
            color: #ff976a
        }

        .van-tag--plain {
            background-color: #fff;
            border-color: currentColor
        }

        .van-tag--plain::before {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border: 0.0198rem solid;
            border-color: inherit;
            border-radius: inherit;
            content: '';
            pointer-events: none
        }

        .van-tag--medium {
            padding: 0.0396rem 0.11881rem
        }

        .van-tag--large {
            padding: 0.07921rem 0.15842rem;
            font-size: 0.27723rem;
            border-radius: 0.07921rem
        }

        .van-tag--mark {
            border-radius: 0 19.78218rem 19.78218rem 0
        }

        .van-tag--mark::after {
            display: block;
            width: 0.0396rem;
            content: ''
        }

        .van-tag--round {
            border-radius: 19.78218rem
        }

        .van-tag__close {
            margin-left: 0.0396rem;
            cursor: pointer
        }

        .van-card {
            position: relative;
            box-sizing: border-box;
            padding: 0.15842rem 0.31683rem;
            color: #323233;
            font-size: 0.23762rem;
            background-color: #fafafa
        }

        .van-card:not(:first-child) {
            margin-top: 0.15842rem
        }

        .van-card__header {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .van-card__thumb {
            position: relative;
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            width: 1.74257rem;
            height: 1.74257rem;
            margin-right: 0.15842rem
        }

        .van-card__thumb img {
            border-radius: 0.15842rem
        }

        .van-card__content {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            min-width: 0;
            min-height: 1.74257rem
        }

        .van-card__content--centered {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .van-card__desc,
        .van-card__title {
            word-wrap: break-word
        }

        .van-card__title {
            max-height: 0.63366rem;
            font-weight: 500;
            line-height: 0.31683rem
        }

        .van-card__desc {
            max-height: 0.39604rem;
            color: #646566;
            line-height: 0.39604rem
        }

        .van-card__bottom {
            line-height: 0.39604rem
        }

        .van-card__price {
            display: inline-block;
            color: #323233;
            font-weight: 500;
            font-size: 0.23762rem
        }

        .van-card__price-integer {
            font-size: 0.31683rem;
            font-family: Avenir-Heavy, PingFang SC, Helvetica Neue, Arial, sans-serif
        }

        .van-card__price-decimal {
            font-family: Avenir-Heavy, PingFang SC, Helvetica Neue, Arial, sans-serif
        }

        .van-card__origin-price {
            display: inline-block;
            margin-left: 0.09901rem;
            color: #969799;
            font-size: 0.19802rem;
            text-decoration: line-through
        }

        .van-card__num {
            float: right;
            color: #969799
        }

        .van-card__tag {
            position: absolute;
            top: 0.0396rem;
            left: 0
        }

        .van-card__footer {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            text-align: right
        }

        .van-card__footer .van-button {
            margin-left: 0.09901rem
        }

        .van-cell {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            box-sizing: border-box;
            width: 100%;
            padding: 0.19802rem 0.31683rem;
            overflow: hidden;
            color: #323233;
            font-size: 0.27723rem;
            line-height: 0.47525rem;
            background-color: #fff
        }

        .van-cell::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            right: 0.31683rem;
            bottom: 0;
            left: 0.31683rem;
            border-bottom: 0.0198rem solid #ebedf0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-cell--borderless::after,
        .van-cell:last-child::after {
            display: none
        }

        .van-cell__label {
            margin-top: 0.07921rem;
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.35644rem
        }

        .van-cell__title,
        .van-cell__value {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .van-cell__value {
            position: relative;
            overflow: hidden;
            color: #969799;
            text-align: right;
            vertical-align: middle;
            word-wrap: break-word
        }

        .van-cell__value--alone {
            color: #323233;
            text-align: left
        }

        .van-cell__left-icon,
        .van-cell__right-icon {
            height: 0.47525rem;
            font-size: 0.31683rem;
            line-height: 0.47525rem
        }

        .van-cell__left-icon {
            margin-right: 0.07921rem
        }

        .van-cell__right-icon {
            margin-left: 0.07921rem;
            color: #969799
        }

        .van-cell--clickable {
            cursor: pointer
        }

        .van-cell--clickable:active {
            background-color: #f2f3f5
        }

        .van-cell--required {
            overflow: visible
        }

        .van-cell--required::before {
            position: absolute;
            left: 0.15842rem;
            color: #ee0a24;
            font-size: 0.27723rem;
            content: '*'
        }

        .van-cell--center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .van-cell--large {
            padding-top: 0.23762rem;
            padding-bottom: 0.23762rem
        }

        .van-cell--large .van-cell__title {
            font-size: 0.31683rem
        }

        .van-cell--large .van-cell__label {
            font-size: 0.27723rem
        }

        .van-coupon-cell__value--selected {
            color: #323233
        }

        .van-contact-card {
            padding: 0.31683rem
        }

        .van-contact-card__value {
            margin-left: 0.09901rem;
            line-height: 0.39604rem
        }

        .van-contact-card--add .van-contact-card__value {
            line-height: 0.79208rem
        }

        .van-contact-card--add .van-cell__left-icon {
            color: #1989fa;
            font-size: 0.79208rem
        }

        .van-contact-card::before {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 0.0396rem;
            background: -webkit-repeating-linear-gradient(135deg, #ff6c6c 0, #ff6c6c 20%, transparent 0, transparent 25%, #1989fa 0, #1989fa 45%, transparent 0, transparent 50%);
            background: repeating-linear-gradient(-45deg, #ff6c6c 0, #ff6c6c 20%, transparent 0, transparent 25%, #1989fa 0, #1989fa 45%, transparent 0, transparent 50%);
            background-size: 1.58416rem;
            content: ''
        }

        .van-collapse-item {
            position: relative
        }

        .van-collapse-item--border::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            top: 0;
            right: 0.31683rem;
            left: 0.31683rem;
            border-top: 0.0198rem solid #ebedf0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-collapse-item__title .van-cell__right-icon::before {
            -webkit-transform: rotate(90deg) translateZ(0);
            transform: rotate(90deg) translateZ(0);
            -webkit-transition: -webkit-transform .3s;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s
        }

        .van-collapse-item__title::after {
            right: 0.31683rem;
            display: none
        }

        .van-collapse-item__title--expanded .van-cell__right-icon::before {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .van-collapse-item__title--expanded::after {
            display: block
        }

        .van-collapse-item__title--borderless::after {
            display: none
        }

        .van-collapse-item__title--disabled {
            cursor: not-allowed
        }

        .van-collapse-item__title--disabled,
        .van-collapse-item__title--disabled .van-cell__right-icon {
            color: #c8c9cc
        }

        .van-collapse-item__title--disabled:active {
            background-color: #fff
        }

        .van-collapse-item__wrapper {
            overflow: hidden;
            -webkit-transition: height .3s ease-in-out;
            transition: height .3s ease-in-out;
            will-change: height
        }

        .van-collapse-item__content {
            padding: 0.23762rem 0.31683rem;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 1.5;
            background-color: #fff
        }

        .van-field__label {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            box-sizing: border-box;
            width: 6.2em;
            margin-right: 0.23762rem;
            color: #646566;
            text-align: left;
            word-wrap: break-word
        }

        .van-field__label--center {
            text-align: center
        }

        .van-field__label--right {
            text-align: right
        }

        .van-field--disabled .van-field__label {
            color: #c8c9cc
        }

        .van-field__value {
            overflow: visible
        }

        .van-field__body {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .van-field__control {
            display: block;
            box-sizing: border-box;
            width: 100%;
            min-width: 0;
            margin: 0;
            padding: 0;
            color: #323233;
            line-height: inherit;
            text-align: left;
            background-color: transparent;
            border: 0;
            resize: none
        }

        .van-field__control::-webkit-input-placeholder {
            color: #c8c9cc
        }

        .van-field__control::placeholder {
            color: #c8c9cc
        }

        .van-field__control:disabled {
            color: #c8c9cc;
            cursor: not-allowed;
            opacity: 1;
            -webkit-text-fill-color: #c8c9cc
        }

        .van-field__control:read-only {
            cursor: default
        }

        .van-field__control--center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center
        }

        .van-field__control--right {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            text-align: right
        }

        .van-field__control--custom {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 0.47525rem
        }

        .van-field__control[type=date],
        .van-field__control[type=datetime-local],
        .van-field__control[type=time] {
            min-height: 0.47525rem
        }

        .van-field__control[type=search] {
            -webkit-appearance: none
        }

        .van-field__button,
        .van-field__clear,
        .van-field__icon,
        .van-field__right-icon {
            -webkit-flex-shrink: 0;
            flex-shrink: 0
        }

        .van-field__clear,
        .van-field__right-icon {
            margin-right: -0.15842rem;
            padding: 0 0.15842rem;
            line-height: inherit
        }

        .van-field__clear {
            color: #c8c9cc;
            font-size: 0.31683rem;
            cursor: pointer
        }

        .van-field__left-icon .van-icon,
        .van-field__right-icon .van-icon {
            display: block;
            font-size: 0.31683rem;
            line-height: inherit
        }

        .van-field__left-icon {
            margin-right: 0.07921rem
        }

        .van-field__right-icon {
            color: #969799
        }

        .van-field__button {
            padding-left: 0.15842rem
        }

        .van-field__error-message {
            color: #ee0a24;
            font-size: 0.23762rem;
            text-align: left
        }

        .van-field__error-message--center {
            text-align: center
        }

        .van-field__error-message--right {
            text-align: right
        }

        .van-field__word-limit {
            margin-top: 0.07921rem;
            color: #646566;
            font-size: 0.23762rem;
            line-height: 0.31683rem;
            text-align: right
        }

        .van-field--error .van-field__control::-webkit-input-placeholder {
            color: #ee0a24;
            -webkit-text-fill-color: currentColor
        }

        .van-field--error .van-field__control,
        .van-field--error .van-field__control::placeholder {
            color: #ee0a24;
            -webkit-text-fill-color: currentColor
        }

        .van-field--min-height .van-field__control {
            min-height: 1.18812rem
        }

        .van-search {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-sizing: border-box;
            padding: 0.19802rem 0.23762rem;
            background-color: #fff
        }

        .van-search__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-left: 0.23762rem;
            background-color: #f7f8fa;
            border-radius: 0.0396rem
        }

        .van-search__content--round {
            border-radius: 19.78218rem
        }

        .van-search__label {
            padding: 0 0.09901rem;
            color: #323233;
            font-size: 0.27723rem;
            line-height: 0.67327rem
        }

        .van-search .van-cell {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding: 0.09901rem 0.15842rem 0.09901rem 0;
            background-color: transparent
        }

        .van-search .van-cell .van-field__left-icon {
            color: #969799
        }

        .van-search--show-action {
            padding-right: 0
        }

        .van-search input::-webkit-search-cancel-button,
        .van-search input::-webkit-search-decoration,
        .van-search input::-webkit-search-results-button,
        .van-search input::-webkit-search-results-decoration {
            display: none
        }

        .van-search__action {
            padding: 0 0.15842rem;
            color: #323233;
            font-size: 0.27723rem;
            line-height: 0.67327rem;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-search__action:active {
            background-color: #f2f3f5
        }

        .van-overflow-hidden {
            overflow: hidden !important
        }

        .van-popup {
            position: fixed;
            max-height: 100%;
            overflow-y: auto;
            background-color: #fff;
            -webkit-transition: -webkit-transform .3s;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            -webkit-overflow-scrolling: touch
        }

        .van-popup--center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0)
        }

        .van-popup--center.van-popup--round {
            border-radius: 0.31683rem
        }

        .van-popup--top {
            top: 0;
            left: 0;
            width: 100%
        }

        .van-popup--top.van-popup--round {
            border-radius: 0 0 0.31683rem 0.31683rem
        }

        .van-popup--right {
            top: 50%;
            right: 0;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0)
        }

        .van-popup--right.van-popup--round {
            border-radius: 0.31683rem 0 0 0.31683rem
        }

        .van-popup--bottom {
            bottom: 0;
            left: 0;
            width: 100%
        }

        .van-popup--bottom.van-popup--round {
            border-radius: 0.31683rem 0.31683rem 0 0
        }

        .van-popup--left {
            top: 50%;
            left: 0;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0)
        }

        .van-popup--left.van-popup--round {
            border-radius: 0 0.31683rem 0.31683rem 0
        }

        .van-popup--safe-area-inset-bottom {
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom)
        }

        .van-popup-slide-bottom-enter-active,
        .van-popup-slide-left-enter-active,
        .van-popup-slide-right-enter-active,
        .van-popup-slide-top-enter-active {
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out
        }

        .van-popup-slide-bottom-leave-active,
        .van-popup-slide-left-leave-active,
        .van-popup-slide-right-leave-active,
        .van-popup-slide-top-leave-active {
            -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in
        }

        .van-popup-slide-top-enter,
        .van-popup-slide-top-leave-active {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }

        .van-popup-slide-right-enter,
        .van-popup-slide-right-leave-active {
            -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0)
        }

        .van-popup-slide-bottom-enter,
        .van-popup-slide-bottom-leave-active {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }

        .van-popup-slide-left-enter,
        .van-popup-slide-left-leave-active {
            -webkit-transform: translate3d(-100%, -50%, 0);
            transform: translate3d(-100%, -50%, 0)
        }

        .van-popup__close-icon {
            position: absolute;
            z-index: 1;
            color: #c8c9cc;
            font-size: 0.43564rem;
            cursor: pointer
        }

        .van-popup__close-icon:active {
            color: #969799
        }

        .van-popup__close-icon--top-left {
            top: 0.31683rem;
            left: 0.31683rem
        }

        .van-popup__close-icon--top-right {
            top: 0.31683rem;
            right: 0.31683rem
        }

        .van-popup__close-icon--bottom-left {
            bottom: 0.31683rem;
            left: 0.31683rem
        }

        .van-popup__close-icon--bottom-right {
            right: 0.31683rem;
            bottom: 0.31683rem
        }

        .van-share-sheet__header {
            padding: 0.23762rem 0.31683rem 0.07921rem;
            text-align: center
        }

        .van-share-sheet__title {
            margin-top: 0.15842rem;
            color: #323233;
            font-weight: 400;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-share-sheet__description {
            display: block;
            margin-top: 0.15842rem;
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.31683rem
        }

        .van-share-sheet__options {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 0.31683rem 0 0.31683rem 0.15842rem;
            overflow-x: auto;
            overflow-y: visible;
            -webkit-overflow-scrolling: touch
        }

        .van-share-sheet__options--border::before {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            top: 0;
            right: 0;
            left: 0.31683rem;
            border-top: 0.0198rem solid #ebedf0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-share-sheet__options::-webkit-scrollbar {
            height: 0
        }

        .van-share-sheet__option {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-share-sheet__option:active {
            opacity: .7
        }

        .van-share-sheet__icon {
            width: 0.9505rem;
            height: 0.9505rem;
            margin: 0 0.31683rem
        }

        .van-share-sheet__name {
            margin-top: 0.15842rem;
            padding: 0 0.07921rem;
            color: #646566;
            font-size: 0.23762rem
        }

        .van-share-sheet__option-description {
            padding: 0 0.07921rem;
            color: #c8c9cc;
            font-size: 0.23762rem
        }

        .van-share-sheet__cancel {
            display: block;
            width: 100%;
            padding: 0;
            font-size: 0.31683rem;
            line-height: 0.9505rem;
            text-align: center;
            background: #fff;
            border: none;
            cursor: pointer
        }

        .van-share-sheet__cancel::before {
            display: block;
            height: 0.15842rem;
            background-color: #f7f8fa;
            content: ' '
        }

        .van-share-sheet__cancel:active {
            background-color: #f2f3f5
        }

        .van-popover {
            position: absolute;
            overflow: visible;
            background-color: transparent;
            -webkit-transition: opacity .15s, -webkit-transform .15s;
            transition: opacity .15s, -webkit-transform .15s;
            transition: opacity .15s, transform .15s;
            transition: opacity .15s, transform .15s, -webkit-transform .15s
        }

        .van-popover__wrapper {
            display: inline-block
        }

        .van-popover__arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 0.11881rem
        }

        .van-popover__content {
            overflow: hidden;
            border-radius: 0.15842rem
        }

        .van-popover__action {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-sizing: border-box;
            width: 2.53465rem;
            height: 0.87129rem;
            padding: 0 0.31683rem;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            cursor: pointer
        }

        .van-popover__action:last-child .van-popover__action-text::after {
            display: none
        }

        .van-popover__action-text {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 100%
        }

        .van-popover__action-icon {
            margin-right: 0.15842rem;
            font-size: 0.39604rem
        }

        .van-popover__action--with-icon .van-popover__action-text {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start
        }

        .van-popover[data-popper-placement^=top] .van-popover__arrow {
            bottom: 0;
            border-top-color: currentColor;
            border-bottom-width: 0;
            -webkit-transform: translate(-50%, 100%);
            transform: translate(-50%, 100%)
        }

        .van-popover[data-popper-placement=top] {
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%
        }

        .van-popover[data-popper-placement=top] .van-popover__arrow {
            left: 50%
        }

        .van-popover[data-popper-placement=top-start] {
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%
        }

        .van-popover[data-popper-placement=top-start] .van-popover__arrow {
            left: 0.31683rem
        }

        .van-popover[data-popper-placement=top-end] {
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%
        }

        .van-popover[data-popper-placement=top-end] .van-popover__arrow {
            right: 0.31683rem
        }

        .van-popover[data-popper-placement^=left] .van-popover__arrow {
            right: 0;
            border-right-width: 0;
            border-left-color: currentColor;
            -webkit-transform: translate(100%, -50%);
            transform: translate(100%, -50%)
        }

        .van-popover[data-popper-placement=left] {
            -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%
        }

        .van-popover[data-popper-placement=left] .van-popover__arrow {
            top: 50%
        }

        .van-popover[data-popper-placement=left-start] {
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0
        }

        .van-popover[data-popper-placement=left-start] .van-popover__arrow {
            top: 0.31683rem
        }

        .van-popover[data-popper-placement=left-end] {
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%
        }

        .van-popover[data-popper-placement=left-end] .van-popover__arrow {
            bottom: 0.31683rem
        }

        .van-popover[data-popper-placement^=right] .van-popover__arrow {
            left: 0;
            border-right-color: currentColor;
            border-left-width: 0;
            -webkit-transform: translate(-100%, -50%);
            transform: translate(-100%, -50%)
        }

        .van-popover[data-popper-placement=right] {
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%
        }

        .van-popover[data-popper-placement=right] .van-popover__arrow {
            top: 50%
        }

        .van-popover[data-popper-placement=right-start] {
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0
        }

        .van-popover[data-popper-placement=right-start] .van-popover__arrow {
            top: 0.31683rem
        }

        .van-popover[data-popper-placement=right-end] {
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%
        }

        .van-popover[data-popper-placement=right-end] .van-popover__arrow {
            bottom: 0.31683rem
        }

        .van-popover[data-popper-placement^=bottom] .van-popover__arrow {
            top: 0;
            border-top-width: 0;
            border-bottom-color: currentColor;
            -webkit-transform: translate(-50%, -100%);
            transform: translate(-50%, -100%)
        }

        .van-popover[data-popper-placement=bottom] {
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0
        }

        .van-popover[data-popper-placement=bottom] .van-popover__arrow {
            left: 50%
        }

        .van-popover[data-popper-placement=bottom-start] {
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0
        }

        .van-popover[data-popper-placement=bottom-start] .van-popover__arrow {
            left: 0.31683rem
        }

        .van-popover[data-popper-placement=bottom-end] {
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0
        }

        .van-popover[data-popper-placement=bottom-end] .van-popover__arrow {
            right: 0.31683rem
        }

        .van-popover--light {
            color: #323233
        }

        .van-popover--light .van-popover__content {
            background-color: #fff;
            box-shadow: 0 0.0396rem 0.23762rem rgba(50, 50, 51, .12)
        }

        .van-popover--light .van-popover__arrow {
            color: #fff
        }

        .van-popover--light .van-popover__action:active {
            background-color: #f2f3f5
        }

        .van-popover--light .van-popover__action--disabled {
            color: #c8c9cc;
            cursor: not-allowed
        }

        .van-popover--light .van-popover__action--disabled:active {
            background-color: transparent
        }

        .van-popover--dark {
            color: #fff
        }

        .van-popover--dark .van-popover__content {
            background-color: #4a4a4a
        }

        .van-popover--dark .van-popover__arrow {
            color: #4a4a4a
        }

        .van-popover--dark .van-popover__action:active {
            background-color: rgba(0, 0, 0, .2)
        }

        .van-popover--dark .van-popover__action--disabled {
            color: #969799
        }

        .van-popover--dark .van-popover__action--disabled:active {
            background-color: transparent
        }

        .van-popover--dark .van-popover__action-text::after {
            border-color: #646566
        }

        .van-popover-zoom-enter,
        .van-popover-zoom-leave-active {
            -webkit-transform: scale(.8);
            transform: scale(.8);
            opacity: 0
        }

        .van-popover-zoom-enter-active {
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out
        }

        .van-popover-zoom-leave-active {
            -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in
        }

        .van-notify {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0.15842rem 0.31683rem;
            color: #fff;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            white-space: pre-wrap;
            text-align: center;
            word-wrap: break-word
        }

        .van-notify--primary {
            background-color: #1989fa
        }

        .van-notify--success {
            background-color: #07c160
        }

        .van-notify--danger {
            background-color: #ee0a24
        }

        .van-notify--warning {
            background-color: #ff976a
        }

        .van-dropdown-item {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 10;
            overflow: hidden
        }

        .van-dropdown-item__icon {
            display: block;
            line-height: inherit
        }

        .van-dropdown-item__option {
            text-align: left
        }

        .van-dropdown-item__option--active {
            color: #ee0a24
        }

        .van-dropdown-item__option--active .van-dropdown-item__icon {
            color: #ee0a24
        }

        .van-dropdown-item--up {
            top: 0
        }

        .van-dropdown-item--down {
            bottom: 0
        }

        .van-dropdown-item__content {
            position: absolute;
            max-height: 80%
        }

        .van-loading {
            position: relative;
            color: #c8c9cc;
            font-size: 0;
            vertical-align: middle
        }

        .van-loading__spinner {
            position: relative;
            display: inline-block;
            width: 0.59406rem;
            max-width: 100%;
            height: 0.59406rem;
            max-height: 100%;
            vertical-align: middle;
            -webkit-animation: van-rotate .8s linear infinite;
            animation: van-rotate .8s linear infinite
        }

        .van-loading__spinner--spinner {
            -webkit-animation-timing-function: steps(12);
            animation-timing-function: steps(12)
        }

        .van-loading__spinner--spinner i {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .van-loading__spinner--spinner i::before {
            display: block;
            width: 0.0396rem;
            height: 25%;
            margin: 0 auto;
            background-color: currentColor;
            border-radius: 40%;
            content: ' '
        }

        .van-loading__spinner--circular {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .van-loading__circular {
            display: block;
            width: 100%;
            height: 100%
        }

        .van-loading__circular circle {
            -webkit-animation: van-circular 1.5s ease-in-out infinite;
            animation: van-circular 1.5s ease-in-out infinite;
            stroke: currentColor;
            stroke-width: 3;
            stroke-linecap: round
        }

        .van-loading__text {
            display: inline-block;
            margin-left: 0.15842rem;
            color: #969799;
            font-size: 0.27723rem;
            vertical-align: middle
        }

        .van-loading--vertical {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .van-loading--vertical .van-loading__text {
            margin: 0.15842rem 0 0
        }

        @-webkit-keyframes van-circular {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120
            }
        }

        @keyframes van-circular {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0
            }

            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40
            }

            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120
            }
        }

        .van-loading__spinner--spinner i:nth-of-type(1) {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
            opacity: 1
        }

        .van-loading__spinner--spinner i:nth-of-type(2) {
            -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
            opacity: .9375
        }

        .van-loading__spinner--spinner i:nth-of-type(3) {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            opacity: .875
        }

        .van-loading__spinner--spinner i:nth-of-type(4) {
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            opacity: .8125
        }

        .van-loading__spinner--spinner i:nth-of-type(5) {
            -webkit-transform: rotate(150deg);
            transform: rotate(150deg);
            opacity: .75
        }

        .van-loading__spinner--spinner i:nth-of-type(6) {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            opacity: .6875
        }

        .van-loading__spinner--spinner i:nth-of-type(7) {
            -webkit-transform: rotate(210deg);
            transform: rotate(210deg);
            opacity: .625
        }

        .van-loading__spinner--spinner i:nth-of-type(8) {
            -webkit-transform: rotate(240deg);
            transform: rotate(240deg);
            opacity: .5625
        }

        .van-loading__spinner--spinner i:nth-of-type(9) {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            opacity: .5
        }

        .van-loading__spinner--spinner i:nth-of-type(10) {
            -webkit-transform: rotate(300deg);
            transform: rotate(300deg);
            opacity: .4375
        }

        .van-loading__spinner--spinner i:nth-of-type(11) {
            -webkit-transform: rotate(330deg);
            transform: rotate(330deg);
            opacity: .375
        }

        .van-loading__spinner--spinner i:nth-of-type(12) {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            opacity: .3125
        }

        .van-pull-refresh {
            overflow: hidden;
            -webkit-user-select: none;
            user-select: none
        }

        .van-pull-refresh__track {
            position: relative;
            height: 100%;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .van-pull-refresh__head {
            position: absolute;
            left: 0;
            width: 100%;
            height: 0.9901rem;
            overflow: hidden;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.9901rem;
            text-align: center;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        .van-number-keyboard {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            padding-bottom: 0.43564rem;
            background-color: #f2f3f5;
            -webkit-user-select: none;
            user-select: none
        }

        .van-number-keyboard--with-title {
            border-radius: 0.39604rem 0.39604rem 0 0
        }

        .van-number-keyboard__header {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: content-box;
            height: 0.67327rem;
            padding-top: 0.11881rem;
            color: #646566;
            font-size: 0.31683rem
        }

        .van-number-keyboard__title {
            display: inline-block;
            font-weight: 400
        }

        .van-number-keyboard__title-left {
            position: absolute;
            left: 0
        }

        .van-number-keyboard__body {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 0.11881rem 0 0 0.11881rem
        }

        .van-number-keyboard__keys {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 3;
            -webkit-flex: 3;
            flex: 3;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-number-keyboard__close {
            position: absolute;
            right: 0;
            height: 100%;
            padding: 0 0.31683rem;
            color: #576b95;
            font-size: 0.27723rem;
            background-color: transparent;
            border: none;
            cursor: pointer
        }

        .van-number-keyboard__close:active {
            opacity: .7
        }

        .van-number-keyboard__sidebar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .van-number-keyboard--unfit {
            padding-bottom: 0
        }

        .van-key {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 0.9505rem;
            font-size: 0.55446rem;
            line-height: 1.5;
            background-color: #fff;
            border-radius: 0.15842rem;
            cursor: pointer
        }

        .van-key--large {
            position: absolute;
            top: 0;
            right: 0.11881rem;
            bottom: 0.11881rem;
            left: 0;
            height: auto
        }

        .van-key--blue,
        .van-key--delete {
            font-size: 0.31683rem
        }

        .van-key--active {
            background-color: #ebedf0
        }

        .van-key--blue {
            color: #fff;
            background-color: #1989fa
        }

        .van-key--blue.van-key--active {
            background-color: #0570db
        }

        .van-key__wrapper {
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-flex-basis: 33%;
            flex-basis: 33%;
            box-sizing: border-box;
            padding: 0 0.11881rem 0.11881rem 0
        }

        .van-key__wrapper--wider {
            -webkit-flex-basis: 66%;
            flex-basis: 66%
        }

        .van-key__delete-icon {
            width: 0.63366rem;
            height: 0.43564rem
        }

        .van-key__collapse-icon {
            width: 0.59406rem;
            height: 0.47525rem
        }

        .van-key__loading-icon {
            color: #fff
        }

        .van-list__error-text,
        .van-list__finished-text,
        .van-list__loading {
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.9901rem;
            text-align: center
        }

        .van-list__placeholder {
            height: 0;
            pointer-events: none
        }

        .van-switch {
            position: relative;
            display: inline-block;
            box-sizing: content-box;
            width: 2em;
            height: 1em;
            font-size: 0.59406rem;
            background-color: #fff;
            border: 0.0198rem solid rgba(0, 0, 0, .1);
            border-radius: 1em;
            cursor: pointer;
            -webkit-transition: background-color .3s;
            transition: background-color .3s
        }

        .van-switch__node {
            position: absolute;
            top: 0;
            left: 0;
            width: 1em;
            height: 1em;
            font-size: inherit;
            background-color: #fff;
            border-radius: 100%;
            box-shadow: 0 0.05941rem 0.0198rem 0 rgba(0, 0, 0, .05), 0 0.0396rem 0.0396rem 0 rgba(0, 0, 0, .1), 0 0.05941rem 0.05941rem 0 rgba(0, 0, 0, .05);
            -webkit-transition: -webkit-transform .3s cubic-bezier(.3, 1.05, .4, 1.05);
            transition: -webkit-transform .3s cubic-bezier(.3, 1.05, .4, 1.05);
            transition: transform .3s cubic-bezier(.3, 1.05, .4, 1.05);
            transition: transform .3s cubic-bezier(.3, 1.05, .4, 1.05), -webkit-transform .3s cubic-bezier(.3, 1.05, .4, 1.05)
        }

        .van-switch__loading {
            top: 25%;
            left: 25%;
            width: 50%;
            height: 50%;
            line-height: 1
        }

        .van-switch--on {
            background-color: #1989fa
        }

        .van-switch--on .van-switch__node {
            -webkit-transform: translateX(1em);
            transform: translateX(1em)
        }

        .van-switch--on .van-switch__loading {
            color: #1989fa
        }

        .van-switch--disabled {
            cursor: not-allowed;
            opacity: .5
        }

        .van-switch--loading {
            cursor: default
        }

        .van-switch-cell {
            padding-top: 0.17822rem;
            padding-bottom: 0.17822rem
        }

        .van-switch-cell--large {
            padding-top: 0.21782rem;
            padding-bottom: 0.21782rem
        }

        .van-switch-cell .van-switch {
            float: right
        }

        .van-button {
            position: relative;
            display: inline-block;
            box-sizing: border-box;
            height: 0.87129rem;
            margin: 0;
            padding: 0;
            font-size: 0.31683rem;
            line-height: 1.2;
            text-align: center;
            border-radius: 0.0396rem;
            cursor: pointer;
            -webkit-transition: opacity .2s;
            transition: opacity .2s;
            -webkit-appearance: none
        }

        .van-button::before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #000;
            border: inherit;
            border-color: #000;
            border-radius: inherit;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            opacity: 0;
            content: ' '
        }

        .van-button:active::before {
            opacity: .1
        }

        .van-button--disabled::before,
        .van-button--loading::before {
            display: none
        }

        .van-button--default {
            color: #323233;
            background-color: #fff;
            border: 0.0198rem solid #ebedf0
        }

        .van-button--primary {
            color: #fff;
            background-color: #07c160;
            border: 0.0198rem solid #07c160
        }

        .van-button--info {
            color: #fff;
            background-color: #1989fa;
            border: 0.0198rem solid #1989fa
        }

        .van-button--danger {
            color: #fff;
            background-color: #ee0a24;
            border: 0.0198rem solid #ee0a24
        }

        .van-button--warning {
            color: #fff;
            background-color: #ff976a;
            border: 0.0198rem solid #ff976a
        }

        .van-button--plain {
            background-color: #fff
        }

        .van-button--plain.van-button--primary {
            color: #07c160
        }

        .van-button--plain.van-button--info {
            color: #1989fa
        }

        .van-button--plain.van-button--danger {
            color: #ee0a24
        }

        .van-button--plain.van-button--warning {
            color: #ff976a
        }

        .van-button--large {
            width: 100%;
            height: 0.9901rem
        }

        .van-button--normal {
            padding: 0 0.29703rem;
            font-size: 0.27723rem
        }

        .van-button--small {
            height: 0.63366rem;
            padding: 0 0.15842rem;
            font-size: 0.23762rem
        }

        .van-button__loading {
            color: inherit;
            font-size: inherit
        }

        .van-button--mini {
            height: 0.47525rem;
            padding: 0 0.07921rem;
            font-size: 0.19802rem
        }

        .van-button--mini+.van-button--mini {
            margin-left: 0.07921rem
        }

        .van-button--block {
            display: block;
            width: 100%
        }

        .van-button--disabled {
            cursor: not-allowed;
            opacity: .5
        }

        .van-button--loading {
            cursor: default
        }

        .van-button--round {
            border-radius: 19.78218rem
        }

        .van-button--square {
            border-radius: 0
        }

        .van-button__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 100%
        }

        .van-button__content::before {
            content: ' '
        }

        .van-button__icon {
            font-size: 1.2em;
            line-height: inherit
        }

        .van-button__icon+.van-button__text,
        .van-button__loading+.van-button__text,
        .van-button__text+.van-button__icon,
        .van-button__text+.van-button__loading {
            margin-left: 0.07921rem
        }

        .van-button--hairline {
            border-width: 0
        }

        .van-button--hairline::after {
            border-color: inherit;
            border-radius: 0.07921rem
        }

        .van-button--hairline.van-button--round::after {
            border-radius: 19.78218rem
        }

        .van-button--hairline.van-button--square::after {
            border-radius: 0
        }

        .van-submit-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff;
            -webkit-user-select: none;
            user-select: none
        }

        .van-submit-bar__tip {
            padding: 0.15842rem 0.23762rem;
            color: #f56723;
            font-size: 0.23762rem;
            line-height: 1.5;
            background-color: #fff7cc
        }

        .van-submit-bar__tip-icon {
            min-width: 0.35644rem;
            font-size: 0.23762rem;
            vertical-align: middle
        }

        .van-submit-bar__tip-text {
            vertical-align: middle
        }

        .van-submit-bar__bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            height: 0.9901rem;
            padding: 0 0.31683rem;
            font-size: 0.27723rem
        }

        .van-submit-bar__text {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-right: 0.23762rem;
            color: #323233;
            text-align: right
        }

        .van-submit-bar__text span {
            display: inline-block
        }

        .van-submit-bar__suffix-label {
            margin-left: 0.09901rem;
            font-weight: 500
        }

        .van-submit-bar__price {
            color: #ee0a24;
            font-weight: 500;
            font-size: 0.23762rem
        }

        .van-submit-bar__price--integer {
            font-size: 0.39604rem;
            font-family: Avenir-Heavy, PingFang SC, Helvetica Neue, Arial, sans-serif
        }

        .van-submit-bar__button {
            width: 2.17822rem;
            height: 0.79208rem;
            font-weight: 500;
            border: none
        }

        .van-submit-bar__button--danger {
            background: -webkit-linear-gradient(left, #ff6034, #ee0a24);
            background: linear-gradient(to right, #ff6034, #ee0a24)
        }

        .van-submit-bar--unfit {
            padding-bottom: 0
        }

        .van-goods-action-button {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            height: 0.79208rem;
            font-weight: 500;
            font-size: 0.27723rem;
            border: none;
            border-radius: 0
        }

        .van-goods-action-button--first {
            margin-left: 0.09901rem;
            border-top-left-radius: 19.78218rem;
            border-bottom-left-radius: 19.78218rem
        }

        .van-goods-action-button--last {
            margin-right: 0.09901rem;
            border-top-right-radius: 19.78218rem;
            border-bottom-right-radius: 19.78218rem
        }

        .van-goods-action-button--warning {
            background: -webkit-linear-gradient(left, #ffd01e, #ff8917);
            background: linear-gradient(to right, #ffd01e, #ff8917)
        }

        .van-goods-action-button--danger {
            background: -webkit-linear-gradient(left, #ff6034, #ee0a24);
            background: linear-gradient(to right, #ff6034, #ee0a24)
        }

        @media (max-width:321px) {
            .van-goods-action-button {
                font-size: 0.25743rem
            }
        }

        .van-toast {
            position: fixed;
            top: 50%;
            left: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: content-box;
            width: 1.74257rem;
            max-width: 70%;
            min-height: 1.74257rem;
            padding: 0.31683rem;
            color: #fff;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            white-space: pre-wrap;
            text-align: center;
            word-break: break-all;
            background-color: rgba(0, 0, 0, .7);
            border-radius: 0.15842rem;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0)
        }

        .van-toast--unclickable {
            overflow: hidden
        }

        .van-toast--unclickable * {
            pointer-events: none
        }

        .van-toast--html,
        .van-toast--text {
            width: -webkit-fit-content;
            width: fit-content;
            min-width: 1.90099rem;
            min-height: 0;
            padding: 0.15842rem 0.23762rem
        }

        .van-toast--html .van-toast__text,
        .van-toast--text .van-toast__text {
            margin-top: 0
        }

        .van-toast--top {
            top: 20%
        }

        .van-toast--bottom {
            top: auto;
            bottom: 20%
        }

        .van-toast__icon {
            font-size: 0.71287rem
        }

        .van-toast__loading {
            padding: 0.07921rem;
            color: #fff
        }

        .van-toast__text {
            margin-top: 0.15842rem
        }

        .van-calendar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            height: 100%;
            background-color: #fff
        }

        .van-calendar__popup.van-popup--bottom,
        .van-calendar__popup.van-popup--top {
            height: 80%
        }

        .van-calendar__popup.van-popup--left,
        .van-calendar__popup.van-popup--right {
            height: 100%
        }

        .van-calendar__popup .van-popup__close-icon {
            top: 0.21782rem
        }

        .van-calendar__header {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            box-shadow: 0 0.0396rem 0.19802rem rgba(125, 126, 128, .16)
        }

        .van-calendar__header-subtitle,
        .van-calendar__header-title,
        .van-calendar__month-title {
            height: 0.87129rem;
            font-weight: 500;
            line-height: 0.87129rem;
            text-align: center
        }

        .van-calendar__header-title {
            font-size: 0.31683rem
        }

        .van-calendar__header-subtitle {
            font-size: 0.27723rem
        }

        .van-calendar__month-title {
            font-size: 0.27723rem
        }

        .van-calendar__weekdays {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .van-calendar__weekday {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            font-size: 0.23762rem;
            line-height: 0.59406rem;
            text-align: center
        }

        .van-calendar__body {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .van-calendar__days {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-user-select: none;
            user-select: none
        }

        .van-calendar__month-mark {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            color: rgba(242, 243, 245, .8);
            font-size: 3.16832rem;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            pointer-events: none
        }

        .van-calendar__day,
        .van-calendar__selected-day {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center
        }

        .van-calendar__day {
            position: relative;
            width: 14.285%;
            height: 1.26733rem;
            font-size: 0.31683rem;
            cursor: pointer
        }

        .van-calendar__day--end,
        .van-calendar__day--multiple-middle,
        .van-calendar__day--multiple-selected,
        .van-calendar__day--start,
        .van-calendar__day--start-end {
            color: #fff;
            background-color: #ee0a24
        }

        .van-calendar__day--start {
            border-radius: 0.07921rem 0 0 0.07921rem
        }

        .van-calendar__day--end {
            border-radius: 0 0.07921rem 0.07921rem 0
        }

        .van-calendar__day--multiple-selected,
        .van-calendar__day--start-end {
            border-radius: 0.07921rem
        }

        .van-calendar__day--middle {
            color: #ee0a24
        }

        .van-calendar__day--middle::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: currentColor;
            opacity: .1;
            content: ''
        }

        .van-calendar__day--disabled {
            color: #c8c9cc;
            cursor: default
        }

        .van-calendar__bottom-info,
        .van-calendar__top-info {
            position: absolute;
            right: 0;
            left: 0;
            font-size: 0.19802rem;
            line-height: 0.27723rem
        }

        @media (max-width:350px) {

            .van-calendar__bottom-info,
            .van-calendar__top-info {
                font-size: 0.17822rem
            }
        }

        .van-calendar__top-info {
            top: 0.11881rem
        }

        .van-calendar__bottom-info {
            bottom: 0.11881rem
        }

        .van-calendar__selected-day {
            width: 1.06931rem;
            height: 1.06931rem;
            color: #fff;
            background-color: #ee0a24;
            border-radius: 0.07921rem
        }

        .van-calendar__footer {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            padding: 0 0.31683rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom)
        }

        .van-calendar__footer--unfit {
            padding-bottom: 0
        }

        .van-calendar__confirm {
            height: 0.71287rem;
            margin: 0.13861rem 0
        }

        .van-picker {
            position: relative;
            background-color: #fff;
            -webkit-user-select: none;
            user-select: none
        }

        .van-picker__toolbar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            height: 0.87129rem
        }

        .van-picker__cancel,
        .van-picker__confirm {
            height: 100%;
            padding: 0 0.31683rem;
            font-size: 0.27723rem;
            background-color: transparent;
            border: none;
            cursor: pointer
        }

        .van-picker__cancel:active,
        .van-picker__confirm:active {
            opacity: .7
        }

        .van-picker__confirm {
            color: #576b95
        }

        .van-picker__cancel {
            color: #969799
        }

        .van-picker__title {
            max-width: 50%;
            font-weight: 500;
            font-size: 0.31683rem;
            line-height: 0.39604rem;
            text-align: center
        }

        .van-picker__columns {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            cursor: grab
        }

        .van-picker__loading {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 3;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: #1989fa;
            background-color: rgba(255, 255, 255, .9)
        }

        .van-picker__frame {
            position: absolute;
            top: 50%;
            right: 0.31683rem;
            left: 0.31683rem;
            z-index: 2;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            pointer-events: none
        }

        .van-picker__mask {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            background-image: -webkit-linear-gradient(top, hsla(0, 0%, 100%, .9), hsla(0, 0%, 100%, .4)), -webkit-linear-gradient(bottom, hsla(0, 0%, 100%, .9), hsla(0, 0%, 100%, .4));
            background-image: linear-gradient(180deg, hsla(0, 0%, 100%, .9), hsla(0, 0%, 100%, .4)), linear-gradient(0deg, hsla(0, 0%, 100%, .9), hsla(0, 0%, 100%, .4));
            background-repeat: no-repeat;
            background-position: top, bottom;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            pointer-events: none
        }

        .van-picker-column {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            overflow: hidden;
            font-size: 0.31683rem
        }

        .van-picker-column__wrapper {
            -webkit-transition-timing-function: cubic-bezier(.23, 1, .68, 1);
            transition-timing-function: cubic-bezier(.23, 1, .68, 1)
        }

        .van-picker-column__item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 0 0.07921rem;
            color: #000
        }

        .van-picker-column__item--disabled {
            cursor: not-allowed;
            opacity: .3
        }

        .van-action-sheet {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            max-height: 80%;
            overflow: hidden;
            color: #323233
        }

        .van-action-sheet__content {
            -webkit-box-flex: 1;
            -webkit-flex: 1 auto;
            flex: 1 auto;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .van-action-sheet__cancel,
        .van-action-sheet__item {
            display: block;
            width: 100%;
            padding: 0.27723rem 0.31683rem;
            font-size: 0.31683rem;
            background-color: #fff;
            border: none;
            cursor: pointer
        }

        .van-action-sheet__cancel:active,
        .van-action-sheet__item:active {
            background-color: #f2f3f5
        }

        .van-action-sheet__item {
            line-height: 0.43564rem
        }

        .van-action-sheet__item--disabled,
        .van-action-sheet__item--loading {
            color: #c8c9cc
        }

        .van-action-sheet__item--disabled:active,
        .van-action-sheet__item--loading:active {
            background-color: #fff
        }

        .van-action-sheet__item--disabled {
            cursor: not-allowed
        }

        .van-action-sheet__item--loading {
            cursor: default
        }

        .van-action-sheet__cancel {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            box-sizing: border-box;
            color: #646566
        }

        .van-action-sheet__subname {
            margin-top: 0.15842rem;
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.35644rem
        }

        .van-action-sheet__gap {
            display: block;
            height: 0.15842rem;
            background-color: #f7f8fa
        }

        .van-action-sheet__header {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            font-weight: 500;
            font-size: 0.31683rem;
            line-height: 0.9505rem;
            text-align: center
        }

        .van-action-sheet__description {
            position: relative;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            padding: 0.39604rem 0.31683rem;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            text-align: center
        }

        .van-action-sheet__description::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            right: 0.31683rem;
            bottom: 0;
            left: 0.31683rem;
            border-bottom: 0.0198rem solid #ebedf0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-action-sheet__loading-icon .van-loading__spinner {
            width: 0.43564rem;
            height: 0.43564rem
        }

        .van-action-sheet__close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            padding: 0 0.31683rem;
            color: #c8c9cc;
            font-size: 0.43564rem;
            line-height: inherit
        }

        .van-action-sheet__close:active {
            color: #969799
        }

        .van-goods-action {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            box-sizing: content-box;
            height: 0.9901rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff
        }

        .van-goods-action--unfit {
            padding-bottom: 0
        }

        .van-dialog {
            position: fixed;
            top: 45%;
            left: 50%;
            width: 6.33663rem;
            overflow: hidden;
            font-size: 0.31683rem;
            background-color: #fff;
            border-radius: 0.31683rem;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: .3s;
            transition: .3s;
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform
        }

        @media (max-width:321px) {
            .van-dialog {
                width: 90%
            }
        }

        .van-dialog__header {
            padding-top: 0.51485rem;
            font-weight: 500;
            line-height: 0.47525rem;
            text-align: center
        }

        .van-dialog__header--isolated {
            padding: 0.47525rem 0
        }

        .van-dialog__content--isolated {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 2.05941rem
        }

        .van-dialog__message {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            max-height: 60vh;
            padding: 0.51485rem 0.47525rem;
            overflow-y: auto;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            white-space: pre-wrap;
            text-align: center;
            word-wrap: break-word;
            -webkit-overflow-scrolling: touch
        }

        .van-dialog__message--has-title {
            padding-top: 0.15842rem;
            color: #646566
        }

        .van-dialog__message--left {
            text-align: left
        }

        .van-dialog__message--right {
            text-align: right
        }

        .van-dialog__footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            overflow: hidden;
            -webkit-user-select: none;
            user-select: none
        }

        .van-dialog__cancel,
        .van-dialog__confirm {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            height: 0.9505rem;
            margin: 0;
            border: 0
        }

        .van-dialog__confirm,
        .van-dialog__confirm:active {
            color: #ee0a24
        }

        .van-dialog--round-button .van-dialog__footer {
            position: relative;
            height: auto;
            padding: 0.15842rem 0.47525rem 0.31683rem
        }

        .van-dialog--round-button .van-dialog__message {
            padding-bottom: 0.31683rem;
            color: #323233
        }

        .van-dialog--round-button .van-dialog__cancel,
        .van-dialog--round-button .van-dialog__confirm {
            height: 0.71287rem
        }

        .van-dialog--round-button .van-dialog__confirm {
            color: #fff
        }

        .van-dialog-bounce-enter {
            -webkit-transform: translate3d(-50%, -50%, 0) scale(.7);
            transform: translate3d(-50%, -50%, 0) scale(.7);
            opacity: 0
        }

        .van-dialog-bounce-leave-active {
            -webkit-transform: translate3d(-50%, -50%, 0) scale(.9);
            transform: translate3d(-50%, -50%, 0) scale(.9);
            opacity: 0
        }

        .van-contact-edit {
            padding: 0.31683rem
        }

        .van-contact-edit__fields {
            overflow: hidden;
            border-radius: 0.07921rem
        }

        .van-contact-edit__fields .van-field__label {
            width: 4.1em
        }

        .van-contact-edit__switch-cell {
            margin-top: 0.19802rem;
            padding-top: 0.17822rem;
            padding-bottom: 0.17822rem;
            border-radius: 0.07921rem
        }

        .van-contact-edit__buttons {
            padding: 0.63366rem 0
        }

        .van-contact-edit .van-button {
            margin-bottom: 0.23762rem;
            font-size: 0.31683rem
        }

        .van-address-edit {
            padding: 0.23762rem
        }

        .van-address-edit__fields {
            overflow: hidden;
            border-radius: 0.15842rem
        }

        .van-address-edit__fields .van-field__label {
            width: 4.1em
        }

        .van-address-edit__default {
            margin-top: 0.23762rem;
            overflow: hidden;
            border-radius: 0.15842rem
        }

        .van-address-edit__buttons {
            padding: 0.63366rem 0.07921rem
        }

        .van-address-edit__buttons .van-button {
            margin-bottom: 0.23762rem
        }

        .van-address-edit-detail {
            padding: 0
        }

        .van-address-edit-detail__search-item {
            background-color: #f2f3f5
        }

        .van-address-edit-detail__keyword {
            color: #ee0a24
        }

        .van-address-edit-detail__finish {
            color: #1989fa;
            font-size: 0.23762rem
        }

        .van-radio-group--horizontal {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-contact-list {
            box-sizing: border-box;
            height: 100%;
            padding-bottom: 1.58416rem
        }

        .van-contact-list__item {
            padding: 0.31683rem
        }

        .van-contact-list__item-value {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding-right: 0.63366rem;
            padding-left: 0.15842rem
        }

        .van-contact-list__item-tag {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            margin-left: 0.15842rem;
            padding-top: 0;
            padding-bottom: 0;
            line-height: 1.4em
        }

        .van-contact-list__group {
            box-sizing: border-box;
            height: 100%;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        .van-contact-list__edit {
            font-size: 0.31683rem
        }

        .van-contact-list__bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            padding: 0 0.31683rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff
        }

        .van-contact-list__add {
            height: 0.79208rem;
            margin: 0.09901rem 0
        }

        .van-address-list {
            box-sizing: border-box;
            height: 100%;
            padding: 0.23762rem 0.23762rem 1.58416rem
        }

        .van-address-list__bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 999;
            box-sizing: border-box;
            width: 100%;
            padding: 0 0.31683rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff
        }

        .van-address-list__add {
            height: 0.79208rem;
            margin: 0.09901rem 0
        }

        .van-address-list__disabled-text {
            padding: 0.39604rem 0 0.31683rem;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-address-item {
            padding: 0.23762rem;
            background-color: #fff;
            border-radius: 0.15842rem
        }

        .van-address-item:not(:last-child) {
            margin-bottom: 0.23762rem
        }

        .van-address-item__value {
            padding-right: 0.87129rem
        }

        .van-address-item__name {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 0.15842rem;
            font-size: 0.31683rem;
            line-height: 0.43564rem
        }

        .van-address-item__tag {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            margin-left: 0.15842rem;
            padding-top: 0;
            padding-bottom: 0;
            line-height: 1.4em
        }

        .van-address-item__address {
            color: #323233;
            font-size: 0.25743rem;
            line-height: 0.35644rem
        }

        .van-address-item--disabled .van-address-item__address,
        .van-address-item--disabled .van-address-item__name {
            color: #c8c9cc
        }

        .van-address-item__edit {
            position: absolute;
            top: 50%;
            right: 0.31683rem;
            color: #969799;
            font-size: 0.39604rem;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%)
        }

        .van-address-item .van-cell {
            padding: 0
        }

        .van-address-item .van-radio__label {
            margin-left: 0.23762rem
        }

        .van-address-item .van-radio__icon--checked .van-icon {
            background-color: #ee0a24;
            border-color: #ee0a24
        }

        .van-badge {
            display: inline-block;
            box-sizing: border-box;
            min-width: 0.31683rem;
            padding: 0 0.05941rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.23762rem;
            font-family: -apple-system-font, Helvetica Neue, Arial, sans-serif;
            line-height: 1.2;
            text-align: center;
            background-color: #ee0a24;
            border: 0.0198rem solid #fff;
            border-radius: 19.78218rem
        }

        .van-badge--fixed {
            position: absolute;
            top: 0;
            right: 0;
            -webkit-transform: translate(50%, -50%);
            transform: translate(50%, -50%);
            -webkit-transform-origin: 100%;
            transform-origin: 100%
        }

        .van-badge--dot {
            width: 0.15842rem;
            min-width: 0;
            height: 0.15842rem;
            background-color: #ee0a24;
            border-radius: 100%
        }

        .van-badge__wrapper {
            position: relative;
            display: inline-block
        }

        .van-tab__pane,
        .van-tab__pane-wrapper {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            box-sizing: border-box;
            width: 100%
        }

        .van-tab__pane-wrapper--inactive {
            height: 0;
            overflow: visible
        }

        .van-sticky--fixed {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 99
        }

        .van-tab {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0 0.07921rem;
            color: #646566;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            cursor: pointer
        }

        .van-tab--active {
            color: #323233;
            font-weight: 500
        }

        .van-tab--disabled {
            color: #c8c9cc;
            cursor: not-allowed
        }

        .van-tab__text--ellipsis {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical
        }

        .van-tab__text-wrapper {
            position: relative
        }

        .van-tabs {
            position: relative
        }

        .van-tabs__wrap {
            overflow: hidden
        }

        .van-tabs__wrap--page-top {
            position: fixed
        }

        .van-tabs__wrap--content-bottom {
            top: auto;
            bottom: 0
        }

        .van-tabs__wrap--scrollable .van-tab {
            -webkit-box-flex: 1;
            -webkit-flex: 1 0 auto;
            flex: 1 0 auto;
            padding: 0 0.23762rem
        }

        .van-tabs__wrap--scrollable .van-tabs__nav {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch
        }

        .van-tabs__wrap--scrollable .van-tabs__nav::-webkit-scrollbar {
            display: none
        }

        .van-tabs__nav {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            background-color: #fff;
            -webkit-user-select: none;
            user-select: none
        }

        .van-tabs__nav--line {
            box-sizing: content-box;
            height: 100%;
            padding-bottom: 0.29703rem
        }

        .van-tabs__nav--line.van-tabs__nav--complete {
            padding-right: 0.15842rem;
            padding-left: 0.15842rem
        }

        .van-tabs__nav--card {
            box-sizing: border-box;
            height: 0.59406rem;
            margin: 0 0.31683rem;
            border: 0.0198rem solid #ee0a24;
            border-radius: 0.0396rem
        }

        .van-tabs__nav--card .van-tab {
            color: #ee0a24;
            border-right: 0.0198rem solid #ee0a24
        }

        .van-tabs__nav--card .van-tab:last-child {
            border-right: none
        }

        .van-tabs__nav--card .van-tab.van-tab--active {
            color: #fff;
            background-color: #ee0a24
        }

        .van-tabs__nav--card .van-tab--disabled {
            color: #c8c9cc
        }

        .van-tabs__line {
            position: absolute;
            bottom: 0.29703rem;
            left: 0;
            z-index: 1;
            width: 0.79208rem;
            height: 0.05941rem;
            background-color: #ee0a24;
            border-radius: 0.05941rem
        }

        .van-tabs__track {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            width: 100%;
            height: 100%;
            will-change: left
        }

        .van-tabs__content--animated {
            overflow: hidden
        }

        .van-tabs--line .van-tabs__wrap {
            height: 0.87129rem
        }

        .van-tabs--card>.van-tabs__wrap {
            height: 0.59406rem
        }

        .van-coupon-list {
            position: relative;
            height: 100%;
            background-color: #f7f8fa
        }

        .van-coupon-list__field {
            padding: 0.09901rem 0 0.09901rem 0.31683rem
        }

        .van-coupon-list__field .van-field__body {
            height: 0.67327rem;
            padding-left: 0.23762rem;
            line-height: 0.67327rem;
            background: #f7f8fa;
            border-radius: 0.33663rem
        }

        .van-coupon-list__field .van-field__body::-webkit-input-placeholder {
            color: #c8c9cc
        }

        .van-coupon-list__field .van-field__body::placeholder {
            color: #c8c9cc
        }

        .van-coupon-list__field .van-field__clear {
            margin-right: 0
        }

        .van-coupon-list__exchange-bar {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            background-color: #fff
        }

        .van-coupon-list__exchange {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            height: 0.63366rem;
            font-size: 0.31683rem;
            line-height: 0.59406rem;
            border: 0
        }

        .van-coupon-list .van-tabs__wrap {
            box-shadow: 0 0.11881rem 0.23762rem -0.23762rem #969799
        }

        .van-coupon-list__list {
            box-sizing: border-box;
            padding: 0.31683rem 0 0.47525rem;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .van-coupon-list__list--with-bottom {
            padding-bottom: 1.30693rem
        }

        .van-coupon-list__bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 999;
            box-sizing: border-box;
            width: 100%;
            padding: 0.09901rem 0.31683rem;
            font-weight: 500;
            background-color: #fff
        }

        .van-coupon-list__close {
            height: 0.79208rem
        }

        .van-coupon-list__empty {
            padding-top: 1.18812rem;
            text-align: center
        }

        .van-coupon-list__empty p {
            margin: 0.31683rem 0;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-coupon-list__empty img {
            width: 3.9604rem;
            height: 3.9604rem
        }

        .van-cascader__header {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            height: 0.9505rem;
            padding: 0 0.31683rem
        }

        .van-cascader__title {
            font-weight: 500;
            font-size: 0.31683rem;
            line-height: 0.39604rem
        }

        .van-cascader__close-icon {
            color: #c8c9cc;
            font-size: 0.43564rem
        }

        .van-cascader__close-icon:active {
            color: #969799
        }

        .van-cascader__tabs .van-tab {
            -webkit-box-flex: 0;
            -webkit-flex: none;
            flex: none;
            padding: 0 0.19802rem
        }

        .van-cascader__tabs.van-tabs--line .van-tabs__wrap {
            height: 0.9505rem
        }

        .van-cascader__tabs .van-tabs__nav--complete {
            padding-right: 0.11881rem;
            padding-left: 0.11881rem
        }

        .van-cascader__tab {
            color: #323233;
            font-weight: 500
        }

        .van-cascader__tab--unselected {
            color: #969799;
            font-weight: 400
        }

        .van-cascader__option {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding: 0.19802rem 0.31683rem;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-cascader__option:active {
            background-color: #f2f3f5
        }

        .van-cascader__option--selected {
            color: #ee0a24;
            font-weight: 500
        }

        .van-cascader__selected-icon {
            font-size: 0.35644rem
        }

        .van-cascader__options {
            box-sizing: border-box;
            height: 7.60396rem;
            padding-top: 0.11881rem;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .van-cell-group {
            background-color: #fff
        }

        .van-cell-group--inset {
            margin: 0 0.31683rem;
            overflow: hidden;
            border-radius: 0.15842rem
        }

        .van-cell-group__title {
            padding: 0.31683rem 0.31683rem 0.15842rem;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.31683rem
        }

        .van-cell-group__title--inset {
            padding: 0.31683rem 0.31683rem 0.15842rem 0.63366rem
        }

        .van-panel {
            background: #fff
        }

        .van-panel__header-value {
            color: #ee0a24
        }

        .van-panel__footer {
            padding: 0.15842rem 0.31683rem
        }

        .van-checkbox-group--horizontal {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-circle {
            position: relative;
            display: inline-block;
            width: 1.9802rem;
            height: 1.9802rem;
            text-align: center
        }

        .van-circle svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .van-circle__layer {
            stroke: #fff
        }

        .van-circle__hover {
            fill: none;
            stroke: #1989fa;
            stroke-linecap: round
        }

        .van-circle__text {
            position: absolute;
            top: 50%;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            padding: 0 0.07921rem;
            color: #323233;
            font-weight: 500;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .van-col {
            float: left;
            box-sizing: border-box;
            min-height: 0.0198rem
        }

        .van-col--1 {
            width: 4.16666667%
        }

        .van-col--offset-1 {
            margin-left: 4.16666667%
        }

        .van-col--2 {
            width: 8.33333333%
        }

        .van-col--offset-2 {
            margin-left: 8.33333333%
        }

        .van-col--3 {
            width: 12.5%
        }

        .van-col--offset-3 {
            margin-left: 12.5%
        }

        .van-col--4 {
            width: 16.66666667%
        }

        .van-col--offset-4 {
            margin-left: 16.66666667%
        }

        .van-col--5 {
            width: 20.83333333%
        }

        .van-col--offset-5 {
            margin-left: 20.83333333%
        }

        .van-col--6 {
            width: 25%
        }

        .van-col--offset-6 {
            margin-left: 25%
        }

        .van-col--7 {
            width: 29.16666667%
        }

        .van-col--offset-7 {
            margin-left: 29.16666667%
        }

        .van-col--8 {
            width: 33.33333333%
        }

        .van-col--offset-8 {
            margin-left: 33.33333333%
        }

        .van-col--9 {
            width: 37.5%
        }

        .van-col--offset-9 {
            margin-left: 37.5%
        }

        .van-col--10 {
            width: 41.66666667%
        }

        .van-col--offset-10 {
            margin-left: 41.66666667%
        }

        .van-col--11 {
            width: 45.83333333%
        }

        .van-col--offset-11 {
            margin-left: 45.83333333%
        }

        .van-col--12 {
            width: 50%
        }

        .van-col--offset-12 {
            margin-left: 50%
        }

        .van-col--13 {
            width: 54.16666667%
        }

        .van-col--offset-13 {
            margin-left: 54.16666667%
        }

        .van-col--14 {
            width: 58.33333333%
        }

        .van-col--offset-14 {
            margin-left: 58.33333333%
        }

        .van-col--15 {
            width: 62.5%
        }

        .van-col--offset-15 {
            margin-left: 62.5%
        }

        .van-col--16 {
            width: 66.66666667%
        }

        .van-col--offset-16 {
            margin-left: 66.66666667%
        }

        .van-col--17 {
            width: 70.83333333%
        }

        .van-col--offset-17 {
            margin-left: 70.83333333%
        }

        .van-col--18 {
            width: 75%
        }

        .van-col--offset-18 {
            margin-left: 75%
        }

        .van-col--19 {
            width: 79.16666667%
        }

        .van-col--offset-19 {
            margin-left: 79.16666667%
        }

        .van-col--20 {
            width: 83.33333333%
        }

        .van-col--offset-20 {
            margin-left: 83.33333333%
        }

        .van-col--21 {
            width: 87.5%
        }

        .van-col--offset-21 {
            margin-left: 87.5%
        }

        .van-col--22 {
            width: 91.66666667%
        }

        .van-col--offset-22 {
            margin-left: 91.66666667%
        }

        .van-col--23 {
            width: 95.83333333%
        }

        .van-col--offset-23 {
            margin-left: 95.83333333%
        }

        .van-col--24 {
            width: 100%
        }

        .van-col--offset-24 {
            margin-left: 100%
        }

        .van-count-down {
            color: #323233;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-divider {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin: 0.31683rem 0;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.47525rem;
            border-color: #ebedf0;
            border-style: solid;
            border-width: 0
        }

        .van-divider::after,
        .van-divider::before {
            display: block;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            box-sizing: border-box;
            height: 0.0198rem;
            border-color: inherit;
            border-style: inherit;
            border-width: 0.0198rem 0 0
        }

        .van-divider::before {
            content: ''
        }

        .van-divider--hairline::after,
        .van-divider--hairline::before {
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-divider--dashed {
            border-style: dashed
        }

        .van-divider--content-center::before,
        .van-divider--content-left::before,
        .van-divider--content-right::before {
            margin-right: 0.31683rem
        }

        .van-divider--content-center::after,
        .van-divider--content-left::after,
        .van-divider--content-right::after {
            margin-left: 0.31683rem;
            content: ''
        }

        .van-divider--content-left::before {
            max-width: 10%
        }

        .van-divider--content-right::after {
            max-width: 10%
        }

        .van-dropdown-menu {
            -webkit-user-select: none;
            user-select: none
        }

        .van-dropdown-menu__bar {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 0.9505rem;
            background-color: #fff;
            box-shadow: 0 0.0396rem 0.23762rem rgba(100, 101, 102, .12)
        }

        .van-dropdown-menu__bar--opened {
            z-index: 11
        }

        .van-dropdown-menu__item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            min-width: 0;
            cursor: pointer
        }

        .van-dropdown-menu__item:active {
            opacity: .7
        }

        .van-dropdown-menu__item--disabled:active {
            opacity: 1
        }

        .van-dropdown-menu__item--disabled .van-dropdown-menu__title {
            color: #969799
        }

        .van-dropdown-menu__title {
            position: relative;
            box-sizing: border-box;
            max-width: 100%;
            padding: 0 0.15842rem;
            color: #323233;
            font-size: 0.29703rem;
            line-height: 0.43564rem
        }

        .van-dropdown-menu__title::after {
            position: absolute;
            top: 50%;
            right: -0.07921rem;
            margin-top: -0.09901rem;
            border: 0.05941rem solid;
            border-color: transparent transparent #dcdee0 #dcdee0;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            opacity: .8;
            content: ''
        }

        .van-dropdown-menu__title--active {
            color: #ee0a24
        }

        .van-dropdown-menu__title--active::after {
            border-color: transparent transparent currentColor currentColor
        }

        .van-dropdown-menu__title--down::after {
            margin-top: -0.0198rem;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg)
        }

        .van-empty {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0.63366rem 0
        }

        .van-empty__image {
            width: 3.16832rem;
            height: 3.16832rem
        }

        .van-empty__image img {
            width: 100%;
            height: 100%
        }

        .van-empty__description {
            margin-top: 0.31683rem;
            padding: 0 1.18812rem;
            color: #969799;
            font-size: 0.27723rem;
            line-height: 0.39604rem
        }

        .van-empty__bottom {
            margin-top: 0.47525rem
        }

        .van-grid {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-swipe {
            position: relative;
            overflow: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            cursor: grab;
            -webkit-user-select: none;
            user-select: none
        }

        .van-swipe__track {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 100%
        }

        .van-swipe__track--vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .van-swipe__indicators {
            position: absolute;
            bottom: 0.23762rem;
            left: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .van-swipe__indicators--vertical {
            top: 50%;
            bottom: auto;
            left: 0.23762rem;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .van-swipe__indicators--vertical .van-swipe__indicator:not(:last-child) {
            margin-bottom: 0.11881rem
        }

        .van-swipe__indicator {
            width: 0.11881rem;
            height: 0.11881rem;
            background-color: #ebedf0;
            border-radius: 100%;
            opacity: .3;
            -webkit-transition: opacity .2s, background-color .2s;
            transition: opacity .2s, background-color .2s
        }

        .van-swipe__indicator:not(:last-child) {
            margin-right: 0.11881rem
        }

        .van-swipe__indicator--active {
            background-color: #1989fa;
            opacity: 1
        }

        .van-swipe-item {
            position: relative;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%
        }

        .van-image-preview {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .van-image-preview__swipe {
            height: 100%
        }

        .van-image-preview__swipe-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            overflow: hidden
        }

        .van-image-preview__cover {
            position: absolute;
            top: 0;
            left: 0
        }

        .van-image-preview__image {
            width: 100%;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .van-image-preview__image--vertical {
            width: auto;
            height: 100%
        }

        .van-image-preview__image img {
            -webkit-user-drag: none
        }

        .van-image-preview__image .van-image__error {
            top: 30%;
            height: 40%
        }

        .van-image-preview__image .van-image__error-icon {
            font-size: 0.71287rem
        }

        .van-image-preview__image .van-image__loading {
            background-color: transparent
        }

        .van-image-preview__index {
            position: absolute;
            top: 0.31683rem;
            left: 50%;
            color: #fff;
            font-size: 0.27723rem;
            line-height: 0.39604rem;
            text-shadow: 0 0.0198rem 0.0198rem #323233;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0)
        }

        .van-image-preview__overlay {
            background-color: rgba(0, 0, 0, .9)
        }

        .van-image-preview__close-icon {
            position: absolute;
            z-index: 1;
            color: #c8c9cc;
            font-size: 0.43564rem;
            cursor: pointer
        }

        .van-image-preview__close-icon:active {
            color: #969799
        }

        .van-image-preview__close-icon--top-left {
            top: 0.31683rem;
            left: 0.31683rem
        }

        .van-image-preview__close-icon--top-right {
            top: 0.31683rem;
            right: 0.31683rem
        }

        .van-image-preview__close-icon--bottom-left {
            bottom: 0.31683rem;
            left: 0.31683rem
        }

        .van-image-preview__close-icon--bottom-right {
            right: 0.31683rem;
            bottom: 0.31683rem
        }

        .van-uploader {
            position: relative;
            display: inline-block
        }

        .van-uploader__wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-uploader__wrapper--disabled {
            opacity: .5
        }

        .van-uploader__input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            cursor: pointer;
            opacity: 0
        }

        .van-uploader__input-wrapper {
            position: relative
        }

        .van-uploader__input:disabled {
            cursor: not-allowed
        }

        .van-uploader__upload {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            width: 1.58416rem;
            height: 1.58416rem;
            margin: 0 0.15842rem 0.15842rem 0;
            background-color: #f7f8fa
        }

        .van-uploader__upload:active {
            background-color: #f2f3f5
        }

        .van-uploader__upload--readonly:active {
            background-color: #f7f8fa
        }

        .van-uploader__upload-icon {
            color: #dcdee0;
            font-size: 0.47525rem
        }

        .van-uploader__upload-text {
            margin-top: 0.15842rem;
            color: #969799;
            font-size: 0.23762rem
        }

        .van-uploader__preview {
            position: relative;
            margin: 0 0.15842rem 0.15842rem 0;
            cursor: pointer
        }

        .van-uploader__preview-image {
            display: block;
            width: 1.58416rem;
            height: 1.58416rem;
            overflow: hidden
        }

        .van-uploader__preview-delete {
            position: absolute;
            top: 0;
            right: 0;
            width: 0.27723rem;
            height: 0.27723rem;
            background-color: rgba(0, 0, 0, .7);
            border-radius: 0 0 0 0.23762rem
        }

        .van-uploader__preview-delete-icon {
            position: absolute;
            top: -0.0396rem;
            right: -0.0396rem;
            color: #fff;
            font-size: 0.31683rem;
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        .van-uploader__preview-cover {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .van-uploader__mask {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            color: #fff;
            background-color: rgba(50, 50, 51, .88)
        }

        .van-uploader__mask-icon {
            font-size: 0.43564rem
        }

        .van-uploader__mask-message {
            margin-top: 0.11881rem;
            padding: 0 0.07921rem;
            font-size: 0.23762rem;
            line-height: 0.27723rem
        }

        .van-uploader__loading {
            width: 0.43564rem;
            height: 0.43564rem;
            color: #fff
        }

        .van-uploader__file {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 1.58416rem;
            height: 1.58416rem;
            background-color: #f7f8fa
        }

        .van-uploader__file-icon {
            color: #646566;
            font-size: 0.39604rem
        }

        .van-uploader__file-name {
            box-sizing: border-box;
            width: 100%;
            margin-top: 0.15842rem;
            padding: 0 0.07921rem;
            color: #646566;
            font-size: 0.23762rem;
            text-align: center
        }

        .van-index-anchor {
            z-index: 1;
            box-sizing: border-box;
            padding: 0 0.31683rem;
            color: #323233;
            font-weight: 500;
            font-size: 0.27723rem;
            line-height: 0.63366rem;
            background-color: transparent
        }

        .van-index-anchor--sticky {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            color: #ee0a24;
            background-color: #fff
        }

        .van-index-bar__sidebar {
            position: fixed;
            top: 50%;
            right: 0;
            z-index: 2;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-index-bar__index {
            padding: 0 0.15842rem 0 0.31683rem;
            font-weight: 500;
            font-size: 0.19802rem;
            line-height: 0.27723rem
        }

        .van-index-bar__index--active {
            color: #ee0a24
        }

        .van-pagination {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            font-size: 0.27723rem
        }

        .van-pagination__item,
        .van-pagination__page-desc {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .van-pagination__item {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            box-sizing: border-box;
            min-width: 0.71287rem;
            height: 0.79208rem;
            color: #1989fa;
            background-color: #fff;
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none
        }

        .van-pagination__item:active {
            color: #fff;
            background-color: #1989fa
        }

        .van-pagination__item::after {
            border-width: 0.0198rem 0 0.0198rem 0.0198rem
        }

        .van-pagination__item:last-child::after {
            border-right-width: 0.0198rem
        }

        .van-pagination__item--active {
            color: #fff;
            background-color: #1989fa
        }

        .van-pagination__next,
        .van-pagination__prev {
            padding: 0 0.07921rem;
            cursor: pointer
        }

        .van-pagination__item--disabled,
        .van-pagination__item--disabled:active {
            color: #646566;
            background-color: #f7f8fa;
            cursor: not-allowed;
            opacity: .5
        }

        .van-pagination__page {
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            flex-grow: 0
        }

        .van-pagination__page-desc {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            height: 0.79208rem;
            color: #646566
        }

        .van-pagination--simple .van-pagination__next::after,
        .van-pagination--simple .van-pagination__prev::after {
            border-width: 0.0198rem
        }

        .van-password-input {
            position: relative;
            margin: 0 0.31683rem;
            -webkit-user-select: none;
            user-select: none
        }

        .van-password-input__error-info,
        .van-password-input__info {
            margin-top: 0.31683rem;
            font-size: 0.27723rem;
            text-align: center
        }

        .van-password-input__info {
            color: #969799
        }

        .van-password-input__error-info {
            color: #ee0a24
        }

        .van-password-input__security {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            width: 100%;
            height: 0.9901rem;
            cursor: pointer
        }

        .van-password-input__security::after {
            border-radius: 0.11881rem
        }

        .van-password-input__security li {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 100%;
            font-size: 0.39604rem;
            line-height: 1.2;
            background-color: #fff
        }

        .van-password-input__security i {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0.19802rem;
            height: 0.19802rem;
            background-color: #000;
            border-radius: 100%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            visibility: hidden
        }

        .van-password-input__cursor {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0.0198rem;
            height: 40%;
            background-color: #323233;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-animation: 1s van-cursor-flicker infinite;
            animation: 1s van-cursor-flicker infinite
        }

        @-webkit-keyframes van-cursor-flicker {
            from {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes van-cursor-flicker {
            from {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .van-progress {
            position: relative;
            height: 0.07921rem;
            background: #ebedf0;
            border-radius: 0.07921rem
        }

        .van-progress__portion {
            position: absolute;
            left: 0;
            height: 100%;
            background: #1989fa;
            border-radius: inherit
        }

        .van-progress__pivot {
            position: absolute;
            top: 50%;
            box-sizing: border-box;
            min-width: 3.6em;
            padding: 0 0.09901rem;
            color: #fff;
            font-size: 0.19802rem;
            line-height: 1.6;
            text-align: center;
            word-break: keep-all;
            background-color: #1989fa;
            border-radius: 1em;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%)
        }

        .van-row::after {
            display: table;
            clear: both;
            content: ''
        }

        .van-row--flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .van-row--flex::after {
            display: none
        }

        .van-row--justify-center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .van-row--justify-end {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end
        }

        .van-row--justify-space-between {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .van-row--justify-space-around {
            -webkit-justify-content: space-around;
            justify-content: space-around
        }

        .van-row--align-center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .van-row--align-bottom {
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            align-items: flex-end
        }

        .van-sidebar {
            width: 1.58416rem;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .van-tree-select {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            font-size: 0.27723rem;
            -webkit-user-select: none;
            user-select: none
        }

        .van-tree-select__nav {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            overflow-y: auto;
            background-color: #f7f8fa;
            -webkit-overflow-scrolling: touch
        }

        .van-tree-select__nav-item {
            padding: 0.27723rem 0.23762rem
        }

        .van-tree-select__content {
            -webkit-box-flex: 2;
            -webkit-flex: 2;
            flex: 2;
            overflow-y: auto;
            background-color: #fff;
            -webkit-overflow-scrolling: touch
        }

        .van-tree-select__item {
            position: relative;
            padding: 0 0.63366rem 0 0.31683rem;
            font-weight: 500;
            line-height: 0.9505rem;
            cursor: pointer
        }

        .van-tree-select__item--active {
            color: #ee0a24
        }

        .van-tree-select__item--disabled {
            color: #c8c9cc;
            cursor: not-allowed
        }

        .van-tree-select__selected {
            position: absolute;
            top: 50%;
            right: 0.31683rem;
            margin-top: -0.15842rem;
            font-size: 0.31683rem
        }

        .van-skeleton {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 0 0.31683rem
        }

        .van-skeleton__avatar {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            width: 0.63366rem;
            height: 0.63366rem;
            margin-right: 0.31683rem;
            background-color: #f2f3f5
        }

        .van-skeleton__avatar--round {
            border-radius: 19.78218rem
        }

        .van-skeleton__content {
            width: 100%
        }

        .van-skeleton__avatar+.van-skeleton__content {
            padding-top: 0.15842rem
        }

        .van-skeleton__row,
        .van-skeleton__title {
            height: 0.31683rem;
            background-color: #f2f3f5
        }

        .van-skeleton__title {
            width: 40%;
            margin: 0
        }

        .van-skeleton__row:not(:first-child) {
            margin-top: 0.23762rem
        }

        .van-skeleton__title+.van-skeleton__row {
            margin-top: 0.39604rem
        }

        .van-skeleton--animate {
            -webkit-animation: van-skeleton-blink 1.2s ease-in-out infinite;
            animation: van-skeleton-blink 1.2s ease-in-out infinite
        }

        .van-skeleton--round .van-skeleton__row,
        .van-skeleton--round .van-skeleton__title {
            border-radius: 19.78218rem
        }

        @-webkit-keyframes van-skeleton-blink {
            50% {
                opacity: .6
            }
        }

        @keyframes van-skeleton-blink {
            50% {
                opacity: .6
            }
        }

        .van-stepper {
            font-size: 0;
            -webkit-user-select: none;
            user-select: none
        }

        .van-stepper__minus,
        .van-stepper__plus {
            position: relative;
            box-sizing: border-box;
            width: 0.55446rem;
            height: 0.55446rem;
            margin: 0;
            padding: 0;
            color: #323233;
            vertical-align: middle;
            background-color: #f2f3f5;
            border: 0;
            cursor: pointer
        }

        .van-stepper__minus::before,
        .van-stepper__plus::before {
            width: 50%;
            height: 0.0198rem
        }

        .van-stepper__minus::after,
        .van-stepper__plus::after {
            width: 0.0198rem;
            height: 50%
        }

        .van-stepper__minus::after,
        .van-stepper__minus::before,
        .van-stepper__plus::after,
        .van-stepper__plus::before {
            position: absolute;
            top: 50%;
            left: 50%;
            background-color: currentColor;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            content: ''
        }

        .van-stepper__minus:active,
        .van-stepper__plus:active {
            background-color: #e8e8e8
        }

        .van-stepper__minus--disabled,
        .van-stepper__plus--disabled {
            color: #c8c9cc;
            background-color: #f7f8fa;
            cursor: not-allowed
        }

        .van-stepper__minus--disabled:active,
        .van-stepper__plus--disabled:active {
            background-color: #f7f8fa
        }

        .van-stepper__minus {
            border-radius: 0.07921rem 0 0 0.07921rem
        }

        .van-stepper__minus::after {
            display: none
        }

        .van-stepper__plus {
            border-radius: 0 0.07921rem 0.07921rem 0
        }

        .van-stepper__input {
            box-sizing: border-box;
            width: 0.63366rem;
            height: 0.55446rem;
            margin: 0 0.0396rem;
            padding: 0;
            color: #323233;
            font-size: 0.27723rem;
            line-height: normal;
            text-align: center;
            vertical-align: middle;
            background-color: #f2f3f5;
            border: 0;
            border-width: 0.0198rem 0;
            border-radius: 0;
            -webkit-appearance: none
        }

        .van-stepper__input:disabled {
            color: #c8c9cc;
            background-color: #f2f3f5;
            -webkit-text-fill-color: #c8c9cc;
            opacity: 1
        }

        .van-stepper__input:read-only {
            cursor: default
        }

        .van-stepper--round .van-stepper__input {
            background-color: transparent
        }

        .van-stepper--round .van-stepper__minus,
        .van-stepper--round .van-stepper__plus {
            border-radius: 100%
        }

        .van-stepper--round .van-stepper__minus:active,
        .van-stepper--round .van-stepper__plus:active {
            opacity: .7
        }

        .van-stepper--round .van-stepper__minus--disabled,
        .van-stepper--round .van-stepper__minus--disabled:active,
        .van-stepper--round .van-stepper__plus--disabled,
        .van-stepper--round .van-stepper__plus--disabled:active {
            opacity: .3
        }

        .van-stepper--round .van-stepper__plus {
            color: #fff;
            background-color: #ee0a24
        }

        .van-stepper--round .van-stepper__minus {
            color: #ee0a24;
            background-color: #fff;
            border: 0.0198rem solid #ee0a24
        }

        .van-sku-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            align-items: stretch;
            min-height: 50%;
            max-height: 80%;
            overflow-y: visible;
            font-size: 0.27723rem;
            background: #fff
        }

        .van-sku-body {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 0.87129rem;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        .van-sku-body::-webkit-scrollbar {
            display: none
        }

        .van-sku-header {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            margin: 0 0.31683rem
        }

        .van-sku-header__img-wrap {
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            width: 1.90099rem;
            height: 1.90099rem;
            margin: 0.23762rem 0.23762rem 0.23762rem 0;
            overflow: hidden;
            border-radius: 0.07921rem
        }

        .van-sku-header__goods-info {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            padding: 0.23762rem 0.39604rem 0.23762rem 0
        }

        .van-sku-header-item {
            margin-top: 0.15842rem;
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.31683rem
        }

        .van-sku__price-symbol {
            font-size: 0.31683rem;
            vertical-align: bottom
        }

        .van-sku__price-num {
            font-weight: 500;
            font-size: 0.43564rem;
            vertical-align: bottom;
            word-wrap: break-word
        }

        .van-sku__goods-price {
            margin-left: -0.0396rem;
            color: #ee0a24
        }

        .van-sku__price-tag {
            position: relative;
            display: inline-block;
            margin-left: 0.15842rem;
            padding: 0 0.09901rem;
            overflow: hidden;
            color: #ee0a24;
            font-size: 0.23762rem;
            line-height: 0.31683rem;
            border-radius: 0.15842rem
        }

        .van-sku__price-tag::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: currentColor;
            opacity: .1;
            content: ''
        }

        .van-sku-group-container {
            padding-top: 0.23762rem
        }

        .van-sku-group-container--hide-soldout .van-sku-row__item--disabled {
            display: none
        }

        .van-sku-row {
            margin: 0 0.31683rem 0.23762rem
        }

        .van-sku-row:last-child {
            margin-bottom: 0
        }

        .van-sku-row__image-item,
        .van-sku-row__item {
            position: relative;
            overflow: hidden;
            color: #323233;
            border-radius: 0.07921rem;
            cursor: pointer
        }

        .van-sku-row__image-item::before,
        .van-sku-row__item::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f7f8fa;
            content: ''
        }

        .van-sku-row__image-item--active,
        .van-sku-row__item--active {
            color: #ee0a24
        }

        .van-sku-row__image-item--active::before,
        .van-sku-row__item--active::before {
            background: currentColor;
            opacity: .1
        }

        .van-sku-row__item {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            min-width: 0.79208rem;
            margin: 0 0.23762rem 0.23762rem 0;
            font-size: 0.25743rem;
            line-height: 0.31683rem;
            vertical-align: middle
        }

        .van-sku-row__item-img {
            z-index: 1;
            width: 0.47525rem;
            height: 0.47525rem;
            margin: 0.07921rem 0 0.07921rem 0.07921rem;
            object-fit: cover;
            border-radius: 0.0396rem
        }

        .van-sku-row__item-name {
            z-index: 1;
            padding: 0.15842rem
        }

        .van-sku-row__item--disabled {
            color: #c8c9cc;
            background: #f2f3f5;
            cursor: not-allowed
        }

        .van-sku-row__item--disabled .van-sku-row__item-img {
            opacity: .3
        }

        .van-sku-row__image {
            margin-right: 0
        }

        .van-sku-row__image-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            width: 2.17822rem;
            margin: 0 0.07921rem 0.07921rem 0;
            border: 0.0198rem solid transparent
        }

        .van-sku-row__image-item:last-child {
            margin-right: 0
        }

        .van-sku-row__image-item-img {
            width: 100%;
            height: 2.17822rem
        }

        .van-sku-row__image-item-img-icon {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 3;
            width: 0.35644rem;
            height: 0.35644rem;
            color: #fff;
            line-height: 0.35644rem;
            text-align: center;
            background-color: rgba(0, 0, 0, .4);
            border-bottom-left-radius: 0.07921rem
        }

        .van-sku-row__image-item-name {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            box-sizing: border-box;
            height: 0.79208rem;
            padding: 0.07921rem;
            font-size: 0.23762rem;
            line-height: 0.31683rem
        }

        .van-sku-row__image-item-name span {
            word-wrap: break-word
        }

        .van-sku-row__image-item--active {
            border-color: currentColor
        }

        .van-sku-row__image-item--disabled {
            color: #c8c9cc;
            cursor: not-allowed
        }

        .van-sku-row__image-item--disabled::before {
            z-index: 2;
            background: #f2f3f5;
            opacity: .4
        }

        .van-sku-row__title {
            padding-bottom: 0.23762rem
        }

        .van-sku-row__title-multiple {
            color: #969799
        }

        .van-sku-row__scroller {
            margin: 0 -0.31683rem;
            overflow-x: scroll;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch
        }

        .van-sku-row__scroller::-webkit-scrollbar {
            display: none
        }

        .van-sku-row__row {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            margin-bottom: 0.07921rem;
            padding: 0 0.31683rem
        }

        .van-sku-row__indicator {
            width: 0.79208rem;
            height: 0.07921rem;
            background: #ebedf0;
            border-radius: 0.0396rem
        }

        .van-sku-row__indicator-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding-bottom: 0.31683rem
        }

        .van-sku-row__indicator-slider {
            width: 50%;
            height: 100%;
            background-color: #ee0a24;
            border-radius: 0.0396rem
        }

        .van-sku-stepper-stock {
            padding: 0.23762rem 0.31683rem;
            overflow: hidden;
            line-height: 0.59406rem
        }

        .van-sku__stepper {
            float: right;
            padding-left: 0.07921rem
        }

        .van-sku__stepper-title {
            float: left
        }

        .van-sku__stepper-quota {
            float: right;
            color: #ee0a24;
            font-size: 0.23762rem
        }

        .van-sku__stock {
            display: inline-block;
            margin-right: 0.15842rem;
            color: #969799;
            font-size: 0.23762rem
        }

        .van-sku__stock-num--highlight {
            color: #ee0a24
        }

        .van-sku-messages {
            padding-bottom: 0.63366rem
        }

        .van-sku-messages__image-cell .van-cell__title {
            max-width: 6.2em;
            margin-right: 0.23762rem;
            color: #646566;
            text-align: left;
            word-wrap: break-word
        }

        .van-sku-messages__image-cell .van-cell__value {
            overflow: visible;
            text-align: left
        }

        .van-sku-messages__image-cell-label {
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.35644rem
        }

        .van-sku-messages__cell-block {
            position: relative
        }

        .van-sku-messages__cell-block::after {
            position: absolute;
            box-sizing: border-box;
            content: ' ';
            pointer-events: none;
            right: 0.31683rem;
            bottom: 0;
            left: 0.31683rem;
            border-bottom: 0.0198rem solid #ebedf0;
            -webkit-transform: scaleY(.5);
            transform: scaleY(.5)
        }

        .van-sku-messages__cell-block:last-child::after {
            display: none
        }

        .van-sku-messages__extra-message {
            margin-top: -0.0396rem;
            padding: 0 0.31683rem 0.23762rem;
            color: #969799;
            font-size: 0.23762rem;
            line-height: 0.35644rem
        }

        .van-sku-actions {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            padding: 0.15842rem 0.31683rem
        }

        .van-sku-actions .van-button {
            height: 0.79208rem;
            font-weight: 500;
            font-size: 0.27723rem;
            border: none;
            border-radius: 0
        }

        .van-sku-actions .van-button:first-of-type {
            border-top-left-radius: 0.39604rem;
            border-bottom-left-radius: 0.39604rem
        }

        .van-sku-actions .van-button:last-of-type {
            border-top-right-radius: 0.39604rem;
            border-bottom-right-radius: 0.39604rem
        }

        .van-sku-actions .van-button--warning {
            background: -webkit-linear-gradient(left, #ffd01e, #ff8917);
            background: linear-gradient(to right, #ffd01e, #ff8917)
        }

        .van-sku-actions .van-button--danger {
            background: -webkit-linear-gradient(left, #ff6034, #ee0a24);
            background: linear-gradient(to right, #ff6034, #ee0a24)
        }

        .van-slider {
            position: relative;
            width: 100%;
            height: 0.0396rem;
            background-color: #ebedf0;
            border-radius: 19.78218rem;
            cursor: pointer
        }

        .van-slider::before {
            position: absolute;
            top: -0.15842rem;
            right: 0;
            bottom: -0.15842rem;
            left: 0;
            content: ''
        }

        .van-slider__bar {
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #1989fa;
            border-radius: inherit;
            -webkit-transition: all .2s;
            transition: all .2s
        }

        .van-slider__button {
            width: 0.47525rem;
            height: 0.47525rem;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0.0198rem 0.0396rem rgba(0, 0, 0, .5)
        }

        .van-slider__button-wrapper,
        .van-slider__button-wrapper-right {
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translate3d(50%, -50%, 0);
            transform: translate3d(50%, -50%, 0);
            cursor: grab
        }

        .van-slider__button-wrapper-left {
            position: absolute;
            top: 50%;
            left: 0;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            cursor: grab
        }

        .van-slider--disabled {
            cursor: not-allowed;
            opacity: .5
        }

        .van-slider--disabled .van-slider__button-wrapper,
        .van-slider--disabled .van-slider__button-wrapper-left,
        .van-slider--disabled .van-slider__button-wrapper-right {
            cursor: not-allowed
        }

        .van-slider--vertical {
            display: inline-block;
            width: 0.0396rem;
            height: 100%
        }

        .van-slider--vertical .van-slider__button-wrapper,
        .van-slider--vertical .van-slider__button-wrapper-right {
            top: auto;
            right: 50%;
            bottom: 0;
            -webkit-transform: translate3d(50%, 50%, 0);
            transform: translate3d(50%, 50%, 0)
        }

        .van-slider--vertical .van-slider__button-wrapper-left {
            top: 0;
            right: 50%;
            left: auto;
            -webkit-transform: translate3d(50%, -50%, 0);
            transform: translate3d(50%, -50%, 0)
        }

        .van-slider--vertical::before {
            top: 0;
            right: -0.15842rem;
            bottom: 0;
            left: -0.15842rem
        }

        .van-steps {
            overflow: hidden;
            background-color: #fff
        }

        .van-steps--horizontal {
            padding: 0.19802rem 0.19802rem 0
        }

        .van-steps--horizontal .van-steps__items {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            margin: 0 0 0.19802rem;
            padding-bottom: 0.43564rem
        }

        .van-steps--vertical {
            padding: 0 0 0 0.63366rem
        }

        .van-swipe-cell {
            position: relative;
            overflow: hidden;
            cursor: grab
        }

        .van-swipe-cell__wrapper {
            -webkit-transition-timing-function: cubic-bezier(.18, .89, .32, 1);
            transition-timing-function: cubic-bezier(.18, .89, .32, 1);
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .van-swipe-cell__left,
        .van-swipe-cell__right {
            position: absolute;
            top: 0;
            height: 100%
        }

        .van-swipe-cell__left {
            left: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        .van-swipe-cell__right {
            right: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        .van-tabbar {
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            box-sizing: content-box;
            width: 100%;
            height: 0.9901rem;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom);
            background-color: #fff
        }

        .van-tabbar--fixed {
            position: fixed;
            bottom: 0;
            left: 0
        }

        .van-tabbar--unfit {
            padding-bottom: 0
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/chunk-swiper.cc27f18b.1746822786498.chunk.js?v=1746822786498">
    </script>
    <script charset="utf-8" src="/js1746822786498/0.92a2ec8a.1746822786498.chunk.js?v=1746822786498"></script>
    <script charset="utf-8" src="/js1746822786498/58.1d12ef6d.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        /**
 * Swiper 5.4.5
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://swiperjs.com
 *
 * Copyright 2014-2020 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: June 16, 2020
 */

        @font-face {
            font-family: 'swiper-icons';
            src: url("data:application/font-woff;charset=utf-8;base64, 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") format("woff");
            font-weight: 400;
            font-style: normal;
        }

        :root {
            --swiper-theme-color: #007aff;
        }

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            /* Fix of Webkit flickering */
            z-index: 1;
        }

        .swiper-container-vertical>.swiper-wrapper {
            flex-direction: column;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box;
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            transform: translate3d(0, 0, 0);
        }

        .swiper-container-multirow>.swiper-wrapper {
            flex-wrap: wrap;
        }

        .swiper-container-multirow-column>.swiper-wrapper {
            flex-wrap: wrap;
            flex-direction: column;
        }

        .swiper-container-free-mode>.swiper-wrapper {
            transition-timing-function: ease-out;
            margin: 0 auto;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform;
        }

        .swiper-slide-invisible-blank {
            visibility: hidden;
        }

        /* Auto Height */
        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto;
        }

        .swiper-container-autoheight .swiper-wrapper {
            align-items: flex-start;
            transition-property: transform, height;
        }

        /* 3D Effects */
        .swiper-container-3d {
            perspective: 23.76238rem;
        }

        .swiper-container-3d .swiper-wrapper,
        .swiper-container-3d .swiper-slide,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-cube-shadow {
            transform-style: preserve-3d;
        }

        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-slide-shadow-bottom {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        }

        /* CSS Mode */
        .swiper-container-css-mode>.swiper-wrapper {
            overflow: auto;
            scrollbar-width: none;
            /* For Firefox */
            -ms-overflow-style: none;
            /* For Internet Explorer and Edge */
        }

        .swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar {
            display: none;
        }

        .swiper-container-css-mode>.swiper-wrapper>.swiper-slide {
            scroll-snap-align: start start;
        }

        .swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper {
            scroll-snap-type: x mandatory;
        }

        .swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper {
            scroll-snap-type: y mandatory;
        }

        :root {
            --swiper-navigation-size: 0.87129rem;
            /*
  --swiper-navigation-color: var(--swiper-theme-color);
  */
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: 50%;
            width: calc(var(--swiper-navigation-size) / 44 * 27);
            height: var(--swiper-navigation-size);
            margin-top: calc(-1 * var(--swiper-navigation-size) / 2);
            z-index: 10;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--swiper-navigation-color, var(--swiper-theme-color));
        }

        .swiper-button-prev.swiper-button-disabled,
        .swiper-button-next.swiper-button-disabled {
            opacity: 0.35;
            cursor: auto;
            pointer-events: none;
        }

        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none !important;
            letter-spacing: 0;
            text-transform: none;
            font-variant: initial;
            line-height: 1;
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            left: 0.19802rem;
            right: auto;
        }

        .swiper-button-prev:after,
        .swiper-container-rtl .swiper-button-next:after {
            content: 'prev';
        }

        .swiper-button-next,
        .swiper-container-rtl .swiper-button-prev {
            right: 0.19802rem;
            left: auto;
        }

        .swiper-button-next:after,
        .swiper-container-rtl .swiper-button-prev:after {
            content: 'next';
        }

        .swiper-button-prev.swiper-button-white,
        .swiper-button-next.swiper-button-white {
            --swiper-navigation-color: #ffffff;
        }

        .swiper-button-prev.swiper-button-black,
        .swiper-button-next.swiper-button-black {
            --swiper-navigation-color: #000000;
        }

        .swiper-button-lock {
            display: none;
        }

        :root {
            /*
  --swiper-pagination-color: var(--swiper-theme-color);
  */
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: 300ms opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0;
        }

        /* Common Styles */
        .swiper-pagination-fraction,
        .swiper-pagination-custom,
        .swiper-container-horizontal>.swiper-pagination-bullets {
            bottom: 0.19802rem;
            left: 0;
            width: 100%;
        }

        /* Bullets */
        .swiper-pagination-bullets-dynamic {
            overflow: hidden;
            font-size: 0;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transform: scale(0.33);
            position: relative;
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
            transform: scale(1);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
            transform: scale(0.33);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
            transform: scale(0.66);
        }

        .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
            transform: scale(0.33);
        }

        .swiper-pagination-bullet {
            width: 0.15842rem;
            height: 0.15842rem;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: 0.2;
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
        }

        .swiper-container-vertical>.swiper-pagination-bullets {
            right: 0.19802rem;
            top: 50%;
            transform: translate3d(0, -50%, 0);
        }

        .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0.11881rem 0;
            display: block;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            top: 50%;
            transform: translateY(-50%);
            width: 0.15842rem;
        }

        .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            display: inline-block;
            transition: 200ms transform, 200ms top;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 0.07921rem;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: 200ms transform, 200ms left;
        }

        .swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
            transition: 200ms transform, 200ms right;
        }

        /* Progress */
        .swiper-pagination-progressbar {
            background: rgba(0, 0, 0, 0.25);
            position: absolute;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: var(--swiper-pagination-color, var(--swiper-theme-color));
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: scale(0);
            transform-origin: left top;
        }

        .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            transform-origin: right top;
        }

        .swiper-container-horizontal>.swiper-pagination-progressbar,
        .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 100%;
            height: 0.07921rem;
            left: 0;
            top: 0;
        }

        .swiper-container-vertical>.swiper-pagination-progressbar,
        .swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
            width: 0.07921rem;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swiper-pagination-white {
            --swiper-pagination-color: #ffffff;
        }

        .swiper-pagination-black {
            --swiper-pagination-color: #000000;
        }

        .swiper-pagination-lock {
            display: none;
        }

        /* Scrollbar */
        .swiper-scrollbar {
            border-radius: 0.19802rem;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, 0.1);
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 0.05941rem;
            z-index: 50;
            height: 0.09901rem;
            width: 98%;
        }

        .swiper-container-vertical>.swiper-scrollbar {
            position: absolute;
            right: 0.05941rem;
            top: 1%;
            z-index: 50;
            width: 0.09901rem;
            height: 98%;
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 0.19802rem;
            left: 0;
            top: 0;
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move;
        }

        .swiper-scrollbar-lock {
            display: none;
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .swiper-zoom-container>img,
        .swiper-zoom-container>svg,
        .swiper-zoom-container>canvas {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .swiper-slide-zoomed {
            cursor: move;
        }

        /* Preloader */
        :root {
            /*
  --swiper-preloader-color: var(--swiper-theme-color);
  */
        }

        .swiper-lazy-preloader {
            width: 0.83168rem;
            height: 0.83168rem;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -0.41584rem;
            margin-top: -0.41584rem;
            z-index: 10;
            transform-origin: 50%;
            animation: swiper-preloader-spin 1s infinite linear;
            box-sizing: border-box;
            border: 0.07921rem solid var(--swiper-preloader-color, var(--swiper-theme-color));
            border-radius: 50%;
            border-top-color: transparent;
        }

        .swiper-lazy-preloader-white {
            --swiper-preloader-color: #fff;
        }

        .swiper-lazy-preloader-black {
            --swiper-preloader-color: #000;
        }

        @keyframes swiper-preloader-spin {
            100% {
                transform: rotate(360deg);
            }
        }

        /* a11y */
        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000;
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            transition-timing-function: ease-out;
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            transition-property: opacity;
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube {
            overflow: visible;
        }

        .swiper-container-cube .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
            visibility: hidden;
            transform-origin: 0 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container-cube .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            transform-origin: 100% 0;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-next,
        .swiper-container-cube .swiper-slide-prev,
        .swiper-container-cube .swiper-slide-next+.swiper-slide {
            pointer-events: auto;
            visibility: visible;
        }

        .swiper-container-cube .swiper-slide-shadow-top,
        .swiper-container-cube .swiper-slide-shadow-bottom,
        .swiper-container-cube .swiper-slide-shadow-left,
        .swiper-container-cube .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            -webkit-filter: blur(0.9901rem);
            filter: blur(0.9901rem);
            z-index: 0;
        }

        .swiper-container-flip {
            overflow: visible;
        }

        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1;
        }

        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none;
        }

        .swiper-container-flip .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto;
        }

        .swiper-container-flip .swiper-slide-shadow-top,
        .swiper-container-flip .swiper-slide-shadow-bottom,
        .swiper-container-flip .swiper-slide-shadow-left,
        .swiper-container-flip .swiper-slide-shadow-right {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
    </style>
    <style type="text/css">
        .nav5[data-v-37b1f6af] {
            margin-top: .4rem;
            margin-bottom: .4rem;
        }

        .nav5 .title_box[data-v-37b1f6af] {
            display: flex;
        }

        .nav5 .title_box .title[data-v-37b1f6af] {
            font-family: PingFang SC;
            color: #FFF;
            font-size: .32rem;
            font-weight: 600;
        }

        .nav5 .title_box .move[data-v-37b1f6af] {
            margin-left: auto;
            display: flex;
            align-items: center;
            color: #909090;
        }

        .nav5 .title_box .move img[data-v-37b1f6af] {
            width: .2rem;
            height: .3rem;
            margin-left: .1rem;
        }

        .nav5 .nav5_list[data-v-37b1f6af] {
            margin-top: .3rem;
        }

        .nav5 .nav5_list .item[data-v-37b1f6af] {
            padding: .32rem;
            background-color: #1A1C1E;
            border-radius: 0.16rem;
            margin-top: .2rem;
        }

        .nav5 .nav5_list .item .item_top[data-v-37b1f6af] {
            display: flex;
            align-items: center;
            border-bottom: .02rem solid #292C2F;
            padding-bottom: .24rem;
        }

        .nav5 .nav5_list .item .item_top .name[data-v-37b1f6af] {
            display: flex;
            align-items: center;
        }

        .nav5 .nav5_list .item .item_top .name img[data-v-37b1f6af] {
            height: .56rem;
        }

        .nav5 .nav5_list .item .item_top .name span[data-v-37b1f6af] {
            color: var(--COcolor1);
            margin-left: .1rem;
        }

        .nav5 .nav5_list .item .item_top .text_box[data-v-37b1f6af] {
            margin-left: auto;
            padding: 0.2rem 0.34rem;
            background-color: #E48A1E33;
            color: #ef6115;
            border-radius: .48rem;
            text-align: center;
        }

        .nav5 .nav5_list .item .item_top .text_box img[data-v-37b1f6af] {
            height: .24rem;
        }

        .nav5 .nav5_list .item .item_top .text_box span[data-v-37b1f6af] {
            margin-right: .1rem;
            font-size: .28rem;
        }

        .nav5 .nav5_list .item .item_top .trusteeship[data-v-37b1f6af] {
            background-color: var(--CObackgroundLinear2);
            color: var(--COcolor4);
        }

        .nav5 .nav5_list .item .item_center[data-v-37b1f6af] {
            display: flex;
            padding: .4rem 0;
        }

        .nav5 .nav5_list .item .item_center .ups_down[data-v-37b1f6af] {
            flex: 1;
        }

        .nav5 .nav5_list .item .item_center .ups_down .yield[data-v-37b1f6af] {
            font-family: PingFang SC;
            color: #ef6115;
            font-size: .32rem;
        }

        .nav5 .nav5_list .item .item_center .ups_down .yield_text[data-v-37b1f6af] {
            font-family: PingFang SC;
            color: rgba(255, 255, 255, 0.5);
            font-size: .24rem;
            margin-top: .2rem;
        }

        .nav5 .nav5_list .item .item_center .ups_down .down[data-v-37b1f6af] {
            color: #E94358;
        }

        .nav5 .nav5_list .item .item_center .echarts_box[data-v-37b1f6af] {
            flex: 2;
            height: .8rem;
        }

        .nav5 .nav5_list .item .item_center .echarts_box .echarts[data-v-37b1f6af] {
            width: 4.22rem;
        }

        .nav5 .nav5_list .item .item_bottom .text_list[data-v-37b1f6af] {
            display: flex;
            justify-content: space-between;
        }

        .nav5 .nav5_list .item .item_bottom .text_list .text_item[data-v-37b1f6af] {
            text-align: center;
        }

        .nav5 .nav5_list .item .item_bottom .text_list .text_item .num_text[data-v-37b1f6af] {
            font-family: PingFang SC;
            color: #FFF;
            font-size: .26rem;
            font-weight: 500;
        }

        .nav5 .nav5_list .item .item_bottom .text_list .text_item .num_text .span[data-v-37b1f6af] {
            font-size: .2rem;
            font-weight: 500;
        }

        .nav5 .nav5_list .item .item_bottom .text_list .text_item .name[data-v-37b1f6af] {
            font-family: PingFang SC;
            color: var(--COcolor6);
            font-size: .24rem;
            font-weight: 500;
            margin-top: .1rem;
        }
    </style>
    <style type="text/css">
        .popup_box[data-v-75ed67aa] {
            line-height: 1.2;
        }

        .popup_box .popup[data-v-75ed67aa] {
            width: 6.54rem;
        }

        .popup_box .popup-content[data-v-75ed67aa] {
            width: 100%;
        }

        .popup_box .popup-content-head[data-v-75ed67aa] {
            flex: 0 0 auto;
            width: 100%;
            height: 2.6rem;
            background-image: url({{asset ('star/terms/static/img/home_popup_top_bg.8bed63d3.png')}});
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: left top;
        }

        .popup_box .popup-content-head .logo[data-v-75ed67aa] {
            margin-top: 0.72rem;
            padding-left: 0.24rem;
            height: 0.56rem;
        }

        .popup_box .popup-content-scroll[data-v-75ed67aa] {
            width: 100%;
            max-height: 50vh;
            overflow-y: auto;
        }

        .popup_box .popup-content-scroll-container[data-v-75ed67aa] {
            padding: 0.24rem;
            background-color: #211620;
            border-radius: 0 0 0.32rem 0.32rem;
        }

        .popup_box .popup-content-scroll-container-bg[data-v-75ed67aa] {
            width: 100%;
            background: linear-gradient(180deg, #170116 0%, #211620 100%);
            border-radius: 0.32rem;
            margin-top: -1.3rem;
            padding: 0.08rem 0;
            overflow: hidden;
            padding: 0.32rem 0.32rem 0.16rem;
        }

        .popup_box .popup-content-scroll .title[data-v-75ed67aa] {
            color: #fff;
            text-align: center;
            font-family: "PingFang SC";
            font-size: 0.4rem;
            font-style: normal;
            font-weight: 600;
            line-height: 1.1em;
        }

        .popup_box .popup-content-scroll .desc[data-v-75ed67aa] {
            color: rgba(255, 255, 255, 0.8);
            font-family: "PingFang SC";
            font-size: 0.3rem;
            font-style: normal;
            font-weight: 400;
            line-height: 1.1em;
        }

        .popup_box .popup-content-scroll .desc[data-v-75ed67aa] img {
            max-width: 100%;
        }

        .popup_box .popup .close_icon[data-v-75ed67aa] {
            margin-top: 0.24rem;
            text-align: center;
        }

        .popup_box .popup .close_icon img[data-v-75ed67aa] {
            width: 0.56rem;
            height: 0.56rem;
        }
    </style>
    <style type="text/css">
        .info_tip_box[data-v-3d23a569] {
            max-width: 8rem;
            width: 100%;
            position: fixed;
            top: .8rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 200;
        }

        .info_tip_box .info_tip[data-v-3d23a569] {
            background: #1f161f;
            border-radius: .24rem;
            padding: .32rem .24rem;
            display: flex;
            margin: 0 .24rem;
        }

        .info_tip_box .info_tip .img[data-v-3d23a569] {
            width: .72rem;
            height: .72rem;
            margin-right: .1rem;
        }

        .info_tip_box .info_tip .img img[data-v-3d23a569] {
            width: 100%;
        }

        .info_tip_box .info_tip .text_box .title[data-v-3d23a569] {
            color: #FFF;
            font-size: .28rem;
            font-weight: 600;
        }

        .info_tip_box .info_tip .text_box .text[data-v-3d23a569] {
            margin-top: .16rem;
            color: rgba(255, 255, 255, 0.5);
            font-size: .24rem;
        }

        .info_tip_box .info_tip .cross[data-v-3d23a569] {
            margin-left: auto;
            font-size: .28rem;
            color: #fff;
        }
    </style>
    <style type="text/css">
        .card-con[data-v-0cd9ae3e] {
            padding: .32rem 0.24rem;
            margin: .4rem 0 .54rem;
            display: flex;
            background: url({{asset ('star/terms/static/img/invitebg.cdfe3b13.png')}}) center no-repeat;
            background-size: 100% 100%;
        }

        .card-con .card-left[data-v-0cd9ae3e],
        .card-con .card-right[data-v-0cd9ae3e] {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .card-con .card-left[data-v-0cd9ae3e] {
            padding-right: 0.12rem;
            border-right: 0.02rem solid rgba(255, 255, 255, 0.12);
        }

        .card-con .card-right[data-v-0cd9ae3e] {
            padding-left: 0.12rem;
        }

        .card-con .card-info[data-v-0cd9ae3e] {
            flex: 1;
            width: 100%;
        }

        .card-con .card-info[data-v-0cd9ae3e]:nth-of-type(1) {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.12);
            margin-bottom: .32rem;
            padding-bottom: .2rem;
        }

        .card-con .card-info[data-v-0cd9ae3e] {
            position: relative;
        }

        .card-con .card-info .info-name[data-v-0cd9ae3e] {
            width: 1.8rem;
            font-size: .28rem;
            color: #FFFFFF;
            line-height: .28rem;
        }

        .card-con .card-info .info-desc[data-v-0cd9ae3e] {
            width: 100%;
            font-size: .24rem;
            line-height: .28rem;
            color: rgba(255, 255, 255, 0.6);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-con .card-info .info-desc img[data-v-0cd9ae3e] {
            flex-shrink: 0;
            width: .88rem;
            height: .88rem;
            object-fit: contain;
            margin-left: 0.11881rem;
        }
    </style>
    <style type="text/css">
        .home-video[data-v-bda0bfee] {
            width: 100%;
            aspect-ratio: 1.43514644;
            padding: .3rem .2rem .24rem;
            background: url({{asset ('star/terms/static/img/bg-video.9e4c14b7.png')}}) no-repeat;
            background-size: 100% 100%;
            position: relative;
        }

        .home-video .title[data-v-bda0bfee] {
            color: #fff;
            font-size: 0.23762rem;
        }

        .home-video .cover[data-v-bda0bfee] {
            width: calc(92%);
            height: calc(76%);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-top: .2rem;
            z-index: 10;
        }

        .home-video .play[data-v-bda0bfee] {
            width: .8rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .home-video video[data-v-bda0bfee] {
            width: 100%;
            height: 100%;
        }
    </style>
    <style type="text/css">
        .market-item[data-v-4d062292] {
            width: calc(48%);
            padding: .32rem .28rem;
            background: url({{asset ('star/terms/static/img/bg-market-item.ade5668a.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .market-item .item-head[data-v-4d062292] {
            display: flex;
            align-items: center;
        }

        .market-item .item-head .icon[data-v-4d062292] {
            border-radius: 50%;
            width: .8rem;
            height: .8rem;
            margin-right: .16rem;
        }

        .market-item .item-head .info .buy-name[data-v-4d062292] {
            color: #fff;
            font-size: .28rem;
        }

        .market-item .item-head .info .sell-name[data-v-4d062292] {
            margin-top: .04rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: .28rem;
        }

        .market-item .item-price[data-v-4d062292] {
            margin-top: .28rem;
            color: #fff;
            font-size: .32rem;
        }

        .market-item .item-change[data-v-4d062292] {
            margin-top: .1rem;
            padding-left: .24rem;
            position: relative;
        }

        .market-item .item-change[data-v-4d062292]::after {
            content: '';
            position: absolute;
            top: .12rem;
            left: 0;
            width: 0;
            height: 0;
        }

        .market-item .item-change.rise[data-v-4d062292] {
            color: #00bc81;
        }

        .market-item .item-change.rise[data-v-4d062292]::after {
            border-left: .08rem solid transparent;
            border-right: .08rem solid transparent;
            border-bottom: .12rem solid #00bc81;
        }

        .market-item .item-change.fall[data-v-4d062292] {
            color: #f24e53;
        }

        .market-item .item-change.fall[data-v-4d062292]::after {
            border-left: .08rem solid transparent;
            border-right: .08rem solid transparent;
            border-top: .12rem solid #f24e53;
        }

        .market-item .item-change.default[data-v-4d062292] {
            color: #707e96;
        }

        .market-item .item-change.default[data-v-4d062292]::after {
            display: none;
        }
    </style>
    <style type="text/css">
        .home-community[data-v-5b552977] {
            position: fixed;
            right: 47%;
            bottom: 2rem;
            padding: .24rem;
            border-radius: 1.8rem;
            border: 0.0198rem solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .home-community .list[data-v-5b552977] {
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }

        .home-community .list.hide[data-v-5b552977] {
            height: 0 !important;
        }

        .home-community .list .item[data-v-5b552977] {
            margin-bottom: .24rem;
        }

        .home-community .list .item img[data-v-5b552977] {
            border-radius: 50%;
            width: .64rem;
            height: .64rem;
        }

        .home-community .arrow[data-v-5b552977] {
            width: fit-content;
        }

        .home-community .arrow img[data-v-5b552977] {
            width: .56rem;
            height: .56rem;
            transform: rotate(-180deg);
            transition: transform 0.3s ease-in-out;
        }

        .home-community .arrow img.rotate[data-v-5b552977] {
            transform: rotate(0deg);
        }
    </style>
    <style type="text/css">
        .bg[data-v-5954443c] {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
            width: 100%;
            height: 100%;
        }

        .home-introduce[data-v-5954443c] {
            margin: .48rem 0 .32rem;
            display: flex;
        }

        .home-introduce .introduce-info[data-v-5954443c] {
            flex: 1;
            padding: .36rem .32rem;
            background: url({{asset ('star/terms/static/img/jieshaobg.663a51d7.png')}}) center no-repeat;
            background-size: 100% 100%;
        }

        .home-introduce .introduce-info[data-v-5954443c]:nth-child(2) {
            margin-left: .22rem;
        }

        .home-introduce .introduce-info .info-img[data-v-5954443c] {
            display: flex;
            justify-content: space-between;
        }

        .home-introduce .introduce-info .info-img div img[data-v-5954443c] {
            width: .64rem;
            height: .64rem;
        }

        .home-introduce .introduce-info .info-img p img[data-v-5954443c] {
            width: .24rem;
            height: .24rem;
            margin-top: .2rem;
        }

        .home-introduce .introduce-info .info-name[data-v-5954443c] {
            margin-top: .24rem;
            font-size: .28rem;
            color: #FFFFFF;
            line-height: .28rem;
        }

        .nav1[data-v-5954443c] {
            display: flex;
            flex-wrap: wrap;
            padding-top: .32rem;
        }

        .nav1 li[data-v-5954443c] {
            text-align: center;
            flex: 1;
            padding: 0 0.08rem;
        }

        .nav1 li p[data-v-5954443c] {
            font-size: 0.24rem;
            margin-top: 0.16rem;
            color: var(--COcolor1);
            word-wrap: break-word;
            word-break: break-word;
        }

        .nav1 li img[data-v-5954443c] {
            height: 1.04rem;
        }

        .notice-swipe[data-v-5954443c] {
            height: 1rem;
            line-height: 1rem;
            color: #333;
        }

        .home-notice[data-v-5954443c] {
            position: relative;
            margin-top: 0.19802rem;
            background: url({{asset ('star/terms/static/img/linebg.eec555f4.png')}}) center no-repeat;
            background-size: 100% 100%;
        }

        .home-notice .van-notice-bar[data-v-5954443c] {
            padding: 0;
        }

        .name-1[data-v-5954443c] {
            font-weight: 700;
            font-size: 0.32rem;
            line-height: 165%;
        }

        .name-1 .tab[data-v-5954443c] {
            display: flex;
            border-radius: 1.8rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: #000;
            margin-bottom: .32rem;
        }

        .name-1 .tab li[data-v-5954443c] {
            min-height: .88rem;
            flex: 1;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.32rem;
            line-height: 1;
            padding: .12rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .name-1 .tab .active[data-v-5954443c] {
            background: url({{asset ('star/terms/static/img/tabbg.28cb0f3a.png')}}) center no-repeat;
            background-size: 100% 100%;
            color: #fff;
        }

        .name-1 h5[data-v-5954443c] {
            font-weight: 700;
            color: var(--COcolor1);
        }

        .name-1 h2[data-v-5954443c] {
            color: var(--COcolor1);
        }

        .itemBox0[data-v-5954443c] {
            padding: 0.26rem 0;
        }

        .itemBox[data-v-5954443c] {
            margin-bottom: 0.4rem;
        }

        .notice-swipe[data-v-5954443c] {
            height: 0.96rem;
            color: #64748b;
            font-size: 0.2rem;
        }

        .notice-swipe img[data-v-5954443c] {
            height: 0.64rem;
        }

        .van-swipe-item[data-v-5954443c] {
            display: flex;
            align-items: center;
            word-wrap: break-word;
            white-space: pre-wrap;
            line-height: 0.32rem;
        }

        .quotes .market-list[data-v-5954443c] {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: .24rem;
        }

        .banner[data-v-5954443c] {
            position: relative;
            z-index: 1;
        }

        .banner .van-swipe-item[data-v-5954443c] {
            height: auto;
        }

        .banner .item[data-v-5954443c] {
            width: 100%;
        }

        .banner img[data-v-5954443c] {
            width: 100%;
            aspect-ratio: 2.07738095;
        }

        .task-box[data-v-5954443c] {
            padding: 0.26rem 0;
            margin-bottom: 0.26rem;
        }

        .task-box .container[data-v-5954443c] {
            display: flex;
            align-items: center;
        }

        .task-box .n[data-v-5954443c] {
            font-weight: 600;
            font-size: 0.32rem;
            line-height: 0.44rem;
            color: var(--COcolor1);
            margin-bottom: 0.26rem;
            display: flex;
            align-items: center;
        }

        .task-box .n img[data-v-5954443c] {
            height: 0.44rem;
        }

        .task-box p[data-v-5954443c] {
            font-weight: 400;
            font-size: 0.24rem;
            line-height: 0.3rem;
            color: var(--COcolor6);
        }

        .task-box .arr img[data-v-5954443c] {
            height: 1.2rem;
        }

        .paraList[data-v-5954443c] {
            display: flex;
            flex-wrap: wrap;
            margin-top: 0.24rem;
            margin-bottom: -0.2rem;
            gap: 2%;
        }

        .paraList li[data-v-5954443c] {
            width: 31%;
            margin-bottom: 0.2rem;
            border-radius: 0.1rem;
        }

        .paraList li img[data-v-5954443c] {
            width: 100%;
        }

        .paraLists[data-v-5954443c] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .paraLists li[data-v-5954443c] {
            display: flex;
            align-items: center;
            padding: 0.16rem;
            border-radius: 0.16rem;
            background-color: #1a1c1e;
            color: #fff;
            font-size: 0.3rem;
            font-weight: 600;
            width: 48%;
        }

        .paraLists li img[data-v-5954443c] {
            height: 0.76rem;
            margin-right: 0.16rem;
        }

        .hanners[data-v-5954443c] {
            padding: 0 0.26rem;
        }

        .hanners .item[data-v-5954443c] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .hanners .item li[data-v-5954443c] {
            position: relative;
            margin-top: .24rem;
            width: 48%;
            height: 2.8rem;
            border-radius: 0.24rem;
            background: #1f161f;
            padding: 0.32rem;
        }

        .hanners .item li .img[data-v-5954443c] {
            position: absolute;
            bottom: .24rem;
            right: 0;
            width: 2rem;
            height: 1.44rem;
        }

        .hanners .item li[data-v-5954443c]:nth-child(-n +2) {
            margin-top: 0;
        }

        .hanners .item li .n1[data-v-5954443c] {
            font-size: 0.28rem;
            font-weight: 500;
            margin-bottom: 0.1rem;
        }

        .hanners .item li .n2[data-v-5954443c] {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.22rem;
        }

        .hanners .item li .flex[data-v-5954443c] {
            position: absolute;
            bottom: .4rem;
            left: .32rem;
            align-items: center;
        }

        .hanners .item li .flex img[data-v-5954443c] {
            height: .4rem;
        }

        .info_box[data-v-5954443c] {
            padding: 0.4rem 0.28rem 0.34rem 0.28rem;
        }

        .info_box .x[data-v-5954443c] {
            width: 100%;
            border-bottom: var(--COborder2);
            margin: 0.28rem 0;
        }

        .info_box .info[data-v-5954443c] {
            text-align: center;
            font-size: 0.24rem;
            font-weight: 400;
            padding: 0 0.2rem;
            color: var(--COcolor1);
            line-height: 0.34rem;
        }

        .info_box ul li[data-v-5954443c] {
            width: 50%;
            text-align: center;
        }

        .info_box ul li .n[data-v-5954443c] {
            font-size: 0.24rem;
            color: var(--COcolor1);
            line-height: 0.34rem;
        }

        .info_box ul li .str[data-v-5954443c] {
            font-size: 0.4rem;
            font-weight: 600;
            color: #ef6115;
            line-height: 0.56rem;
        }

        .info_box ul li .str span[data-v-5954443c] {
            font-size: 0.24rem;
            font-weight: 600;
            line-height: 0.34rem;
        }

        .title1[data-v-5954443c] {
            color: #fff;
            font-size: 0.32rem;
            font-weight: 600;
            line-height: 0.36rem;
            /* 100% */
        }

        .title1 .str[data-v-5954443c] {
            color: #fff;
            font-size: 0.28rem;
        }

        .title1 .str img[data-v-5954443c] {
            height: 0.28rem;
            margin-left: 0.1rem;
        }

        .itemBox2[data-v-5954443c] {
            padding: .38rem .28rem .4rem;
            background: url({{asset ('star/terms/static/img/partnerbg.9e4c14b7.png')}}) center no-repeat;
            background-size: 100% 100%;
            margin-bottom: 0.4rem;
            color: #ffffff;
        }

        [data-v-5954443c] .van-notice-bar__content {
            white-space: pre;
        }

        .vipBox[data-v-5954443c] {
            background-size: 100% 100%;
            margin: 0 0.26rem 0.26rem 0.26rem;
        }

        .vipBox .n[data-v-5954443c] {
            font-size: 0.28rem;
            font-weight: 500;
            line-height: 0.28rem;
            /* 100% */
        }

        .vipBox .s[data-v-5954443c] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
            line-height: 0.24rem;
            /* 100% */
            margin-top: 0.2rem;
        }

        .vipBox button[data-v-5954443c] {
            border: 0;
            border-radius: 0.8rem;
            background: #fff;
            box-shadow: 0 0.4rem 0.6rem 0 rgba(243, 159, 81, 0.12);
            color: #f79102;
            font-size: 0.24rem;
            font-weight: 500;
            padding: 0 0.28rem;
            margin-top: 0.2rem;
        }

        .vipBox-item[data-v-5954443c] {
            margin-bottom: 0.31683rem;
        }

        .list1[data-v-5954443c] {
            margin-top: 0.26rem;
        }

        .list1 li[data-v-5954443c] {
            margin-bottom: 0.26rem;
        }

        .list1 li[data-v-5954443c]:last-child {
            margin-bottom: 0;
        }

        .list1 li .pic[data-v-5954443c] {
            margin-left: 0.26rem;
        }

        .list1 li .pic img[data-v-5954443c] {
            width: 1.8rem;
            height: 1.8rem;
            object-fit: cover;
            border-radius: 0.16rem;
        }

        .list1 li .n[data-v-5954443c] {
            line-height: 0.48rem;
            margin-bottom: 0.5rem;
            height: 0.96rem;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .list1 li .flex[data-v-5954443c] {
            font-size: 0.24rem;
            align-items: center;
        }

        .list1 li .flex .view[data-v-5954443c] {
            display: flex;
            align-items: center;
        }

        .list1 li .flex img[data-v-5954443c] {
            height: 0.24rem;
            margin-right: 0.06rem;
        }

        .list1 li .b[data-v-5954443c] {
            line-height: 0.32rem;
            opacity: 0.5;
        }

        .list1 li .view[data-v-5954443c] {
            display: flex;
            align-items: center;
            font-size: 0.2rem;
        }

        .list1 li .view span[data-v-5954443c] {
            font-size: 0.2rem;
        }

        [data-v-5954443c] .headers {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/56.3b9b1dbb.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .global-loading[data-v-24a16d5c] {
            z-index: 999999999999999999;
            position: fixed;
        }

        .global-loading *[data-v-24a16d5c] {
            box-sizing: border-box;
        }

        .global-loading.stop[data-v-24a16d5c] {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
        }

        .global-loading.stop .global-spinner[data-v-24a16d5c] {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .global-loading.default[data-v-24a16d5c] {
            width: 1.2rem;
            height: 1.2rem;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .global-loading .global-spinner[data-v-24a16d5c] {
            border-radius: 0.1rem;
            background: rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 1.2rem;
            height: 1.2rem;
            padding: 0.35rem;
        }

        .global-loading .global-spinner img[data-v-24a16d5c] {
            width: 0.5rem;
            height: 0.5rem;
            animation: loadingRotate-24a16d5c 0.5s linear infinite;
        }

        @keyframes loadingRotate-24a16d5c {
            from {
                transform: rotate(0);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <style type="text/css">
        .page[data-v-37526a6c] {
            min-height: 100vh;
            background: #eef0f3;
            background-size: 100% auto;
        }

        .page .headers[data-v-37526a6c] {
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 8rem;
            z-index: 100;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .page .headers.fixed[data-v-37526a6c] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .page .footer[data-v-37526a6c] {
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 8rem;
            z-index: 20;
        }

        .page .content-container[data-v-37526a6c] {
            width: 100%;
            position: relative;
            flex-grow: 1;
            padding-top: .6rem;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .page .back-top[data-v-37526a6c] {
            position: absolute;
            bottom: 3rem;
            right: 0.1rem;
            z-index: 99;
            width: 1.4rem;
            height: 1.6rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/22.92d0b699.1746822786498.chunk.js?v=1746822786498"></script>
    <script charset="utf-8" src="/js1746822786498/20.97cf0326.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .close[data-v-0ff1fb10] {
            padding: 0.2rem 0;
        }

        .close img[data-v-0ff1fb10] {
            height: 0.32rem;
        }

        .head .flex[data-v-0ff1fb10] {
            align-items: center;
            position: relative;
            min-height: 1rem;
        }

        .head .myName[data-v-0ff1fb10] {
            margin-right: 0.2rem;
            font-family: "PingFang HK";
            font-weight: 600;
            font-size: 0.36rem;
            color: #ef6115;
            /* img {
    height: .56rem;
    border-radius: .56rem;
    width: .56rem;
  }*/
        }

        .head .name[data-v-0ff1fb10] {
            font-weight: 700;
            font-size: 0.32rem;
            text-align: center;
            position: absolute;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 4rem;
            margin-left: -2rem;
            left: 50%;
            color: #000;
        }

        .head .lang[data-v-0ff1fb10] {
            margin-left: 0.32rem;
        }

        .head .lang img[data-v-0ff1fb10] {
            height: 0.4rem;
        }

        .head .notice[data-v-0ff1fb10] {
            position: relative;
            margin-left: 0.32rem;
        }

        .head .notice img[data-v-0ff1fb10] {
            height: 0.48rem;
        }

        .head .notice span[data-v-0ff1fb10] {
            position: absolute;
            background: #E4161A;
            color: #fff;
            border-radius: 50%;
            box-shadow: 0 0.04rem 0.08rem 0 rgba(245, 56, 49, 0.31);
            font-size: 0.2rem;
            padding: 0 0.08rem;
            top: -0.1rem;
            right: -0.1rem;
        }

        .head .back[data-v-0ff1fb10] {
            height: 1rem;
            width: 1rem;
            display: flex;
            align-items: center;
        }

        .head .back img[data-v-0ff1fb10] {
            height: 0.4rem;
        }

        .name1 img[data-v-0ff1fb10] {
            height: 0.4rem;
        }

        .homeIcon[data-v-0ff1fb10] {
            display: flex;
            font-size: 0.32rem;
            font-weight: 600;
            align-items: center;
        }

        .homeIcon img[data-v-0ff1fb10] {
            height: 0.56rem;
            margin-right: 0.16rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/10.b633ea59.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .footers[data-v-6c4d8baa] {
            padding: 0 .1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(data:image/png;base64,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CQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAkI7gAAkIDgDgAACQjuAACQgOAOAAAJCO4AAJCA4A4AAAn8B35L2vfm9WIPAAAAAElFTkSuQmCC) no-repeat;
            background-size: 100% 100%;
        }

        .footers .item[data-v-6c4d8baa] {
            width: 25%;
            text-align: center;
        }

        .footers .item:nth-of-type(3) div img[data-v-6c4d8baa] {
            width: 1.2rem;
            height: 1.2rem;
            transform: translateY(-0.3rem);
        }

        .footers .item div img[data-v-6c4d8baa] {
            vertical-align: top;
            height: .48rem;
        }

        .footers .item div span[data-v-6c4d8baa] {
            display: block;
            margin-top: .06rem;
            font-size: .2rem;
            font-weight: 400;
            color: var(--COcolor5);
            line-height: .28rem;
        }

        .footers .item div.on span[data-v-6c4d8baa] {
            color: #fff;
        }
    </style>
    <style type="text/css">
        .heads[data-v-55daada6] {
            padding: 0.2rem 0 0.3rem 0;
        }

        .heads .ico[data-v-55daada6] {
            border-radius: 50%;
            padding: 0.05rem;
            background: rgba(255, 255, 255, 0.1);
        }

        .heads .ico img[data-v-55daada6] {
            border: 0.025rem solid #ccc;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
        }

        .heads .arr img[data-v-55daada6] {
            height: 0.38rem;
        }

        .heads .flexs[data-v-55daada6] {
            padding: 0 0.24rem;
        }

        .heads .flexs .n[data-v-55daada6] {
            margin-bottom: 0.04rem;
            font-size: 0.36rem;
            font-weight: 600;
            line-height: 0.5rem;
        }

        .heads .flexs .copy[data-v-55daada6] {
            color: #64748b;
            line-height: 0.4rem;
        }

        .heads .flexs .copy img[data-v-55daada6] {
            height: 0.2rem;
            vertical-align: middle;
        }

        .heads .flexs .cid[data-v-55daada6] {
            color: #64748b;
            line-height: 0.4rem;
        }

        .heads .str[data-v-55daada6] {
            text-align: center;
        }

        .heads .str img[data-v-55daada6] {
            height: 0.68rem;
        }

        .heads .str span[data-v-55daada6] {
            display: block;
            margin-top: 0.04rem;
            font-size: 0.22rem;
            color: #999;
            line-height: 0.32rem;
        }

        .line[data-v-55daada6] {
            margin: 0.24rem 0;
        }

        .line li[data-v-55daada6] {
            position: relative;
            height: 0.88rem;
        }

        .line li .status[data-v-55daada6] {
            margin-right: 0.2rem;
            font-size: 0.24rem;
        }

        .line li .status .s1[data-v-55daada6] {
            color: #dc3b35;
        }

        .line li .status .s2[data-v-55daada6] {
            color: #dc3b35;
        }

        .line li .status .s3[data-v-55daada6] {
            color: #0e519f;
        }

        .line li .status .s4[data-v-55daada6] {
            color: #00b578;
        }

        .line li .icos[data-v-55daada6] {
            margin-right: 0.18rem;
        }

        .line li .icos img[data-v-55daada6] {
            height: 0.4rem;
            width: auto;
        }

        .line li>img[data-v-55daada6] {
            height: 0.38rem;
            vertical-align: middle;
        }

        .line li[data-v-55daada6]:nth-child(4) {
            margin-bottom: 0.24rem;
            padding-bottom: 0.24rem;
            height: 1.12rem;
        }

        .line li[data-v-55daada6]:nth-child(4):after {
            display: block;
            content: "";
            width: 100%;
            border-bottom: 0.02rem solid #e2e8f0;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .level-box[data-v-55daada6] {
            background: url({{asset ('star/terms/static/img/bg-level.48bb2282.png')}}) no-repeat;
            background-size: 100% 100%;
            color: #fff;
            display: flex;
        }

        .level-box .ico[data-v-55daada6] {
            background: #000;
            height: 0.72rem;
            width: 0.72rem;
            border-radius: 50%;
            border: 0.04rem solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.2rem 0.24rem;
        }

        .level-box .ico img[data-v-55daada6] {
            height: 0.28rem;
        }

        .level-box .flex1[data-v-55daada6] {
            margin-left: -0.6rem;
        }

        .level-box .name[data-v-55daada6] {
            background: url(data:image/png;base64,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) no-repeat;
            color: #333848;
            font-size: 0.2rem;
            height: 0.46rem;
            line-height: 0.46rem;
            padding-left: 0.7rem;
        }

        .level-box .link[data-v-55daada6] {
            font-size: 0.24rem;
            color: rgba(255, 255, 255, 0.8);
            padding: 0.2rem 0.24rem 0 0.7rem;
            display: flex;
            align-items: center;
        }

        .level-box .link .n[data-v-55daada6] {
            flex: 1;
        }

        .level-box .link .s img[data-v-55daada6] {
            height: 0.24rem;
        }

        .toast-box[data-v-55daada6] {
            width: 5.5rem;
            background: #ffffff;
            border-radius: 0.32rem;
            padding: 0.26rem;
            text-align: center;
        }

        .toast-box .ico img[data-v-55daada6] {
            height: 2rem;
        }

        .toast-box .p[data-v-55daada6] {
            padding: 0.26rem 0;
            color: #242527;
            line-height: 0.48rem;
        }

        .toast-box .flex[data-v-55daada6] {
            flex-wrap: nowrap;
        }

        .toast-box .bot .btn2[data-v-55daada6] {
            background: rgba(237, 29, 29, 0.1);
            color: #ed1d1d;
            margin-left: 0.2rem;
            font-size: 0.28rem;
        }

        .toast-box .btn[data-v-55daada6] {
            font-size: 0.28rem;
            height: 0.7rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/7.8750e919.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .popup_box[data-v-d3b30c6c] {
            background: transparent !important;
        }

        .popup_box .scroll[data-v-d3b30c6c] {
            max-height: 72vh;
            overflow-y: scroll;
        }

        .popup_box .scroll .ul[data-v-d3b30c6c] {
            margin: 0 .1rem;
            border-radius: .32rem;
            overflow: hidden;
            color: #e8e8e8;
        }

        .popup_box .scroll .ul .item[data-v-d3b30c6c] {
            background-color: #16181a;
            border-bottom: .02rem solid #070707;
            padding: .32rem 0;
            text-align: center;
        }

        .popup_box .scroll .ul .active[data-v-d3b30c6c] {
            color: #BA0EFF !important;
        }

        .popup_box .esc[data-v-d3b30c6c] {
            margin: .2rem .1rem;
            background-color: #16181a;
            border-bottom: .02rem solid #070707;
            padding: .32rem 0;
            text-align: center;
            border-radius: .32rem;
            color: #ffffff;
        }
    </style>
    <style type="text/css">
        .revenue[data-v-f8277c96] {
            padding-bottom: .4rem;
        }

        .total-income[data-v-f8277c96] {
            margin-top: .2rem;
            overflow: hidden;
            background: url({{asset ('star/terms/static/img/bg-chart.aa2ec508.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .total-income .title_box[data-v-f8277c96] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: .32rem .28rem 0;
        }

        .total-income .title_box .title[data-v-f8277c96] {
            color: #FFF;
            font-family: PingFang SC;
            font-size: .3rem;
        }

        .total-income .title_box .choose_day[data-v-f8277c96] {
            border-radius: 1.8rem;
            border: .02rem solid #212426;
            padding: .12rem .18rem;
            color: #FFF;
            font-size: .24rem;
            display: flex;
            align-items: center;
        }

        .total-income .title_box .choose_day .arrow_down[data-v-f8277c96] {
            margin-left: .1rem;
        }

        .total-income .info[data-v-f8277c96] {
            position: relative;
            padding-right: .2rem;
            min-height: 5.6rem;
        }

        .total-income .info .img[data-v-f8277c96] {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            text-align: center;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .total-income .info .img img[data-v-f8277c96] {
            height: 2.6rem;
        }

        .total-income .info .img span[data-v-f8277c96] {
            display: block;
            margin-top: .3rem;
            color: white;
        }
    </style>
    <style type="text/css">
        .wallet-assets[data-v-8bfe4f4e] {
            line-height: 1.3;
        }

        .wallet-assets .assets-info .name[data-v-8bfe4f4e] {
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }

        .wallet-assets .assets-info .value[data-v-8bfe4f4e] {
            margin-top: .08rem;
            color: #fff;
            font-size: 0.39604rem;
        }

        .wallet-assets .total-assets[data-v-8bfe4f4e] {
            display: flex;
            align-items: center;
        }

        .wallet-assets .total-assets img[data-v-8bfe4f4e] {
            width: 1.04rem;
            height: 1.04rem;
        }

        .wallet-assets .total-assets .assets-info[data-v-8bfe4f4e] {
            margin-left: .16rem;
        }

        .wallet-assets .total-assets .assets-info .value[data-v-8bfe4f4e] {
            font-size: .56rem;
        }

        .wallet-assets .assets-list[data-v-8bfe4f4e] {
            width: 100%;
            aspect-ratio: 4.2875;
            margin-top: .28rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: .32rem 0;
            background: url({{asset ('star/terms/static/img/bg-wallet-assets.e9aa4a59.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .wallet-assets .assets-list .assets-info[data-v-8bfe4f4e] {
            flex: 0 0 50%;
            padding: 0 .32rem;
        }

        .wallet-assets .assets-list .assets-info[data-v-8bfe4f4e]:nth-of-type(2n-1) {
            border-right: 0.02rem solid rgba(255, 255, 255, 0.12);
        }

        .wallet-assets .assets-list .assets-info[data-v-8bfe4f4e]:nth-of-type(n+3) {
            margin-top: .24rem;
        }

        .wallet-assets .bot[data-v-8bfe4f4e] {
            margin-top: .28rem;
            display: flex;
            align-items: center;
        }

        .wallet-assets .bot .bot-left[data-v-8bfe4f4e] {
            display: flex;
            align-items: center;
            gap: .24rem;
        }

        .wallet-assets .bot .bot-left .btn-item[data-v-8bfe4f4e] {
            min-width: 2.4rem;
            border-radius: 1.8rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.3);
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0.32rem 0 rgba(255, 255, 255, 0.32) inset;
            padding: .16rem .24rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wallet-assets .bot .bot-left .btn-item img[data-v-8bfe4f4e] {
            width: .36rem;
            height: .36rem;
        }

        .wallet-assets .bot .bot-left .btn-item span[data-v-8bfe4f4e] {
            margin-left: .08rem;
            color: #fff;
            font-size: .28rem;
        }

        .wallet-assets .bot .bot-right[data-v-8bfe4f4e] {
            margin-left: auto;
        }

        .wallet-assets .bot .bot-right img[data-v-8bfe4f4e] {
            width: .8rem;
            height: .8rem;
        }
    </style>
    <style type="text/css">
        .bg[data-v-14275b54] {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
            width: 100%;
            height: 100%;
        }

        .itemBox[data-v-14275b54] {
            padding: 0 0 .2rem 0;
        }

        .list .it[data-v-14275b54] {
            position: relative;
            padding: .28rem 0;
        }

        .list .it .ico[data-v-14275b54] {
            margin-right: .16rem;
        }

        .list .it .ico img[data-v-14275b54] {
            height: .64rem;
        }

        .list .it .n[data-v-14275b54] {
            font-size: .32rem;
            font-weight: 600;
            color: var(--COcolor1);
            line-height: .44rem;
        }

        .list .it p[data-v-14275b54] {
            font-size: .24rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.4);
            line-height: .34rem;
        }

        .income_box[data-v-14275b54] {
            padding: .28rem;
            background: url({{asset ('star/terms/static/img/home-wallet-bg.8a119ff6.png')}}) no-repeat top center;
            background-size: 100% 100%;
            border-radius: .16rem;
        }

        .income_box .name[data-v-14275b54] {
            font-size: .22rem;
            line-height: .32rem;
            color: rgba(255, 255, 255, 0.6);
            align-items: center;
        }

        .income_box .name img[data-v-14275b54] {
            width: 0.64rem;
            height: 0.64rem;
            margin-right: .14rem;
        }

        .income_box .am[data-v-14275b54] {
            font-size: 0.56rem;
            font-weight: 500;
            line-height: 0.6rem;
            margin-bottom: .1rem;
            margin-top: .1rem;
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.2);
            padding-bottom: .16rem;
        }

        .income_box .am sub[data-v-14275b54] {
            font-size: 0.22rem;
            line-height: 0.32rem;
            vertical-align: middle;
        }

        .income_box .qb[data-v-14275b54] {
            padding: .24rem 0 0 0;
        }

        .income_box .qb li[data-v-14275b54] {
            width: 50%;
        }

        .income_box .qb li[data-v-14275b54]:nth-of-type(n+3) {
            margin-top: .24rem;
        }

        .income_box .qb li .s[data-v-14275b54] {
            font-size: .32rem;
            font-weight: 600;
            line-height: .36rem;
        }

        .income_box .qb li .n[data-v-14275b54] {
            font-size: .26rem;
            line-height: .32rem;
            margin-bottom: .12rem;
        }

        .asset_box .it[data-v-14275b54] {
            padding: 0 !important;
            margin-top: .28rem !important;
        }

        .cname[data-v-14275b54] {
            color: #E48A1E;
            font-size: 0.36rem;
            font-weight: 600;
            line-height: 0.36rem;
            /* 100% */
        }

        .bgs[data-v-14275b54] {
            background: #1D1E26;
            padding-bottom: .32rem;
        }

        .main[data-v-14275b54] {
            border-radius: 0.32rem 0.32rem 0rem 0rem;
            background: #282A33;
            padding: .4rem 0;
            min-height: 50vh;
        }

        .tab[data-v-14275b54] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 0.24rem;
            background: #E48A1E;
            margin-bottom: .1rem;
        }

        .tab li[data-v-14275b54] {
            align-items: center;
            display: flex;
            justify-content: center;
            border-radius: .16rem;
            padding: .32rem .24rem;
            flex: 1;
            position: relative;
        }

        .tab li[data-v-14275b54]:last-child:after {
            content: '';
            display: block;
            position: absolute;
            width: 0.02rem;
            height: 0.4rem;
            background: rgba(255, 255, 255, 0.3);
            left: 0;
            top: 50%;
            margin-top: -0.2rem;
        }

        .tab li img[data-v-14275b54] {
            height: .4rem;
            margin-right: .08rem;
        }

        [data-v-14275b54] .headers {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/5.afc4e311.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .grid-banner[data-v-5f02d15c] {
            width: 100%;
            aspect-ratio: 2.28666667;
            display: flex;
            align-items: center;
            line-height: 1.2;
            background: url({{asset ('star/terms/static/img/bg-banner.66e8bfef.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .grid-banner .banner-content[data-v-5f02d15c] {
            width: 100%;
            padding: 0 .48rem;
            margin-top: .12rem;
        }

        .grid-banner .banner-content .title[data-v-5f02d15c] {
            width: fit-content;
            background: linear-gradient(270deg, #FF1519 0%, #BA0EFF 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: .52rem;
        }

        .grid-banner .banner-content .text[data-v-5f02d15c] {
            margin-top: .24rem;
            color: #fff;
            font-size: .28rem;
        }
    </style>
    <style type="text/css">
        .grid-info[data-v-a156a844] {
            width: 100%;
            min-height: 1.76rem;
            margin-top: .32rem;
            display: flex;
            align-items: stretch;
            gap: .24rem;
            line-height: 1.3;
            margin-bottom: .28rem;
        }

        .grid-info .name[data-v-a156a844] {
            margin-top: .1rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }

        .grid-info .level-con[data-v-a156a844] {
            flex: 1;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: url({{asset ('star/terms/static/img/bg-grid-info-left.9ab0bdb4.png')}}) no-repeat;
            background-size: 100% 100%;
            padding: .24rem .32rem;
        }

        .grid-info .level-con .level[data-v-a156a844] {
            color: #fff;
            font-size: .32rem;
            display: flex;
            align-items: center;
        }

        .grid-info .level-con .level img[data-v-a156a844] {
            width: .56rem;
            height: .56rem;
            margin-right: .1rem;
        }

        .grid-info .info-right[data-v-a156a844] {
            flex: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: .28rem;
            text-align: center;
            background: url({{asset ('star/terms/static/img/bg-grid-info-right.a37bece4.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .grid-info .info-right .assets-info[data-v-a156a844] {
            flex: 1;
            text-align: left;
        }

        .grid-info .info-right .assets-info[data-v-a156a844]:nth-child(1) {
            padding-right: .1rem;
        }

        .grid-info .info-right .assets-info[data-v-a156a844]:nth-child(2) {
            text-align: right;
            padding-left: .1rem;
        }

        .grid-info .info-right .assets-info .value[data-v-a156a844] {
            color: #fff;
            font-size: .32rem;
        }
    </style>
    <style type="text/css">
        .grid-navs[data-v-228f71e0] {
            width: 100%;
            display: flex;
            align-items: center;
            margin-top: .32rem;
        }

        .grid-navs .nav[data-v-228f71e0] {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .grid-navs .nav img[data-v-228f71e0] {
            width: 1.08rem;
            aspect-ratio: 1;
        }

        .grid-navs .nav .name[data-v-228f71e0] {
            margin-top: .12rem;
            color: #fff;
            font-size: .24rem;
        }
    </style>
    <style type="text/css">
        .grid-list-box .title[data-v-16230064] {
            color: #fff;
            font-size: .32rem;
            margin: .4rem 0;
        }

        .grid-list-box .list .item[data-v-16230064] {
            margin-top: .24rem;
            border-radius: .24rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0.32rem 0 rgba(255, 255, 255, 0.32) inset;
            padding: .32rem .28rem;
        }

        .grid-list-box .list .item .item-head[data-v-16230064] {
            width: 100%;
            display: flex;
            align-items: center;
        }

        .grid-list-box .list .item .item-head img[data-v-16230064] {
            width: auto;
            height: .64rem;
            margin-right: .12rem;
        }

        .grid-list-box .list .item .item-head p[data-v-16230064] {
            font-size: .24rem;
            text-align: right;
            margin-top: .1rem;
        }

        .grid-list-box .list .item .item-head .info[data-v-16230064] {
            flex: 1;
        }

        .grid-list-box .list .item .item-head .info .quantify-name[data-v-16230064] {
            color: #FFF;
            font-size: .28rem;
        }

        .grid-list-box .list .item .item-head .info .status[data-v-16230064] {
            width: fit-content;
            color: #FFF;
            margin-top: .12rem;
            padding: .04rem .08rem;
            border-radius: .06rem;
            background: rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.4);
            font-size: .24rem;
        }

        .grid-list-box .list .item .item-head .info .status.on[data-v-16230064] {
            color: #FA0;
            background: rgba(255, 170, 0, 0.2);
        }

        .grid-list-box .list .item .item-head .go-quantify[data-v-16230064] {
            margin-left: auto;
            border-radius: 1.8rem;
            background: rgba(255, 255, 255, 0.12);
            padding: .12rem .24rem;
            color: rgba(255, 255, 255, 0.4);
            font-size: .24rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .grid-list-box .list .item .item-head .go-quantify.on[data-v-16230064] {
            color: #fff;
            border: .02rem solid #f79102;
            background: #000;
            box-shadow: 0 0 0.16rem 0 rgba(194, 0, 255, 0.8) inset;
        }

        .grid-list-box .list .item .item-con[data-v-16230064] {
            margin-top: .4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .grid-list-box .list .item .item-con .item-con-left .info-item[data-v-16230064] {
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }

        .grid-list-box .list .item .item-con .item-con-left .info-item[data-v-16230064]:nth-of-type(n+2) {
            margin-top: .12rem;
        }

        .grid-list-box .list .item .item-con .item-con-left .info-item span[data-v-16230064] {
            color: #fff;
        }

        .grid-list-box .list .item .item-con .item-con-right[data-v-16230064] {
            text-align: right;
        }

        .grid-list-box .list .item .item-con .item-con-right .level-name[data-v-16230064] {
            color: #fff;
            font-size: .28rem;
        }

        .grid-list-box .list .item .item-con .item-con-right .level-text[data-v-16230064] {
            margin-top: .12rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }
    </style>
    <style type="text/css">
        .bg[data-v-e157743a] {
            width: 100%;
            height: 100%;
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
        }

        [data-v-e157743a] .headers {
            background: url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat top center !important;
            background-size: 100% auto !important;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/3.977c5c56.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .grid-trad[data-v-ea03dd80] {
            width: 100%;
            display: flex;
            align-items: stretch;
            gap: .24rem;
            line-height: 1.3;
            margin-bottom: .28rem;
        }

        .grid-trad .name[data-v-ea03dd80] {
            color: #fff;
            font-size: .28rem;
        }

        .grid-trad .trad-left[data-v-ea03dd80] {
            flex: 2;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: url({{asset ('star/terms/static/img/bg-trad-left.975f1e9d.png')}}) no-repeat;
            background-size: 100% 100%;
            padding: .24rem .32rem;
        }

        .grid-trad .trad-left .left-icons[data-v-ea03dd80] {
            display: flex;
            justify-content: space-between;
            margin-bottom: .2rem;
        }

        .grid-trad .trad-left .left-icons .robot[data-v-ea03dd80] {
            width: .64rem;
            height: .64rem;
        }

        .grid-trad .trad-left .left-icons .arrow[data-v-ea03dd80] {
            width: .24rem;
            height: .24rem;
        }

        .grid-trad .trad-right[data-v-ea03dd80] {
            flex: 3;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: .32rem;
            text-align: center;
        }

        .grid-trad .trad-right .text[data-v-ea03dd80] {
            margin-top: 0.11881rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }

        .grid-trad .trad-right .grid-btn[data-v-ea03dd80] {
            min-width: 2.37624rem;
            min-height: 0.55446rem;
            margin-top: 0.11881rem;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            font-size: .24rem;
            padding: 0.07921rem;
            background: url({{asset ('star/terms/static/img/bg-grid-btn.dc03b59b.png')}}) no-repeat;
            background-size: 100% 100%;
        }
    </style>
    <style type="text/css">
        .grid-level[data-v-481208f5] {
            width: 100%;
            padding: 0.31683rem .28rem;
            background: url({{asset ('star/terms/static/img/bg-grid-card.f68af2cd.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .grid-level .title[data-v-481208f5] {
            color: #fff;
            font-size: 0.31683rem;
        }

        .grid-level .level-info[data-v-481208f5] {
            width: 100%;
            margin-top: 0.23762rem;
            display: flex;
            align-items: center;
        }

        .grid-level .level-info img[data-v-481208f5] {
            width: auto;
            height: 0.79208rem;
            margin-right: 0.19802rem;
        }

        .grid-level .level-info .info .level-name[data-v-481208f5] {
            color: #fff;
            font-size: .28rem;
        }

        .grid-level .level-info .info .level-rate[data-v-481208f5] {
            margin-top: 0.11881rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.23762rem;
        }

        .grid-level .level-info .arrow[data-v-481208f5] {
            margin-left: auto;
            color: #686769;
            font-size: .28rem;
        }
    </style>
    <style type="text/css">
        .popup-box[data-v-d0256664] {
            padding: .4rem;
            position: relative;
            border-radius: .4rem .4rem 0 0;
            line-height: 1.2;
            background: #1f161f;
        }

        .popup-box .pop-head[data-v-d0256664] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            margin-bottom: .24rem;
        }

        .popup-box .pop-head .title[data-v-d0256664] {
            width: 82%;
            color: #fff;
            text-align: center;
            font-family: Sora;
            font-size: .32rem;
            font-style: normal;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .popup-box .pop-head .cross[data-v-d0256664] {
            margin-left: auto;
            font-size: .4rem;
            color: #fff;
            cursor: pointer;
        }

        .popup-box .content[data-v-d0256664] {
            max-height: 80vh;
            overflow-y: auto;
        }

        .popup-box .content .grid-level-list[data-v-d0256664] {
            padding-bottom: .32rem;
        }

        .popup-box .content .grid-level-list .grid-level-item[data-v-d0256664] {
            margin-top: .28rem;
            border-radius: .32rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            padding: .28rem;
            display: flex;
            align-items: center;
        }

        .popup-box .content .grid-level-list .grid-level-item.active[data-v-d0256664] {
            border: none;
            background: url({{asset ('star/terms/static/img/bg-grid-level-active.3f9197b3.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .popup-box .content .grid-level-list .grid-level-item[data-v-d0256664]:first-child {
            margin-top: 0;
        }

        .popup-box .content .grid-level-list .grid-level-item img[data-v-d0256664] {
            width: auto;
            height: .52rem;
            margin-right: .2rem;
        }

        .popup-box .content .grid-level-list .grid-level-item .info .name[data-v-d0256664] {
            color: #fff;
            font-size: .32rem;
        }

        .popup-box .content .grid-level-list .grid-level-item .info .rate[data-v-d0256664] {
            margin-top: .12rem;
            color: #929292;
            font-size: .24rem;
        }

        .popup-box .content .grid-level-list .grid-level-item .icon-radio[data-v-d0256664] {
            width: .4rem;
            height: .4rem;
            margin-left: auto;
        }
    </style>
    <style type="text/css">
        .assets-list[data-v-0549ce35] {
            width: 100%;
            margin-top: 0.28rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 0.4rem;
            background: url({{asset ('star/terms/static/img/bg-assets.786bee5d.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .assets-list .assets-info[data-v-0549ce35] {
            flex: 0 0 50%;
        }

        .assets-list .assets-info[data-v-0549ce35]:nth-of-type(n + 3) {
            margin-top: 0.4rem;
        }

        .assets-list .assets-info .name[data-v-0549ce35] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.24rem;
        }

        .assets-list .assets-info .value[data-v-0549ce35] {
            color: #fff;
            font-size: 0.4rem;
            margin-top: 0.2rem;
        }
    </style>
    <style type="text/css">
        .quantify-level[data-v-15212f42] {
            margin-top: .32rem;
            width: 100%;
            aspect-ratio: 4.76388889;
            background: url({{asset ('star/terms/static/img/bg-quantify-level.3c28e742.png')}}) no-repeat;
            background-size: 100% 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: .24rem .28rem;
            color: #fff;
            font-size: .28rem;
        }

        .quantify-level .level[data-v-15212f42] {
            display: flex;
            align-items: center;
        }

        .quantify-level .level img[data-v-15212f42] {
            width: auto;
            height: .56rem;
            margin-right: .12rem;
        }
    </style>
    <style type="text/css">
        .block[data-v-4681035b],
        .colon[data-v-4681035b] {
            color: #fff;
            padding: 0 0.0396rem;
        }

        .record-btns[data-v-4681035b] {
            margin-top: 0.24rem;
            display: flex;
            align-items: center;
            gap: 0.24rem;
        }

        .record-btns .record-btn[data-v-4681035b] {
            border-radius: 0.24rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            padding: 0.24rem 0.12rem;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 0.27723rem;
        }

        .record-btns .record-btn img[data-v-4681035b] {
            width: 0.55446rem;
            height: 0.55446rem;
            margin-right: 0.11881rem;
        }

        .popup-box[data-v-4681035b] {
            width: 6.2rem;
            line-height: 1.3;
            background: #1a1c1e;
            padding: 0.32rem 0.32rem;
            border-radius: 0.4rem;
        }

        .popup-box .title_box[data-v-4681035b] {
            padding: 0 0.32rem;
            position: relative;
        }

        .popup-box .title_box .title[data-v-4681035b] {
            padding: 0 0.32rem;
            text-align: center;
            color: #fff;
            font-family: "PingFang SC";
            font-size: 0.36rem;
            font-weight: 600;
        }

        .popup-box .title_box .cross[data-v-4681035b] {
            font-size: 0.32rem;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        .popup-box .content[data-v-4681035b] {
            margin-top: 0.2rem;
            min-height: 2rem;
            max-height: 6rem;
            overflow-y: auto;
        }

        .popup-box .content .text[data-v-4681035b] {
            color: #fff;
            font-size: 0.28rem;
        }

        .popup-box .btn[data-v-4681035b] {
            margin-top: 0.32rem;
            display: flex;
            padding: 0.24rem;
            height: 0.96rem;
            justify-content: center;
            align-items: center;
            gap: 0.24rem;
            align-self: stretch;
            border-radius: 1.8rem;
            background: #f79102;
            color: #17191c;
            text-align: center;
            font-family: "PingFang HK";
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 500;
            line-height: 1.2;
        }

        .grid-content[data-v-4681035b] {
            padding: 0.32rem 0.28rem;
            border-radius: 0.32rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
        }

        .grid-content .quantifyRateMax[data-v-4681035b] {
            border-radius: 1.8rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: #000;
            height: 0.96rem;
            align-items: center;
            padding: 0 0.28rem;
        }

        .grid-content .quantifyRateMax[data-v-4681035b]:focus-within {
            border-color: #f79102;
        }

        .grid-content .quantifyRateMax input[data-v-4681035b] {
            background: none;
            height: 0.9rem;
            width: 100%;
            border: 0;
        }

        .grid-content .quantifyRateMax .USDT[data-v-4681035b] {
            color: #f79102;
            font-size: 0.28rem;
            font-weight: 500;
            line-height: 0.28rem;
            /* 100% */
        }

        .grid-content .quantifyRateMax .all[data-v-4681035b] {
            margin-left: 0.1rem;
            padding-left: 0.1rem;
            border-left: 0.02rem solid #f79102;
            color: #f79102;
            font-size: 0.28rem;
            font-weight: 500;
            line-height: 0.28rem;
        }

        .grid-content[data-v-4681035b] .Progress {
            margin-top: 0.32rem;
        }

        .grid-content[data-v-4681035b] .Progress .van-slider {
            border-radius: 0.4rem;
            background: #22232d;
            height: 0.16rem !important;
        }

        .grid-content[data-v-4681035b] .Progress .van-slider__bar {
            background: linear-gradient(270deg, #ff1519 0%, #ba0eff 100%) !important;
        }

        .grid-content[data-v-4681035b] .Progress .van-slider__button {
            border-radius: 0.4rem;
            border: 0.04rem solid #fff;
            background: linear-gradient(270deg, #ff1519 0%, #ba0eff 100%);
            box-shadow: 0 0.04rem 0.12rem 0 rgba(186, 14, 255, 0.4);
            width: 0.4rem;
            height: 0.24rem;
        }

        .grid-content[data-v-4681035b] .Progress .ul {
            margin-top: 0.16rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #909090;
            font-family: PingFang SC;
            font-size: 0.24rem;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .grid-content[data-v-4681035b] .Progress .ul .active {
            color: #f79102;
        }

        .trading-btn[data-v-4681035b] {
            width: 100%;
            min-height: 0.88rem;
            padding: 0.12rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url({{asset ('star/terms/static/img/bg-btn.43aa1b59.png')}}) no-repeat;
            background-size: 100% 100%;
            color: #fff;
            font-size: 0.32rem;
            text-align: center;
            line-height: 1.2;
            border-radius: 1.8rem;
            overflow: hidden;
            position: relative;
        }

        .trading-btn .schedule[data-v-4681035b] {
            position: absolute;
            left: 0;
            height: 100%;
            z-index: 1;
            background: transparent linear-gradient(180deg, #ba0eff 0%, #ff1519 100%);
        }

        .trading-btn .trading-btn-con[data-v-4681035b] {
            position: relative;
            z-index: 10;
        }

        .trading-btn .trading-btn-con .time[data-v-4681035b] {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.24rem;
            display: flex;
            align-items: center;
        }

        .trading-btn .trading-btn-con .time .count_down[data-v-4681035b] {
            margin-top: 0.06rem;
            line-height: 1;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.24rem;
        }

        .mob1[data-v-4681035b] {
            margin-top: 0.24rem;
        }

        .mob1 .but[data-v-4681035b] {
            border-radius: 0.2rem;
            background: #f79102;
            font-weight: 500;
            height: 0.88rem;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .valBox[data-v-4681035b] {
            height: 1.24rem;
            border-radius: 0.2rem;
            background: #363841;
            align-items: center;
            padding: 0 0.28rem;
        }

        .valBox .ico img[data-v-4681035b] {
            width: 0.64rem;
            height: 0.49244rem;
            flex-shrink: 0;
        }

        .valBox .flex1[data-v-4681035b] {
            padding: 0 0.2rem;
        }

        .valBox .flex1 .n[data-v-4681035b] {
            line-height: 0.28rem;
            /* 100% */
        }

        .valBox .flex1 .s[data-v-4681035b] {
            margin-top: 0.16rem;
            color: #e48a1e;
            font-size: 0.24rem;
            font-weight: 500;
            line-height: 0.24rem;
            /* 100% */
        }

        .valBox .arr img[data-v-4681035b] {
            height: 0.28rem;
        }

        .cname[data-v-4681035b] {
            align-items: center;
            margin-bottom: 0.24rem;
        }

        .cname .flex1[data-v-4681035b] {
            font-size: 0.32rem;
            font-weight: 500;
            line-height: 0.32rem;
            /* 100% */
        }

        .cname .str[data-v-4681035b] {
            color: #e48a1e;
            font-size: 0.24rem;
            line-height: 0.24rem;
            /* 100% */
        }

        .item3[data-v-4681035b] {
            border-radius: 0.32rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            background: rgba(0, 0, 0, 0.1);
            padding: 0.32rem 0.28rem;
        }

        .item3 .pic[data-v-4681035b] {
            text-align: center;
        }

        .item3 .pic img[data-v-4681035b] {
            height: 4rem;
        }

        .item3 .p[data-v-4681035b] {
            line-height: 1.2;
        }

        .item3 .p div[data-v-4681035b] {
            color: rgba(255, 255, 255, 0.6);
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 0.24rem;
        }

        .height[data-v-4681035b] {
            height: 0.26rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/57.2be1c045.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .com-btn[data-v-15bafa7f] {
            width: 100%;
            min-height: .88rem;
            padding: 0.11881rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url({{asset ('star/terms/static/img/bg-btn.43aa1b59.png')}}) no-repeat;
            background-size: 100% 100%;
            color: #fff;
            font-size: .32rem;
        }

        .com-btn.min[data-v-15bafa7f] {
            min-height: .72rem;
        }

        .com-btn.disabled[data-v-15bafa7f] {
            color: rgba(255, 255, 255, 0.4);
            border: 0.0198rem solid rgba(255, 255, 255, 0.2);
            background: #000;
            border-radius: 1.8rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/14.530e0272.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .assets-list[data-v-38c37e3e] {
            padding: .4rem .28rem;
            background: url({{asset ('star/terms/static/img/bg-asstes-card.ce8df5cb.png')}}) no-repeat;
            background-size: 100% 100%;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .assets-list .assets-item[data-v-38c37e3e] {
            flex: 0 0 50%;
            display: flex;
        }

        .assets-list .assets-item[data-v-38c37e3e]:nth-of-type(n+3) {
            margin-top: .4rem;
        }

        .assets-list .assets-item img[data-v-38c37e3e] {
            width: .64rem;
            height: .64rem;
            margin-right: .2rem;
        }

        .assets-list .assets-item .info[data-v-38c37e3e] {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .assets-list .assets-item .info .name[data-v-38c37e3e] {
            font-size: .24rem;
            color: rgba(255, 255, 255, 0.6);
            font-weight: bold;
        }

        .assets-list .assets-item .info .value[data-v-38c37e3e] {
            margin-top: .08rem;
            font-size: .32rem;
            color: #fff;
            font-weight: bold;
        }
    </style>
    <style type="text/css">
        .itemBox[data-v-2d25678c] {
            padding: .24rem 0 0;
        }

        .bg[data-v-2d25678c] {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
            width: 100%;
            height: 100%;
        }

        .tab[data-v-2d25678c] {
            line-height: .54rem;
            margin-bottom: .24rem;
        }

        .tab .select-date[data-v-2d25678c] {
            padding: 0 .24rem;
            border-radius: 1.8rem;
            border: .02rem solid #f79102;
            background: #000;
            box-shadow: 0 0 0.31683rem 0 rgba(194, 0, 255, 0.8) inset;
            color: #fff;
            font-size: .24rem;
        }

        .tab .select-date .arrow[data-v-2d25678c] {
            margin-left: .12rem;
        }

        .tab .check-team[data-v-2d25678c] {
            color: #fff;
            font-size: .24rem;
        }

        .income[data-v-2d25678c] {
            border-radius: 0.24rem;
            background: linear-gradient(93deg, #F68E10 0.2%, #F27D10 99.77%);
        }

        .income .it2[data-v-2d25678c] {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.2);
            margin-bottom: .3rem;
            padding-bottom: .3rem;
        }

        .income .it2 .name[data-v-2d25678c] {
            font-weight: 400;
            color: var(--COcolor6);
        }

        .income .it2 .name span[data-v-2d25678c] {
            color: var(--COcolor1);
        }

        .income .it[data-v-2d25678c] {
            border-bottom: 0.02rem solid rgba(255, 255, 255, 0.2);
            padding: 0 0 .4rem 0;
            margin-bottom: .4rem;
        }

        .income .it .name[data-v-2d25678c] {
            color: rgba(255, 255, 255, 0.6);
        }

        .income .it .name span[data-v-2d25678c] {
            color: #fff;
        }

        .income ul[data-v-2d25678c] {
            text-align: center;
        }

        .income ul .s[data-v-2d25678c] {
            font-size: .32rem;
            font-weight: 500;
            color: var(--COcolor1);
            line-height: 0.32rem;
            /* 100% */
        }

        .income ul .n[data-v-2d25678c] {
            font-size: .24rem;
            color: var(--COcolor6);
            margin-top: .16rem;
        }

        .income-box[data-v-2d25678c] {
            display: flex;
            align-items: center;
            margin-top: 0.19802rem;
            margin-bottom: 0.39604rem;
            gap: 0.23762rem;
        }

        .income-box .income-item[data-v-2d25678c] {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 0.27723rem 0.31683rem;
        }

        .income-box .income-item img[data-v-2d25678c] {
            width: .64rem;
            height: .64rem;
        }

        .income-box .income-item .info[data-v-2d25678c] {
            margin-left: 0.15842rem;
        }

        .income-box .income-item .info .name[data-v-2d25678c] {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.23762rem;
        }

        .income-box .income-item .info .value[data-v-2d25678c] {
            margin-top: 0.07921rem;
            color: #fff;
            font-size: 0.31683rem;
        }

        .tame .generations-list .it[data-v-2d25678c] {
            border-radius: 0.24rem;
            padding: .32rem .26rem;
            margin-bottom: .26rem;
        }

        .tame .generations-list .it .name[data-v-2d25678c] {
            font-size: .26rem;
            font-weight: 500;
            color: var(--COcolor1);
            line-height: .36rem;
            padding: 0 0 .32rem 0;
            margin-bottom: .32rem;
            border-bottom: .02rem solid #353740;
        }

        .tame .generations-list ul li[data-v-2d25678c] {
            text-align: center;
        }

        .tame .generations-list ul li .s[data-v-2d25678c] {
            font-size: 0.28rem;
            font-weight: 500;
            color: var(--COcolor1);
            line-height: 0.28rem;
            /* 100% */
        }

        .tame .generations-list ul li .n[data-v-2d25678c] {
            color: #A4A6AA;
            font-size: 0.22rem;
            line-height: 0.22rem;
            /* 100% */
            margin-top: .16rem;
        }

        .levellist[data-v-2d25678c] {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .levellist li[data-v-2d25678c] {
            width: 3.35rem;
            background: var(--CObackgroundLinear4);
            border-radius: .16rem;
            margin-bottom: .24rem;
            text-align: center;
            padding: .24rem;
        }

        .levellist li .run[data-v-2d25678c] {
            margin-top: .16rem;
            font-size: .22rem;
            color: var(--COcolor6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .levellist li .run span[data-v-2d25678c] {
            font-size: .32rem;
            color: var(--COcolor1);
            margin-left: .1rem;
        }

        .levellist li img[data-v-2d25678c] {
            height: .57rem;
        }

        [data-v-2d25678c] .headers {
            background: #000 url({{asset ('star/terms/static/img/bg-home.a6c7beab.png')}}) no-repeat;
            background-size: 100% auto;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/9.9eaf0545.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .tab_box[data-v-502a7a73] {
            border: .02rem solid #282A33;
            border-radius: 1.8rem;
            background: #000;
        }

        .tabs_title[data-v-502a7a73] {
            font-size: .28rem;
            font-weight: 500;
            text-align: center;
            color: var(--COcolor6);
        }

        .tabs_title_active[data-v-502a7a73] {
            color: #fff;
        }

        [data-v-502a7a73] .van-tabs__line {
            background-color: var(--CObackgroundLinear2);
            display: none;
        }

        [data-v-502a7a73] .van-tabs__nav {
            background: none;
        }

        [data-v-502a7a73] .van-tabs--line .van-tabs__wrap {
            height: .74rem;
        }

        [data-v-502a7a73] .van-tab--active {
            border-radius: 1.8rem;
            border: .02rem solid #f79102;
            background: #000;
            box-shadow: 0 0 0.31683rem 0 rgba(194, 0, 255, 0.8) inset;
            color: #fff;
        }
    </style>
    <style type="text/css">
        .remark-popup[data-v-73bd611e] {
            width: 6rem;
            max-width: 6rem;
            padding: 0.4rem;
            border-radius: 0.2rem;
            background: #1f161f;
        }

        .remark-popup .title[data-v-73bd611e] {
            text-align: center;
            font-size: 0.32rem;
            margin-bottom: 0.2rem;
        }

        .remark-popup ul li[data-v-73bd611e] {
            margin-bottom: 0.3rem;
        }

        .remark-popup ul li .name[data-v-73bd611e] {
            margin-bottom: 0.2rem;
        }

        .remark-popup ul li input[data-v-73bd611e] {
            height: 0.9rem;
            background: transparent;
            border: 0;
            width: 100%;
            padding: 0.24rem 0.28rem;
            border: 0.02rem solid rgba(255, 255, 255, 0.2);
            border-radius: 0.2rem;
        }

        .remark-popup button.on[data-v-73bd611e] {
            background: #f79102;
            width: 100%;
            height: 0.8rem;
            border: 0;
            color: #fff;
            font-size: 0.32rem;
            border-radius: 0.4rem;
        }
    </style>
    <style type="text/css">
        .itemBox[data-v-46219e99] {
            padding: 0.26rem 0 0 0;
        }

        .line2[data-v-46219e99] {
            padding: 0.26rem;
            border-radius: 0.24rem;
        }

        .line2 ul[data-v-46219e99] {
            border-top: 0.02rem solid #353740;
            margin-top: 0.24rem;
            padding: 0.24rem 0 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .line2 ul li[data-v-46219e99] {
            flex: 1;
            line-height: 0.48rem;
            color: var(--COcolor6);
            text-align: center;
        }

        .line2 ul li .s[data-v-46219e99] {
            color: var(--COcolor1);
        }

        .line2 ul li .n[data-v-46219e99] {
            font-size: .24rem;
        }

        .line2 .it[data-v-46219e99] {
            position: relative;
        }

        .line2 .it .head[data-v-46219e99] {
            align-items: center;
        }

        .line2 .it .head .flex1[data-v-46219e99] {
            padding: 0 0.2rem;
        }

        .line2 .it .head .info-head[data-v-46219e99] {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .line2 .it .head .info-head .sun span[data-v-46219e99] {
            display: inline-block;
            box-shadow: 0 0.08rem 0.16rem 0 rgba(247, 147, 26, 0.2);
            background: linear-gradient(93deg, #f79102 0.2%, #f7841a 99.77%);
            padding: 0.1rem 0.24rem;
            font-size: 0.24rem;
            font-weight: 500;
            border-radius: 1.8rem;
        }

        .line2 .it .head .info-head .sun span.active[data-v-46219e99] {
            background: var(--CObackgroundLinear5);
        }

        .line2 .it .head .n[data-v-46219e99] {
            font-weight: 500;
            color: var(--COcolor1);
            line-height: 0.4rem;
        }

        .line2 .it .head .n img[data-v-46219e99] {
            height: 0.4rem;
            margin-left: 0.04rem;
        }

        .line2 .it .head .remark[data-v-46219e99] {
            max-width: 2rem;
            margin-left: 0.1rem;
            color: #f79102;
            font-size: 0.24rem;
        }

        .line2 .it .head .effective[data-v-46219e99] {
            width: fit-content;
            padding: .04rem .08rem;
            border-radius: .06rem;
            background: var(--CObackgroundLinear5);
            font-size: 0.22rem;
            margin-top: .08rem;
            color: #ffe2e0;
        }

        .line2 .it .head .effective[data-v-46219e99]:first-child {
            margin-right: 0.12rem;
        }

        .line2 .it .head .info-bot[data-v-46219e99] {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .line2 .it .head .info-bot .status[data-v-46219e99] {
            color: rgba(255, 255, 255, 0.5);
        }

        .line2 .it .head .info-bot .status.on[data-v-46219e99] {
            color: #f79102;
        }

        .line2 .it .head .time[data-v-46219e99] {
            color: #a4a6aa;
            font-size: 0.24rem;
            line-height: 0.24rem;
            /* 100% */
            margin-top: 0.16rem;
        }

        .line2 .it .head .photo[data-v-46219e99] {
            background: url(data:image/png;base64,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);
            background-size: 100% 100%;
            width: 0.96rem;
            height: 0.96rem;
        }

        .line2 .it .head .photo img[data-v-46219e99] {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .setBox[data-v-46219e99] {
            display: flex;
            align-items: center;
            font-size: 0.24rem;
            justify-content: space-between;
        }

        .setBox .set[data-v-46219e99] {
            background: #f8f9fd;
            border-radius: 0.16rem;
            padding: 0.2rem;
            align-items: center;
            display: flex;
            font-size: 0.24rem;
            color: #64748b;
            width: 100%;
        }

        .setBox .set span[data-v-46219e99] {
            flex: 1;
        }

        .setBox .set img[data-v-46219e99] {
            height: 0.32rem;
            margin-left: 0.32rem;
        }

        .teamsun[data-v-46219e99] {
            padding: 0.32rem 0 0 0;
            font-size: 0.24rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/6.7181728c.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .my-head[data-v-5eb5f75c] {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .my-head .avatar[data-v-5eb5f75c] {
            width: 1.32rem;
            height: 1.32rem;
            background: url({{asset ('star/terms/static/img/bg-avatar.82eba0fb.png')}}) no-repeat;
            background-size: 100% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .my-head .avatar[data-v-5eb5f75c]:before {
            content: "";
            display: block;
            width: 3.6rem;
            height: .6rem;
            background: url({{asset ('star/terms/static/img/bg-WavyLines.b341f9e1.png')}}) no-repeat;
            background-size: 100% 100%;
            position: absolute;
            top: .4rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .my-head .avatar img[data-v-5eb5f75c] {
            width: 1.2rem;
            height: 1.2rem;
            border-radius: .4rem;
            position: relative;
            z-index: 10;
        }

        .my-head .nickname[data-v-5eb5f75c] {
            margin-top: .24rem;
            color: #fff;
            font-size: .36rem;
            font-weight: bold;
        }

        .my-head .code-box[data-v-5eb5f75c] {
            margin-top: .12rem;
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: .24rem;
        }

        .my-head .code-box .code[data-v-5eb5f75c] {
            color: #fff;
            font-size: .28rem;
            margin-right: .12rem;
        }

        .my-head .code-box img[data-v-5eb5f75c] {
            height: .4rem;
        }
    </style>
    <style type="text/css">
        .my-navs[data-v-1f0d3d2c] {
            width: 100%;
            display: flex;
            align-items: stretch;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: .24rem;
            line-height: 1.3;
            margin-top: .32rem;
        }

        .my-navs .nav[data-v-1f0d3d2c] {
            flex: 0 0 48%;
            display: flex;
            flex-direction: column;
            background: url({{asset ('star/terms/static/img/bg-navs.09e271a2.png')}}) no-repeat;
            background-size: 100% 100%;
            padding: .4rem .32rem;
        }

        .my-navs .nav .nav-head[data-v-1f0d3d2c] {
            display: flex;
            justify-content: space-between;
            margin-bottom: .2rem;
        }

        .my-navs .nav .nav-head .icon[data-v-1f0d3d2c] {
            width: .64rem;
            height: .64rem;
        }

        .my-navs .nav .nav-head .arrow[data-v-1f0d3d2c] {
            width: .24rem;
            height: .24rem;
        }

        .my-navs .nav .name[data-v-1f0d3d2c] {
            color: #fff;
            font-size: .28rem;
            word-wrap: break-word;
            word-break: break-word;
        }
    </style>
    <style type="text/css">
        .heads[data-v-7a3d5949] {
            padding: 0.28rem 0;
            background: url({{asset ('star/terms/static/img/bg_my.9fbfe6c2.png')}}) no-repeat 0 -1rem;
            background-size: 100% auto;
        }

        .heads .flex[data-v-7a3d5949] {
            align-items: center;
        }

        .heads .flex1[data-v-7a3d5949] {
            font-weight: 600;
            font-size: 0.36rem;
            line-height: 0.5rem;
            color: var(--COcolor1);
        }

        .heads .notice[data-v-7a3d5949] {
            position: relative;
        }

        .heads .notice span[data-v-7a3d5949] {
            position: absolute;
            background: #e4161a;
            color: #fff;
            border-radius: 50%;
            box-shadow: 0 0.04rem 0.08rem 0 rgba(245, 56, 49, 0.31);
            font-size: 0.2rem;
            padding: 0 0.08rem;
            top: -0.1rem;
            right: -0.1rem;
        }

        .heads .notice img[data-v-7a3d5949] {
            height: 0.48rem;
        }

        .g1[data-v-7a3d5949] {
            background: url({{asset ('star/terms/static/img/bg_banner.b3f69096.png')}}) no-repeat;
            background-size: 100% 100%;
            color: #fff;
            margin-top: 0.32rem;
        }

        .g1 .flex[data-v-7a3d5949] {
            align-items: center;
            padding: 0.32rem;
        }

        .g1 .flex .ico img[data-v-7a3d5949] {
            height: 0.55rem;
        }

        .g1 .flex .flex1[data-v-7a3d5949] {
            padding: 0 0.16rem;
            font-weight: 600;
            font-size: 0.28rem;
        }

        .g1 .flex .level-btn[data-v-7a3d5949] {
            font-size: 0.24rem;
            background: url({{asset ('star/terms/static/img/bg-min-btn.5cfb3e60.png')}}) no-repeat;
            background-size: 100% 100%;
            border-radius: 1.8rem;
            padding: 0.14rem 0.24rem;
        }

        .line[data-v-7a3d5949] {
            margin-top: 0.26rem;
            padding-bottom: 0.14rem;
        }

        .line .module[data-v-7a3d5949] {
            padding: 0.32rem 0.28rem 0;
            background: url({{asset ('star/terms/static/img/bg-list.ebe69d90.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .line .module .module-title[data-v-7a3d5949] {
            color: #fff;
            font-size: 0.3rem;
        }

        .line .module ul[data-v-7a3d5949] {
            margin-top: 0.12rem;
            border-radius: 0.24rem;
            margin-bottom: 0.26rem;
            padding: 0.1rem 0;
        }

        .line .module li[data-v-7a3d5949] {
            height: 0.8rem;
        }

        .line .module li .arrow[data-v-7a3d5949] {
            color: #d9d9d9;
        }

        .line .ico img[data-v-7a3d5949] {
            height: 0.48rem;
        }

        .line .flexs[data-v-7a3d5949] {
            margin: 0 0.2rem;
        }

        .line .status[data-v-7a3d5949] {
            color: #ef6115;
            font-size: 0.24rem;
            margin: 0 0.1rem;
            max-width: 2rem;
            text-align: right;
        }

        .line .view[data-v-7a3d5949] {
            height: 0.4rem;
        }

        .btn-list[data-v-7a3d5949] {
            display: flex;
            align-items: stretch;
            padding-bottom: 0.6rem;
            gap: 0.24rem;
        }

        .btn-list>div[data-v-7a3d5949] {
            flex: 1;
            height: 0.88rem;
            border-radius: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.32rem;
        }

        .btn-list .btn-quit[data-v-7a3d5949] {
            background: url({{asset ('star/terms/static/img/tabbg.28cb0f3a.png')}}) center no-repeat;
            background-size: 100% 100%;
        }

        .btn-list .btn-delete[data-v-7a3d5949] {
            color: #eb3f31;
            border: 0.02rem solid rgba(255, 255, 255, 0.3);
        }

        .bg[data-v-7a3d5949] {
            background: url({{asset ('star/terms/static/img/bg_my.9fbfe6c2.png')}}) no-repeat 0 -1rem;
            background-size: 100% auto;
            max-width: 8rem;
            height: 100%;
            width: 100%;
            position: fixed;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/34.c4f51bec.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .container[data-v-9506673c] {
            padding: 0 0.32rem;
        }

        .list[data-v-9506673c] {
            display: flex;
            flex-direction: column;
        }

        .list .item[data-v-9506673c] {
            margin-top: 0.32rem;
            padding: .28rem;
        }

        .list .item .head[data-v-9506673c] {
            display: flex;
            align-items: center;
            border-radius: 0.24rem;
        }

        .list .item .head .tokenType-icon[data-v-9506673c] {
            width: 0.44rem;
            height: 0.44rem;
            margin-right: .12rem;
        }

        .list .item .head .chainName[data-v-9506673c] {
            flex-shrink: 0;
            height: 0.48rem;
            margin-right: 0.16rem;
            color: #fff;
            font-family: "PingFang SC";
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 500;
            line-height: 1em;
            display: flex;
            align-items: center;
        }

        .list .item .head .right[data-v-9506673c] {
            margin-left: auto;
        }

        .list .item .head .right .icon[data-v-9506673c] {
            margin-left: .24rem;
            width: 0.4rem;
            height: 0.4rem;
        }

        .list .item .address[data-v-9506673c] {
            margin-top: .2rem;
            min-width: 0;
            flex: 1;
            color: #fff;
            font-family: "PingFang SC";
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 500;
            line-height: 1em;
            /* 100% */
            word-break: break-all;
        }

        .add-btn[data-v-9506673c] {
            margin-top: 0.16rem;
            margin-bottom: 0.16rem;
            padding: 0.16rem 0;
            display: flex;
            justify-content: center;
            color: #fff;
            font-family: "PingFang SC";
            font-size: 0.32rem;
            font-style: normal;
            font-weight: 400;
            line-height: 1em;
        }

        .add-btn img[data-v-9506673c] {
            margin-right: 0.08rem;
            flex-shrink: 0;
            width: 0.32rem;
            height: 0.32rem;
            object-fit: contain;
        }

        .bot[data-v-9506673c] {
            padding: .32rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/23.7d93ad4f.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .qrcode {
            width: 3.4rem;
            height: 3.4rem;
            padding: .1rem;
        }

        .qrcode /deep/ img {
            height: 99%;
            width: 99%;
        }

        .qrcode img {
            height: 99%;
            width: 99%;
        }
    </style>
    <style type="text/css">
        .container[data-v-2a224bbc] {
            padding-bottom: .4rem;
        }

        .bg[data-v-2a224bbc] {
            background: #000 url({{asset ('star/terms/static/img/bg_invite.10776553.png')}}) no-repeat;
            background-size: 100% auto;
            width: 100%;
            height: 100%;
        }

        .text-box[data-v-2a224bbc] {
            margin-top: .4rem;
            text-align: center;
            line-height: 1.2;
        }

        .text-box .title[data-v-2a224bbc] {
            background: linear-gradient(270deg, #FF1519 0.05%, #BA0EFF 99.94%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: .48rem;
        }

        .text-box .text[data-v-2a224bbc] {
            margin-top: .24rem;
            color: rgba(255, 255, 255, 0.8);
            font-size: .28rem;
        }

        .invite-con[data-v-2a224bbc] {
            margin: 0 .24rem;
            aspect-ratio: 0.61931818;
            background: url({{asset ('star/terms/static/img/bg-invite-con.0a4a121d.png')}}) no-repeat;
            background-size: 100% 100%;
            padding: 0 .32rem;
        }

        .invite-con .qrcode-box[data-v-2a224bbc] {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.05rem 0 .85rem;
        }

        .invite-con .qrcode-box .qrcode-con[data-v-2a224bbc] {
            width: fit-content;
            padding: .32rem;
            background: url({{asset ('star/terms/static/img/bg-qrcode.79d104a8.png')}}) no-repeat;
            background-size: 100% 100%;
        }

        .invite-con .line[data-v-2a224bbc] {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .invite-con .line img[data-v-2a224bbc] {
            width: 5.68317rem;
        }

        .invite-con .page-invite-bottom[data-v-2a224bbc] {
            width: 100%;
            padding: 0 0.39604rem;
            line-height: 1.2;
        }

        .invite-con .page-invite-bottom .link-item[data-v-2a224bbc] {
            margin-top: .32rem;
        }

        .invite-con .page-invite-bottom .link-item[data-v-2a224bbc]:nth-of-type(n+2) {
            padding-top: .32rem;
            border-top: 0.0198rem dashed rgba(255, 255, 255, 0.2);
        }

        .invite-con .page-invite-bottom .link-item .item-name[data-v-2a224bbc] {
            color: #fff;
            font-size: .32rem;
            margin-bottom: .2rem;
        }

        .invite-con .page-invite-bottom .link-item .item-content[data-v-2a224bbc] {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .invite-con .page-invite-bottom .link-item .item-content .link[data-v-2a224bbc] {
            color: rgba(255, 255, 255, 0.8);
            font-size: .28rem;
        }

        .invite-con .page-invite-bottom .link-item .item-content .copy[data-v-2a224bbc] {
            flex: 0 0 .56rem;
            width: .56rem;
            height: .56rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/36.9856e995.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .container[data-v-40856e44] {
            margin-top: 0.32rem;
        }

        .item[data-v-40856e44] {
            margin-bottom: 0.32rem;
        }

        .tips[data-v-40856e44] {
            padding-bottom: 0.3rem;
        }

        .tips .n[data-v-40856e44] {
            margin-bottom: 0.1rem;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALvSURBVHgBrVfNaxNBFH9vNh+lrZjagj2VLRTUk9GrQlO0op4S6MVTe/AoVP+CNmcPttCjh3qqh0K9RKEgTaHntoKglEJCTyqiAWvNR3ef8ybddPPRZGaTH+yyMzszv/fevPdmHoImNvYSsUhfOCksd9IljCOALbtjZ78LBJAXSPuuQ9vlovsudStb0FkXOw348CVhkxWaB4I5H2HnhZFWi46TTt3I5tuOu+gHaxwdCC1I4ufQDRCWSn9P0xdZpKUASmsR3gIgG3oCzJfcylQra4jGjsxBIt5bcgbZUblm5vN0vPFPnQV6r3kTXZMl6ixgSn50WFSPPqqWYP/yekLex/uD+6+A9MnXVn7A5vov9f1gZgiePLuqOVMKwc4N8IJbygJsehNvPzos1cgZm+u/4ee3CmhDcm0wpycAWNYCdImTY8dofATDSmGxkUvEiHDOZHL/YFPwwMhoBEwgE9Us+4KIFEUSDDEyGgYdoTpApnaRFMLCSQiAYZ8QrQTSgRA4KfhggQAY8Gk8HFAAAowLDJh0hn17HsD8Hmw5E7VPOD/8pKYO6EMssOj+fe/CApwHSOvi0E6AoE4oURDSEfIQAGMTUaU5P9fj/RAQ+RC69AmEeSSMTfTBy7cT6jvoFsgA2JcWEFkIAD4F11a+q8foHPDBdWkbORVHy1bOJBqYcOFpTuZ/V7X7By1Iv7aNfaF0cjokUuPZAhG8MZm4u/OnRs7gg2h35xhMIM2/yvdEtXmCnCWTya00HRkNgQmKrpNW3Px6JK9IRLSsO/n23UswPXOl1r7z8LLq04U8fZe9a1ntTnjmC3uyy9Zcp3Yd44jQB+UfX/s47rVq8cO+gK4zxQNAE0xsSl5SHOeoC2C1FeikTIQwIee1G2uDNoWJtWWyHZ3IWfNWhUnb2jDz9d4SIs5DN9TS4cr/KotGpZkfyhpgLcp0PQvaIJVbyjK8AxenjaiW5yKJgAkSeLN6kfGypySUh1q1PBeyPK9ol+f/AVLeM1PBIY6mAAAAAElFTkSuQmCC) no-repeat 0 center;
            padding-left: 0.36rem;
            background-size: 0.28rem;
            font-size: 0.26rem;
            color: #222;
        }

        .tips .p[data-v-40856e44] {
            font-size: 0.26rem;
            color: #999;
            line-height: 1.6;
        }

        .wjmm[data-v-40856e44] {
            margin-top: 0.2rem;
            color: #ef6115;
        }

        .valMob .n[data-v-40856e44] {
            color: #fff;
            font-family: PingFang SC;
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 400;
            margin-top: 0.36rem;
            margin-bottom: 0.08rem;
        }

        .valMob .n img[data-v-40856e44] {
            height: 0.3rem;
        }

        .valMob .s[data-v-40856e44] {
            color: #909090;
            font-family: PingFang SC;
            font-size: 0.26rem;
            font-style: normal;
            font-weight: 400;
            line-height: 0.4rem;
            /* 161.538% */
        }

        .valMob .iconpic[data-v-40856e44] {
            margin-right: 0.24rem;
            height: 0.48rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/38.af2250ed.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .area[data-v-7d8fed3e] {
            font-size: 0.3rem;
            text-align: right;
            position: absolute;
            right: 0.2rem;
            top: 0.34rem;
            z-index: 2;
        }

        .area img[data-v-7d8fed3e] {
            height: 0.2rem;
            vertical-align: middle;
            margin-left: 0.1rem;
        }

        .container[data-v-7d8fed3e] {
            padding: 0 0.4rem;
            padding-top: 0.32rem;
        }

        .item[data-v-7d8fed3e] {
            margin-bottom: 0.32rem;
        }

        .err[data-v-7d8fed3e] {
            color: #cc0000;
            margin-bottom: 0.46rem;
        }

        .str[data-v-7d8fed3e] {
            color: #ef6115;
        }

        .tar[data-v-7d8fed3e] {
            color: var(--COcolor1);
        }

        .valMob .n[data-v-7d8fed3e] {
            color: #fff;
            font-family: PingFang SC;
            font-size: 0.28rem;
            font-style: normal;
            font-weight: 400;
            margin-top: 0.36rem;
            margin-bottom: 0.08rem;
        }

        .valMob .n img[data-v-7d8fed3e] {
            height: 0.3rem;
        }

        .valMob .s[data-v-7d8fed3e] {
            color: #909090;
            font-family: PingFang SC;
            font-size: 0.26rem;
            font-style: normal;
            font-weight: 400;
            line-height: 0.4rem;
            /* 161.538% */
        }

        .valMob .iconpic[data-v-7d8fed3e] {
            margin-right: 0.24rem;
            height: 0.48rem;
        }
    </style>
    <script charset="utf-8" src="/js1746822786498/49.67b0a16b.1746822786498.chunk.js?v=1746822786498"></script>
    <style type="text/css">
        .item[data-v-5b5b10cc] {
            margin-top: .2rem;
            padding-bottom: .1rem;
        }

        h2[data-v-5b5b10cc] {
            font-size: .3rem;
            font-weight: 600;
            color: #fff;
            line-height: .42rem;
            margin-bottom: .1rem;
        }

        .p[data-v-5b5b10cc] {
            line-height: .44rem;
        }

        [data-v-5b5b10cc] .p {
            color: #000;
        }

        [data-v-5b5b10cc] .p img {
            width: 100% !important;
            height: auto !important;
        }

        .video_ul li[data-v-5b5b10cc] {
            margin-bottom: .92rem;
            padding: .32rem .28rem .28rem;
            background: url({{asset ('star/terms/static/img/partnerbg.9e4c14b7.png')}}) center no-repeat;
            background-size: 100% 100%;
        }

        .video_ul .title[data-v-5b5b10cc] {
            color: #fff;
            margin-bottom: .26rem;
        }

        .video_ul .videos[data-v-5b5b10cc] {
            background: #000;
        }

        .video_ul .videos video[data-v-5b5b10cc] {
            width: 100%;
        }

        [data-v-5b5b10cc] .headers {
            background: #fff;
            background-size: 100% auto;
        }
    </style>
</head>

<body __processed_45a1e1de-c144-4026-9a7f-7c194fe791c6__="true"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMiIsInNjb3JlIjoyMDAyMn1d"
    class="mein_cn">
    <div class="page-loading-con" id="loaderInit" bis_skin_checked="1" style="display: none;">
        <div class="page-loading" bis_skin_checked="1">
            <div class="loader-outter" bis_skin_checked="1"></div>
            <div class="loader-inner" bis_skin_checked="1"></div>
        </div>
    </div>
    <div id="app" class="applang" bis_skin_checked="1">
        <div data-v-37526a6c="" data-v-5b5b10cc="" class="page" bis_skin_checked="1">
            <div data-v-37526a6c="" class="headers" bis_skin_checked="1">
                <div data-v-0ff1fb10="" data-v-5b5b10cc="" class="head on" data-v-37526a6c="" bis_skin_checked="1">
                    <div data-v-0ff1fb10="" class="container flex" bis_skin_checked="1">
                        <div data-v-0ff1fb10="" class="back" bis_skin_checked="1" onclick="window.location.href='{{route ('profile')}}'"><img data-v-0ff1fb10="" src="{{asset ('star/rc/static/img/ico_back.ceeff0ae.png')}}" alt="">
                        </div>
                        <!---->
                        <div data-v-0ff1fb10="" class="name tac" bis_skin_checked="1"> Stanford operating rules </div>
                        <div data-v-0ff1fb10="" class="flex1" bis_skin_checked="1"></div>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                    </div>
                    <div data-v-0ff1fb10="" bis_skin_checked="1">
                        <!---->
                    </div>
                </div>
            </div>
            <div data-v-37526a6c="" id="scroll" class="content-container" bis_skin_checked="1"
                style="padding-top: 50px;">
                <div data-v-37526a6c="" id="content" class="content-scroll" bis_skin_checked="1">
                    <div data-v-5b5b10cc="" data-v-37526a6c="" class="container" bis_skin_checked="1">
                        <div data-v-5b5b10cc="" data-v-37526a6c="" class="item" bis_skin_checked="1">
                            <h2 data-v-5b5b10cc="" data-v-37526a6c="" style="display: none;">Stanford operating rules
                            </h2>
                            <div data-v-5b5b10cc="" data-v-37526a6c="" class="p" bis_skin_checked="1">
                                <p>Stanford operating rules </p>

                                <p>&nbsp;</p>

                                <p>Strategic Trading Interval: Execute grid trading strategies within the policy
                                    interval. </p>

                                <p>&nbsp;</p>

                                <p>Grid division: divide trading intervals into multiple strategy level rooms</p>

                                <p>&nbsp;</p>

                                <p>Buy and Sell Orders: Buy and Sell Orders at each strategy level will be calculated
                                    within 24 hours</p>

                                <p>&nbsp;</p>

                                <p>Automatic execution: Since grid trading strategies require frequent execution of
                                    transactions at different price levels, automated trading tools or robots are
                                    usually executed to improve efficiency and reduce errors in manual operations. </p>

                                <p>&nbsp;</p>

                                <p>Risk Management: Set stop loss and take profit points to control potential losses and
                                    lock in profits</p>
                            </div>
                        </div>
                        <div data-v-5b5b10cc="" data-v-37526a6c="" class="video rel"
                            style="margin-top: 0.2rem; display: none;" bis_skin_checked="1">
                            <ul data-v-5b5b10cc="" data-v-37526a6c="" class="video_ul"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
        <div data-v-4f4d919c="" class="fullScreen_bg" bis_skin_checked="1"></div>
        <div data-v-24a16d5c="" class="global-loading default" style="display: none;" bis_skin_checked="1">
            <div data-v-24a16d5c="" class="global-spinner" bis_skin_checked="1"><img data-v-24a16d5c="" src="data:image/png;base64,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" alt="">
            </div>
        </div>
        <div data-v-2cac872d="" class="page-loading-con" style="display: none;" bis_skin_checked="1">
            <div data-v-2cac872d="" class="page-loading" bis_skin_checked="1">
                <div data-v-2cac872d="" class="loader-outter" bis_skin_checked="1"></div>
                <div data-v-2cac872d="" class="loader-inner" bis_skin_checked="1"></div>
            </div>
            <p data-v-2cac872d="">Loading...</p>
        </div>
    </div>

    <!---->
    <div class="van-toast van-toast--middle van-toast--text" bis_skin_checked="1" style="z-index: 2004; display: none;">
        <div class="van-toast__text" bis_skin_checked="1">Copy successfully</div>
    </div>
</body>
@include('partials.preloader')
</html>