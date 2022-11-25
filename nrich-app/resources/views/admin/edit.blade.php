@extends('layouts.main')


@section('header-nav')
    <nav class="header__nav">
        <h2>編集画面</h2>
        <a href="/admin">管理画面に戻る</a>
    </nav>
@endsection

@section('content')
    {{-- <!-- ヒーロー開始 -->
    <section class="hero">
        <div class="hero__box">
            <h2 class="circle__title">{{ $circle->name }}</h2>
            <p>{{ $circle->catchphrase }}</p>
            <div class="attributes">
                @foreach ($circle->categories as $category)
                    <a class="attributes__item attributes__category" href="#">{{ $category->category }}</a>
                @endforeach
                @foreach ($circle->campuses as $campus)
                    <a class="attributes__item attributes__campus" href="#">{{ $campus->campus }}</a>
                @endforeach
                @foreach ($circle->characteristics as $characteristic)
                    <a class="attributes__item attributes__characteristic"
                        href="#">{{ $characteristic->characteristic }}</a>
                @endforeach
            </div>
        </div>
        <div class="hero__image">
            <img src="{{ asset('images/circle/' . $circle->hero_image) }}" alt="メイン画像">
        </div>
    </section> --}}

    <!-- サークル表示開始 -->
    {{-- サークル概要開始 --}}
    {{-- <section class="detail-section summary">
        <div class="section__title__container">
            <h2>SUMMARY</h2>
            <p>どんな団体？</p>
            <p class="summary__text">{{ $circle->summary }}</p>
        </div>
    </section> --}}

    {{-- 基本情報開始 --}}
    <section class="detail-section information">
        <div class="section__title__container">
            <h2 class="section-title">INPUT</h2>
            <p>情報入力</p>
        </div>
        <table class="information__table">
            <tr>
                <th>所属大学</th>
                <td><input type="search" class="admin__input"></td>
                {{-- <td>{{ $circle->name }}</td> --}}
            </tr>
            <tr>
                <th>団体名</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->name }}</td> --}}
            </tr>
            <tr>
                <th>キャッチフレーズ</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->name }}</td> --}}
            </tr>
            <tr>
                <th>概要</th>
                <td><input type="textarea" class="admin__input"></td>
                {{-- <td>{{ $circle->name }}</td> --}}
            </tr>
            <tr>
                <th>人数</th>
                <td>
                    男: <input type="number" class="admin__input">
                    女: <input type="number" class="admin__input">
                </td>
                {{-- <td>男:{{ $circle->number_of_men }}人 女:{{ $circle->number_of_women }}人</td> --}}
            </tr>
            <tr>
                <th>活動場所</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->location }}</td> --}}
            </tr>
            <tr>
                <th>活動日数</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->frequency }}</td> --}}
            </tr>
            <tr>
                <th>入会費</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->membership_fee }}</td> --}}
            </tr>
            <tr>
                <th>会費</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->admission_fee }}</td> --}}
            </tr>
            <tr>
                <th>初期費用</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->initial_cost }}</td> --}}
            </tr>
            <tr>
                <th>合宿回数</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->number_of_camps }}</td> --}}
            </tr>
            <tr>
                <th>合宿回数</th>
                <td><input type="text" class="admin__input"></td>
                {{-- <td>{{ $circle->number_of_camps }}</td> --}}
            </tr>
            <tr>
                <th>真剣さ</th>
                <td>ゆるめ 1
                    <input type="range" min="1" max="5" class="admin__input">
                    5 真剣
                </td>
            </tr>
            <tr>
                <th>仲間</th>
                <td>アットホーム 1
                    <input type="range" min="1" max="5" class="admin__input">
                    5 ビジネスライク
                </td>
            </tr>
            <tr>
                <th>経験</th>
                <td>初心者歓迎 1
                    <input type="range" min="1" max="5" class="admin__input">
                    5 経験者歓迎
                </td>
            </tr>
            <tr>
                <th>活動の自由度</th>
                <td>高い 1
                    <input type="range" min="1" max="5" class="admin__input">
                    5 低い
                </td>
            </tr>
            <tr>
                <th>メイン画像</th>
                <td><input type="file" class="admin__input"></td>
            </tr>
            <tr>
                <th>画像1</th>
                <td><input type="file" class="admin__input"></td>
            </tr>
            <tr>
                <th>画像2</th>
                <td><input type="file" class="admin__input"></td>
            </tr>
            <tr>
                <th>画像3</th>
                <td><input type="file" class="admin__input">*空白可</td>
            </tr>
            <tr>
                <th>画像4</th>
                <td><input type="file" class="admin__input">*空白可</td>
            </tr>
            <tr>
                <th>画像5</th>
                <td><input type="file" class="admin__input">*空白可</td>
            </tr>
        </table>
    </section>

    {{-- 雰囲気開始
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
                <p>経験者歓迎</p>
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
    </section> --}}

    {{-- 入会方法開始 --}}
    {{-- <section class="detail-section how-to-join">
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
    </section> --}}

    {{-- 検索開始 --}}
    {{-- <section class="detail-section detail__search">
        <div class="search">
            <h2>最高のサークルを探す</h2>
            <input type="text" class="search__input" placeholder="カテゴリ" />
            <input type="text" class="search__input" placeholder="ジャンル" />
            <input type="text" class="search__input" placeholder="特徴" />
            <button class="search__button">検索する</button>
        </div>
    </section> --}}
    </main>
    </body>

    </html>
@endsection
