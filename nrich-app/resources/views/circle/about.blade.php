@extends('layouts.main')


@section('header-nav')
    <nav class="header__nav">
        <ul class="header__items">
            <li class="header__item"><a href="#">履修情報</a></li>
            <li class="header__item"><a href="/circle">サークル</a></li>
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
    <section class="about">
        <h2 class="title">{{ $circle->name }}</h2>
        <div class="about__image">
            <img src="{{ asset('images/circle/' . $images->hero_img) }}" alt="メイン画像" class="about__image__item">
            <img src="{{ asset('images/circle/' . $images->img1) }}" alt="メイン画像" class="about__image__item">
            <img src="{{ asset('images/circle/' . $images->img2) }}" alt="メイン画像" class="about__image__item">
        </div>

        <div class="about__inner">
            <div class="about__explanation">

                <h3 class="about__catchcopy">キャッチコピーが入ります</h3>
                <p class="about__summary">
                    サークルの概要が入ります ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト
                    ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト
                    ダミーテキスト
                    ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト
                </p>
            </div>

            <div class="about__atmospheres">
                <h3 class="title">雰囲気</h3>
                <div class="about__atmospheres__item">
                    <h4>活動の真剣さ</h4>
                    <div class="about__atmospheres__parameter">
                        <p>ゆるい</p>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>真剣</p>
                    </div>
                </div>
                <div class="about__atmospheres__item">
                    <h4>上下関係</h4>
                    <div class="about__atmospheres__parameter">
                        <p>ゆるい</p>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>ちゃんとしている</p>
                    </div>
                </div>
                <div class="about__atmospheres__item">
                    <h4>兼サーのしやすさ</h4>
                    <div class="about__atmospheres__parameter">
                        <p>しにくい</p>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>しやすい</p>
                    </div>
                </div>
                <div class="about__atmospheres__item">
                    <h4>仲のよさ</h4>
                    <div class="about__atmospheres__parameter">
                        <p>うーん</p>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>仲良し</p>
                    </div>
                </div>
                <div class="about__atmospheres__item">
                    <h4>例年の食事会の頻度</h4>
                    <div class="about__atmospheres__parameter">
                        <p>少ない</p>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>多い</p>
                    </div>
                </div>
            </div>

            <div class="about__details">
                <h3 class="title">基本情報</h3>
                <table class="about__table">
                    <tr>

                        <th>団体名</th>
                        <td>団体名が入ります</td>
                    </tr>
                    <tr>
                        <th>人数</th>
                        <td>男:n人 女:n人</td>
                    </tr>
                    <tr>
                        <th>活動場所</th>
                        <td>活動場所が入ります</td>
                    </tr>
                    <tr>
                        <th>活動日数</th>
                        <td>活動日数が入ります</td>
                    </tr>
                    <tr>
                        <th>入会費・会費</th>
                        <td>入会金:10000円 会費:5000円</td>
                    </tr>
                    <tr>
                        <th>初期費用</th>
                        <td>初期費用が入ります</td>
                    </tr>
                    <tr>
                        <th>合宿回数</th>
                        <td>n回</td>
                    </tr>
                </table>
            </div>

            <div class="about__memberships">
                <h3 class="section_title">入会を希望される方へ</h3>
                <h4>新入生へのメッセージ</h4>
                <p>新入生へのメッセージが入ります ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト
                    ダミーテキスト
                </p>
                <h4>途中入会を検討している学生へ</h4>
                <p>途中入会を検討している学生へのメッセージが入ります ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト ダミーテキスト
                    ダミーテキスト
                    ダミーテキスト</p>
                <h4>入会方法</h4>
                <p>入会方法が入ります ダミーテキスト ダミーテキスト</p>
            </div>

            <div class="about__attribute">
                <h4>ジャンル</h4>
                <ul>
                    <li>ジャンル</li>
                    <li>ジャンル</li>
                </ul>

                <h4>キャンパス</h4>
                <ul>
                    <li>~キャンパス</li>
                    <li>~キャンパス</li>
                </ul>

                <h4>こだわり</h4>
                <ul>
                    <li>男女半々</li>
                    <li>和気藹々</li>
                </ul>
            </div>
        </div>
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
@endsection
