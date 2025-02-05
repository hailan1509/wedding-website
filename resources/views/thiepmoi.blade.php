
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="author" content="Biihappy">
    <title>Kính gửi {{$data['guest_name']}} ! - Thiệp mời đám cưới online</title>
    <meta name="description" content="Trân trọng kính mời {{$data['guest_name']}} đến tham dự buổi tiệc chung vui cùng gia đình chúng tôi!" />
    <meta name="keywords" content="Wedding, Wedding website, Website đám cưới, Tạo website đám cưới miễn phí" />
    <meta property="og:site_name" content="Đinh Hải &amp; Cù Lan Wedding site!">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Thân gửi {{$data['guest_name']}} ! - Thiệp mời đám cưới online" />
    <meta property="og:url" content="https://truongtrangwd.iwedding.info/invitation/65211658aebe1d079803e9d2" />
    <meta property="og:description" content="Trân trọng kính mời {{$data['guest_name']}} đến tham dự buổi tiệc chung vui cùng gia đình chúng tôi!" />
    <meta property="og:image" content="{{ asset('assets/frontend/image/anh-cuoi/anh-doi.jpg') }}" />
    <meta property="og:image:url" content="{{ asset('assets/frontend/image/anh-cuoi/anh-doi.jpg') }}" />
    <meta property="og:image:secure_url" content="{{ asset('assets/frontend/image/anh-cuoi/anh-doi.jpg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="https://iwedding.info/favicon.ico"><link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&family=MonteCarlo&family=Tourney:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://truongtrangwd.iwedding.info/invitation/style.css?v=20241227">
    <link href="https://fonts.googleapis.com/css2?family=Coiny&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
    <link rel="stylesheet" href="https://truongtrangwd.iwedding.info/common/sweetalert2/sweetalert2.min.css?v=20241201">
    <script src="https://truongtrangwd.iwedding.info/common/sweetalert2/sweetalert2.all.min.js?v=20241201"></script>
    <link rel="stylesheet" href="https://truongtrangwd.iwedding.info/common/tourguidejs/tour.min.css?v=20241201">
    <script src="https://truongtrangwd.iwedding.info/common/tourguidejs/tour.js?v=20241201"></script>
    <script type="text/javascript" src="https://truongtrangwd.iwedding.info/invitation/script.js?v=202412132"></script>
