<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 共通CSS -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,regular,500,700,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:100,300,regular,500,700,900" rel="stylesheet" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
    integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
    crossorigin='anonymous' />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="icon" type="image/x-icon" href="./img/logo-bg-white.png">

  <!--  Page Setting -->
  @yield('head')
</head>

<body>
  @yield('plug_in')
  <header class="nav-bar">
    <nav>
      <a href="{{ route('index') }}">
        <div id="nav-logo" class="nav-logo"></div>
      </a>
      <div class="nav-btns">
        <a href="{{ route('news') }}" class="nav-style nav-btn1">活動快訊</a>
        <a href="{{ route('product') }}" class="nav-style nav-btn2">產品介紹</a>
        <a href="{{ route('about_us') }}" class="nav-style nav-btn3">品牌故事</a>
      </div>
      <div class="social-media-area">
        <a href="https://www.facebook.com/dessertcave0725/" target="_blank" id="facebook" class="social-style"></a>
        <a href="https://www.instagram.com/dessertcave_taichung/?utm_medium=copy_link" target="_blank" id="instagram"
          class="social-style"></a>
      </div>
    </nav>
    <input id="ham_icon" type="checkbox" hidden>
    <label for="ham_icon" class="ham-icon">
      <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 25.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
        y="0px" viewBox="0 0 170.1 170.1" style="enable-background:new 0 0 170.1 170.1;" xml:space="preserve">
        <g>
          <g>
            <line class="st0" x1="36.9" y1="44.3" x2="133.2" y2="44.3" />
            <line class="st0" x1="36.9" y1="86" x2="133.2" y2="86" />
            <line class="st0" x1="85" y1="127.8" x2="133.2" y2="127.8" />
          </g>
        </g>
        <rect x="260.2" y="-26.9" class="st1" width="41.1" height="41.1" />
      </svg>
    </label>
    <div id="toggle_menu">
      <div class="wrap">
        <div class="toggle-menu-content">
          <a href="{{ route('index') }}">
						<img src="{{ asset('img/logo-bg-white.png') }}" alt="">
					</a>
          <div class="nav-links">
            <a href="{{ route('news') }}">活動快訊</a>
            <a href="{{ route('product') }}">產品介紹</a>
            <a href="{{ route('about_us') }}">品牌故事</a>
          </div>
          <div class="follow-us">Follow us</div>
          <div class="ssn">
            <a href="https://www.facebook.com/dessertcave0725/" target="_blank">
							<i class="facebook fa-brands fa-facebook"></i>
						</a>
						<a href="https://www.instagram.com/dessertcave_taichung/?utm_medium=copy_link" target="_blank">
							<i class="instagram fa-brands fa-instagram"></i>
						</a>
          </div>
        </div>
        <label for="ham_icon" class="close-icon">
          <i class="fa-solid fa-xmark"></i>
        </label>
      </div>
    </div>
  </header>

  <main>
    @yield('main')
  </main>

  <footer>
    <div class="footer-box">
      <div class="information">
        <ul class="information_box">
          <li class="footer-title"><img src="{{ asset('img/logo-white.png')}}" alt=""></li>
          <ul class="text">
            <li class="open-time">
              <i class="fa-regular fa-clock"></i>營業時間：14:00~19:00 / 週二公休
            </li>
            <li class="phone">
              <i class="fa-solid fa-phone"></i>
              連絡電話：(09)58-792-622
            </li>
            <li class="address">
              <span><i class="fa-solid fa-location-dot"></i>
                地址：</span> 406台中市北屯區中清路二段675號
            </li>
            <li>
              <i class="fa-solid fa-location-dot"></i>
              <a href="https://goo.gl/maps/UedJ8vudftVtVXbB7">google map</a>
            </li>
          </ul>
        </ul>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6289181786256!2d120.66221005079632!3d24.184743577884394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917ccaa821ba1%3A0x9b258333d403eedb!2z6I-T5rSe55Sc6bue5bel5L2c5a6kLeazleW8j-WhlOmhnuOAgeS5s-mFquibi-ezleWkluW4tuW6lw!5e0!3m2!1szh-TW!2stw!4v1666022627521!5m2!1szh-TW!2stw"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="copy-right">
      Copyright © 2022 菓洞甜點工作室 | 網站設計 ˙ 80 Sprint
    </div>

  </footer>

  @yield('scripts')

</body>


</html>