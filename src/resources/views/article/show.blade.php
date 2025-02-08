<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-uii">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/modernizr-custom.js"></script>
    <link rel="stylesheet" href="/css/styles.min.css?v=55">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    @include('inc.seo', ['post' => $post])
</head>
<body class="_bgLightGray">
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

        <div class="authorWrap authorWrap_footer">
            <div class="authorWrap__left">
                <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="/" title="Главная" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="0">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="{{route('articles.index')}}" title="Статьи" itemprop="item">
                            <span itemprop="name">Статьи</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a title="{{$post->post_name}}" itemprop="item">
                            <span itemprop="name">{{$post->post_name}}</span>
                            <meta itemprop="position" content="2">

                        </a>
                    </li>
                </ul>
                <div class="sinpleHeaderTitle sticker">
                    <div class="sinpleHeader">
                        <div class="sinpleHeader__bread">
                            <a href="{{route('team.show', $post->author?->slug)}}"
                               class="sinpleHeader__bread__link">{{$post->author?->name}}</a>
                            @if($post->category_id)
                                <a href="{{route('articles.index')}}?category={{$post->category_id}}" class="sinpleHeader__bread__tag">{{$post->category?->name}}</a>
                            @endif
                        </div>
                    </div>
                    <h1 class="sinpleHeaderTitle">{{$post->post_name}}</h1>
                </div>


                <div class="sinpleHeader__data">
                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/calendar_gray.svg" alt="" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->created_at?->format('d.m.Y')}}</p>
                    </div>

                    <div class="sinpleHeader__data__item">
                        <img src="/images/min/icons/eye_gray.svg" alt="" class="sinpleHeader__data__item__ico">
                        <p class="sinpleHeader__data__item__text">{{$post->views}} просмотров</p>
                    </div>
                    <div class="sinpleHeader__data__item sinpleHeader__data__item_headerTags">
                        @foreach($post->tags as $tag)
                        <a href="{{route('articles.index')}}?tag={{$tag->id}}"
                           class="sinpleHeader__data__item__tag">#{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

                <picture class="authorWrap__left__banner authorWrap__left__banner_articles">
                    <img src="{{$post->img}}" alt="{{$post->post_name}}" title="Как загубить лояльность маркетинговыми активностями">
                </picture>

                <div class="author1 blog">
                    <p class="author1__partName"></p>

                    <div class="author1__partCont">{!! $post->pre_title !!}</div>

                    <div class="author1__partName author1__partName_contents">
                        <div class="author1__partName_contents__button" id="contentButton">
                            <img src="/images/min/icons/slickprev.svg" alt=""
                                 class="author1__partName_contents__button__arrow">
                            <span>Содержание статьи</span>
                        </div>
                    </div>

                    <div class="author1__partCont author1__partCont_contents">
                        <div class="author1__partCont__dataWrap top-content" id="content">
                            <ul>

                            </ul>
                        </div>
                    </div>

                    <div class="author1__partName author1__partName_center">
                        <div class="author1__partName__persent">
                        </div>
                    </div>

                    <div class="author1__partCont">
                        {!! $post->content !!}
                    </div>

                </div>

                <div class="blogBG blogBG_mtBig blogBG_nomb"></div>


                <div class="pageAuthor">
                    <div class="pageAuthor__left">
                        <picture class="pageAuthor__left__pic">
                            <a href="{{route('team.show', $post->author?->slug)}}">
                                <img src="{{$post->author?->img}}" alt="{{$post->author?->name}}" title="{{$post->author?->name}}">
                            </a>
                        </picture>

                        <div class="pageAuthor__left__data">
                            <a href="{{route('team.show', $post->author?->slug)}}"
                               class="pageAuthor__left__name">{{$post->author?->name}}</a>
                            <p class="pageAuthor__left__post">{{$post->author?->list_post}}</p>
                        </div>
                    </div>


                    <div class="pageAuthor__right">
                        <button class="pageAuthor__right__top" id="scrolltotop">
                            <img class="pageAuthor__right__top__ico" src="/images/min/icons/top.svg">
                            <span class="pageAuthor__right__top__text">Наверх</span>
                        </button>

                        <div class="subscribeWrap">
                            <button class="subscribe" type="button" id="toggleSoc">
                                <img src="/images/min/icons/shareblog.svg" alt="" class="subscribe__ico">
                                <span class="subscribe__text">Поделиться статьей</span>
                            </button>

                            <div class="subscribeWrap__soc" id="social">
                                <!--noindex--><a  href="http://vk.com/share.php?url=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/&title=Как"  загубить лояльность маркетинговыми активностями&image=https://faros.media/upload/iblock/043/80k2o2kijoqou5jqac1h2a9w6dd5yvd7/webpc-passthru.webp"
                                                  target="_blank " class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M14.9363 9.771C14.6453 9.4035 14.7285 9.24 14.9363 8.9115C14.94 8.90775 17.3422 5.58825 17.5897 4.4625L17.5912 4.46175C17.7143 4.0515 17.5913 3.75 16.9965 3.75H15.0285C14.5275 3.75 14.2965 4.00875 14.1727 4.29825C14.1727 4.29825 13.1707 6.69675 11.7533 8.2515C11.2957 8.70075 11.0843 8.84475 10.8345 8.84475C10.7115 8.84475 10.5203 8.70075 10.5203 8.2905V4.46175C10.5203 3.96975 10.38 3.75 9.96525 3.75H6.87075C6.5565 3.75 6.36975 3.9795 6.36975 4.19325C6.36975 4.65975 7.0785 4.767 7.152 6.0795V8.92725C7.152 9.55125 7.03875 9.666 6.7875 9.666C6.1185 9.666 4.49475 7.25775 3.5325 4.5015C3.33825 3.96675 3.1485 3.75075 2.64375 3.75075H0.675C0.11325 3.75075 0 4.0095 0 4.299C0 4.8105 0.669 7.35375 3.111 10.7138C4.7385 13.0073 7.0305 14.25 9.1155 14.25C10.3688 14.25 10.5218 13.974 10.5218 13.4993C10.5218 11.3078 10.4085 11.1008 11.0363 11.1008C11.3273 11.1008 11.8282 11.2448 12.9982 12.351C14.3355 13.6628 14.5553 14.25 15.3038 14.25H17.2717C17.8328 14.25 18.117 13.974 17.9535 13.4295C17.5793 12.2843 15.0503 9.9285 14.9363 9.771Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://www.facebook.com/sharer/sharer.php?u=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/"
                                                  target="_blank" class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3936 18V9.78996H13.1482L13.5615 6.58941H10.3936V4.54632C10.3936 3.61998 10.6498 2.98869 11.9796 2.98869L13.673 2.98799V0.125307C13.3802 0.0872508 12.3749 0 11.2049 0C8.76181 0 7.08919 1.49127 7.08919 4.22934V6.58941H4.32617V9.78996H7.08919V18H10.3936Z"
                                              fill="white"/>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://www.instagram.com/farosmedia/"  target="_blank"
                                                  class="subscribeWrap__soc__link" rel="nofollow">
                                    <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path class="st0" d="M9.1,17.7c-0.1,0-0.1,0-0.2,0c-1.4,0-2.6,0-3.8-0.1C4,17.5,3,17.1,2.2,16.4c-0.8-0.6-1.3-1.5-1.6-2.6
                                    c-0.2-0.9-0.2-1.8-0.3-2.7c0-0.6,0-1.4,0-2.1c0-0.8,0-1.5,0-2.1c0-0.9,0-1.8,0.3-2.7c0.3-1.1,0.8-1.9,1.6-2.6C3,1,4,0.6,5.1,0.5
                                    C6.4,0.5,7.6,0.4,9,0.4c1.4,0,2.6,0,3.8,0.1c1.1,0.1,2.1,0.5,2.9,1.1c0.8,0.6,1.3,1.5,1.6,2.6c0.2,0.9,0.2,1.8,0.3,2.7
                                    c0,0.6,0,1.4,0,2.1v0c0,0.8,0,1.5,0,2.1c0,0.9,0,1.8-0.3,2.7c-0.3,1.1-0.8,1.9-1.6,2.6c-0.8,0.7-1.8,1-2.9,1.1
                                    C11.6,17.6,10.4,17.7,9.1,17.7z M9,16.3c1.3,0,2.5,0,3.7-0.1c0.8-0.1,1.6-0.3,2.2-0.8c0.6-0.5,0.9-1.1,1.1-1.8
                                    c0.2-0.8,0.2-1.6,0.2-2.4c0-0.6,0-1.4,0-2.1c0-0.8,0-1.5,0-2.1c0-0.8,0-1.6-0.2-2.4c-0.2-0.8-0.6-1.4-1.1-1.8
                                    c-0.6-0.5-1.3-0.8-2.2-0.8C11.5,1.8,10.3,1.8,9,1.8c-1.3,0-2.5,0-3.7,0.1C4.4,1.9,3.7,2.2,3.1,2.7C2.5,3.1,2.1,3.8,1.9,4.5
                                    C1.7,5.3,1.7,6.1,1.7,6.9c0,0.6,0,1.4,0,2.1c0,0.7,0,1.5,0,2.1c0,0.8,0,1.6,0.2,2.4c0.2,0.8,0.6,1.4,1.1,1.8
                                    c0.6,0.5,1.3,0.8,2.2,0.8C6.4,16.3,7.6,16.3,9,16.3z M8.9,13.2c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2
                                    c2.3,0,4.2,1.9,4.2,4.2C13.1,11.4,11.2,13.2,8.9,13.2z M8.9,6.2C7.3,6.2,6.1,7.5,6.1,9c0,1.6,1.3,2.9,2.9,2.9
                                    c1.6,0,2.9-1.3,2.9-2.9C11.8,7.5,10.5,6.2,8.9,6.2z M13.6,3.5c-0.6,0-1,0.5-1,1c0,0.6,0.5,1,1,1c0.6,0,1-0.5,1-1
                                    C14.6,3.9,14.2,3.5,13.6,3.5z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a><!--/noindex-->
                                <!--noindex--><a  href="https://t.me/share/url?url=https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/&text=Как"  загубить лояльность маркетинговыми активностями"
                                target="_blank" class="subscribeWrap__soc__link" rel="nofollow">
                                <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M7.06288 11.3861L6.76513 15.5741C7.19113 15.5741 7.37563 15.3911 7.59688 15.1713L9.59413 13.2626L13.7326 16.2933C14.4916 16.7163 15.0264 16.4936 15.2311 15.5951L17.9476 2.86605L17.9484 2.8653C18.1891 1.7433 17.5426 1.30455 16.8031 1.5798L0.835633 7.69306C-0.254117 8.11606 -0.237617 8.72356 0.650383 8.99881L4.73263 10.2686L14.2149 4.3353C14.6611 4.0398 15.0669 4.2033 14.7331 4.4988L7.06288 11.3861Z"
                                              fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                </a><!--/noindex-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="blogBG blogBG_nomt"></div>

                <div class="simpleSliderWrap">
                    <p class="simpleSliderWrap__tit">Читать далее</p>

                    <div class="simpleSlider" id="simpleSlider">
                        @foreach($relation as $rpost)
                        <a href="{{route('articles.show', $rpost->slug)}}" class="simpleSlider__slide">
                            <div class="simpleSlider__slide__picWrap">
                                <picture class="simpleSlider__slide__picWrap__pic">
                                    <img src="{{$rpost->list_img}}">
                                </picture>
                            </div>
                            <p class="simpleSlider__slide__text">{{$rpost->list_name}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="vidgets">
                @include('inc.articles')
            </div>
            <!--full height, contacts home block START-->
            <div class="contacts contacts__vertical">
                <div class="contacts__data">
                    <div class="grow-full"></div>

                    <div class="contacts__data__logoWrap">
                        <img src="/images/min/logourl.svg" class="contacts__data__logoWrap__logo"/>
                    </div>
                    <p class="contacts__data__adress">
                        Бизнес-центр «West plaza», г. Москва, ул.Рябиновая, д. 26, стр. 10
                    </p>
                    <div class="contacts__data__items">
                        <div class="contacts__data__items__part">
                            <a href="mailto:info@faros.media" class="contacts__data__items__part__contact">info@faros.media</a>
                            <p class="contacts__data__items__part__descr">
                                По всем вопросам пишите нам
                            </p>
                        </div>
                        <div class="contacts__data__items__part">
                            <a href="tel:88006008613" class="contacts__data__items__part__contact">8 800 600 86 13</a>
                            <p class="contacts__data__items__part__descr">
                                Звонок по РФ бесплатен
                            </p>
                        </div>
                    </div>
                    <br>        <div id="coordinates" style="display: none">55.69451, 37.422584</div>
                    <div class="grow-full"></div>

                    <div class="contacts__data__links">
                        <div class="contacts__data__links__nav">
                            <a href="/team/" class="contacts__data__links__nav__link">Команда</a>
                            <a href="/service/" class="contacts__data__links__nav__link">Услуги</a>
                            <a href="/case/" class="contacts__data__links__nav__link">Кейсы</a>
                        </div>

                        <div class="contacts__data__links__soc">
                            <!--noindex--><a  href="https://vk.com/faros.media"  class="contacts__data__links__soc__link" rel="nofollow">
                                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M31.915 25.028C31.527 24.538 31.638 24.32 31.915 23.882C31.92 23.877 35.123 19.451 35.453 17.95L35.455 17.949C35.619 17.402 35.455 17 34.662 17H32.038C31.37 17 31.062 17.345 30.897 17.731C30.897 17.731 29.561 20.929 27.671 23.002C27.061 23.601 26.779 23.793 26.446 23.793C26.282 23.793 26.027 23.601 26.027 23.054V17.949C26.027 17.293 25.84 17 25.287 17H21.161C20.742 17 20.493 17.306 20.493 17.591C20.493 18.213 21.438 18.356 21.536 20.106V23.903C21.536 24.735 21.385 24.888 21.05 24.888C20.158 24.888 17.993 21.677 16.71 18.002C16.451 17.289 16.198 17.001 15.525 17.001H12.9C12.151 17.001 12 17.346 12 17.732C12 18.414 12.892 21.805 16.148 26.285C18.318 29.343 21.374 31 24.154 31C25.825 31 26.029 30.632 26.029 29.999C26.029 27.077 25.878 26.801 26.715 26.801C27.103 26.801 27.771 26.993 29.331 28.468C31.114 30.217 31.407 31 32.405 31H35.029C35.777 31 36.156 30.632 35.938 29.906C35.439 28.379 32.067 25.238 31.915 25.028Z" fill="#1A1A1A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a><!--/noindex-->
                            <!--noindex--><a  href="https://t.me/Farosmedia"  class="contacts__data__links__soc__link" rel="nofollow">
                                <svg viewBox="0 0 48 48" class="contacts__data__links__soc__link__img">
                                    <circle cx="24" cy="24" r="23.5" stroke="#EAEAEA" fill="rgba(26,26,26, 0)"/>
                                    <g clip-path="url(#clip0)">
                                        <path d="M21.4172 27.181L21.0202 32.765C21.5882 32.765 21.8342 32.521 22.1292 32.228L24.7922 29.683L30.3102 33.724C31.3222 34.288 32.0352 33.991 32.3082 32.793L35.9302 15.821L35.9312 15.82C36.2522 14.324 35.3902 13.739 34.4042 14.106L13.1142 22.257C11.6612 22.821 11.6832 23.631 12.8672 23.998L18.3102 25.691L30.9532 17.78C31.5482 17.386 32.0892 17.604 31.6442 17.998L21.4172 27.181Z" fill="#1A1A1A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a><!--/noindex-->
                        </div>
                    </div>

                    <p class="contacts__data__copyrigth">© 2025 FAROS MEDIA. Все права защищены.</p>
                </div>

                <div class="contacts__map">
                    <div class="contacts__map__pic" id="map"></div>
                </div>
            </div>
            <!--full height, contacts home block END-->

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
<script src="//api-maps.yandex.ru/2.1/?load=package.standard&lang=ru_RU" type="text/javascript"></script>
<script src="/js/sticky.js"></script>
<script src="/js/scripts.min.js?v=62"></script>
<script src="/js/maskedinput.js"></script>
<script src="/js/custom.js"></script>

<!-- Zverushki\Microm --><ol data-module=zverushki_microm itemscope itemtype="http://schema.org/BreadcrumbList" style="display:none"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><meta itemprop="name" content="Главная"></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../"><meta itemprop="name" content="Материалы"></a><meta itemprop="position" content="2"></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../"><meta itemprop="name" content="МАРКЕТИНГ"></a><meta itemprop="position" content="3"></li></ol><div data-module=zverushki_microm itemscope itemtype="http://schema.org/Store" style="display:none"><meta itemprop="name" content="репутационное агентство Фарос.Медиа"><div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><meta itemprop="streetAddress" content="Москва ул Рябиновая"><meta itemprop="postalCode" content="119019"><meta itemprop="addressLocality" content="Москва"><meta itemprop="addressCountry" content="RU"></div><meta itemprop="image" content="https://faros.media/images/min/logourl.svg"><meta itemprop="priceRange" content="индивидуально"></div><div data-module=zverushki_microm itemscope itemtype="http://schema.org/Article" style="display:none"><meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://faros.media/articles/kak-zagubit-loyalnost-marketingovymi-aktivnostyami/"><meta itemprop="headline" content="Как загубить лояльность маркетинговыми активностями"><div itemprop="author" itemscope itemtype="https://schema.org/Person"><meta itemprop="name" content="32"></div><div itemprop="image" itemscope itemtype="https://schema.org/ImageObject"><link itemprop="contentUrl" href="https://faros.media/upload/iblock/043/80k2o2kijoqou5jqac1h2a9w6dd5yvd7/webpc-passthru.webp"><link itemprop="url" href="https://faros.media/upload/iblock/043/80k2o2kijoqou5jqac1h2a9w6dd5yvd7/webpc-passthru.webp"><meta itemprop="width" content="1920px"><meta itemprop="height" content="1440px"></div><div itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><link itemprop="contentUrl" href="https://faros.media/images/min/logourl.svg"><link itemprop="url" href="https://faros.media/images/min/logourl.svg"><meta itemprop="width" content="px"><meta itemprop="height" content="px"></div><div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><meta itemprop="streetAddress" content="Москва ул Рябиновая"><meta itemprop="postalCode" content="119019"><meta itemprop="addressLocality" content="Москва"><meta itemprop="addressCountry" content="RU"></div><meta itemprop="name" content="репутационное агентство Фарос.Медиа"></div><meta itemprop="datePublished" content="2021-10-20T10:55:19+03:00"><meta itemprop="dateModified" content="2023-08-21T14:16:30+03:00"><meta itemprop="description" content="Как загубить лояльность маркетинговыми активностями "></div><!-- end Zverushki\Microm --></body>
</html>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 127027390, {disableNewMessagesSound: "1",tooltipButtonText: "Есть вопрос?"});
</script>
