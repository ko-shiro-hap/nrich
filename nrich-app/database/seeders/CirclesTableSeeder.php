<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Circle;

class CirclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('circles')->insert (
            [
                [
                    'university_id' => 1,
                    'name' => 'ギタークラブ',
                    'catchphrase' => '日大でギターアンサンブルするならギタクラ!',
                    'summary' => '日大祭や年末の定期演奏会などに向けて、クラシックギター合奏を中心に楽しく活動しています。クラシック曲に限らず、ポップス、インスト、ジャズ、映画やミュージカルの挿入歌など、様々なジャンルの演奏をしています。独奏や重奏を披露する機会も設けています。今年度はオンラインでの活動も予定しています。 初心者・掛け持ちも歓迎です。約半数は大学からクラシックギターを始めていますので、ギターに触ったことがない方でも心配ありません。クラシックギターは「小さなオーケストラ」の異名を持ちます。自宅で弾けて、本当に音色の美しい楽器です。特に初心者には先輩からのフォローもありますので、ぜひギターを初めてみませんか？もちろん経験者の方もお待ちしています。ぜひ一度遊びに来てください！',
                    'number_of_men' => 6,
                    'number_of_women' => 7,
                    'location' => 'xxxxキャンパス 練習:1N-026 部室:15-001',
                    'frequency' => '毎週水曜（16:30〜19:45）・土曜（14:45〜18:00）※時間は変更の可能性有り。',
                    'membership_fee' => '10000',
                    'admission_fee' => '5000（1年に一度）',
                    'initial_cost' => 'クラシックギター10万円程度（1年次はサークル所有ギターの貸出ができるためなし。自前のギターを持っている人も購入の必要なし。）',
                    'number_of_camps' => '2回',
                    'seriousness' => 4,
                    'relationship' => 1,
                    'experience' => 3,
                    'freedom' => 3,
                    'hero_image' => 'ギタークラブ_hero.jpeg',
                    'image1' => 'ギタークラブ_1.jpeg',
                    'image2' => 'ギタークラブ_2.jpeg',
                    'image3' => 'ギタークラブ_3.jpeg',

                ],
                [
                    'university_id' => 1,
                    'name' => 'スポトピ',
                    'catchphrase' => '大学公認、オール日大、ナイター練習がそろう！テニスサークルです！',
                    'summary' => '早稲田大学ATECリーグ所属の公認テニスサークルです‼大学公認・オール早稲田・ナイター練が揃うのはここだけ⁉初心者多数！アットホーム！多忙な学科の人にも優しいスケジュールでテニスもイベントも全部楽しめます！',
                    'number_of_men' => 11,
                    'number_of_women' => 7,
                    'location' => 'xxx体育館テニスコート、xxxテニスコート',
                    'frequency' => '不定期週2回、ナイター練(冬は早めの時間)',
                    'membership_fee' => '3000',
                    'admission_fee' => '5000円程度（半年に一度）',
                    'initial_cost' => 'ラケット等 10000円',
                    'number_of_camps' => '5回程度',
                    'seriousness' => 3,
                    'relationship' => 1,
                    'experience' => 2,
                    'freedom' => 4,
                    'hero_image' => 'スポトピ_hero.jpeg',
                    'image1' => 'スポトピ_1.jpeg',
                    'image2' => 'スポトピ_2.jpeg',
                    'image3' => 'スポトピ_3.jpeg',

                ],
                [
                    'university_id' => 1,
                    'name' => 'スポーツチャンバラ剣隼会',
                    'catchphrase' => '童心を思い出せ',
                    'summary' => '剣隼会は2005年度に設立された早稲田大学公認のスポーツチャンバラサークルです。2016年に早稲田大学公認となりました。
                    武道であり、スポーツ競技でもあるスポーツチャンバラの練習に日々励んでいます。
                    ・「大学で新しいことをはじめたい！」
                    ・「マイナースポーツをやってみたい」
                    ・「武道に興味がある」
                    ・「真面目に運動はしたいけれども、キツすぎるところはついていけるか不安」
                    そんなあなたに剣隼会はぴったりです！
                    他大学や二年生以上の方もいつでも大歓迎なので、入会してみたい、練習体験してみたいという方は、気軽にSNSのDMやLINE@からご連絡ください。',
                    'number_of_men' => 25,
                    'number_of_women' => 19,
                    'location' => 'xx第一小学校（月）、xx中学校（水）',
                    'frequency' => '月・水曜日の19:00〜21:30',
                    'membership_fee' => 'なし',
                    'admission_fee' => '半年に一度（ただし最初の半年は無料）',
                    'initial_cost' => '道具代（買う道具により異なるが20000円程度）',
                    'number_of_camps' => '3回',
                    'seriousness' => 4,
                    'relationship' => 2,
                    'experience' => 1,
                    'freedom' => 3,
                    'hero_image' => 'スポーツチャンバラ剣隼会_hero.jpeg',
                    'image1' => 'スポーツチャンバラ剣隼会_1.jpeg',
                    'image2' => 'スポーツチャンバラ剣隼会_2.jpeg',
                    'image3' => 'スポーツチャンバラ剣隼会_3.jpeg',
                ],
                [
                    'university_id' => 1,
                    'name' => 'KatZwei',
                    'catchphrase' => '楽しんだもんガチ これガチ',
                    'summary' => 'KatZweiは早稲田大学公認の中規模フットサルサークルです。性別年齢関係なく仲がいいのがわたしたちの自慢です！ぜひ、わたしたちと一緒に最高の大学生活を送りませんか？',
                    'number_of_men' => 24,
                    'number_of_women' => 22,
                    'location' => 'xx公園',
                    'frequency' => '毎週水、土の13~18時',
                    'membership_fee' => 'なし',
                    'admission_fee' => '3,500円/半期',
                    'initial_cost' => 'ユニフォーム 10,000円',
                    'number_of_camps' => '3回/年間',
                    'seriousness' => 2,
                    'relationship' => 1,
                    'experience' => 1,
                    'freedom' => 3,
                    'hero_image' => 'KatZwei_hero.jpeg',
                    'image1' => 'KatZwei_1.jpeg',
                    'image2' => 'KatZwei_2.jpeg',
                    'image3' => 'KatZwei_3.jpeg',
                ],
                [
                    'university_id' => 1,
                    'name' => '競プロサークル',
                    'catchphrase' => 'AtCoderを頑張るコミュニティです！初心者大歓迎！',
                    'summary' => '私たちは、競技プログラミングの上達を目指すサークルです！
                    主にAtCoderと言われるサイトが開催している競プロ大会に参加して、レートを上げることを目標にしています。
                    プログラミング初心者の方でも楽しく活動できますプログラミング興味あるけど何から始めたらいいかわからなくて手をつけられないと感じている人や、周りに競プロやっている人がいなくて仲間が欲しい人など大歓迎です！！
                    ぜひ一度遊びに来てください！',
                    'number_of_men' => 12,
                    'number_of_women' => 5,
                    'location' => 'POSSE大学八王子キャンパス　１N-０２６教室　オンラインなど',
                    'frequency' => '周２〜3日程度　毎週月曜（19:00〜22:00）定例会あり',
                    'membership_fee' => 'なし',
                    'admission_fee' => '月22,000円',
                    'initial_cost' => '持ってなければパソコン代（そこそこのスペックあった方が良いかも）',
                    'number_of_camps' => '任意参加　年2回程度',
                    'seriousness' => 4,
                    'relationship' => 2,
                    'experience' => 3,
                    'freedom' => 3,
                    'hero_image' => 'KatZwei_hero.jpeg',
                    'image1' => '競プロサークル.jpeg',
                    'image2' => '競プロサークル.jpeg',
                    'image3' => '競プロサークル.jpeg',
                ],
            ]
        );
    }
}