</head>
<body>
<style>
    .modal-backdrop {z-index: 100010 !important;}
    .modal{z-index: 100011 !important;}
    .modal-dialog {padding: 1rem !important;}
    .tg-backdrop-animate {cursor: pointer;}
    .tg-backdrop.rounded-pill {border-radius: 50px !important;}
    .tg-backdrop {
        -moz-box-shadow: rgba(33, 33, 33, .8) 0 0 1px 2px, rgba(33, 33, 33, .8) 0 0 0 200vh;
        -webkit-box-shadow: rgba(33, 33, 33, .8) 0 0 1px 2px, rgba(33, 33, 33, .8) 0 0 0 200vh;
        box-shadow: rgba(33, 33, 33, .8) 0 0 1px 2px, rgba(33, 33, 33, .8) 0 0 0 200vh;
    }
    .tg-dialog .tg-dialog-header .tg-dialog-title {text-transform: uppercase;}
    .tg-dialog .tg-dialog-header {align-items: start;}
    .tg-dialog .tg-dialog-footer button.tg-dialog-btn {padding: 5px 10px;border: 2px solid #212529;color: #fff;border-radius: 4px;font-weight: 500;font-size: .82rem;white-space: nowrap;background: #212529;min-width: 100px;}
    .tg-dialog .tg-dialog-footer button.tg-dialog-btn:hover {color: #fff;border: 2px solid #383b40;outline: none;box-shadow: none;background: #383b40;}
    div:where(.swal2-container) div:where(.swal2-popup) {max-width: 90%;}
    body.swal2-height-auto {height: 100% !important;}
</style>
<style>
    .page_loader2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #fae1dd;
        z-index: 100013;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .invitation-preload-container {
        position: relative;
    }

    .invitation-valentines {
        position: relative;
        top: 50px;
        cursor: pointer;
        animation: up 3s linear infinite;
    }

    @keyframes up {
        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    .invitation-preload-envelope {
        position: relative;
        width: 300px;
        height: 200px;
        background-color: #f08080;
    }

    .invitation-preload-envelope:before {
        background-color: #f08080;
        content: "";
        position: absolute;
        width: 212px;
        height: 212px;
        transform: rotate(45deg);
        top: -105px;
        left: 44px;
        border-radius: 30px 0 0 0;
    }

    .invitation-preload-card {
        position: absolute;
        background-color: #eae2b7;
        width: 270px;
        height: 170px;
        top: 5px;
        left: 15px;
        box-shadow: -5px -5px 100px rgba(0, 0, 0, 0.4);
    }

    .invitation-preload-card:before {
        content: "";
        position: absolute;
        border: 2px solid #003049;
        border-style: double;
        width: 240px;
        height: 140px;
        left: 12px;
        top: 12px;
    }

    .invitation-text span {
        font-family: "Coiny";
    }
    .invitation-text {
        position: absolute;
        font-family: "Roboto";
        font-size: 19px;
        text-align: center;
        line-height: 25px;
        top: 23px;
        color: #003049;
        padding: 0 6px;
        width: 240px;
        left: 12px;
        font-weight:100;
    }

    .invitation-preload-heart {
        height: 30px;
        margin: 0 10px;
        position: relative;
        top: 110px;
        left: 105px;
        width: 30px;
    }

    .invitation-hearts {
        position: absolute;
    }

    .invitation-one,
    .invitation-two,
    .invitation-three,
    .invitation-four,
    .invitation-five {
        background-color: red;
        display: inline-block;
        height: 10px;
        margin: 0 10px;
        position: relative;
        transform: rotate(-45deg);
        width: 10px;
        top: 50px;
    }

    .invitation-one:before,
    .invitation-one:after,
    .invitation-two:before,
    .invitation-two:after,
    .invitation-three:before,
    .invitation-three:after,
    .invitation-four:before,
    .invitation-four:after,
    .invitation-five:before,
    .invitation-five:after {
        content: "";
        background-color: red;
        border-radius: 50%;
        height: 10px;
        position: absolute;
        width: 10px;
    }

    .invitation-one:before,
    .invitation-two:before,
    .invitation-three:before,
    .invitation-four:before,
    .invitation-five:before {
        top: -5px;
        left: 0;
    }

    .invitation-one:after,
    .invitation-two:after,
    .invitation-three:after,
    .invitation-four:after,
    .invitation-five:after {
        left: 5px;
        top: 0;
    }

    .invitation-one {
        left: 10px;
        animation: heart 1s ease-out infinite;
    }

    .invitation-two {
        left: 30px;
        animation: heart 2s ease-out infinite;
    }

    .invitation-three {
        left: 50px;
        animation: heart 1.5s ease-out infinite;
    }

    .invitation-four {
        left: 70px;
        animation: heart 2.3s ease-out infinite;
    }

    .invitation-five {
        left: 90px;
        animation: heart 1.7s ease-out infinite;
    }

    @keyframes heart {
        0% {
            transform: translateY(0) rotate(-45deg) scale(0.3);
            opacity: 1;
        }

        100% {
            transform: translateY(-150px) rotate(-45deg) scale(1.3);
            opacity: 0.5;
        }
    }

    .invitation-front {
        position: absolute;
        border-right: 180px solid #f4978e;
        border-top: 95px solid transparent;
        border-bottom: 100px solid transparent;
        left: 120px;
        top: 5px;
        width: 0;
        height: 0;
        z-index: 10;
    }

    .invitation-front:before {
        position: absolute;
        content: "";
        border-left: 300px solid #f8ad9d;
        border-top: 195px solid transparent;
        left: -120px;
        top: -95px;
        width: 0;
        height: 0;
    }

    .invitation-front img.logo {
        width: 115px;
        position: absolute;
        left: -95px;
        top: 50px;
    }

    .invitation-shadow {
        position: absolute;
        width: 330px;
        height: 25px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.3);
        top: 265px;
        left: -15px;
        animation: scale 3s linear infinite;
        z-index: -1;
    }

    @keyframes scale {
        0%,
        100% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(0.85);
        }
    }
    .wedding-image {
        width: auto !important;
        height: auto !important;
        max-height: fit-content;
    }

    .loading {
        z-index: 9999999;
    }
    .loading-page {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #fff;
        top: 0;
        left: 0;
        z-index: 9999999;
    }
    .loading-page {
        background: #0d0d0d;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .loading-page .counter {
        text-align: center;
    }
    .loading-page .counter p {
        font-size: 40px;
        font-weight: 100;
        color: #f60d54;
        margin-bottom: 0;
    }
    .loading-page .counter h1 {
        color: white;
        font-size: 60px;
        font-weight: 500;
        margin-top: -15px;
        margin-bottom: -10px;
    }
    .loading-page .counter hr {
        background: #f60d54;
        border: none;
        height: 1px;
    }
    .loading-page .counter {
        position: relative;
        width: 300px;
    }
    .loading-page .counter h1.abs {
        position: absolute;
        top: 0;
        width: 100%;
    }
    .loading-page .counter .color {
        width: 0px;
        overflow: hidden;
        color: #f60d54;
    }
</style>
<img src="https://cdn.biihappy.com/ziiweb/website/65203311c4a03f7aa5055074/e62d3e33e3c8cbe31d0d6a5eb8e32799.jpeg" style="display:none;"/>
<div class="invitation-container">
    <div style="height: 100%;margin: 10px;">
        <canvas class="invitation-card" id="invitation-card"></canvas>
    </div>
    <div style="height: 100%;margin: 10px;">
        <canvas class="invitation-card" id="invitation-card-2"></canvas>
    </div>
</div>
<div id="page_loader2" class="page_loader2">
    <div class="invitation-preload-container">
        <div class="invitation-valentines">
            <div class="invitation-preload-envelope"></div>
            <div class="invitation-front"></div>
            <div class="invitation-preload-card">
                <div class="invitation-text">
                    <p style="margin-bottom: 5px;">Kính gửi: <span>{{$data['guest_name']}}</span></p>
                    <p style="margin-bottom: 5px;font-size: 15px;">( Nhấn vào để mở thiệp )</p>
                </div>
                <div class="invitation-preload-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#de7676" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                </div>
                <div class="invitation-hearts">
                    <div class="invitation-one"></div>
                    <div class="invitation-two"></div>
                    <div class="invitation-three"></div>
                    <div class="invitation-four"></div>
                    <div class="invitation-five"></div>
                </div>
            </div>
            <div class="invitation-shadow"></div>
        </div>
    </div>
</div>
<div class="loading-page">
    <div class="counter">
        <p>Đang tải thiệp</p>
        <h1>0%</h1>
        <hr style="width: 0%;">
    </div>
</div>
<div class="mouse-scroll" style="visibility:hidden;">
    <div class="text">Kéo xuống</div>
    <div class="left"></div>
    <div class="right"></div>
</div>
<script type="text/javascript" src="https://truongtrangwd.iwedding.info/invitation/templates/h4/static.js?v=20240623"></script>
<script>
    $(document).ready(function () {

        var loadingInterval = null;
        var loadingCounter = 0;
        var loadingC = 0;
        loadingInterval = setInterval(function(){
            $(".loading-page .counter h1").html(loadingC + "%");
            $(".loading-page .counter hr").css("width", loadingC + "%");
            loadingCounter++;
            loadingC++;
            if(loadingCounter == 96) {
                clearInterval(loadingInterval);
            }
        }, 100);
        preLoader();

        async function preLoader () {
            await sleep(1000);
            clearInterval(loadingInterval);
            $(".loading-page .counter h1").html(100 + "%");
            $(".loading-page .counter hr").css("width", 100 + "%");
            setTimeout(function(){
                $(".loading-page").hide();
            },400);
            setTimeout(function(){
                $('.invitation-preload-card').stop().animate({
                    top: '-90px'
                }, 'slow');
            },800);
            checkShowScrollMouseButton();
        }

        if ($('.invitation-preload-container').length) {
            $('.invitation-preload-container').mouseenter(function() {
                $('.invitation-preload-card').stop().animate({
                    top: '-90px'
                }, 'slow');
            }).mouseleave(function() {
                $('.invitation-preload-card').stop().animate({
                    top: 0
                }, 'slow');
            });

            $('.invitation-preload-container').click(function() {
                $('#page_loader2').fadeOut('slow');
                setTimeout(() => {
                    $('.footer').show();
                }, 300);
                setTimeout(function() {
                    if(isShowIntroModal) {
                        tourGuideColor.start();
                    }
                },2000);
            });
        }
    });

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
</script>
<script type="text/javascript">
    const guest_name = '{{$data['guest_name']}}';
    const event_name = '{{$data['event_name']}}';
    const event_time = '{{$data['event_time']}}';
    const event_date = '{{$data['event_date']}}';
    const event_date_dot = '{{$data['event_date_dot']}}';
    const venue_name = '{{$data['event_address']}}';
    const invitationInfo = {
        'templateID': 'h4',
        'groom_name': 'Đinh Văn Hải',
        'bride_name': 'Cù Thị Lan',
        'groom_name_short': 'Đinh Hải',
        'bride_name_short': 'Cù Lan',
        'groom_name_one': 'A',
        'bride_name_one': 'Y',
        'guest_name': guest_name,
        'event_name': event_name,
        'event_time': event_time,
        'event_date': event_date,
        'event_date_dot': event_date_dot,
        'venue_name': venue_name,
        'event_address': '',
    };
    const biicore = {webroot : 'https://truongtrangwd.iwedding.info', coreSite: 'https://biihappy.com', webToken: '65203311c4a03f7aa5055074'};
</script>
<script>
    const tourGuideColor = new tourguide.TourGuideClient({
        exitOnEscape: true,
        exitOnClickOutside: true,
        dialogZ: 2000,
        backdropColor: false,
        autoScroll: false,
        showStepDots: true,
        showButtons: true,
        showStepProgress: true,
        hideNext: false,
        hidePrev: false,
        autoScrollSmooth: false,
        targetPadding: 10,
        backdropClass: 'rounded-pill',
        targetPadding: 10,
        prevLabel: '< Trở về',
        nextLabel: 'Xem tiếp >',
        finishLabel: 'Đã hiểu',
    });
</script>
</body>
</html>
