<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/backstage/new-product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backstage/sider.css') }}">
    <title>菓洞甜點工作室-新品上市</title>
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
                <span>首頁</span> / <span> 新品上市</span>
            </div>
            <form id="content" action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content-top">
                    <li>新品名稱 <span>*</span></li>
                    <input type="text" name="product_name">
                    <li>內文 <span>*</span></li>
                    <li>! 建議行數在4行內</li>
                    <textarea name="product_intro" cols="30" rows="10"></textarea>
                    <li>網址 <span>*</span></li>
                    <input type="text" name="product_link">
                </div>
                <div class="content-down">
                    <div class="img-area">
                        <img id="web" src="{{ '/storage/'.$product->product_img_pc }}" alt="">
                        <label class="input-file">
                            <input type="file" name="product_img_pc" id="webinput_area">
                            <span>瀏覽</span>
                        </label>
                        <p class="web-input-file-name"></p>
                        <img id="phone" src="{{ '/storage/'.$product->product_img_phone }}" alt="">
                        <label class="input-file">
                            <input type="file" name="product_img_phone" id="phoneinput_area">
                            <span>瀏覽</span>
                        </label>
                        <p class="phone-input-file-name"></p>
                    </div>
                    <div class="text-area">
                        <li>！網頁版建議尺寸為 1034x624 px</li>
                        <li>！手機版建議尺寸為 430x451 px</li>
                        <button type="submit">上傳</button>
                    </div>
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
    </script>
</body>

</html>