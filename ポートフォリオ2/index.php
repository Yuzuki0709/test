<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryuto Iwamoto</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<body>
    <div id="top">
        <div class="top-wrapper">
            <header id="header">
                <div class="header-wrapper">
                    <h1 class="header-logo">Ryuto Iwamoto</h1>
                    <ul class="area-nav-header">
                        <li><a class="goSection" href="#top">Top</a></li>
                        <li><a class="goSection" href="#about">About</a></li>
                        <li><a class="goSection" href="#works">Works</a></li>
                        <li><a class="goSection" href="#skill">Skill</a></li>
                        <li><a class="goSection" href="#services">Services</a></li>
                        <li><a class="goSection" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </header>
        </div>

        <div class="main">
            <div class="main-wrapper">
                <img class="main-vis" src="img/top-bg.jpg" alt="">
                <h2 class="concept"><span class="fadein-right fadein">心理学</span>✕<br><span class="fadein-left fadein">Webサイト</span></h2>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="about-wrapper container">
            <img class="about-left" src="img/about.jpg" alt="about">
            <div class="about-right">
                <p class="title about-title">About</p>
                <p class="sentent about-sentent">
                    氏名：岩本竜斗（いわもと　りゅうと）<br>
                    所在地：山梨県<br>
                    お問い合わせ：ryuto2001@ezweb.ne.jp<br>
                    事業内容：デザイン, HTML・CSSコーティング<br>
                    <br>
                    心理学やWebページ、プログラミングを勉強している専門学生です。<br>
                    心理学とWebページの融合を目指しています。<br>

                    <?php echo "Hello World" ?>
                </p>
            </div>
        </div>
    </section>

    <section id="works">
        <div class="works-wrapper container">
            <p class="title works-title">My Works</p>
            <div class="content-box">
                <div class="content-works">
                    <a class="work-img" target="_blank" href="https://yuzuki0709.github.io/isara/"><img src="img/isara.png" alt=""></a>
                    <p class="sentent">isara 写経</p>
                    <a target="_blank" class="pearent" href="https://isara.life/">→本家様</a>
                </div>
                <div class="content-works">
                    <a class="work-img" target="_blank" href="https://yuzuki0709.github.io/Kanna-Hashimoto/."><img src="img/hasikan.png" alt=""></a>
                    <p class="sentent">橋本環奈 HP 写経</p>
                    <a target="_blank" class="pearent" href="https://www.discovery-n.co.jp/talent/%E6%A9%8B%E6%9C%AC%E7%92%B0%E5%A5%88/">→本家様</a>
                </div>
            </div>
        </div>
    </section>

    <section id="skill">
        <div class="skill-wrapper container">
            <p class="title skill-title">My Skill</p>
            <div class="content-box-skill">
                <div class="content-skill html">
                    <img src="img/html-5.svg" alt="">
                    <div class="sentent-box">
                        <p class="skillname">HTML5<br></p>
                        <p class="sentent-skill">基本的なコーティング</p>
                    </div>
                </div>
                <div class="content-skill js">
                    <img src="img/javascript.svg" alt="">
                    <div class="sentent-box">
                        <p class="skillname">JavaScript<br></p>
                        <p class="sentent-skill">動きの実装</p>
                    </div>
                </div>
                <div class="content-skill css">
                    <img src="img/css-3.svg" alt="">
                    <div class="sentent-box">
                        <p class="skillname">CSS3<br></p>
                        <p class="sentent-skill">レスポンシブ対応までいたします</p>
                    </div>
                </div>
                <div class="content-skill jq">
                    <img src="img/jquery.svg" alt="">
                    <div class="sentent-box">
                        <p class="skillname">jQuery<br></p>
                        <p class="sentent-skill">アニメーションの実装</p>
                    </div>
                </div>
                <div class="content-skill xd">
                    <img src="img/xd.png" alt="">
                    <div class="sentent-box">
                        <p class="skillname">Adobe XD<br></p>
                        <p class="sentent-skill">デザインの制作</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services">
        <div class="serv-wrapper container">
            <p class="title serv-title">My Services</p>
            <div class="content-box-serv">
                <div class="content-serv">
                    <i class="fas fa-user-edit"></i>
                    <p class="serv-name">1.ヒアリング</p>
                    <p class="sentent-serv">どんなホームページにしたいか、どんな効果を狙っているかなど、何でもお聞かせください。ご期待に添えるようなホームページを作ってみせます。</p>
                </div>
                <div class="content-serv">
                    <i class="fas fa-file-code"></i>                    
                    <p class="serv-name">2.コーティング</p>
                    <p class="sentent-serv">デザインデータをお預かりし、適切にコーティングさせていただきます。また作業中に変更点などがございましたら、ご気軽にご相談ください。</p>
                </div>
                <div class="content-serv">
                    <i class="fas fa-mobile-alt"></i>
                    <p class="serv-name">3.レスポンシブ対応</p>
                    <p class="sentent-serv">スマホやタブレットでも正しく表示されるよう、レスポンシブ対応もさせていただきます。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-wrapper container">
            <p class="title contact-title">Contact</p>
            <div class="form">
                <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeCDqFvCqcCFeJkSV0bif7B4FLwfYOAhSlWDDxBIvDmyiOkcA/formResponse" method="post"></form>
                <input type="text" name="entry.2005620554" placeholder="Your Name">
                <input type="email" name="entry.1045781291" placeholder="Your Email">
                <textarea name="entry.839337160" id="" cols="30" rows="10" placeholder="messages..."></textarea>
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-wrapper">
            <p class="copy">&copy 2021 Ryuto All rights reserved</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>