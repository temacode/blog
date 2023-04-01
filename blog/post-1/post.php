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
                    <p>Токсичная дружба</p>
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
                    <h3>Токсичная дружба</h3>
                    <div class="post-date">
                        <p>24.10.19</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <b>Дружба бывает разная: с частыми встречами или на расстоянии, с бесконечными разговорами или «редко, но метко». Однако бывают случаи, когда дружеские отношения приобретают иную подоплёку, подразумевающую нарушение личных границ.</b><br><br>



                    <h4>Что такое toxic friendships?</h4><br><br>

                    Токсичная дружба – это отношения, которые наносят психологический ущерб одному или нескольким участникам взаимодействия.<br><br>


                    Предлагаю рассмотреть два распространенных примера проявления токсичной дружбы, с которыми столкнулись я и мои знакомые на своем личном опыте.<br><br>

                    <img src="post-img-1.jpg" alt="">

                    <div class="quote">
                        <p>I. Самый «популярный» корень болезненных дружеских отношений - РЕВНОСТЬ и ЧУВСТВО СОБСТВЕННИЧЕСТВА</p>
                    </div>

                    Токсичная дружба, базирующаяся на чувстве ревности, проявляется в нарушении личных границах (борьба за внимание и времяпрепровождения, например). Главная идея - ты мой друг и больше ничей. Отсюда и растут ноги необходимости в чрезмерном контакте: навязчивые звонки/сообщения, желание одного из партнера постоянно присутствовать в личной жизни другого и проводить вместе время.<br><br>

                    <i>Из опыта моих друзей:</i><br><br>

                    Одна моя близкая знакомая (пусть будет Лиза) вечно жаловалась на то, что ее подруга требует настолько много внимания, что порой чувствует гонку за «трон победителя» между ее благоверным и этой подружкой. В случае отказа Лиза в свой адрес слышала откровенные манипуляции из разряда: «Ты же моя подруга. Ты должна…Совсем про меня забыла». Манипуляции такого рода - яркий признак, что ваши границы и личное пространство не ценятся. <br><br>

                    В данной ситуации было бы целесообразно напрямую обсудить с подругой «наболевший» вопрос, откровенно поделиться своими чувствами и пояснить, что конкретно вам доставляет дискомфорт. А дальше - дело рук реакции слушающего :) <br><br>

                    Если вы почувствуете, что ваш посыл не услышан, и вы не на одной волне, задайте себе вопрос: для чего мне эти отношения? Что мне они приносят и что забирают? Стоит ли их продолжать?

                    <div class="min-quote">
                        <p>*Личные границы могут быть нарушены и в денежном плане (материальном) под тем же соусом «Ты же мой друг, одолжи».</p>
                    </div>
                    <img src="post-img-2.jpg" alt="">

                    <div class="quote">
                        <p>
                            <h4>II. ЖЕРТВЕННОСТЬ </h4>

                            Такой формат дружбы, требующий жертв ради кого-то или чего-то, лихо определяет роли треугольника Карпмана: жертва, спасатель и палач (или тиран). Обычно наскучивают такие отношения спасателю (или палачу, иногда эти две роли соединяются в одном лице), а жертва в свою очередь получает все лавры - вот тебе и забота, и внимание, и затраченная энергия окружающих в твою сторону.
                        </p>
                    </div>


                    Признаки жертвенной дружбы:
                    <ul class="line-list">
                        <li>все разговоры базируются лишь на «жертве» и ее проблемах</li>
                        <li>когда получает отказ в помощи и пр. реагирует агрессивно </li>
                        <li>перекладывает ответственность </li>
                    </ul>


                    <i>Из опыта моих друзей:</i><br><br>

                    - «Моя подруга вечно требует и ждет от меня поддержки. Если вдруг она поругалась с парнем, сразу звонит мне, прося приехать на подмогу. Если вдруг она попадает в какую-либо неприятность, разумеется, я «должным» образом откладываю личные дела и бегу к ней. Я много раз спрашивала себя: зачем я это делаю? Почему ставлю ее проблемы выше себя?<br>
                    Ответ - оправдание. Оправдываю свое поведение тем, что подруга росла без мамы и она нуждается в поддержке. Но тем не менее, чувствую, что наши отношения состоят на 80% только лишь из ее драм. Грубо говоря, отдаю всю себя, но не получаю отдачу взамен. Мы с детства дружим, разве можно взять и перестать общаться?».<br><br>

                    Очевидно в этой истории связующее звено отношений - жалость «спасателя» к «жертве». Можно ли назвать отношения здоровыми, когда фокус всецело занят одним человеком? Верно ли расценивать экологичным чувство зависти и нарушение личных границ в дружеских связях?<br><br>

                    Парадокс вот в чем: жертва не нуждается в помощи и не рассчитывает ее получить. Все, что ей нужно, это внимание и свободные уши, в которые можно очередной раз излить душераздирающие истории. Что вы скажите и что посоветуете - не так важно. Зачастую все советы «спасателя» игнорируются.

                    Мотив остаться в дружеских отношениях в данном случае - страх. Боязнь остаться одному. Но по факту, дружбы уже никакой нет. Есть только иллюзия, за которую с большим желанием пытаетесь покрепче ухватиться. <br><br>

                    Наличие треугольника Карпмана в отношениях ставит под вопрос их качество. Поэтому говорить о важности выхода из этой Карпмановской западни не стоит - все говорит само за себя. «Как экологично выйти из любой роли треугольника» - тема, которую я расскрою в последующих статьях (дайте знак, если интересно).<br><br>

                    <div class="min-quote">
                        <p>*Совет тот же: позаботиться о личных границах и о себе.</p>
                        <p>А также на заметку: «Жертвы» бывают мастерами манипуляций и энергетическими вампирами :)</p>
                    </div>

                    <img src="post-img-3.jpg" alt="">

                    Важно помнить всегда, что дружба априори не может быть токсичной и быть в тягость. Дружба - это бескорыстное отношение друг к другу, уважение личного пространства и границ всех ее участников. Чтобы не стать узником собственных иллюзий, стоит всегда оставаться честным с самим собой. Возьмите свой самый любимый блокнот и откровенно по пунктам распишите свои ощущения:

                    <ul class="dotted-list">
                        <li>Зачем мне этот человек?</li>
                        <li>Что он привносит в мою жизнь? </li>
                        <li>Чем мне приходиться жертвовать ради этих отношений?</li>
                    </ul>
                    Если ответы будут логичными, причины конкретными, то скорее всего, рядом с вами лжедруг.
                    <img src="post-img-4.jpg" alt="">
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