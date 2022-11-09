@extends('template.nav&footer')

@section('head')
<title>活動快訊 - {{ $news_detail->news_title }}</title>
<link rel="stylesheet" href="{{ asset('css/nav&footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/news-detail.css') }}">
@endsection

@section('main')
<div class="page-area">
  <div class="page"><a href="./index.html">首頁</a>&emsp;/&emsp;活動快訊</div>
</div>
<div class="hr-head">
  <p>&nbsp;活&nbsp;動&nbsp;快&nbsp;訊&nbsp;</p>
</div>
<div class="news-container">
  <div class="news-header">
    <div class="title">{{ $news_detail->news_title }}</div>
    <div class="subtitle">{{ $news_detail->start_date }} - {{ $news_detail->end_date }}</div>
  </div>
  <div class="news-banner">
    <img class="img-pc" src="{{ $news_detail->news_img_pc }}">
    <img class="img-phone" src="{{ $news_detail->news_img_phone }}">
  </div>
  <ul class="news-content">
    <li class="new-text-content">
      {!! $news_detail->news_content !!}
    </li>
  </ul>
</div>
@endsection

@section('scripts')

@endsection