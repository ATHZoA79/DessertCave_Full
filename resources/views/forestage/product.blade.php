@extends('template.nav&footer')

@section('head')
<title>產品列表</title>
<link rel="stylesheet" href="./css/nav&footer.css">
<link rel="stylesheet" href="./css/product.css">
<link rel="stylesheet" href="./css/toTop.css">
@endsection

@section('plug_in')
<!-- Messenger 洽談外掛程式 Code -->
<div id="fb-root"></div>

<!-- Your 洽談外掛程式 code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "2015504092014554");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v15.0'
      });
    };

    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@endsection

@section('main')
<div class="page-area">
  <div class="page"><a href="./index.html">首頁</a>&emsp;/&emsp;產品列表</div>
</div>
<div class="hr-head">
  <p>&nbsp;產&nbsp;品&nbsp;介&nbsp;紹&nbsp;</p>
</div>
<div class="product-sheet-area">

  <a href="#product-card-area" class="product-series">甜蜜巧克力</a>
  <a href="#product-card-area" class="product-series">綜合堅果</a>
  <a href="#product-card-area" class="product-series">濃郁抹茶</a>
  <a href="#product-card-area" class="product-series">菓洞鮮果</a>
  <a href="#product-card-area" class="product-series">常溫蛋糕</a>
  <a href="#product-card-area" class="product-series">其他商品</a>
</div>


<div class="product-card-area">
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/chocolate/fafna2.png" data-product="fafna2" alt="">
    </div>
    <div class="product-name">
      <h3>橙香法芙娜生巧塔</h3>
    </div>
  </div>
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/sesame.png" data-product="sesame" alt="">
    </div>
    <div class="product-name">
      <h3>Sesame Sesame</h3>
    </div>
  </div>
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/furit/grapelemon.png" data-product="grapelemon" alt="">
    </div>
    <div class="product-name">
      <h3>綠葡萄檸檬乳酪</h3>
    </div>
  </div>
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/furit/lemon3.png" data-product="lemon3" alt="">
    </div>
    <div class="product-name">
      <h3>義式奶油檸檬塔</h3>
    </div>
  </div>
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/nut/honeydrupe.png" data-product="honeydrupe" alt="">
    </div>
    <div class="product-name">
      <h3>蜂蜜太妃核果塔</h3>
    </div>
  </div>
  <div class="product-card">
    <div class="img-container">
      <img src="./img/product/chocolate/hazelnut.png" data-product="hazelnut" alt="">
    </div>
    <div class="product-name">
      <h3>焦糖榛果生巧克力塔</h3>
    </div>
  </div>
</div>

<div class="product-detail-area">
  <div class="product-detail-opacity"></div>
  <div class="product-detail-card-container">
    <div class="product-detail-card">
      <div class="product-detail-close"><i class="bi bi-x-lg"></i></div>
      <div class="product-detail-img"><img src="" alt=""></div>
      <div class="product-detail-text">文字
        <div class="product-detail-name"></div>
        <div class="product-detail-content"></div>
      </div>
    </div>
  </div>
</div>
<a href="#" id="back_to_top">
  <i class="fa-solid fa-angle-up"></i>
</a>
@endsection

@section('scripts')
<script src="./js/product.js"></script>
<script src="./js/toTop.js"></script>
@endsection