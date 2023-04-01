<?php
function debug($str)
{
    $str = json_encode($str);
    echo '<script> console.log(' . $str . '); </script>';
    return;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=3">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 456px)" href="../../css/style.css?v=3">

    <script src="https://kit.fontawesome.com/5555362996.js" crossorigin="anonymous"></script>
    <script src="./js/libs/jquery/jquery-3.4.0.min.js"></script>
    <script src="./js/libs/clipboard.min.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(57546799, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/57546799" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <div class="header">
        <div class="header-logo">
            <img src="../../img/logo_name.png">
        </div>
    </div>
    <!-- <div class="socials">
        <p>Найди меня</p>
        <div class="social-links">
            <div class="func-btn">
                <a href="https://vk.com/scherbakkk" target="_blank"><i class="fab fa-vk"></i></a>
            </div>
            <div class="func-btn">
                <a href="https://instagram.com/scherbakk?igshid=1vqef0um8h1if" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="func-btn">
                <i class="fas fa-external-link-alt"></i>
            </div>
        </div>
    </div> -->
    <div class="back-btn"><a href="../../index.php"><i class="fas fa-long-arrow-alt-left"></i>Назад</a></div>
    <div class="content">
        <div class="full-post">
            <div class="full-post-header">
                <div class="full-post-header-name">
                    <p>Жить вкусно. Жить в кайф. Жить свободно</p>
                </div>
                <div class="full-post-overlay"></div>
                <?php
                $header = scandir('./');
                $header = array_diff($header, ['.', '..', '.DS_Store']);
                $header = array_values($header);
                foreach ($header as $value) {
                    $file = explode('.', $value);
                    if ($file[0] === 'header') {
                        $header = $file[0];
                        $header_type = $file[1];
                        break;
                    }
                }
                if ($header !== 'header') {
                } else {
                    $imgsize = getimagesize('./' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="full-post-content">
                <div class="full-post-name">
                    <h3>Жить вкусно. Жить в кайф. Жить свободно</h3>
                    <div class="post-date">
                        <p>15.02.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <p>Решаться на неожиданные поступки, пробовать что-то новое, сменить вектор развития или вовсе бездельничать, погрузившись в мечты… Радостям такого характера нам порой циклично приходится отказывать. Зачем? Для чего? Вероятнее всего - во имя чего угодно, но не ради себя: ради интересов наших родных и окружения, которое может не оценит, работы. Многое представляется нам весомее собственных «нарциссических» желаний. К тому же, все помнят саркастическое выражение: «мечтать не вредно».</p><br><br>

                    <p>Решиться на удовольствие часто нам мешают чувства долга, вины или ответственности. С таким «внушительным» запасом аргументов ПРОТИВ непроизвольно сами собой рождаются поводы не делать себе приятное.</p>

                    <img src="post-img-1.jpg" alt="">

                    <div class="text-header">Страх изменить сценарий</div>

                    <p>Куда проще смириться, свыкнуться с приевшимися установками, привычками и распорядками , потому что это, так или иначе, уже проверенная тропа, исход который представляется очевидным, чем свернуть за угол и попробовать двигаться по иному маршруту. Да, развязка этого пути может оказаться сюрпризом - приятным или не очень. Герой-провокатор, заставляющий снова и снова выбирать 2ой вариант, - страх. Страшно потратить деньги в пустую, страшно безвозвратно потерять, страшно разочароваться… Список можно продолжать до бесконечности. Наш мозг способен выдать сто и один аргумент против, дабы остаться в теплой и понятной вдоль и поперек зоне комфорта. </p><br><br>


                    <p>В данном случае, следует каждый раз напоминать себе, что бесконечно перенося желаемое в неопределенное будущее, мы рискуем лишить себя вкуса к жизни и наделить бытие утомительно серыми днями.</p><br><br>


                    <div class="min-quote">
                        <b>Почему мы запрещаем себе удовольствие?</b><br><br>
                        <p>«Потому что верим тому, что нам говорили и говорят другие. Нужно достичь личной и духовной автономии, чтобы быть в состоянии прожить свою собственную жизнь и испытать удовольствие. Удовольствие – это признак свободы духа. Мы слишком часто оказываемся в плену ложной скромности, которая заставляет нас принимать предписания моралистов за чистую монету».</p><br><br>

                        <i>(Роберт Мизрахи -французский философ, отстаивающий законность и важность удовольствия в нашей жизни).</i>
                    </div>

                    <img src="post-img-2.jpg">

                    <div class="text-header">Страх чужого мнения</div>

                    <p>На очереди еще один противник осуществления желаний и жизни в кайф - боязнь не соответствовать общепринятым нормам и требованиям.</p><br><br>

                    <p>Когда человек принимает себя разным, осознает свои желания и нежелания, способен оставаться собой, перед ним открывается возможность наслаждаться. В ином случае, он скован мнением окружающих, идет на поводу у чужих представлений о том, что «на самом деле» должно приносить удовольствие, как отдыхать, что выбирать и как себя вести. Удовольствие нуждается в свободе. В свободе от чужих предрассудков. Есть только ты и твоя индивидуальная история, которую ты сам из года в год творишь.</p><br>

                    <div class="min-quote">В сексуальных отношениях эта проблематика ярко просматривается. Например, представьте ситуацию: вы оказались в постеле того самого, кто так долго добивался вашего внимания и ухаживал за вами; того, кто не на шутку вскружил вам голову. День Х настал. Что вы делаете? Вместо того, чтобы наслаждаться процессом, «включиться» в происходящее, вы пытаетесь представить в своей голове то, как выглядите в данный момент в глазах партнера. Или вы гадаете все это время вместо того, чтобы расслабиться: «Хм, интересно, а как ему мое тело? Если я сделаю так, будет ли ему классно?» Получите ли вы удовольствие от такой близости? Ваши ставки :) </div>

                    <div class="min-quote">
                        Или другой пример. Моя подруга любит фотографировать. Купила дорогостоящую технику, прошла курсы, отсняла всех своих подруг - собственно, все как полагается. НО заявить о себе, о своих намерениях творить публично (в том же всеми любимом Инстаграм) не может решиться. Главным врагом и мешающим фактором является мнение друзей, коллег, семьи и тд. «Ой, сейчас скажут, что я фигней страдаю, что в моем возрасте надо более серьезными вещами заниматься». Риторический вопрос: взращивается ли обесценивание собственных возможностей внутри нас в результате подобного отождествления с чужими взглядами?
                    </div>

                    <img src="post-img-3.jpg">

                    <div class="text-header">Страх признаться</div>

                    <p>Для того, чтобы в нашу жизнь постучалось УДОВОЛЬСТВИЕ, нам следует для себя его обозначить. Что такое удовольствие лично для меня? Что меня радует? Какой мне представляется «вкусная» жизнь?</p><br>

                    <p>Это понятие растяжимо, каждый его трактует по-своему. Например, для кого-то кайф в мелочах, размеренном стиле жизни, утренней йоге на берегу океана. Для другого удовольствие не представляется без атрибутов роскоши, динамичного круговорота событий, без активной деятельности. Вопрос «что приносит/не приносит удовольствие тебе?» - не так прост, как кажется на первый взгляд. Возьми прямо сейчас два листа А4. На одном с двух сторон подробно распиши, что по-настоящему радует тебя (откликается в теле: появляются мурашки на коже при мысли, перехватывает дыхание и тд); на другом - навязанные обществом «удовольствия», которые не находят отклик в тебе. Честно признавшись самому себе, ты можешь определить вектор движения, чтобы жить так, как кайфово именно тебе, а не Маше из соседнего подъезда :)</p><br>

                    <img src="post-img-4.jpg">

                    <div class="text-header">Берегите свое пространство ♡</div>
                    <p>Читать далее:</p>
                    <div class="next-post">
                        <?php
                        $posts = array_reverse(scandir('../'));
                        $now = explode('/', __DIR__);
                        include '../../helpers/posts-name.php';
                        echo ('<br><br>');
                        foreach ($posts as $post) {
                            if ($post !== '.' && $post !== '..' && $post !== '.DS_Store' && $post !== $now[count($now) - 1]) {
                                echo ('
                                    <div class="next-post-block">
                                        <p>' . $posts_name[$post] . '</p>
                                        <a href="../' . $post . '/post.php" class="next-post-btn">Читать...</a>
                                    </div>
                                    ');
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back-btn"><a href="../../index.php"><i class="fas fa-long-arrow-alt-left"></i>Назад</a></div>
    <!-- <div class="socials">
        <p>Найди меня</p>
        <div class="social-links">
            <div class="func-btn">
                <i class="fab fa-vk"></i>
            </div>
            <div class="func-btn">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="func-btn">
                <i class="fas fa-external-link-alt"></i>
            </div>
        </div>
    </div>
    <div class="share-block" id="shareBlock">
        <p>Поделиться...</p>
        <div class="copy-post-link">
            <input type="text" id="link" value="blog.ru/toxic-love">
            <div class="copyBtn" id="copyBtn" data-clipboard-target="#link"><i class="far fa-copy"></i></div>
        </div>
        <div class="share-socials"></div>
    </div>
    <script src="./js/index.js"></script> -->
</body>

</html>