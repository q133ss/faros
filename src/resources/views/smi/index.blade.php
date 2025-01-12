<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>СМИ</title>
    <script src="/js/modernizr-custom.js"></script>
    <link rel="stylesheet" href="/css/styles.min.css?v=53">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    @include('inc.seo')
</head>
<body class="">
<style>
    @keyframes light {
        0% {
            transform: rotateZ(4deg) translate(-0.5%, 0);
        }
        100% {
            transform: rotateZ(-4deg) translate(0.5%, 0);
        }
    }

    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        z-index: 100;
        overflow: hidden;
    }

    .preloader__wrap {
        position: relative;
        width: 15rem;
        height: 15rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .preloader__img {
        display: block;
        width: 15rem;
        height: 13.6rem;
        position: relative;
        z-index: 1;
    }

    .preloader__svg {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: right top;
    }

    .preloader-light {
        transform-origin: center;
        animation: light 3s ease-in-out alternate-reverse infinite;
    }

    .preloader__grid {
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    ._colorBlack a {
        color: #1a1a1a;
        text-decoration: none;
        transition: 0.5s;
    }

    ._colorBlack a:hover {
        opacity: 0.5;
        transition: 0.5s;
    }

    form.res-message {
        font-size: 48px;
        text-align: center;
    }

    #map {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }
</style>
<div class="preloader" id="preloader">
    <!-- <div class="preloader__wrap">
        <img src="/images/min/preloader.svg" alt="" class="preloader__img">
        <img src="/images/min/grid.svg" alt="" class="preloader__grid">
    </div> -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 729 655" class="preloader__svg">
        <style type="text/css">
            .st0 {
                clip-path: url(/);
            }

            .st1 {
                fill: #EBEBEB;
            }

            .st2 {
                fill: #FAFAFA;
            }

            .st3 {
                fill: #F0F0F0;
            }

            .st4 {
                fill: #F5F5F5;
            }

            .st5 {
                fill: #AF6BCA;
            }

            .st6 {
                fill: #A0BDFF;
            }

            .st7 {
                opacity: 0.3;
                enable-background: new;
            }

            .st8 {
                opacity: 0.1;
                fill: #FFFFFF;
                enable-background: new;
            }

            .st9 {
                opacity: 0.1;
                enable-background: new;
            }

            .st10 {
                opacity: 0.2;
                enable-background: new;
            }

            .st11 {
                fill: #FECE2F;
            }

            .st12 {
                opacity: 0.4;
                fill: #FECE2F;
                enable-background: new;
            }

            .st13 {
                opacity: 0.5;
                fill: #FFFFFF;
                enable-background: new;
            }

            .st14 {
                opacity: 0.1;
                fill: #407BFF;
                enable-background: new;
            }
        </style>
        <g>
            <g>
                <defs>
                    <rect id="SVGID_1_" x="-252.6" width="1185.3" height="655"/>
                </defs>
                <clipPath id="SVGID_2_">
                    <use xlink:href="#SVGID_1_" style="overflow:visible;"/>
                </clipPath>
                <g class="st0">
                    <polyline class="st1" points="729,573.3 729,573.7 0,573.7 			"/>
                    <rect x="633.2" y="601.5" class="st1" width="58.1" height="0.4"/>
                    <rect x="372" y="587.9" class="st1" width="48" height="0.4"/>
                    <rect x="597.8" y="585.2" class="st1" width="33.7" height="0.4"/>
                    <polyline class="st1" points="0,588.1 24.3,588.1 24.3,588.5 			"/>
                    <rect x="39.9" y="588.1" class="st1" width="56.8" height="0.4"/>
                    <rect x="191.2" y="595.5" class="st1" width="105.9" height="0.4"/>
                    <path class="st2" d="M493.7,51.9c-6.9-2.2-13.1-6.4-17.6-12.1c-4.6-5.6-7.3-12.5-8-19.7s0.8-14.4,4.3-20.8
                        c-5.9,1.6-11.3,4.7-15.8,8.9c-4.4,4.2-7.7,9.5-9.6,15.3s-2.3,12-1.2,18s3.7,11.6,7.6,16.4c3.8,4.8,8.8,8.5,14.5,10.9
                        s11.8,3.3,18,2.8c6.1-0.6,12-2.6,17.2-6c5.1-3.4,9.3-7.9,12.3-13.3C508.1,54.3,500.6,54.1,493.7,51.9z"/>
                    <path class="st3" d="M145.9,283.5c-4.2-8.5-12.4-14.5-20.8-14.5c-2.4,0-4.8,0.5-7,1.6s-4.1,2.7-5.5,4.6c-2.6-2.2-5.8-3.4-9.2-3.5
                        c-5.7,0-9.9,4.1-10.9,9.9c-2.6-1.3-5.5-2-8.4-2.2c-5.7-0.2-10.2,2.1-12.6,5.9c-1.1-0.6-2.3-1-3.5-1.1c-0.7-0.1-1.4,0-2.1,0.2
                        s-1.3,0.6-1.7,1.2c-0.5,0.5-0.8,1.1-1,1.8s-0.2,1.4,0,2.1c0,0.2,0.1,0.4,0.1,0.6H156C156.2,287,150,283.6,145.9,283.5z"/>
                    <path class="st2" d="M304.7,201.5c-5.7-11.4-16.9-19.5-28.3-19.5c-3.3,0-6.6,0.7-9.5,2.1c-3,1.5-5.5,3.6-7.5,6.2
                        c-3.5-2.9-7.9-4.6-12.5-4.7c-7.8,0-13.5,5.5-14.9,13.2c-3.6-1.7-7.5-2.7-11.5-2.9c-7.8-0.4-13.9,2.8-17.1,7.9
                        c-1.5-0.9-3.1-1.4-4.8-1.5c-4.5-0.2-7.4,3-6.5,7.1c0.1,0.3,0.1,0.5,0.2,0.8h126.2C318.8,206.2,310.3,201.7,304.7,201.5z"/>
                    <path class="st3" d="M640.6,334.4c-2.4-1.8-5.2-2.9-8.2-3.3h-0.9c-2.8-3.5-6.4-5.6-9.7-5.6c-1.1,0-2.2,0.3-3.2,0.8
                        s-1.8,1.3-2.4,2.3c-5.2-6.7-11.8-11-18.1-11c-2.4,0-4.7,0.7-6.6,2c-2,1.3-3.5,3.2-4.4,5.4c-2.5-2.5-5.8-4-9.3-4.2
                        c-5.5,0-8.9,4.9-8.9,11.7c-2.6-1.5-5.4-2.4-8.4-2.6c-2.4-0.3-4.8,0.3-6.8,1.6s-3.5,3.2-4.3,5.4c-1-0.7-2.2-1.2-3.5-1.3
                        c-3-0.2-4.7,2.3-3.9,5.7h104.2C645,338.5,643,336.2,640.6,334.4z"/>
                    <path class="st3" d="M185.2,382.3c-2.4-1.8-5.2-2.9-8.2-3.3h-0.9c-2.8-3.5-6.4-5.6-9.7-5.6c-1.1,0-2.2,0.3-3.2,0.8
                        s-1.8,1.3-2.4,2.3c-5.2-6.7-11.8-11-18.1-11c-2.4,0-4.7,0.7-6.6,2c-2,1.3-3.5,3.2-4.4,5.4c-2.5-2.5-5.8-4-9.3-4.2
                        c-5.5,0-8.9,4.9-8.9,11.7c-2.6-1.5-5.4-2.4-8.4-2.6c-2.4-0.3-4.8,0.3-6.8,1.6s-3.5,3.2-4.3,5.4c-1-0.7-2.2-1.2-3.5-1.3
                        c-3-0.2-4.7,2.3-3.9,5.7h104.2C189.5,386.4,187.6,384,185.2,382.3z"/>
                    <path class="st4" d="M495.6,262.2c-3.9-2.9-8.5-4.8-13.3-5.5c-0.5,0-1-0.1-1.5-0.1c-4.7-5.7-10.5-9.3-16-9.3
                        c-1.8,0-3.7,0.4-5.3,1.3c-1.6,0.9-3,2.2-3.9,3.8c-8.5-11-19.5-18.2-29.8-18.2c-8.3,0-14.6,4.6-18.1,12.3c-4.8-4.3-10.2-7-15.3-7
                        c-9,0-14.6,8-14.7,19.3c-4.2-2.5-9-4-13.8-4.3c-9.1-0.5-15.6,4.1-18.3,11.6c-1.7-1.2-3.7-2-5.8-2.2c-4.9-0.3-7.7,3.9-6.5,9.4H505
                        C502.7,268.9,499.5,265.1,495.6,262.2z"/>
                    <path class="st4" d="M340.7,612.7c-187.8,0-340.1,8.9-340.1,19.8c0,11,152.3,19.8,340.1,19.8s340.1-8.9,340.1-19.8
                        S528.5,612.7,340.7,612.7z"/>
                    <path class="st5"
                          d="M450.8,564.1c-71.6-3.6-132.2,33.9-132.2,68.5h259.6C565.6,607.9,513.9,567.3,450.8,564.1z"/>
                    <path class="st6" d="M450.8,564c-3.2-0.2-6.4-0.2-9.6-0.2c-67.4,0-122.6,35.7-122.6,68.7h259.6
                        C565.6,607.9,513.9,567.2,450.8,564z"/>
                    <path class="st5" d="M123.3,523.2l-13.3,66c-0.1,0.4-0.1,0.9,0,1.3c0.1,0.4,0.3,0.8,0.6,1.1c0.3,0.3,0.6,0.6,1,0.8
                        s0.8,0.3,1.2,0.3h21c0.4,0,0.9-0.1,1.3-0.3s0.7-0.5,1-0.8s0.5-0.7,0.6-1.2c0.1-0.4,0.1-0.9,0-1.3L123.3,523.2z"/>
                    <path class="st7" d="M123.3,523.2l-13.3,66c-0.1,0.4-0.1,0.9,0,1.3c0.1,0.4,0.3,0.8,0.6,1.1c0.3,0.3,0.6,0.6,1,0.8
                        s0.8,0.3,1.2,0.3h21c0.4,0,0.9-0.1,1.3-0.3s0.7-0.5,1-0.8s0.5-0.7,0.6-1.2c0.1-0.4,0.1-0.9,0-1.3L123.3,523.2z"/>
                    <path class="st5" d="M142.2,495.7l-18.6,92.1c-0.1,0.6-0.1,1.2,0,1.8s0.4,1.1,0.8,1.6s0.8,0.8,1.4,1.1c0.5,0.3,1.1,0.4,1.7,0.4
                        h29.3c0.6,0,1.2-0.1,1.7-0.4c0.5-0.3,1-0.6,1.4-1.1s0.6-1,0.8-1.6c0.1-0.6,0.2-1.2,0-1.8L142.2,495.7z"/>
                    <path class="st7" d="M142.2,495.7l-18.6,92.1c-0.1,0.6-0.1,1.2,0,1.8s0.4,1.1,0.8,1.6s0.8,0.8,1.4,1.1c0.5,0.3,1.1,0.4,1.7,0.4
                        h29.3c0.6,0,1.2-0.1,1.7-0.4c0.5-0.3,1-0.6,1.4-1.1s0.6-1,0.8-1.6c0.1-0.6,0.2-1.2,0-1.8L142.2,495.7z"/>
                    <path class="st5" d="M159,506.2l-16.5,82.2c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.7,1.3,1c0.5,0.2,1,0.3,1.5,0.3h26.1
                        c0.5,0,1.1-0.1,1.5-0.3c0.5-0.2,0.9-0.6,1.3-1c0.3-0.4,0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L159,506.2z"/>
                    <path class="st7" d="M159,506.2l-16.5,82.2c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.7,1.3,1c0.5,0.2,1,0.3,1.5,0.3h26.1
                        c0.5,0,1.1-0.1,1.5-0.3c0.5-0.2,0.9-0.6,1.3-1c0.3-0.4,0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L159,506.2z"/>
                    <path class="st5" d="M231.4,506.2l-16.6,82.2c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.7,1.3,1c0.5,0.2,1,0.3,1.5,0.3h26.1
                        c0.5,0,1.1-0.1,1.5-0.3c0.5-0.2,0.9-0.6,1.3-1c0.3-0.4,0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L231.4,506.2z"/>
                    <path class="st7" d="M231.4,506.2l-16.6,82.2c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.7,1.3,1c0.5,0.2,1,0.3,1.5,0.3h26.1
                        c0.5,0,1.1-0.1,1.5-0.3c0.5-0.2,0.9-0.6,1.3-1c0.3-0.4,0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L231.4,506.2z"/>
                    <path class="st5" d="M174.3,514.4l-15,74.3c-0.1,0.5-0.1,1,0,1.4c0.1,0.5,0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3H186c0.5,0,0.9-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-0.9,0-1.4L174.3,514.4z"/>
                    <path class="st7" d="M174.3,514.4l-15,74.3c-0.1,0.5-0.1,1,0,1.4c0.1,0.5,0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3H186c0.5,0,0.9-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-0.9,0-1.4L174.3,514.4z"/>
                    <path class="st5" d="M248.7,514.4l-15,74.3c-0.1,0.5-0.1,0.9,0,1.4s0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3h23.6c0.5,0,0.9-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-0.9,0-1.4L248.7,514.4z"/>
                    <path class="st7" d="M248.7,514.4l-15,74.3c-0.1,0.5-0.1,0.9,0,1.4s0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3h23.6c0.5,0,0.9-0.1,1.4-0.3c0.4-0.2,0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-0.9,0-1.4L248.7,514.4z"/>
                    <path class="st5" d="M195.5,483.5l-20.9,103.6c-0.1,0.7-0.1,1.3,0,2c0.2,0.6,0.5,1.3,0.9,1.8s1,0.9,1.6,1.2s1.3,0.4,1.9,0.4h33
                        c0.7,0,1.3-0.1,1.9-0.4s1.1-0.7,1.6-1.2c0.4-0.5,0.7-1.1,0.9-1.8c0.2-0.6,0.2-1.3,0-2L195.5,483.5z"/>
                    <path class="st7" d="M195.5,483.5l-20.9,103.6c-0.1,0.7-0.1,1.3,0,2c0.2,0.6,0.5,1.3,0.9,1.8s1,0.9,1.6,1.2s1.3,0.4,1.9,0.4h33
                        c0.7,0,1.3-0.1,1.9-0.4s1.1-0.7,1.6-1.2c0.4-0.5,0.7-1.1,0.9-1.8c0.2-0.6,0.2-1.3,0-2L195.5,483.5z"/>
                    <path class="st5" d="M214.5,495.3l-18.6,92.5c-0.1,0.6-0.1,1.2,0,1.8s0.4,1.1,0.8,1.6c0.4,0.5,0.9,0.8,1.4,1.1s1.1,0.4,1.7,0.4
                        h29.4c0.6,0,1.2-0.1,1.7-0.4c0.5-0.3,1-0.6,1.4-1.1s0.6-1,0.8-1.6c0.1-0.6,0.2-1.2,0-1.8L214.5,495.3z"/>
                    <path class="st7" d="M214.5,495.3l-18.6,92.5c-0.1,0.6-0.1,1.2,0,1.8s0.4,1.1,0.8,1.6c0.4,0.5,0.9,0.8,1.4,1.1s1.1,0.4,1.7,0.4
                        h29.4c0.6,0,1.2-0.1,1.7-0.4c0.5-0.3,1-0.6,1.4-1.1s0.6-1,0.8-1.6c0.1-0.6,0.2-1.2,0-1.8L214.5,495.3z"/>
                    <path class="st5" d="M282.2,516.8l-15.7,71.9c-0.1,0.5-0.1,1,0,1.4c0.1,0.5,0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3h25.1c0.5,0,1-0.1,1.4-0.3s0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-1,0-1.4L282.2,516.8z"/>
                    <path class="st7" d="M282.2,516.8l-15.7,71.9c-0.1,0.5-0.1,1,0,1.4c0.1,0.5,0.3,0.9,0.6,1.3c0.3,0.4,0.7,0.7,1.1,0.9
                        c0.4,0.2,0.9,0.3,1.4,0.3h25.1c0.5,0,1-0.1,1.4-0.3s0.8-0.5,1.1-0.9s0.5-0.8,0.6-1.3s0.1-1,0-1.4L282.2,516.8z"/>
                    <path class="st5" d="M265.7,524l-14.2,65c-0.1,0.4-0.1,0.9,0,1.3c0.1,0.4,0.3,0.8,0.6,1.1s0.6,0.6,1,0.8s0.8,0.3,1.3,0.3H277
                        c0.4,0,0.9-0.1,1.3-0.3c0.4-0.2,0.7-0.5,1-0.8s0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.9,0-1.3L265.7,524z"/>
                    <path class="st7" d="M265.7,524l-14.2,65c-0.1,0.4-0.1,0.9,0,1.3c0.1,0.4,0.3,0.8,0.6,1.1s0.6,0.6,1,0.8s0.8,0.3,1.3,0.3H277
                        c0.4,0,0.9-0.1,1.3-0.3c0.4-0.2,0.7-0.5,1-0.8s0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.9,0-1.3L265.7,524z"/>
                    <path class="st5" d="M298.2,507.2l-17.6,80.9c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.8,1.2,1c0.5,0.2,1,0.4,1.6,0.4h28.2
                        c0.5,0,1.1-0.1,1.6-0.4c0.5-0.2,0.9-0.6,1.2-1s0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L298.2,507.2z"/>
                    <path class="st7" d="M298.2,507.2l-17.6,80.9c-0.1,0.5-0.1,1.1,0,1.6s0.4,1,0.7,1.4s0.8,0.8,1.2,1c0.5,0.2,1,0.4,1.6,0.4h28.2
                        c0.5,0,1.1-0.1,1.6-0.4c0.5-0.2,0.9-0.6,1.2-1s0.6-0.9,0.7-1.4c0.1-0.5,0.1-1.1,0-1.6L298.2,507.2z"/>
                    <polygon class="st5" points="277.9,234.3 253,632.6 428.4,632.6 403.5,234.3 			"/>
                    <polygon class="st8" points="253,632.6 306.1,632.6 318.6,234.3 277.9,234.3 			"/>
                    <polygon class="st9" points="362.8,234.3 375.2,632.6 428.4,632.6 403.5,234.3 			"/>
                    <polygon class="st5" points="302.7,202.6 277.9,234.3 403.5,234.3 378.6,202.6 			"/>
                    <rect x="302.7" y="180.2" class="st5" width="75.9" height="22.4"/>
                    <path class="st5" d="M381.2,135.6l-40.5-20.5l-40.5,20.5c-0.2,0.1-0.4,0.3-0.4,0.5c-0.1,0.2-0.1,0.4-0.1,0.6
                        c0.1,0.2,0.2,0.4,0.3,0.5c0.2,0.1,0.4,0.2,0.6,0.2h80.1c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.3-0.3,0.3-0.5c0.1-0.2,0-0.4-0.1-0.6
                        C381.5,135.9,381.4,135.7,381.2,135.6z"/>
                    <rect x="304" y="137.5" class="st5" width="2.5" height="40.7"/>
                    <rect x="374.9" y="137.5" class="st5" width="2.5" height="40.7"/>
                    <rect x="302.7" y="180.2" class="st10" width="75.9" height="1.9"/>
                    <rect x="301.1" y="178.3" class="st5" width="79.2" height="1.9"/>
                    <path class="st5" d="M381,199.9h-80.7c-0.7,0-1.4,0.3-1.9,0.8s-0.8,1.2-0.8,1.9s0.3,1.4,0.8,1.9s1.2,0.8,1.9,0.8H381
                        c0.7,0,1.4-0.3,1.9-0.8s0.8-1.2,0.8-1.9s-0.3-1.4-0.8-1.9S381.7,199.9,381,199.9z"/>
                    <path class="st9" d="M381,199.9h-80.7c-0.7,0-1.4,0.3-1.9,0.8s-0.8,1.2-0.8,1.9s0.3,1.4,0.8,1.9s1.2,0.8,1.9,0.8H381
                        c0.7,0,1.4-0.3,1.9-0.8s0.8-1.2,0.8-1.9s-0.3-1.4-0.8-1.9S381.7,199.9,381,199.9z"/>
                    <path class="st5" d="M410.8,334.6c-0.3-0.3-0.6-0.5-0.9-0.6c-0.3-0.1-0.7-0.2-1-0.2H272.5c-0.4,0-0.7,0.1-1,0.2
                        c-0.3,0.1-0.6,0.3-0.9,0.6c-0.3,0.3-0.5,0.6-0.6,0.9c-0.1,0.3-0.2,0.7-0.2,1c0,0.4,0.1,0.7,0.2,1c0.1,0.3,0.3,0.6,0.6,0.9
                        c0.3,0.3,0.6,0.5,0.9,0.6c0.3,0.1,0.7,0.2,1,0.2h136.3c0.7,0,1.4-0.3,1.9-0.8s0.8-1.2,0.8-1.9c0-0.4-0.1-0.7-0.2-1
                        C411.2,335.1,411,334.8,410.8,334.6z"/>
                    <path class="st5" d="M419.4,495.2c-0.3-0.3-0.6-0.5-0.9-0.6s-0.7-0.2-1-0.2H263.9c-0.4,0-0.7,0.1-1,0.2c-0.3,0.1-0.6,0.3-0.9,0.6
                        c-0.3,0.3-0.5,0.6-0.6,0.9c-0.1,0.3-0.2,0.7-0.2,1c0,0.4,0.1,0.7,0.2,1c0.1,0.3,0.3,0.6,0.6,0.9c0.3,0.3,0.6,0.5,0.9,0.6
                        c0.3,0.1,0.7,0.2,1,0.2h153.6c0.4,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.6c0.3-0.3,0.5-0.6,0.6-0.9c0.1-0.3,0.2-0.7,0.2-1
                        c0-0.4-0.1-0.7-0.2-1C419.9,495.8,419.7,495.5,419.4,495.2z"/>
                    <rect x="332.8" y="271.9" class="st11" width="15.8" height="37"/>
                    <rect x="332.8" y="432.6" class="st11" width="15.8" height="37"/>
                    <path class="st5" d="M344.5,109.1h-7.6c-2.4,0-4.4,2-4.4,4.4v3.3c0,2.4,2,4.4,4.4,4.4h7.6c2.4,0,4.4-2,4.4-4.4v-3.3
                        C348.9,111.1,346.9,109.1,344.5,109.1z"/>
                    <path class="st12" d="M347.1,142.8h-12.9c-2.2,0-4.4,0.9-6,2.5s-2.5,3.7-2.5,6v26.9h29.8v-26.9c0-2.2-0.9-4.4-2.5-6
                        C351.5,143.7,349.4,142.8,347.1,142.8z"/>
                    <path class="st5"
                          d="M220.5,564.1c-83.7,3.2-152.1,43.8-168.8,68.5h343.8C395.6,598,315.4,560.5,220.5,564.1z"/>
                    <path class="st13"
                          d="M220.5,564.1c-83.7,3.2-152.1,43.8-168.8,68.5h343.8C395.6,598,315.4,560.5,220.5,564.1z"/>
                    <path class="st5" d="M383.9,570.9l-9.2,59c-0.1,0.3,0,0.6,0.1,1c0.1,0.3,0.2,0.6,0.5,0.8c0.2,0.2,0.5,0.4,0.8,0.6
                        c0.3,0.1,0.6,0.2,0.9,0.2h14c0.3,0,0.6-0.1,0.9-0.2s0.6-0.3,0.8-0.6c0.2-0.2,0.4-0.5,0.5-0.8s0.1-0.6,0.1-1L383.9,570.9z"/>
                    <path class="st7" d="M383.9,570.9l-9.2,59c-0.1,0.3,0,0.6,0.1,1c0.1,0.3,0.2,0.6,0.5,0.8c0.2,0.2,0.5,0.4,0.8,0.6
                        c0.3,0.1,0.6,0.2,0.9,0.2h14c0.3,0,0.6-0.1,0.9-0.2s0.6-0.3,0.8-0.6c0.2-0.2,0.4-0.5,0.5-0.8s0.1-0.6,0.1-1L383.9,570.9z"/>
                    <path class="st5" d="M397,546.6L384.1,629c-0.1,0.4,0,0.9,0.1,1.3c0.1,0.4,0.3,0.8,0.6,1.2s0.7,0.6,1.1,0.8
                        c0.4,0.2,0.9,0.3,1.3,0.3h19.6c0.5,0,0.9-0.1,1.3-0.3c0.4-0.2,0.8-0.5,1.1-0.8s0.5-0.7,0.6-1.2s0.2-0.9,0.1-1.3L397,546.6z"/>
                    <path class="st7" d="M397,546.6L384.1,629c-0.1,0.4,0,0.9,0.1,1.3c0.1,0.4,0.3,0.8,0.6,1.2s0.7,0.6,1.1,0.8
                        c0.4,0.2,0.9,0.3,1.3,0.3h19.6c0.5,0,0.9-0.1,1.3-0.3c0.4-0.2,0.8-0.5,1.1-0.8s0.5-0.7,0.6-1.2s0.2-0.9,0.1-1.3L397,546.6z"/>
                    <path class="st5" d="M408.6,555.8l-11.5,73.5c-0.1,0.4,0,0.8,0.1,1.2s0.3,0.7,0.6,1.1c0.3,0.3,0.6,0.6,1,0.7s0.8,0.3,1.2,0.3
                        h17.5c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,0.9-0.7c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2L408.6,555.8z"/>
                    <path class="st7" d="M408.6,555.8l-11.5,73.5c-0.1,0.4,0,0.8,0.1,1.2s0.3,0.7,0.6,1.1c0.3,0.3,0.6,0.6,1,0.7s0.8,0.3,1.2,0.3
                        h17.5c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,0.9-0.7c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2L408.6,555.8z"/>
                    <path class="st5" d="M458.5,555.8L447,629.3c-0.1,0.4,0,0.8,0.1,1.2s0.3,0.7,0.6,1.1c0.3,0.3,0.6,0.6,1,0.7
                        c0.4,0.2,0.8,0.3,1.2,0.3h17.5c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,1-0.7c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2
                        L458.5,555.8z"/>
                    <path class="st7" d="M458.5,555.8L447,629.3c-0.1,0.4,0,0.8,0.1,1.2s0.3,0.7,0.6,1.1c0.3,0.3,0.6,0.6,1,0.7
                        c0.4,0.2,0.8,0.3,1.2,0.3h17.5c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,1-0.7c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2
                        L458.5,555.8z"/>
                    <path class="st5" d="M419.1,563.2l-10.4,66.4c-0.1,0.4,0,0.7,0.1,1.1s0.3,0.7,0.5,1c0.2,0.3,0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2H427c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0.1-1.1L419.1,563.2
                        z"/>
                    <path class="st7" d="M419.1,563.2l-10.4,66.4c-0.1,0.4,0,0.7,0.1,1.1s0.3,0.7,0.5,1c0.2,0.3,0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2H427c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0.1-1.1L419.1,563.2
                        z"/>
                    <path class="st5" d="M470.5,563.2L460,629.6c-0.1,0.4,0,0.7,0.1,1.1s0.3,0.7,0.5,1c0.2,0.3,0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2h15.8c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0.1-1.1
                        L470.5,563.2z"/>
                    <path class="st7" d="M470.5,563.2L460,629.6c-0.1,0.4,0,0.7,0.1,1.1s0.3,0.7,0.5,1c0.2,0.3,0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2h15.8c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0.1-1.1
                        L470.5,563.2z"/>
                    <path class="st5" d="M433.8,535.8l-14.5,92.8c-0.1,0.5-0.1,1,0.1,1.5c0.1,0.5,0.4,0.9,0.7,1.3s0.7,0.7,1.2,0.9
                        c0.5,0.2,1,0.3,1.5,0.3h22.1c0.5,0,1-0.1,1.5-0.3c0.5-0.2,0.9-0.5,1.2-0.9s0.6-0.8,0.7-1.3c0.1-0.5,0.2-1,0.1-1.5L433.8,535.8z"
                    />
                    <path class="st7" d="M433.8,535.8l-14.5,92.8c-0.1,0.5-0.1,1,0.1,1.5c0.1,0.5,0.4,0.9,0.7,1.3s0.7,0.7,1.2,0.9
                        c0.5,0.2,1,0.3,1.5,0.3h22.1c0.5,0,1-0.1,1.5-0.3c0.5-0.2,0.9-0.5,1.2-0.9s0.6-0.8,0.7-1.3c0.1-0.5,0.2-1,0.1-1.5L433.8,535.8z"
                    />
                    <path class="st5" d="M446.8,546.3l-13,82.7c-0.1,0.4,0,0.9,0.1,1.3c0.1,0.4,0.3,0.8,0.6,1.2c0.3,0.3,0.7,0.6,1.1,0.8
                        c0.4,0.2,0.9,0.3,1.3,0.3h19.7c0.5,0,0.9-0.1,1.3-0.3c0.4-0.2,0.8-0.5,1.1-0.8s0.5-0.8,0.6-1.2s0.2-0.9,0.1-1.3L446.8,546.3z"/>
                    <path class="st7" d="M446.8,546.3l-13,82.7c-0.1,0.4,0,0.9,0.1,1.3c0.1,0.4,0.3,0.8,0.6,1.2c0.3,0.3,0.7,0.6,1.1,0.8
                        c0.4,0.2,0.9,0.3,1.3,0.3h19.7c0.5,0,0.9-0.1,1.3-0.3c0.4-0.2,0.8-0.5,1.1-0.8s0.5-0.8,0.6-1.2s0.2-0.9,0.1-1.3L446.8,546.3z"/>
                    <path class="st5" d="M493.5,565.3l-10.9,64.3c-0.1,0.4,0,0.7,0,1.1c0.1,0.4,0.3,0.7,0.5,1s0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2h16.8c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0-1.1L493.5,565.3z
                        "/>
                    <path class="st7" d="M493.5,565.3l-10.9,64.3c-0.1,0.4,0,0.7,0,1.1c0.1,0.4,0.3,0.7,0.5,1s0.5,0.5,0.9,0.7
                        c0.3,0.2,0.7,0.2,1.1,0.2h16.8c0.4,0,0.7-0.1,1.1-0.2c0.3-0.2,0.6-0.4,0.9-0.7c0.2-0.3,0.4-0.6,0.5-1s0.1-0.7,0-1.1L493.5,565.3z
                        "/>
                    <path class="st5" d="M482.1,571.7l-9.9,58.2c-0.1,0.3,0,0.7,0,1c0.1,0.3,0.2,0.6,0.5,0.9c0.2,0.3,0.5,0.5,0.8,0.6s0.6,0.2,1,0.2
                        h15.2c0.3,0,0.7-0.1,1-0.2s0.6-0.3,0.8-0.6c0.2-0.3,0.4-0.6,0.5-0.9c0.1-0.3,0.1-0.7,0-1L482.1,571.7z"/>
                    <path class="st7" d="M482.1,571.7l-9.9,58.2c-0.1,0.3,0,0.7,0,1c0.1,0.3,0.2,0.6,0.5,0.9c0.2,0.3,0.5,0.5,0.8,0.6s0.6,0.2,1,0.2
                        h15.2c0.3,0,0.7-0.1,1-0.2s0.6-0.3,0.8-0.6c0.2-0.3,0.4-0.6,0.5-0.9c0.1-0.3,0.1-0.7,0-1L482.1,571.7z"/>
                    <path class="st5" d="M504.6,556.8l-12.3,72.4c-0.1,0.4-0.1,0.8,0.1,1.2c0.1,0.4,0.3,0.8,0.6,1.1c0.3,0.3,0.6,0.6,1,0.8
                        c0.4,0.2,0.8,0.3,1.2,0.3h19c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,1-0.8c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2
                        L504.6,556.8z"/>
                    <path class="st7" d="M504.6,556.8l-12.3,72.4c-0.1,0.4-0.1,0.8,0.1,1.2c0.1,0.4,0.3,0.8,0.6,1.1c0.3,0.3,0.6,0.6,1,0.8
                        c0.4,0.2,0.8,0.3,1.2,0.3h19c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,1-0.8c0.3-0.3,0.5-0.7,0.6-1.1c0.1-0.4,0.1-0.8,0.1-1.2
                        L504.6,556.8z"/>
                    <path class="st14 preloader-light" d="M367.6,153c-1.5,1.8-2.4,4.2-2.4,6.6c0,2.4,0.8,4.7,2.4,6.6c1.5,1.8,3.6,3.1,6,3.6L729,238.9V80.4
                        l-355.4,69.1C371.3,149.9,369.1,151.2,367.6,153z"/>
                </g>
            </g>
        </g>
    </svg>
</div>

<!--Header START-->
@include('inc.header')
@include('inc.mobmenu')
<!--Header END--><div class="hidden" id="hidden">
    <div class="wrapper" id="wrapper">
        <!--news home menu START-->
        <div class="horizMenu _bgWhite">


            <p class="bread horizMenu__menu horizMenu__menu__media">СМИ о нас</p>

            <div class="horizMenu__filter horizMenu__filter_mw">
                <img src="/images/min/icons/top_bottom.svg" alt=""
                     class="horizMenu__filter__sort horizMenu__filter__sort_abs">
                <select class="selectWrap__sel" id="sortSelMedia">
                    <option value="new">Новые</option>
                    <option value="old">Старые</option>
                    <option value="popular">По популярности</option>
                </select>
                <img src="/images/min/icons/arroworange.svg" alt=""
                     class="horizMenu__filter__arrow horizMenu__filter__arrow_abs">
            </div>
        </div>
        <!--news home menu END-->

        <div class="media">
            <div class="articlesDoubleBlock _bgGray16 scene">
                <div class="articlesDoubleBlock__content">
                    <div class="articlesDoubleBlock__content__top">
                        <!--noindex--><a  href="https://kontur.ru/articles/5138"  class="articlesDoubleBlock__content__top__logo" rel="nofollow">
                            <picture class="articlesDoubleBlock__content__top__logo__img">
                                <img src="/upload/resize_cache/webp/iblock/5cd/hdqoh5jts4q5bgjaugibwidkaa64d4z3/kontur-logo.webp">
                            </picture>
                        </a><!--/noindex-->
                    </div>
                    <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}"
                       class="articlesDoubleBlock__content__title _colorBlack">Мотивация маркетолога:<br>
                        формула и примеры расчета в таблицах</a>
                </div>

                <picture class="articlesDoubleBlock__pic parallax">
                    <img src="/upload/resize_cache/webp/iblock/e54/irdum5i0vc4wcf01fojmfpqyjurvwzqz/smi2.webp" data-depth="0.6">
                </picture>
            </div>

            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/0e9/o1dj11vkm7utf3p910duxvmg4d8mefxf/kingdom-come-back-later&#32;1.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Как салону красоты<br>продвигаться<br>в соцсетях</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://www.dirsalona.ru/article/1103-kak-salonu-krasoty-prodvigatsya-v-sotssetyah-i-kak-vybirat-ploshchadki"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/229/i25lp8td0fqw6zgzaohnuk33eck8f453/logo&#32;(2)&#32;1.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/iblock/113/600cfwqsxgc7p4t42ux7o2p3xxshmc26/ozero_seliger_8.jpg" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Продвижение мини-гостиницы <br> с нулевым маркетинговым <br>бюджетом</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://vc.ru/marketing/51333-prodvizhenie-mini-gostinicy-s-nulevym-marketingovym-byudzhetom-nu-pochti-s-nulevym"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/d02/eanwu78jsfmpz3pedlntqo2v7k95mlgc/VC-logo.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/cc7/b9sl3gfokbi08t32lzor94i3x68pmnad/Rectangle&#32;15&#32;(4).webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Специфика работы <br>
                            SMM-специалиста <br>
                            внутри компании</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://www.likeni.ru/analytics/spetsifika-raboty-smm-spetsialista-vnutri-kompanii/"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/b31/48fug75ia7tm80fmr13cn76ice2dvzwp/logo.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/25e/5pvjl3hhpp1e424xopcqnbp3lloe5qtu/Rectangle&#32;15&#32;(5).webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">«Аэрофлот» и Алешковский: разбор репутационного кейса</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://vc.ru/marketing/51675-aeroflot-i-aleshkovskiy-razbor-reputacionnogo-keysa"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/437/vg5n2z728pfoy2mv20opud4hpeoq630o/search_logo&#32;1.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <div class="articlesDoubleBlock _bgYellow">
                <div class="articlesDoubleBlock__content">
                    <div class="articlesDoubleBlock__content__top">
                        <!--noindex--><a  href="https://www.forbes.ru/forbes-woman/365373-na-vidu-kak-zhenshchine-vystroit-svoyu-reputaciyu-s-nulya"  class="articlesDoubleBlock__content__top__logo" rel="nofollow">
                            <picture class="articlesDoubleBlock__content__top__logo__img">
                                <img src="/upload/resize_cache/webp/iblock/1b0/0rte9cadg138hc0su8kcsankfvdyne40/medialogo.webp" data-depth="0.6">
                            </picture>
                        </a><!--/noindex-->

                        <div class="articlesDoubleBlock__content__top__viz">

                        </div>
                    </div>
                    <p class="articlesDoubleBlock__content__title _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">На виду: как женщине выстроить свою репутацию с нуля</a></p>
                </div>
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="articlesDoubleBlock__pic articlesDoubleBlock__pic_second">
                        <img src="/upload/iblock/9e6/sg1ards3y4oz74ky2sn4l6s6ubxn6lsq/webpc-passthru.webp" data-depth="0.6">
                    </picture>
                </a>
            </div>
            <div class="articlesDoubleBlock _bgGray16 scene">
                <div class="articlesDoubleBlock__content">
                    <div class="articlesDoubleBlock__content__top">
                        <!--noindex--><a  href="https://www.cossa.ru/trends/214956/"  class="articlesDoubleBlock__content__top__logo" rel="nofollow">
                            <picture class="articlesDoubleBlock__content__top__logo__img">
                                <img src="/upload/resize_cache/webp/iblock/649/bwbsitj2xbikmwcllxojrxxo019bqa6n/cossa_logo&#32;1.webp">
                            </picture>
                        </a><!--/noindex-->
                    </div>
                    <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}"
                       class="articlesDoubleBlock__content__title _colorBlack">Репутационный кейс. Facebook, Собянин и одна звезда в рейтинге</a>
                </div>

                <picture class="articlesDoubleBlock__pic parallax">
                    <img src="/upload/resize_cache/webp/iblock/a54/p8v0rpubszr4elnaee0xvdl5xwvs1mxf/Rectangle&#32;15&#32;(3).webp" data-depth="0.6">
                </picture>
            </div>

            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/448/2y1icgrod07qurvjy3982ljimuo1tv12/Group&#32;2.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Работа с негативом в соцсетях: кейс Zenden</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://www.likeni.ru/analytics/negativ-eto-norma-esli-ego-ne-ochen-mnogo/"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/64e/6b01dzdlqm9phyuye09ljc3j8j44zoz5/Group&#32;1098.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/229/wdb7unehp7ij1gqe86lirkdtod9xwrop/4-Sotsseti-mogut-horosho-pomoch.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Активационные механики в соцсетях: <br>
                            как одна публикация вызвала широкое обсуждение<br>
                            и попала в федеральные СМИ</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://vc.ru/marketing/33881-aktivacionnye-mehaniki-v-socsetyah-kak-odna-publikaciya-vyzvala-shirokoe-obsuzhdenie-i-popala-v-federalnye-smi?from=yandex"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="/upload/resize_cache/webp/iblock/d02/eanwu78jsfmpz3pedlntqo2v7k95mlgc/VC-logo.webp" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/dev2fun_opengraph/100/teyxw2cv0q6dwar4d7ytdw0tnlv746lk.jpg" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Как вести себя спикерам: <br />
                            нужно ли соблюдать режим тишины во время кризиса</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://www.sostav.ru/publication/faros-media-53287.html"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/dev2fun_opengraph/ecb/ys02aupgi1mzj0iirsigp29oo5t23jpf.jpg" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Куда идем мы с Пятачком:<br />
                            экономика России в условиях санкций</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://delovoymir.biz/chem-grozit-uhod-inostrannyh-kompaniy-iz-rossii-i-sankcii-dlya-malogo-i-srednego-biznesa-obzor-mneniy-ekspertov.html"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/f5c/26u2t9v41oiepstcgmbw80ywmx9pv3u5/29149.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Рынок покидают бренды: стоит ли<br />
                            бояться дефицита товаров на полках?</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://rutube.ru/video/a8a1088d8cfe8336bdbd8b55f40d0fd3/"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/8b5/ppmnqwfg9exo6oj3t56d8t1els7u3y78/4789552.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">Как выиграть в войне с черным пиаром и<br />
                            привлечь клиентов</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://kontur.ru/articles/4313"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->
            <!--1/2 height, min width, news home block START-->
            <div class="newsMiniBlock _bgWhite media__newsMiniBlock">
                <a href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">
                    <picture class="newsMiniBlock__pic">
                        <img src="/upload/resize_cache/webp/iblock/255/4idd1573dt04edfwp7wcvvqrtu6f79mv/3871751.webp" data-depth="0.6">
                    </picture>
                </a>

                <div class="newsMiniBlock__cont">

                    <p class="newsMiniBlock__cont__tit _colorBlack"><a
                            href="{{route('smi.show', 'motivatsiya-marketologa-formula-i-primery-rascheta-v-tablitsah')}}">2022-й год: подходы к репутации <br />
                            в России и на Западе</a></p>
                    <div class="grow-full"></div>

                    <!--noindex--><a  href="https://netology.ru/blog/03-2022-reputation-drivers"  class="newsMiniBlock__cont__logo" rel="nofollow">
                        <picture class="newsMiniBlock__cont__logo__pic">
                            <img src="https://faros.media/upload/iblock/d90/1awjfr02brcpmfvbcw9wlsvh4ih4va7z/%D0%9B%D0%BE%D0%B3%D0%BE_%D0%9C%D0%B5%D0%B4%D0%B8%D0%B0_%D0%9D%D0%B5%D1%82%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B8.svg" data-depth="0.6">
                        </picture>
                    </a><!--/noindex-->
                </div>
            </div>
            <!--1/2 height, min width, news home block END-->

        </div>

    </div>
