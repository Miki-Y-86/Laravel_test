<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLOWER SHOP</title>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
<header class="header js-float-menu">
    <h1 class="title">FLOWER SHOP</h1>

    <div class="menu-trigger js-toggle-sp-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav class="nav-menu js-toggle-sp-menu-target">
        <ul class="menu">
            {{--            <li class="menu-item"><a class="menu-link" href="">TOP</a></li>--}}
            {{--            <li class="menu-item"><a class="menu-link" href="#news">NEWS</a></li>--}}
            {{--            <li class="menu-item"><a class="menu-link" href="#about">ABOUT</a></li>--}}
            {{--            <li class="menu-item"><a class="menu-link" href="#staff">STAFF</a></li>--}}
            {{--            <li class="menu-item"><a class="menu-link" href="#cource">COURCE</a></li>--}}
            {{--            <li class="menu-item"><a class="menu-link" href="#contact">CONTACT</a></li>--}}

            @if (Route::has('login'))
                @auth
{{--                    <li class="menu-item"><a href="{{ url('/home') }}" class="menu-link">HOME</a></li>--}}
                @else
                    <li class="menu-item"><a href="{{ route('login') }}" class="menu-link">ログイン</a></li>

                    @if (Route::has('register'))
                        <li class="menu-item"><a href="{{ route('register') }}" class="menu-link">新規登録</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</header>
<main>
    <section class="hero container-fluid js-float-menu-target">
        <h2 class="hero-title">Hello Welcome<br> FLOWER SHOP</h2>
    </section>
    <section class="container container-ornament" id="news">
        <h2 class="container-title"><span>NEWS</span></h2>
        <div class="container-body">
            <ul class="news">
                <li class="news-item">
                    <a class="news-link" href="">
                        <span class="news-date">2022.05.26</span>
                        <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
                    </a>
                </li>
                <li class="news-item">
                    <a class="news-link" href="">
                        <span class="news-date">2022.05.26</span>
                        <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
                    </a>
                </li>
                <li class="news-item">
                    <a class="news-link" href="">
                        <span class="news-date">2022.05.26</span>
                        <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="bgColor-lightGray" id="about">
        <div class="container container-lightGray">
            <h2 class="container-title container-title-lightGray"><span>お店紹介</span></h2>
            <div class="container-body">
                <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                    サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                    サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                    サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                    サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                </p>
            </div>
        </div>
    </section>

    <section class="container container-ornament" id="staff">
        <h2 class="container-title"><span>お花紹介</span></h2>
        <div class="container-body">
            <div class="panel-group panel-group-float">
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff1.jpg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff2.jpeg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff3.jpeg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff4.jpg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff5.jpg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff6.jpg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff1.jpg" alt="">
                    </div>
                </a>
                <a href="" class="panel panel-hover panel-staff">
                    <div class="panel-body">
                        <img src="./images/staff2.jpeg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="bgColor-lightGray" id="cource">
        <div class="container container-lightGray">
            <h2 class="container-title"><span>コース</span></h2>
            <div class="container-body">
                <div class="panel-group panel-group-flex">
                    <div class="panel panel-border panel-cource">
                        <div class="panel-head">
                            <span class="ft-corp ft-l">Bussiness</span>コース
                        </div>
                        <div class="panel-body">
                            <img src="./images/price1.jpg" alt="">
                        </div>
                        <div class="panel-foot">
                            <p>多色使いで髪にサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>
                        </div>
                    </div>
                    <div class="panel panel-border panel-cource panel-active">
                        <span class="panel-badge">
                            オス<br>スメ
                        </span>
                        <div class="panel-head">
                            <span class="ft-corp ft-l">Advance</span>コース
                        </div>
                        <div class="panel-body">
                            <img src="./images/price2.jpg" alt="">
                        </div>
                        <div class="panel-foot">
                            <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>
                        </div>
                    </div>
                    <div class="panel panel-border panel-cource">
                        <div class="panel-head">
                            <span class="ft-corp ft-l">Beginners</span>コース
                        </div>
                        <div class="panel-body">
                            <img src="./images/price3.jpg" alt="">
                        </div>
                        <div class="panel-foot">
                            <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container container-ornament" id="contact">
        <h2 class="container-title"><span>CONTACT</span></h2>
        <div class="container-body">
            <form action="" class="form form-m">
                <input class="input input-l" type="text" placeholder="お名前">
                <input class="input input-l" type="email" placeholder="email">
                <textarea class="input input-l input-textarea mb-xxl" placeholder="お問合せ内容"></textarea>
                <button class="btn btn-corp btn-l">送信</button>
            </form>
        </div>
    </section>
</main>

{{--vue.js--}}
<script src="https://cdn.jsdelivr.net/npm/vue-smooth-scroll@1.0.13/dist/vue-smooth-scroll.min.js"></script>

{{--<a href="#app" v-smooth-scroll="{ duration: 2000, offset: -50 }"></a>--}}
{{--<span id="bottom">bottom</span>--}}

<footer class="footer">
    <p>Copyrihgt @ sample. All Right Reserved</p>
</footer>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

{{--@if (Route::has('register'))--}}
{{--    <a href="{{ route('register') }}">試してみる</a>--}}
{{--@endif--}}


{{--<a href=" {{ url('/test') }}">次のページへ</a>--}}
{{--<div id="app">--}}
{{--    <example-component></example-component>--}}
{{--</div>--}}

</body>
</html>
