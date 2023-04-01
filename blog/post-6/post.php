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

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=4">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 456px)" href="../../css/style.css?v=4">

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
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
                .insertBefore(k, a)
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
                    <p>Абьюзивные отношения | Мой опыт</p>
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
                    <h3>Абьюзивные отношения | Мой опыт</h3>
                    <div class="post-date">
                        <p>26.04.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <div class="text-header">Абьюз… Абьюз… Абьюз… Попсово однако :)</div>
                    <p>
                        В сети и так достаточно информации об этом, казалось бы, что здесь еще обсуждать?
                    </p><br>
                    <p>
                        Все верно. Решиться на открытое обсуждение популярнейшей проблемы отношений мне было непросто. Поверьте, задавалась тем же вопросом. Так бы и не решилась, если абьюз не коснулся бы меня 1,5 года назад. На тот момент ни моя харизма, ни сила духа не смогли меня спасти и безболезненно вытащить из болота полного беспочвенной ревности, психологического давления и манипуляций. На вопрос «ПОЧЕМУ» ответ нашла: я потеряла связь с собой, была неосознанна и растворилась в партнере и отношениях с ним.
                    </p><br>
                    <p>
                        Выход из созависимых отношений для меня был серьезным потрясением, болезненным периодом, который я перенесла благодаря поддержки близких, любимому делу и терапии, конечно же. Этот момент разделил мою жизнь на до и после.
                    </p><br>
                    <p>
                        Да, больно. Да, трудно поверить тому, что в реальности приключилось с тобой. Но я бесконечно благодарна этому опыту. Он сделал меня смелее, научил искать в глубинах души силу, идти вперед, прислушиваясь к внутреннему голосу, и еще раз убедил, что в страхе обитают огромные ресурсы.
                    </p>
                    <img src="post-img-1.jpg" alt="">

                    <div class="text-header">Что такое абьюзивные отношения?</div>


                    <p>
                        Это понятие в психологии появилось недавно, обозначает жестокость в словах или действие в сторону партнера. Абьюзом можно считать систематическое нарушение личных границ (на физическом/психологическом уровнях).
                    </p><br>

                    <div class="quote">
                        (!) Важный момент: абьюз и кризис в отношениях - не одно и то же. Конфликты и кризисные периоды проходят, а абьюз - нет.
                    </div>
                    <div class="quote">
                        (!!) Важный момент №2: абьюзерами могут быть не только мужчины, но и женщины.
                    </div>

                    <div class="text-header">Что за собой несут?</div>

                    <p>
                        Физическое насилие - любое телесное повреждение.
                        Моральное - беспочвенная ревность, контроль действий и контактов, манипуляции, грубость.
                        Сексуальное - принуждение к половому акту.
                    </p><br>

                    <p>
                        Человек, находившийся в таких отношениях в основном испытывает страх, разочарование и боль. Он вынужден постоянно жертвовать своими интересами и желаниями во благо своему партнеру. А тот в свою очередь заставляет постоянно испытывать чувство вины за «проступки».
                    </p><br>

                    <p>
                        Случается так, что жертва абьюза не всегда осознает, что строит отношения с «тираном». В моем случае, я поняла, что нахожусь в нездоровой истории только к концу отношений. Эмоционально и физически на тот момент была опустошена (вес стабильно держался все 2 года отношений на цифре 39 кг), психически, безусловно, травмирована. Самое горькое - осознание предательства (как личности). К сожалению, мой пример - это частая история. Я наивно принимала гиперконтроль за тревогу или заботу, ревность за боязнь меня потерять. Увы, в таких ситуациях впервую очередь абьюзер озабочен только собой, а его намерения не такие розово-пушистые, как охотно желается представлять.
                    </p>

                    <img src="post-img-2.jpg" alt="">

                    <div class="text-header">
                        Что делать, если пришло осознание, что ты в абьюзивных отношениях?
                    </div>
                    <p>
                        Во-первых, обратиться к психотерапевту. Не стоит пренебрегать помощью специалиста, с ней можно пережить травматический опыт быстрее и экологично.
                        Во-вторых, важно понять, что перевоспитать абьюзера практически невозможно, так как в основном он полноценно не осознает своей вины.
                    </p><br>

                    <p>
                        И напоследок, отношения должны приносить радость обоим партнерам, которые имеют равные права на личное пространство, интересы и деятельность. Никто не имеет права вторгаться в ваши границы и уж тем более их разрушать.
                    </p>
                    <img src="post-img-3.jpg" alt="">

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