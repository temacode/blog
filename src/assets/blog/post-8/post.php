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
                    <p>Море любви | о расставании</p>
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
                    <h3>Море любви | о расставании</h3>
                    <div class="post-date">
                        <p>09.05.19</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <div class="text-header">Море любви | о расставании</div>
                    <p>
                        Я все-таки решилась затронуть столь щепетильную тему , как разрыв отношений/расставание с любимым человеком. Решение написать об этом далось мне непросто. Однако, я осознаю всю важность вопроса и коль люди обращаются ко мне с этим, значит, мой опыт окажется полезным и найдет отклик в сердце кого-то.
                    </p><br>
                    <p>
                        Расставание с любимым человеком - это особенный период. И совсем не важна причина: расстались вы ,любя друг друга, из-за тупика в отношениях, или же разошлись по причине утраты чувств. Объединяющее звено - потеря. Приведенные выше обстоятельства разнятся уровнем потери. В первом случае оно более гиперболизировано, сравнимо со скорбью.
                    </p><br>
                    <p>
                        Хочу рассмотреть первый вариант, так как, на мой взгляд, он самый болезненный и в своем роде интригующий (со вторым же и так все понятно). Полтора года назад я пережила предательство любимого человека, далее - разрыв и переезд. Как говорится: к такому меня жизнь не готовила :D
                    </p>
                    <img src="post-img-1.jpg" alt="">

                    <div class="quote">
                        Под предательством я подразумеваю не измену в классическом понимании, а предательство личных границ и непринятие моих желаний и интересов. Иными словами, потерпела абьюз.
                    </div>
                    <p>
                        Вот ты уже один в новой роли. Планы и цели , к которым вместе стремились неожиданно рухнули. И ты каким-то невиданным образом вынужден заполнить образовавшуюся огромную дыру в душе, которая беспрерывно дает о себе знать.
                    </p><br>

                    <div class="text-header">Что делать?</div>


                    <p>
                        <ul class="dotted-list">
                            <li>
                                Принять эту боль и осознать, что все, что сейчас происходит - это норма.
                            </li>
                            <li>
                                Дать себе время. Бездумно пытаться забить дыру чем попало - дохлый номер. Волна непрожитых истинных чувств все равно нагрянет.
                            </li>
                            <li>
                                Прожить период апатии, скорби (в тот момент я ощущала глубочайшую скорбь), а потом «подключиться» к регулярному потоку любимых дел и активностей. Этот период обладает особенными ресурсами, так как фокус смещается полностью на себя. В это время я познакомилась с интересными людьми, начала активно путешествовать, осознала свое предназначение и нашла работу по душе.
                            </li>
                            <li>
                                Работать над принятием факта, что на «отпущение» прошлых отношений (возможно) потребуется больше времени, чем представляется. И это тоже нормально.
                            </li>
                            <li>
                                Последний пункт, но не по важности - обращение к психотерапевту. Зависнуть в прошлом или циклично мыслить/ощущать душевную беспрерывную боль - распространенное явление. В таких случаях следует обязательно обратиться к специалисту. Психотерапия - уникальная возможность выявить причинно-следственную связь и пережить кризисный период максимально экологично. Сеанс у психотерапевта - это НОРМАЛЬНО.
                            </li>
                        </ul>
                    </p>

                    <img src="post-img-2.jpg" alt="">

                    <p>
                        Помни всегда: «Любые взаимоотношения, которые ты привлек в свою жизнь в текущий момент, в точности таковы, какие тебе нужны в жизни в этот момент». (с) Дипак Чопра
                    </p><br>
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