</div><!--PDF POPUP-->
<div class="pdf-popap" style="display: none;" id="pdfPopUp">
    <div class="pdf-popap__close"></div>
    <div class="pdf-popap__dark">
        <div class="pdf-popap__block" id="pdfPopup">
            <embed src="/" width="100%" class="pdf-popap__embed"  />
        </div>
    </div>
</div>
<script src="/js/TweenMax.min.js"></script>
<script src="/js/ScrollMagic.js"></script>
<script src="/js/debug.addIndicators.js"></script>
<script src="/js/animation.gsap.min.js"></script>
<script src="http://api-maps.yandex.ru/2.1/?load=package.standard&amp;lang=ru_RU" type="text/javascript"></script>
<script src="/js/sticky.js"></script>
<script src="/js/scripts.min.js?v=5"></script>
<script src="/js/maskedinput.js"></script>
<script src="/js/custom.js"></script>

<!-- Zverushki\Microm --><ol data-module=zverushki_microm itemscope itemtype="http://schema.org/BreadcrumbList" style="display:none"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><meta itemprop="name" content="Главная"></a><meta itemprop="position" content="1"></li></ol><div data-module=zverushki_microm itemscope itemtype="http://schema.org/Store" style="display:none"><meta itemprop="name" content="репутационное агентство Фарос.Медиа"><div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><meta itemprop="streetAddress" content="Москва ул Рябиновая"><meta itemprop="postalCode" content="119019"><meta itemprop="addressLocality" content="Москва"><meta itemprop="addressCountry" content="RU"></div><meta itemprop="image" content="https://faros.media/images/min/logourl.svg"><meta itemprop="priceRange" content="индивидуально"></div><!-- end Zverushki\Microm --></body>
</html>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 127027390, {disableNewMessagesSound: "1",tooltipButtonText: "Есть вопрос?"});
</script>
