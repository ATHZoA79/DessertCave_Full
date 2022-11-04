<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/backstage/banner.css') }}">
    <title>菓洞甜點工作室-banner</title>
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
                <span>首頁</span> / <span> banner</span>
            </div>
            <div id="swiper_tag">
                <div id="swiper_tag1">swiper 1</div>
                <div id="swiper_tag2">swiper 2</div>
            </div>
            <form id="content" action="banner/store" method="POST" enctype="multipart/form-data">
                @csrf
                <li>！網頁版建議尺寸為 1920x800 px</li>
                <div id="web">
                    <div class="web-box1"><img src="{{ '/storage/'.$banner->banner_img1_pc}}" alt=""></div>
                    <div class="web-box2"><img src="{{ '/storage/'.$banner->banner_img2_pc}}" alt=""></div>
                    <label class="web-input-file1">
                        <input type="file" name="banner_img1_pc" accept="image/*" id="webinput1_area"
                            multiple="multiple">
                        <span>瀏覽</span>
                    </label>
                    <p class="web-input-file1-name"></p>
                    <label class="web-input-file2">
                        <input type="file" name="banner_img2_pc" accept="image/*" id="webinput2_area"
                            multiple="multiple">
                        <span>瀏覽</span>
                    </label>
                    <p class="web-input-file2-name"></p>

                </div>
                <li>！手機版建議尺寸為 720x815 px</li>
                <div id="phone">
                    <div class="phone-box1"><img src="{{ '/storage/'.$banner->banner_img1_phone }}" alt=""></div>
                    <div class="phone-box2"><img src="{{ '/storage/'.$banner->banner_img2_phone }}" alt=""></div>
                    <label class="phone-input-file1">
                        <input type="file" name="banner_img1_phone" accept="image/*" id="phoneinput1_area"
                            multiple="multiple">
                        <span>瀏覽</span>
                    </label>
                    <p class="phone-input-file1-name"></p>
                    <label class="phone-input-file2">
                        <input type="file" name="banner_img2_phone" accept="image/*" id="phoneinput2_area"
                            multiple="multiple">
                        <span>瀏覽</span>
                    </label>
                    <p class="phone-input-file2-name"></p>
                    <button type="submit">上傳</button>
                </div>
            </form>
        </div>
    </main>

    <script>
        const swiperTag1 = document.getElementById('swiper_tag1');
        const swiperTag2 = document.getElementById('swiper_tag2');

        const webInput1 = document.querySelector('.web-input-file1');
        const webInput2 = document.querySelector('.web-input-file2');
        const phoneInput1 = document.querySelector('.phone-input-file1');
        const phoneInput2 = document.querySelector('.phone-input-file2');

        const webBox1 = document.querySelector('.web-box1');
        const webBox2 = document.querySelector('.web-box2');
        const phoneBox1 = document.querySelector('.phone-box1');
        const phoneBox2 = document.querySelector('.phone-box2');

        const webInputArea1 = document.getElementById('webinput1_area');
        const webInputArea2 = document.getElementById('webinput2_area');
        const phoneInputArea1 = document.getElementById('phoneinput1_area');
        const phoneInputArea2 = document.getElementById('phoneinput2_area');

        const webFileName1 = document.querySelector('.web-input-file1-name');
        const webFileName2 = document.querySelector('.web-input-file2-name');
        const phoneFileName1 = document.querySelector('.phone-input-file1-name');
        const phoneFileName2 = document.querySelector('.phone-input-file2-name');

        


        
        swiperTag2.style.backgroundColor = 'white';
        swiperTag1.style.backgroundColor = 'rgb(141, 215, 204)';

        swiperTag2.addEventListener('click', function () {
            swiperTag1.style.backgroundColor = 'white';
            swiperTag2.style.backgroundColor = 'rgb(141, 215, 204)';
            webInput1.classList.add('offbtn');
            webInput2.classList.add('onbtn');
            phoneInput1.classList.add('offbtn');
            phoneInput2.classList.add('onbtn');
            phoneBox1.classList.add('offbtn');
            phoneBox2.classList.add('onbtn');
            webBox1.classList.add('offbtn');
            webBox2.classList.add('onbtn');
            webFileName1.classList.add('offbtn');
            webFileName2.classList.add('onbtn');
            phoneFileName1.classList.add('offbtn');
            phoneFileName2.classList.add('onbtn');
        })
        swiperTag1.addEventListener('click', function () {
            swiperTag2.style.backgroundColor = 'white';
            swiperTag1.style.backgroundColor = 'rgb(141, 215, 204)';
            webInput1.classList.remove('offbtn');
            webInput2.classList.remove('onbtn');
            phoneInput1.classList.remove('offbtn');
            phoneInput2.classList.remove('onbtn');
            phoneBox1.classList.remove('offbtn');
            phoneBox2.classList.remove('onbtn');
            webBox1.classList.remove('offbtn');
            webBox2.classList.remove('onbtn');
            webFileName1.classList.remove('offbtn');
            webFileName2.classList.remove('onbtn');
            phoneFileName1.classList.remove('offbtn');
            phoneFileName2.classList.remove('onbtn');
        })

        webInputArea1.addEventListener('change', function () {
            var files = webInputArea1.files[0].name;
            webFileName1.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });
        webInputArea2.addEventListener('change', function () {
            var files = webInputArea2.files[0].name;
            webFileName2.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });
        phoneInputArea1.addEventListener('change', function () {
            var files = phoneInputArea1.files[0].name;
            phoneFileName1.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });
        phoneInputArea2.addEventListener('change', function () {
            var files = phoneInputArea2.files[0].name;
            phoneFileName2.innerHTML = 
            `
            <p>${files}</p>
            `
            console.log(files);
        });


        // inputfile.addEventListener('change', function () {

        //     if (files.length == 0 && swiperTag2.style.backgroundColor == 'white') {
        //         files = inputfile.files; 
        //         fileLists[0] = files;
        //         console.log(fileLists);
        //     } else if (files.length == 0 && swiperTag1.style.backgroundColor == 'white') {
        //         files = inputfile.files;
        //         fileLists[0] = '';
        //         fileLists[1] = files;
        //         console.log(fileLists)
        //     } else if (files.length == 1 && swiperTag2.style.backgroundColor == 'white') {
        //         files = inputfile.files; 
        //         fileLists[0] = files;
        //         console.log(fileLists);
        //     } else if (files.length == 1 && swiperTag1.style.backgroundColor == 'white') {
        //         files = inputfile.files;
        //         fileLists[1] = files;
        //         console.log(fileLists)

        //     }
        // });

    </script>

</body>

</html>