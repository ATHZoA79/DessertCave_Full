<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/backstage/backEnd-index.css') }}">
    <title>菓洞甜點工作室-後台首頁</title>
</head>

<body>

    <main>
        <div id="card">
            <div id="logo">
                <img src="{{ asset('img/logo-bg-white.png') }}" alt="">
            </div>
            <ul id="store_name">
                <li>© 菓洞甜點工作室</li>
            </ul>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div>
                   <input type="email" placeholder="請在此輸入帳號"  id="email" name="email">
                </div>
                <div >
                   <input type="password" placeholder="請在此輸入密碼" id="password" name="password">
                </div>
                <button id="log_in">
                    登入
                </button>
            </form>
        </div>
    </main>

</body>

</html>