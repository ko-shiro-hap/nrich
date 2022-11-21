@extends('layouts.main')

@section('header-nav')
    <nav class="header__nav">
        @guest
            <a href="/register">登録(無料)</a>
            <a href="/login">ログイン</a>
        @endguest
        @auth
            <p>{{ $user->name }}</p>
            <a href="logout">ログアウト</a>
        @endauth
    </nav>
@endsection

@section('content')
    <!-- ヒーロー開始 -->
    <section class="hero">
        <div class="hero__box search">
            <h2>最高のサークルを探す</h2>

            <form action="">
                <input type="text" class="search__input" placeholder="カテゴリ" />
                <input type="text" class="search__input" placeholder="ジャンル" />
                <input type="text" class="search__input" placeholder="特徴" />
                <button class="search__button">検索する</button>
            </form>
        </div>
        <div class="hero__image">
            <img src="{{ asset('images/hero.jpg') }}" alt="" />
        </div>
    </section>

    <!-- サークル表示開始 -->
    {{-- 新着サークル開始 --}}
    <section class="new-arrival">
        <div class="section__title__container">
            <h2>LATEST</h2>
            <p>新着サークル</p>
        </div>

        <ul class="circle__items">
            @foreach ($circles as $circle)
                <a href="{{ route('circle.show', $circle->id) }}">
                    <li class="circle__item">
                        <img src="{{ asset('images/circle/' . $circle->hero_image) }}" alt="メイン画像" />
                        <div class="circle__item__texts">
                            <h3>{{ $circle->name }}</h3>
                            <p>{{ $circle->catchphrase }}</p>
                            <div class="attributes">
                                @foreach ($circle->categories as $category)
                                    <a class="attributes__item attributes__category"
                                        href="#">{{ $category->category }}</a>
                                @endforeach
                                @foreach ($circle->campuses as $campus)
                                    <a class="attributes__item attributes__campus" href="#">{{ $campus->campus }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </section>

    {{-- ピックアップサークル開始 --}}
    <section class="pickup">
        <div class="section__title__container">
            <h2 class="section-title">PICKUP</h2>
            <p>ピックアップ</p>
        </div>

        <ul class="circle__items">
            @foreach ($circles as $circle)
                <a href="{{ route('circle.show', $circle->id) }}">
                    <li class="circle__item">
                        <img src="{{ asset('images/circle/' . $circle->hero_image) }}" alt="メイン画像" />
                        <div class="circle__item__texts">
                            <h3>{{ $circle->name }}</h3>
                            <p>アットコーダーを頑張るコミュニティです！ 初心者大歓迎！（仮）</p>
                            <div class="attributes">
                                @foreach ($circle->categories as $category)
                                    <a class="attributes__item attributes__category"
                                        href="#">{{ $category->category }}</a>
                                @endforeach
                                @foreach ($circle->campuses as $campus)
                                    <a class="attributes__item attributes__campus" href="#">{{ $campus->campus }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </section>
@endsection
