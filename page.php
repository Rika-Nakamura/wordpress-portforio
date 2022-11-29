<?php get_header(); ?>

<!-- main -->
<main>
    <!-- aboutSec -->
    <section class="aboutSec adjustment-top wrapper">
        <div class="aboutSec__summary">
            <h2 class="section__title">about</h2>
            <div class="aboutSec__inner">
                <p class="aboutSec__photo">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/about/about-photo.png')); ?>" alt="プロフィール写真">
                </p>
                <div class="aboutSec__description">
                    <p class="aboutSec__txt">中村　理香(なかむら　りか)</p>
                    <p class="aboutSec__txt">神奈川県に住んでいる27歳です。<br>
                        昔からモノづくりやデザインが好きで、2年前に福祉に関するWebサイトを作成したことから、Web制作に惹かれました。</p>
                    <p class="aboutSec__txt">
                        福祉現場で身につけた親身なコミュニケーションを活かし、持ち前の新しいことに自ら進んで学習する力でクライエントさまの課題解決のためのWeb制作に励みます。</p>
                </div>
            </div>
        </div>

        <!-- accordion -->
        <div class="accordion">
            <div class="accordion__container">
                <h4 class="accordion__title js-accordion-title">趣味</h4>
                <div class="accordion__content">美術鑑賞・筋トレ・旅行・音楽(藤井風・平井大)・読書</div>
                <h4 class="accordion__title js-accordion-title">性格</h4>
                <div class="accordion__content">穏やか・まじめ・コツコツ励む</div>
                <h4 class="accordion__title js-accordion-title">好きな食べ物</h4>
                <div class="accordion__content">生かき・ヨーグルト</div>
            </div><!-- accordion__container -->
        </div>
        <!-- //accordion -->

    </section>
    <!-- //aboutSec -->


    <!-- careerSec -->
    <section class="careerSec section-underlayer bg-bro">
        <div class="wrapper">
            <h2 class="section__title">career</h2>
            <ul class="careerSec__list">
                <li class="careerSec__item">
                    <div class="career-summary">
                        <span>2013年</span>
                        <span class="icon-24">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/about/circle.png')); ?>" alt="circle"></span>
                        <span class="career-summary__text">都内の4年制大学に入学</span>
                    </div>
                    <div class="career-description">
                        社会学を専攻し、女性労働や日本の貧困の根本原因について学びました。また社会調査士を取得し、データ分析ツールspssを使用した分析や、アンケート調査を習得しました。
                    </div>
                </li>
                <li class="careerSec__item">
                    <div class="career-summary">
                        <span>2017年</span>
                        <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle.png')); ?>" alt="circle"></span>
                        <span class="career-summary__text">大学を卒業後、川崎市役所に入庁
                        </span>
                    </div>
                    <div class="career-description">
                        貧困問題に行政として携わりたいとの思いで、川崎市役所の福祉職に入職しました。生活保護課のケースワーカーとして生活保護を受けられている市民の方へのケースワークや事務等に携わりました。
                    </div>
                </li>
                <li class="careerSec__item">
                    <div class="career-summary">
                        <span>2018年</span>
                        <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle.png')); ?>" alt="circle"></span>
                        <span class="career-summary__text">社会福祉法人　かながわ共同会に入社</span>
                    </div>
                    <div class="career-description">
                        福祉の現場でより直接支援をしたいと考え、社会福祉法人かながわ共同会へ入社しました。入所している重度の知的
                        障害の方の生活介護支援を行いました。利用者さまにとって最良の生活環境づくりに努めました。
                    </div>
                </li>
                <li class="careerSec__item">
                    <div class="career-summary">
                        <span>2020年</span>
                        <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle.png')); ?>" alt="circle"></span>
                        <span class="career-summary__text">デジハリ横浜校でWebデザインを学ぶ</span>
                    </div>
                    <div class="career-description">
                        ホームレスの方々を支援するNPO団体で活動する中で、社会問題をITと掛け合わせて発信したいと考えるようになりました。就業と平行しスクールでWebデザインを学んだ後に、
                        <span><a class="link" href="https://okaeri-cha-ri.com/index.html">Webサイト（おかえり）</a></span>を作成しました。
                    </div>
                </li>
                <li class="careerSec__item">
                    <div class="career-summary">
                        <span>現在</span>
                        <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle.png')); ?>" alt="circle"></span>
                        <span class="career-summary__text">転職活動中</span>
                    </div>
                    <div class="career-description">
                        福祉とITをかけ合わせることで、より多くの方にアプローチしたいと考えました。デザインカンプからのコーディングはもちろん、新しい技術を積極的に学び、実務に活かしていきます。
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //careerSec -->

    <!-- skillsSec -->
    <section class="skillsSec section-underlayer wrapper">
        <h2 class="section__title">skills</h2>
        <div class="skillsSec__inner">
            <figure>
                <img class="only-PC" src="<?php echo esc_url(get_theme_file_uri('img/about/coding.png')); ?>" alt="PCの画像">
                <img class="only-SP" src="<?php echo esc_url(get_theme_file_uri('img/about/coding-sp.png')); ?>" alt="PCの画像">
                <figcaption>
                    <h3>HTML/css/sass/jQuery/<br class="only-SP">JavaScript/<br class="only-PC">WordPress/CSS設計/Git</h3>
                    <p>レスポンシブデザイン、Sassの記述が可能です。jQueryやJavaScriptを用いてサイトに動きを付けることも可能です。静的サイトにWordPressを組み込みました。
                        後に管理・更新がしやすいようなコーディングを心掛けるため、Sassの記述やCSS設計も取り入れています。
                    </p>
                </figcaption>
            </figure>
            <figure class="skillsSec__right">
                <img class="only-PC" src="<?php echo esc_url(get_theme_file_uri('img/about/design.png')); ?>" alt="Figmaのロゴの画像">
                <img class="only-SP" src="<?php echo esc_url(get_theme_file_uri('img/about/design-sp.png')); ?>" alt="Figmaのロゴの画像">
                <figcaption>
                    <h3>Figma/XD/photoshop/<br class="only-SP">illustrator</h3>
                    <p>Figmaを用いて、オリジナルポートフォリオを作成しました。photoshopを用いてバナーや名刺の作成も可能です。Illustratorは、現在勉強中ですが基本的な機能は問題なく使用できます。
                    </p>
                </figcaption>
            </figure>
            <div>
            </div>

        </div>
    </section>
    <!-- //skillsSec -->

    <!-- fortSec -->
    <section class="fortSec section-underlayer bg-bro">
        <div class="wrapper">
            <h2 class="section__title">skills in works</h2>

            <!-- タブメニュー -->
            <ul>
                <li class="tab active">コーディング</li>
                <li class="tab">学習欲</li>
                <li class="tab">傾聴力</li>
            </ul>
            <!-- タブコンテンツ -->
            <div class="panel show">
                <p class="panel__title">1 コーディング</p>
                <p class="panel__details">デザインカンプからのコーディングが可能です。Figma/XD/photoshop/illustratorのソフトを使用してコーディングができます。
                </p>
                <p class="panel__details">
                    JavaScriptを用いてサイトに動きを付けたり、WordPress化をして更新しやすいサイト作成が可能です。CSS設計のBEM手法を用いて、管理しやすいサイト作りを心掛けています。何より、コーディングをすることが好きです。
                </p>
            </div>
            <div class="panel">
                <p class="panel__title">2 学習欲</p>
                <p class="panel__details">
                    新しいことを自らキャッチアップし、学ぶことに大きな喜びを感じます。前職では働きながら介護福祉士初任者研修の資格を取ったり、障害特性の理解促進のために文献を読むことで、利用者様のよりよい生活支援に活かしてきました。
                </p>
                <p class="panel__details">またWebデザインの学校に通い、Webサイトを作成するなど新たな分野にも積極的に学んできました。</p>
                <p class="panel__details">今後はコーダーとして常に新しい技術を得ながら、Web制作に挑戦します。</p>

            </div>
            <div class="panel">
                <p class="panel__title">3 傾聴力</p>
                <p class="panel__details">
                    福祉職の経験から、相手の気持ちに親身になって寄り添いニーズにそった支援を心掛けてきました。重度知的障害を持つ方の言語化されにくいご本人の気持ちに寄り添い、表情や身体的反応よりご本人の気持ちを汲み取り、よりよい生活環境づくりに努めました。
                </p>
                <p class="panel__details">環境整備をすることで、障害特性ゆえに生じる混乱が無くなったり、普段の生活で素敵な笑顔が見られた際は大きなやりがいを感じました。</p>
                <p class="panel__details">今後も親身なコミュニケ―ションを大切に、実務に励んでいきたいです。</p>
            </div>
        </div>
    </section>
    <!-- //fortSec -->

    <!-- visionSec -->
    <section class="visionSec section-underlayer wrapper">
        <h2 class="section__title">vision</h2>
        <ul>
            <li class="vision-item">
                <div class="vision-summary">
                    <span class="vision-term">Vision1</span>
                    <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle-bg-white.png')); ?>" alt="circle"></span>
                    <span class="vision-summary__text">コーディングの基礎を固め、制作スキルを上げる</span>
                </div>
                <div class="vision-description">
                    実務経験を数多く積み、コーディングのスキルを上げていきます。作業スピードを上げ、短期間で
                    クライエントさまのニーズに沿ったコーディングします。
                </div>
            </li>
            <li class="vision-item">
                <div class="vision-summary">
                    <span class="vision-term">Vision2</span>
                    <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle-bg-white.png')); ?>" alt="circle"></span>
                    <span class="vision-summary__text"> ユーザビリティに配慮した設計力を身につける</span>
                </div>
                <div class="vision-description">
                    CSS設計を用いて、よりユーザーが使用しやすいと感じるサイトを作ります。
                </div>
            </li>
            <li class="vision-item">
                <div class="vision-summary">
                    <span class="vision-term">Vision3</span>
                    <span class="icon-24"><img src="<?php echo esc_url(get_theme_file_uri('img/about/circle-bg-white.png')); ?>" alt="circle"></span>
                    <span class="vision-summary__text">あらゆる実装を任される、コーダーとして活躍する</span>
                </div>
                <div class="vision-description">
                    あらゆる課題に対応できるオールラウンドなコーダーを目指します。より高度な技術も習得し、フロントエンドエンジニアとしてキャッチアップしていきたいです。
                </div>
            </li>
        </ul>
    </section>

    <!-- //visionSec -->


    <!-- cta -->
    <section class="ctaSec section-underlayer bg-bro">
        <div class="wrapper">
            <h2 class="section__title">contact</h2>
            <p>ポートフォリオWebサイトをご覧頂き<br class="only-SP">ありがとうございます。</p>
            <p>ご連絡の際は、お気軽に<br class="only-SP">下記リンク先フォームをご利用ください。</p>
            <div class="btn"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></div>
        </div>
    </section>
    <!-- //cta -->

    <div id="pagetop"><a href="#"></a></div>

</main>
<!-- //main -->


<?php get_footer(); ?>