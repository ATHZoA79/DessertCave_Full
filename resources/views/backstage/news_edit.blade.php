<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/backstage/news-add.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backstage/sider.css') }}">
    <title>菓洞甜點工作室-新增消息</title>
</head>

<body>

    <main>
        <div id="sider">
            <img src="{{ asset('img/logo-bg-white.png') }}">
            <ul>
                <li>首頁 ></li>
                <li><a href="{{ route('banner') }}">banner</a> </li>
                <li><a href="{{ route('new_product') }}">新品上市</a></li>
            </ul>
            <ul>
                <li>活動快訊 ></li>
                <li><a href="{{ route('back_news') }}">列表頁</a> </li>
                <li><a href="{{ route('add_news') }}">新增消息</a></li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="log-out">登出後台</button>
                </form>
            </ul>
        </div>
        <div id="container">
            <div id="page_title">
                <span>首頁</span> / <span> 新增消息</span>
            </div>
            <form id="content" action="/admin/news/update/{{ $news->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="content-left">
                    <li>日期<span>*</span></li>
                    <div class="input_date">
                        <input type="date" name="start_date" value="{!! $news->start_date !!}">
                        <span>~</span>
                        <input type="date" name="end_date" value="{{ $news->end_date }}">
                    </div>
                    <li>標題<span>*</span></li>
                    <input type="text" name="news_title" value="{{ $news->news_title }}">
                    <li>內文</li>
                    <textarea cols="30" rows="10" name="news_content">{{ str_replace('<br />','', $news->news_content) }}</textarea>
                </div>
                <div class="content-right">
                    <li>上傳列表圖 <span>*</span></li>
                    <div id="web">
                        <img src="{{ '/storage/'.$news->news_img_pc }}" alt="當前電腦版圖片" class="box">
                        <label class="input-file">
                            <input type="file" name="news_img_pc" id="webinput_area">
                            <span>瀏覽</span>
                        </label>
                        <p class="web-input-file-name"></p>
                    </div>
                    <li>！網頁版建議尺寸為 535x402 px</li>
                    <div id="phone">
                        <img src="{{ '/storage/'.$news->news_img_phone }}" alt="當前手機板圖片" class="box">
                        <label class="input-file">
                            <input type="file" name="news_img_phone" id="phoneinput_area">
                            <span>瀏覽</span>
                        </label>
                        <p class="phone-input-file-name"></p>
                    </div>
                    <li>！手機版建議尺寸為 350x270 px</li>
                    <button type="submit">上傳</button>
                </div>
            </form>
        </div>
    </main>

    <script>
        const webInputArea = document.getElementById('webinput_area');
        const phoneInputArea = document.getElementById('phoneinput_area');

        const webFileName = document.querySelector('.web-input-file-name');
        const phoneFileName = document.querySelector('.phone-input-file-name');

        webInputArea.addEventListener('change', function () {
            var files = webInputArea.files[0].name;
            webFileName.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });
        phoneInputArea.addEventListener('change', function () {
            var files = phoneInputArea.files[0].name;
            phoneFileName.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });


        $(document).ready(function () {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'underline']],
                    ['font', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'paragraph']],
                    ['insert', ['link', 'picture']],
                ]
            });
        });
    </script>
</body>

</html>