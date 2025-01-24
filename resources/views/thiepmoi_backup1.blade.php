<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
      <meta name="author" content="Biihappy">
      <title>Kính gửi {{$data['guest_name']}} ! - Thiệp mời đám cưới online</title>
      <meta name="description" content="Trân trọng kính mời {{$data['guest_name']}} đến tham dự buổi tiệc chung vui cùng gia đình chúng tôi!" />
      <meta name="keywords" content="Wedding, Wedding website, Website đám cưới, Đám cưới Đình Anh - Hoàng Yến" />
      <meta property="og:site_name" content="Nguyễn Đình Anh &amp; Lê Nguyễn Hoàng Yến Wedding !">
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Kính gửi {{$data['guest_name']}} ! - Thiệp mời đám cưới online" />
      <meta property="og:url" content="https://dinhanhhoangyen.iwedding.info/invitation/6735c59dd3b1c36c1000911d" />
      <meta property="og:description" content="Trân trọng kính mời {{$data['guest_name']}} đến tham dự buổi tiệc chung vui cùng gia đình chúng tôi!" />
      <meta property="og:image" content="https://cdn.biihappy.com/ziiweb/website/6735a912bd76f0d27e090616/96bd34063222860361fff09bb2356664.jpeg" />
      <meta property="og:image:url" content="https://cdn.biihappy.com/ziiweb/website/6735a912bd76f0d27e090616/96bd34063222860361fff09bb2356664.jpeg" />
      <meta property="og:image:secure_url" content="https://cdn.biihappy.com/ziiweb/website/6735a912bd76f0d27e090616/96bd34063222860361fff09bb2356664.jpeg" />
      <link rel="shortcut icon" type="image/x-icon" href="https://iwedding.info/favicon.ico">
      <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&family=MonteCarlo&family=Tourney:wght@100&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://dinhanhhoangyen.iwedding.info/invitation/style.css?v=20240323">
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>
      <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>
   </head>
   <body>
      <img src="https://cdn.biihappy.com/ziiweb/website/6735a912bd76f0d27e090616/96bd34063222860361fff09bb2356664.jpeg" style="display:none;"/>
      <div class="invitation-container">
         <div style="height: 100%;margin: 10px;">
            <canvas class="invitation-card" id="invitation-card"></canvas>
         </div>
         <div style="height: 100%;margin: 10px;">
            <canvas class="invitation-card" id="invitation-card-2"></canvas>
         </div>
      </div>
      <div id="page_loader" class="page_loader">
         <div id="loader">
            <img height="20" src="https://dinhanhhoangyen.iwedding.info/invitation/loading.svg">
         </div>
      </div>
      <div class="mouse-scroll" style="visibility:hidden;">
         <div class="text">Kéo xuống</div>
         <div class="left"></div>
         <div class="right"></div>
      </div>
      <script type="text/javascript">
         const guest_name = '{{$data['guest_name']}}';
         const event_name = '{{$data['event_name']}}';
         const event_time = '{{$data['event_time']}}';
         const event_date = '{{$data['event_date']}}';
         const event_date_dot = '{{$data['event_date_dot']}}';
         const venue_name = '{{$data['event_address']}}';
         const invitationInfo = {
         	'templateID': 'h4',
         	'groom_name': 'Nguyễn Đình Anh',
         	'bride_name': 'Lê Nguyễn Hoàng Yến',
         	'groom_name_short': 'Đình Anh',
         	'bride_name_short': 'Hoàng Yến',
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
         console.log(invitationInfo);
         const biicore = {webroot : 'https://dinhanhhoangyen.iwedding.info', coreSite: 'https://biihappy.com', webToken: '6735a912bd76f0d27e090616'};
         // const biicore = {webroot : 'http://hpwd-dinhanh.test', coreSite: 'https://biihappy.com', webToken: '6735a912bd76f0d27e090616'};
      </script>
{{--      <script type="text/javascript" src="https://dinhanhhoangyen.iwedding.info/invitation/script.js?v=20240623"></script>--}}
      <script type="text/javascript" src="{{asset('assets/frontend/js/script.js')}}"></script>
{{--      <script type="text/javascript" src="https://dinhanhhoangyen.iwedding.info/invitation/templates/h4/static.js?v=202411072"></script>--}}
      <script type="text/javascript" src="{{asset('assets/frontend/js/static.js')}}"></script>
   </body>
</html>
