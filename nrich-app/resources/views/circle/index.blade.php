<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6c20dffe37.js" crossorigin="anonymous"></script>
    <!-- scss -->
    {{-- <link rel="stylesheet" href="./scss/ style.css" /> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <img src="{{ asset('images/logo.svg') }}" alt="" />
            <nav class="header__nav">
                <ul class="header__items">
                    <li class="header__item"><a href="#">履修情報</a></li>
                    <li class="header__item"><a href="#">サークル</a></li>
                    <li class="header__item"><a href="#">Nrichについて</a></li>
                </ul>
                <button class="btn btn__register">登録(無料)</button>
                <button class="btn btn__login">ログイン</button>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <h1 class="hero__title">サークル</h1>
            <div class="hero__slideshow"></div>
        </section>

        <section class="search container">
            <div class="search__input__container">
                <input type="text" class="search__input" placeholder="サークル・団体名/活動内容など" />
                <div class="search__icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown__container">
                    <div class="dropdown__headline">
                        <h3>ジャンルから探す</h3>
                    </div>
                    <div class="dropdown__icon" id="genre-btn">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div class="dropdown__menu" id="genre-menu">
                    <ul class="dropdown__items">
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dropdown__container">
                    <div class="dropdown__headline">
                        <h3>キャンパスから探す</h3>
                    </div>
                    <div class="dropdown__icon" id="campus-btn">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div class="dropdown__menu" id="campus-menu">
                    <ul class="dropdown__items">
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dropdown__container">
                    <div class="dropdown__headline">
                        <h3>こだわりから探す</h3>
                    </div>
                    <div class="dropdown__icon" id="obsession-btn">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <div class="dropdown__menu" id="obsession-menu">
                    <ul class="dropdown__items">
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                        <li class="dropdown__item">
                            <div class="dropdown__item__container">
                                <input type="checkbox" class="dropdown__checkbox" />ダミー
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search__btn__container">
                <button class="search__btn">検索する</button>
            </div>
        </section>

        <section class="circle container">
            <h2 class="section__title">ピックアップ</h2>
            <ul class="circle__items">
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
            </ul>
        </section>

        <section class="new-arrival container">
            <h2 class="section__title">新着サークル</h2>
            <ul class="circle__items">
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
                <a href="#">
                    <li class="circle__item">
                        <img src="{{ asset('images/sample.jpeg') }}" alt="" />
                        <h3 class="circle__name">ダミーサークル</h3>
                        <p class="circle__description">
                            ダミーテキストダミーテキストダミーテキスト
                        </p>
                    </li>
                </a>
            </ul>
            <div class="circle__btn__container">
                <button class="circle__btn">一覧を見る</button>
            </div>
        </section>
    </main>

    <footer class="footer">
        <img src="{{ asset('images/logo.svg') }}" alt="" />
    </footer>
</body>

</html>
