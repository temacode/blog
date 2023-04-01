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
                    <p>Кризис в отношениях. Стадия стагнации</p>
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
                    <h3>Кризис в отншениях. Стадия стагнации</h3>
                    <div class="post-date">
                        <p>30.03.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <div class="text-header">Что такое стадия стагнации?</div>
                    <p>
                        Расшифровка очень простая: стагнация = застой. Это яркий признак необходимости двигаться дальше,
                        преодолевать очередной рубеж в отношениях и подняться на новый уровень.
                    </p><br>
                    <p>
                        Ситуация вовсе не аномальная, а даже вполне себе нормальная. Практически каждый, кто был в
                        отношениях, сталкивался с ней и даже не раз. Вопрос в другом: почему кто-то преодолевает и живет
                        дальше, а кто-то не выдерживает и принимает решение оставить отношения в прошлом.
                    </p><br>
                    <p>
                        Дело кроется в очевидном - в желании, и менее явным - в основе отношений. Если с первым пунктом
                        все понятно, то второй требует более детального разбора.
                    </p>
                    <img src="post-img-1.jpg" alt="">

                    <div class="text-header">Основа любви</div>


                    <p>Что лежит в основе твоей любви к человеку? Физиологическое влечение, социальные стереотипы,
                        чувства или разум. Как ни странно, идентификация такого рода действительно имеет немало важное
                        значение, так как этим можно ответить на многие «затыки», встречающиеся на пути в течение
                        отношений.</p><br>

                    <p>Например, зачастую из сильной привязанности (граничит с созависимостью) вырастает жертвенная
                        любовь, нездоровая история, припудренная сладкой и красочной романтикой.</p><br>

                    <div class="quote">
                        Если любовь зиждется только на эмоциональном всплеске, сексуальном влечении, выбросе адреналина,
                        какова вероятность, что такая любовь выдержит кризис или прочие непростые времена в отношениях?
                    </div>

                    <p>По этой причине особенно актуально возвращаться к истокам в моменты ощущения «недостаточности» в
                        отношениях: почему я выбрал(а) этого партнера? Что послужило основным рычагом начала отношений с
                        ним? Что я чувствую? Как мне представляется наша совместная жизнь в будущем?
                    </p><br>

                    <p>Откровенно и без притворств ответив себе на ряд щепетильных вопросов, вы взглянете на ситуацию
                        под другим углом, она покажется более прозрачной. Дело останется только за выбором, решением и
                        действием.
                    </p><br>

                    <img src="post-img-2.jpg" alt="">

                    <div class="text-header">Метафора любви</div>
                    <p>Любовь сравнима с плодом беременной женщины, который находиться в непрерывном развитии. Если
                        беременность проходит неблагоприятно с рядом различных патологий, ее плод страдает. Часто в
                        таких случаях происходит замершая беременность. В любви эти процессы мало чем отличаются, так
                        как она подобна эмбриону, который в определенный момент должен сформироваться и появиться на
                        свет. Рождение ребенка = новая стадия в отношениях. Если отношения не переходят определенный
                        рубеж, начинает страдать любовь, которая в последствие рискует потерять все признаки
                        жизнедеятельности.</p>

                    <p>И в случае с беременной женщиной, и с любовью в отношениях объединяющим фактором является
                        совместная борьба «за выживание». Желание лишь одного партнера вывести любовь на новый
                        уровень не в силах исправить ситуацию, ровно также как и беременная женщина не может
                        повлиять на исход ее положения в случае нежизнеспособного плода.</p><br>

                    <div class="min-quote">Желание и решительность <strong>обеих сторон</strong> - ключевые
                        двигатели к благополучному преодолениею кризиса в отношениях.</div>

                    <p>Стагнацию в отношениях принято считать негативным явлением. Но все же кризис такого рода
                        имеет и преимущества. Он может выступить в роли некого обличителя. Например, заставляет
                        обратить наконец-то внимание на то, на что всегда было удобно закрывать глаза, поменять
                        сценарий поведения, прислушаться к своим истинным желаниям и решиться сделать выбор,
                        взглянуть на что-то с критической стороны.</p><br>

                    <p>Однако, не всегда кризис должен быть пережитым. Иногда его наличие можно растолковать, как
                        логическое завершение человеческих взаимоотношений, которые по большому счету изжили себя. И
                        это нормально! :)</p><br>

                    <p>В любом случае кризис - начало чего-то нового. А новое непременно будет приятным!</p><br>

                    <p>Если вдруг вы находитесь в отношениях, переживающих стадию стагнации, не спешите бить тревогу,
                        нервничать и предпринимать скоропалительные решения. Это лишь очередной повод включить
                        осознанность, здраво оценить ситуацию, свои чувства и намерения по отношению к партнеру,
                        вернуться к истоком и разобраться в первую очередь С СОБОЙ.</p>

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