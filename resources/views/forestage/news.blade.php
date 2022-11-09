@extends('template.nav&footer')

@section('head')
<title>活動快訊</title>
<link rel="stylesheet" href="{{asset('css/nav&footer.css')}}">
<link rel="stylesheet" href="{{asset('css/news.css')}}">
<link rel="stylesheet" href="{{asset('css/toTop.css')}}">
@endsection

@section('main')
<div class="page-area">
  <div class="page"><a href="./index.html">首頁</a>&emsp;/&emsp;活動快訊</div>
</div>
<div class="hr-head">
  <p>&nbsp;活&nbsp;動&nbsp;快&nbsp;訊&nbsp;</p>
</div>
<div class="news-container">
  @foreach ($news as $key => $item)
  <div class="news-card">
    <div class="news-info">
      <div class="news-date">{{ $news_date[$key] }}</div>
      <div class="news-text">
        <div class="news-text-title">{{ $item->news_title }}</div>
        <ul class="new-text-content">
          <li>
            {!! $item->news_content !!}
          </li>
        </ul>
      </div>
      <ul class="news-date-duration-box">
        <li class="news-date-duration">{{ $item->start_date }} - {{ $item->end_date }}</li>
        <li class="news-btn-area">
          <a href="news_detail/{{$item->id}}"><span>&rarr;</span>
        </li>
        </a>
      </ul>
    </div>
    <div class="news-img">
      <img class="img-pc" src="{{ $item->news_img_pc }}">
      <img class="img-phone" src="{{ $item->news_img_phone }}">
      <ul class="news-img-date">{{ $news_date[$key] }}</ul>
    </div>
  </div>
  @endforeach
</div>
<a href="#" id="back_to_top">
  <i class="fa-solid fa-angle-up"></i>
</a>
@endsection

@section('scripts')
<script src="./js/toTop.js"></script>
@endsection