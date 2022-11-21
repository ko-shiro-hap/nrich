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
        <div class="hero__box">
            <h2 class="circle__title">{{ $circle->name }}</h2>
            <p>{{ $circle->catchphrase }}</p>
            <div class="categories">
                @foreach ($circle->categories as $category)
                    <a class="categories__item categories__item--large" href="#">{{ $category->category }}</a>
                @endforeach
            </div>
        </div>
        <div class="hero__image">
            <img src="{{ asset('images/circle/' . $circle->hero_image) }}" alt="メイン画像">
        </div>
    </section>

    <!-- サークル表示開始 -->
    {{-- サークル概要開始 --}}
    <section class="detail-section summary">
        <div class="section__title__container">
            <h2>SUMMARY</h2>
            <p>どんな団体？</p>
            <p class="summary__text">{{ $circle->summary }}</p>
        </div>
    </section>

    {{-- 基本情報開始 --}}
    <section class="detail-section information">
        <div class="section__title__container">
            <h2 class="section-title">INFORMATION</h2>
            <p>基本情報</p>
        </div>
        <table class="information__table">
            <tr>
                <th>団体名</th>
                <td>{{ $circle->name }}</td>
            </tr>
            <tr>
                <th>人数</th>
                <td>男:{{ $circle->number_of_men }}人 女:{{ $circle->number_of_women }}人</td>
            </tr>
            <tr>
                <th>活動場所</th>
                <td>{{ $circle->location }}</td>
            </tr>
            <tr>
                <th>活動日数</th>
                <td>{{ $circle->frequency }}</td>
            </tr>
            <tr>
                <th>入会費</th>
                <td>{{ $circle->membership_fee }}</td>
            </tr>
            <tr>
                <th>会費</th>
                <td>{{ $circle->admission_fee }}</td>
            </tr>
            <tr>
                <th>初期費用</th>
                <td>{{ $circle->initial_cost }}</td>
            </tr>
            <tr>
                <th>合宿回数</th>
                <td>{{ $circle->number_of_camps }}</td>
            </tr>
        </table>
    </section>

    {{-- 雰囲気開始 --}}
    <section class="detail-section atmospheres">
        <div class="section__title__container">
            <h2 class="section-title">ATMOSPHERE</h2>
            <p>どんな雰囲気？</p>
        </div>
        <div class="atmospheres__item">
            <h4>真剣さ</h4>
            <div class="atmospheres__parameter">
                <p>ゆるめ</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p>真剣</p>
            </div>
        </div>
        <div class="atmospheres__item">
            <h4>仲間</h4>
            <div class="atmospheres__parameter">
                <p>アットホーム</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p>ビジネスライク</p>
            </div>
        </div>
        <div class="atmospheres__item">
            <h4>経験</h4>
            <div class="atmospheres__parameter">
                <p>初心者歓迎</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p>経験者感激</p>
            </div>
        </div>
        <div class="atmospheres__item">
            <h4>活動の自由度</h4>
            <div class="atmospheres__parameter">
                <p>高い</p>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p>低い</p>
            </div>
        </div>
    </section>

    {{-- 入会方法開始 --}}
    <section class="detail-section how-to-join">
        <div class="section__title__container">
            <h2 class="section-title">HOW TO JOIN</h2>
            <p>入会を考えている方へ</p>
        </div>
        <form action="" method="post">
            <div class="how-to-join__form">
                <div class="how-to-join__item">
                    <p>お名前</p>
                    <label for="">
                        <input type="text" />
                    </label>
                </div>

                <div class="how-to-join__item">
                    <p>メールアドレス</p>
                    <label for="">
                        <input type="text" />
                    </label>
                </div>

                <div class="how-to-join__item">
                    <p>学年・学部・学科</p>
                    <label for="">
                        <input type="text" />
                    </label>
                </div>

                <div class="how-to-join__item">
                    <p>性別</p>
                    <div class="how-to-join__radio">
                        <label for="">男性</label>
                        <input type="radio" />
                        <label for="">女性</label>
                        <input type="radio" />
                    </div>
                </div>

                <div class="how-to-join__item how-to-join__textarea">
                    <p>質問・要望</p>
                    <label for="">
                        <input type="textarea" />
                    </label>
                </div>
            </div>

            <button type="submit">送信する</button>
            <small>担当者から案内メールが来るまでお待ちください</small>
        </form>
    </section>

    {{-- 検索開始 --}}
    <section class="detail-section detail__search">
        <div class="search">
            <h2>最高のサークルを探す</h2>
            <input type="text" class="search__input" placeholder="カテゴリ" />
            <input type="text" class="search__input" placeholder="ジャンル" />
            <input type="text" class="search__input" placeholder="特徴" />
            <button class="search__button">検索する</button>
        </div>
    </section>
    </main>
    </body>

    </html>
@endsection
