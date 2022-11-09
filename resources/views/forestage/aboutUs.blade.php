@extends('template.nav&footer')

@section('head')
<title>品牌故事</title>
<link rel="stylesheet" href="./css/nav&footer.css">
<link rel="stylesheet" href="./css/about.css">
<link rel="stylesheet" href="./css/toTop.css">
@endsection

@section('main')
<div class="page-area">
  <div class="page"><a href="./index.html">首頁</a>&emsp;/&emsp;品牌故事</div>
</div>
<div class="hr-head">
  <p>&nbsp;品&nbsp;牌&nbsp;故&nbsp;事&nbsp;</p>
</div>

<div class="logo-area">
  <ul class="logo">
    <li class="logo-img"><img src="./img/logo-green.png" class="logo-img"></li>
    <ul class="logo-text">
      <li>這裡是一個空間</li>
      <li>一個屬於家的空間</li>
      <li>充滿著甜蜜的幸福滋味</li>
      <li>讓菓洞帶你一起回味那樣的甜蜜</li>
    </ul>
  </ul>
</div>

<div class="banner-area">
  <img src="./img/store.jpg">
</div>

<div class="slogan-area">
  <ul class="slogan-text">
    <p>
      <span>菓</span>,&nbsp;代表新鮮的水果及食材<br>
    </p>
    <p>
      <span>洞</span>,&nbsp;是我們的棲身之所:&ensp;&nbsp;<span>家</span>
    </p>
  </ul>
  <div class="slogan-oval1">
    <div class="slogan-oval2">
    </div>
  </div>
</div>

<div class="history-area">
  <div class="cordon-area">
    <div class="cordon-story">
      <ul>
        <li>菓洞的初衷</li>
        <li>Sean 從自學啟程，踏上前往藍帶的旅程；</li>
        <li>雖身處他鄉，但秉直著夢想的信念，</li>
        <li>從日本的藍帶分校畢業後，成功轉職為甜點師。</li>
        <li>因身邊有許多不宜吃糖的長輩，</li>
        <li>以糖分降至最低為目標，打造低糖的完美甜點，</li>
        <li>創造出屬於"菓洞"的一片天！</li>
      </ul>
    </div>
    <div class="vl"></div>
    <div class="cordon-graduate"><img src="./img/藍帶畢業證書-截圖.jpg"></div>
  </div>
  <div class="brand-area">
    <div class="brand-picture"><img src="./img/about_us_2.png" alt=""></div>
    <div class="vl"></div>
    <div class="brand-story">
      <ul>
        <li>菓洞源起</li>
        <li>2017-10 / 開啟自家的工作室</li>
        <li>2018-09 / 自家工作室 正式開幕</li>
        <li>2019-10 / 前往日本東京藍帶學院進修</li>
        <li>2020-04 / 結業，返回台灣</li>
        <li>2021-04 / 工作室店面開幕式</li>
      </ul>
    </div>
  </div>
</div>
<a href="#" id="back_to_top">
  <i class="fa-solid fa-angle-up"></i>
</a>
@endsection

@section('scripts')
<script src="./js/toTop.js"></script>
@endsection