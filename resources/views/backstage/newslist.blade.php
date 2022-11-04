<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/backstage/newslist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backstage/sider.css') }}">
    <title>菓洞甜點工作室-列表頁</title>
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
                <span>首頁</span> / <span> 列表頁</span>
            </div>
            <div id="content">
                @foreach ($news as $item)
                <div class="card">
                    <img src="{{ '/storage/'.$item->news_img_pc }}" alt="" class="img-area">
                    <div class="text-area">
                        <li>{{ str_replace('-', '/', substr($item->updated_at,0,10)) }}</li>
                        <p>
                            {!! $item->news_content !!}
                        </p>
                    </div>
                    <div class="button-area">
                        <a href="news/edit/{{$item->id}}">修改</a>
                        <button class="delete"
                            onclick="document.querySelector('#delete_form{{$item->id}}').submit();">刪除</button>
                        <form id="delete_form{{$item->id}}" action="news/delete/{{$item->id}}" method="POST" hidden>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </main>
    <script>
        // const deletebox = document.querySelectorAll('.delete');
 
        // function note(e) {
        //     var text = window.confirm('您確定要刪除嗎？');
        // }

        // deletebox[0],addEventListener('click', note);
        // deletebox[1],addEventListener('click', note);
        // deletebox[2],addEventListener('click', note);

        // console.log(deletebox, notebox);
        // deletebox[0].addEventListener('click', function(){
        //     notebox.classList.add('on');
        // });
        // deletebox[1].addEventListener('click', function(){
        //     notebox.classList.add('on');
        // });
        // deletebox[2].addEventListener('click', function(){
        //     notebox.classList.add('on');
        // });
        // closebox.addEventListener('click', function(){
        //     notebox.classList.remove('on');
        // });
        
        
        


    </script>
</body>

</html>