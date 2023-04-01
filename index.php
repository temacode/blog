 <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Блог Полины Щербаковой</title>

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=8">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 456px)" href="../../css/style.css?v=8">

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
            <img src="./img/logo_name.png">
        </div>
    </div>
    <div class="socials">
        <p>Найди меня</p>
        <div class="social-links">
            <div class="func-btn">
                <a href="https://vk.com/scherbakkk" target="_blank"><i class="fab fa-vk"></i></a>
            </div>
            <div class="func-btn">
                <a href="https://instagram.com/scherbakk?igshid=1vqef0um8h1if" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="func-btn">
                <i class="fas fa-external-link-alt" id="shareBtn" onclick="showClipboard()"></i>
            </div>
        </div>
    </div>
    <div class="music">
        <img src="./img/music.png">
        <iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/ru/playlist/ecstatic/pl.u-pMylgaltoZW9z9?app=music"></iframe>

    </div>
    <h1>Блог</h1>
    <div class="content">
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Харизма. Что это? Дар или дело сноровки?</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-16/');
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
                    $imgsize = getimagesize('./blog/post-16/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-16/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-16/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Харизма. Что это? Дар или дело сноровки?</h3>
                    <div class="post-date">
                        <p>05.10.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Мы всегда чувствуем магнетизм, обаяние и особую притягательность некоторых людей. Кто они? Что такое необъяснимо завораживающее витает в воздухе, когда ОНИ рядом?
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-16/post.php">Читать далее...</a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Проституция, промискуитет и нимфомания. Что это? И какова связь между ними?</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-15/');
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
                    $imgsize = getimagesize('./blog/post-15/' . $header . '.' . $header_type);

                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-15/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-15/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Проституция, промискуитет и нимфомания. Что это? И какова связь между ними?</h3>
                    <div class="post-date">
                        <p>18.07.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Секс помимо остальных базовых (физических) потребностей Пирамиды Маслоу, как жажда и голод, всегда вызывал и вызывает огромный интерес и любопытство. Это нечто таинственное, о чем только недавно стало МОЖНО говорить, но все же не свободно, а в определенных рамках.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-15/post.php">Читать далее...</a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Газлайтинг. Что это? И почему о нем не принято говорить</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-14/');
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
                    $imgsize = getimagesize('./blog/post-14/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-14/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-14/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Газлайтинг. Что это? И почему о нем не принято говорить</h3>
                    <div class="post-date">
                        <p>08.07.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Газлайтинг… Нечто таинственное… В простонародье - невидимое насилие. Термин появился относительно недавно, хотя имел дело с тем, что под ним скрывается, почти каждый.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-14/post.php">Читать далее...</a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Сепарация от родителей. Что это? И как понять, что вы находитесь в непрерывной связи?</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-13/');
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
                    $imgsize = getimagesize('./blog/post-13/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-13/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-13/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Сепарация от родителей. Что это? И как понять, что вы находитесь в непрерывной связи?</h3>
                    <div class="post-date">
                        <p>03.07.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        В статье рассмотрим определение сепарации, поговорим о значимости и о том, как ее достичь. Определим для себя, насколько мы сепарированы, а также составим идеальный портрет «сепарированного» человека.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-13/post.php">Читать далее...</a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Кто есть я? Типы личности</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-12/');
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
                    $imgsize = getimagesize('./blog/post-12/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-12/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-12/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Кто есть я? Типы личности</h3>
                    <div class="post-date">
                        <p>23.06.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Человек всю свою жизнь познает себя, свои грани: мотивы поведения, реакции, желания. Ну, конечно, как все это в полной мере познать, если не раскусить «тесто», из которого он слеплен. Во многом это самое тесто и будет ответом на волнующие вопросы: объяснит как и почему человеку удалось вляпаться в очередную неприятность и почему он из раза в раз притягивает ее в свою жизнь.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-12/post.php">Читать далее...</a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Cравниваю себя с другими: чем опасно и как избавиться</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-11/');
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
                    $imgsize = getimagesize('./blog/post-11/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-11/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-11/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Cравниваю себя с другими: чем опасно и как избавиться</h3>
                    <div class="post-date">
                        <p>29.05.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Сравнение не имеет начала и конца. При любых обстоятельствах (даже самых радужных) всегда найдется повод с кем себя сравнить. Сравнение мешает проживать дни в радости.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-11/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Треугольник Карпмана | признаки зависимых отношений</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-10/');
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
                    $imgsize = getimagesize('./blog/post-10/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-10/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-10/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Треугольник Карпмана (Жертва, Спасатель, Преследователь) | признаки зависимых отношений</h3>
                    <div class="post-date">
                        <p>17.05.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Обесценивание чувств, манипулятивное общение, гиперконтроль, боязнь остаться одному - первые звоночки созависимости в отношениях</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-10/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Не могу жить без тебя</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-9/');
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
                    $imgsize = getimagesize('./blog/post-9/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-9/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-9/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Не могу жить без тебя</h3>
                    <div class="post-date">
                        <p>05.04.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Зависимые отношения… Этот феномен возникает в паре. И не так важно, кто выступает в роли партнера в «паре» - человек, алкоголь или азартная игра. Любовная зависимость также, как и алкоголизм, разрушает личность человека.</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-9/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Море любви | о расставании</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-8/');
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
                    $imgsize = getimagesize('./blog/post-8/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-8/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-8/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Море любви | о расставании</h3>
                    <div class="post-date">
                        <p>09.05.19</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>
                        Я все-таки решилась затронуть столь щепетильную тему , как разрыв отношений/расставание с любимым человеком. Решение написать об этом далось мне непросто. Однако, я осознаю всю важность вопроса и коль люди обращаются ко мне с этим, значит, мой опыт окажется полезным и найдет отклик в сердце кого-то.
                    </p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-8/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Абьюзивные отношения | Мой опыт</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-6/');
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
                    $imgsize = getimagesize('./blog/post-6/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-6/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-6/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Абьюзивные отношения | Мой опыт</h3>
                    <div class="post-date">
                        <p>26.04.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Абьюз… Абьюз… Абьюз… Попсово однако :)</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-6/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Кризис в отношениях. Стадия стагнации</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-5/');
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
                    $imgsize = getimagesize('./blog/post-5/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-5/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-5/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Кризис в отншениях. Стадия стагнации</h3>
                    <div class="post-date">
                        <p>30.03.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Если любовь зиждется только на эмоциональном всплеске, сексуальном влечении, выбросе адреналина, какова вероятность, что такая любовь выдержит кризис или прочие непростые времена в отношениях?</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-5/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>4 признака зрелых отношений</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-4/');
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
                    $imgsize = getimagesize('./blog/post-4/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-4/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-4/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>4 признака зрелых отношений</h3>
                    <div class="post-date">
                        <p>12.03.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Отношения - беспрерывная совместная работа, участники которой , как правило, стремятся дотянуться до цели (у каждого она своя). Как и в любом другом «деле» мы опираемся на определенные ориентиры, набор каких-либо критериев или представлений. Конечно, а как же еще понимать, как правильно, а как не очень? :)</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-4/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Жить вкусно. жить в кайф. Жить свободно</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-3/');
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
                    $imgsize = getimagesize('./blog/post-3/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-3/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-3/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Жить вкусно. жить в кайф. Жить свободно</h3>
                    <div class="post-date">
                        <p>15.02.20</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Решаться на неожиданные поступки, пробовать что-то новое, сменить вектор развития или вовсе бездельничать, погрузившись в мечты… Радостям такого характера нам порой циклично приходится отказывать. Зачем? Для чего? Вероятнее всего - во имя чего угодно, но не ради себя: ради интересов наших родных и окружения, которое может не оценит, работы. Многое представляется нам весомее собственных «нарциссических» желаний. К тому же, все помнят саркастическое выражение: «мечтать не вредно».</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-3/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Токсичная дружба</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-1/');
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
                    $imgsize = getimagesize('./blog/post-1/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-1/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-1/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Токсичная дружба</h3>
                    <div class="post-date">
                        <p>24.10.19</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Дружба бывает разная: с частыми встречами или на расстоянии, с бесконечными разговорами или «редко, но метко». Однако бывают случаи, когда дружеские отношения приобретают иную подоплёку, подразумевающую нарушение личных границ.</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-1/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>481</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>14</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
        <div class="post">
            <div class="post-header">
                <div class="post-header-name">
                    <p>Личные границы</p>
                </div>
                <div class="post-overlay"></div>
                <?php
                $header = scandir('./blog/post-7/');
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
                    $imgsize = getimagesize('./blog/post-7/' . $header . '.' . $header_type);
                    debug($imgsize);
                    if ($imgsize[0] > $imgsize[1]) {
                        echo '<img src="./blog/post-7/' . $header . '.' . $header_type . '">';
                    } else {
                        echo '<img class="crop-img" src="./blog/post-7/' . $header . '.' . $header_type . '">';
                    }
                }
                ?>
            </div>
            <div class="post-content">
                <div class="post-name">
                    <h3>Личные границы</h3>
                    <div class="post-date">
                        <p>20.08.19</p>
                    </div>
                </div>
                <div class="post-min">
                    <p>Что это? Почему важны? Как защитить?</p>
                </div>
                <div class="post-open">
                    <a href="./blog/post-7/post.php">Читать далее...</a>
                </div>
                <!-- <div class="post-func">
                    <div class="func-btn post-like"><i class="fas fa-heart"></i>
                        <p>217</p>
                    </div>
                    <div class="func-btn post-comment"><i class="fas fa-comment-alt"></i>
                        <p>16</p>
                    </div>
                    <div class="func-btn post-share" id="shareBtn"><i class="fas fa-external-link-alt"></i></div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="share-block" id="shareBlock">
        <p>Поделиться...</p>
        <div class="copy-post-link">
            <input type="text" id="link" value="https://scherbak.space">
            <div class="copyBtn" id="copyBtn" data-clipboard-target="#link"><i class="far fa-copy"></i></div>
        </div>
        <div class="share-socials"></div>
    </div>
    <script src="./js/index.js"></script>
</body>

</html>