<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>確定申告シミュレーター</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/Simulator.css">

    </head>
     <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">新規登録</a>
                    @endif
                    @auth
                    <a href="{{ url('/home') }}">ART SEED</a>
                    @else
                    <a href="{{ route('login') }}">ログイン</a>
                    @endauth
                </div>
                @endif
            </div>
            
            
            <div class="top">
                    <img src="./img/top.jpeg" alt="確定申告写真">
                    <h1>確定申告シミュレーター</h1>
                    <h2>確定申告とは？</h2>
                    <p>個人が、その年の1月1日から12月31日までを課税期間として
                        <br>その期間内の収入・支出、医療費や扶養親族の状況等から
                        <br>所得を計算した申告書を税務署へ提出し、納付すべき所得税額を確定すること
                    </p>
            </div>
            
            <div class="subject">
                <h3>確定申告を行う必要がある方</h3>
                <ul>（1）サラリーマンの場合
                    <li>メインの給与所得の金額が2,000万円を超える場合</li>
                    <li>メインの給与所得で「年末調整」をしていない場合</li>
                    <li>2ヵ所以上からの給与所得があり、メインの給与所得で「年末調整」をしていて、なおかつ副業である「従たる給与所得」の収入金額合計が20万円を超える場合</li>
                    <li style="list-style-type: none">（※注）2ヵ所以上給与の場合、副業である給与所得は収入金額で判定します</li>
                    <li>副業として得た事業所得や土地やアパートを賃貸して得た所得（不動産所得）、不動産を売却して得た所得（譲渡所得）など、その他の所得合計が20万円を超える場合</li>
                    <li>同族会社の役員が会社から貸付利息や地代家賃等を受け取っている場合</li>
                    <li style="list-style-type: none">（※注）この場合、所得金額が20万円以下であっても申告が必要ですので注意してください</li>
                </ul>
                
                <ul class="subject">（2）サラリーマン以外の場合
                    <li>個人事業やフリーランスの方が得た所得（事業所得）、土地やアパートを賃貸して得た所得（不動産所得）などの合計が所得控除額以下の場合</li>
                    <li>収入金額400万円以下の公的年金等受給者で、公的年金等にかかる雑所得以外の所得が20万円以下の場合</li>
                    <img src="./img/woman.jpeg" alt="女性">

                </ul>
            </div>
            



            <div class="category">
                <h3>確定申告シミュレーターで出来る事</h3>
                <div class="category_list1">
                    <p>1.自動計算システム</p>
                    <img src="./img/pc.jpeg" alt="パソコン操作">
                    <p>金額を該当する項目に入力するだけ</p>
                </div>
                <div class="category_list2">
                    <p>2.簡単な入力で管理</p>
                    <img src="./img/phone.jpeg" alt="スマートフォン">
                    <p>金額を入力するだけで算出可能</p>
                </div>
                <div class="category_list3">
                    <p>3.安心のセキュリティ</p>
                    <img src="./img/security.jpeg" alt="セキュリティ">

                    <p>ログイン機能でセキュリティも安心・安全</p>
                </div>
            </div>
            
            <a href="{{ route('register') }}">新規登録</a>
            <a href="{{ route('login') }}">ログイン</a>
            
            
            <header>
                <div class="">
                    <p>確定申告シミュレーターについて</p>
                         <a href="#">プライバシーポリシー >></a><br>
                         <a herf="#">お問い合わせ >></a><br>
                         <a herf="#">利用規約 >></a><br>
                         <a herf="#">ヘルプ >></a>
                         
                    <p>ユーザー様向けの情報</p>
                         <a href="{{ route('register') }}">新規登録 >></a><br>
                         <a href="{{ route('login') }}">ログイン >></a><br>
                         <a href="#">ログアウト >></a>
                </div>
            </header>
        </body>
</html>
