@extends('layouts.main')

@section('header-nav')
    <nav class="header__nav">
        <ul class="header__items">
            <li class="header__item"><a href="#">履修情報</a></li>
            <li class="header__item"><a href="{{ route('circle.index') }}">サークル</a></li>
            <li class="header__item"><a href="#">Nrichについて</a></li>
        </ul>
        @guest
            <a href="/register"><button class="btn btn__register">登録(無料)</button></a>
            <a href="/login"><button class="btn btn__login">ログイン</button></a>
        @endguest
        @auth
            <a href="/register"><button class="btn btn__register">{{ $user->name }}</button></a>
            <a href="/login"><button class="btn btn__login">ログアウト</button></a>
        @endauth
    </nav>
@endsection

@section('content')
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
        <h2 class="title">ピックアップ</h2>
        <ul class="circle__items">
            @foreach ($circles as $circle)
                <a href="{{ route('circle.show', $circle->id) }}">
                    <li class="circle__item">
                        @foreach ($circle->circleImages as $image)
                            <img src="{{ asset('images/circle/' . $image->hero_img) }}" alt="メイン画像" />
                        @endforeach
                        <h3 class="circle__name">{{ $circle->name }}</h3>
                        <p class="circle__description">
                            circleDetailsのcatch_copyが入ります
                        </p>
                    </li>
                </a>
            @endforeach
        </ul>
    </section>

    <section class="new-arrival container">
        <h2 class="title">新着サークル</h2>
        <ul class="circle__items">
            @foreach ($circles as $circle)
                <a href="#">
                    <li class="circle__item">
                        @foreach ($circle->circleImages as $image)
                            <img src="{{ asset('images/circle/' . $image->hero_img) }}" alt="" />
                        @endforeach
                        <h3 class="circle__name">{{ $circle->name }}</h3>
                        <p class="circle__description">
                            circleDetailsのcatch_copyが入ります
                        </p>
                    </li>
                </a>
            @endforeach
        </ul>
        <div class="circle__btn__container">
            <button class="circle__btn">一覧を見る</button>
        </div>
    </section>
@endsection
