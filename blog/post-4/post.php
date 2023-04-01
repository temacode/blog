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
                    <p>4 признака зрелых отношений</p>
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
                    <h3>4 признака зрелых отношений</h3>
                    <div class="post-date">
                        <p>12.03.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <p>Отношения - беспрерывная совместная работа, участники которой , как правило, стремятся дотянуться до цели (у каждого она своя). Как и в любом другом «деле» мы опираемся на определенные ориентиры, набор каких-либо критериев или представлений. Конечно, а как же еще понимать, как правильно, а как не очень? :)</p><br>

                    <img src="post-img-1.jpg" alt="">

                    <p>Как правило, главным «мерилом» в области отношений можно считать их зрелость.</p><br>
                    <p>«Зрелость» отношений - не про возраст и уж тем более не про вытекающую из этого скуку. Однако, важно отметить, что за настоящую любовь напрасно принято принимать сильные страстные чувства, побуждающие на сумасшедшие поступки; желание проводить каждую минуту с любимым человеком; ревность; страх оступиться и потерять объекта любви. Собственничество/страсть/удовлетворение своего эго часто приписывают этому прекрасному чувству, которое на самом деле мало чего общего имеет с вышеперечисленным.</p><br>

                    <p>Я выделила 4 ощутимых признака зрелых отношений, здоровой любви.</p>

                    <img src="post-img-2.jpg" class="img-full-width" alt="">

                    <p><strong>Ощущение безопасности.</strong> Ваши отношения - безопасное, теплое и уютное место, в которое хочется возвращаться снова и снова после тяжелых трудовых будней и суеты во вне. Здесь нет места бушующим страстям. Ощущение нестабильности и отсутствия опоры говорят о незрелости отношений.</p>

                    <img src="post-img-3.jpg" alt="">

                    <div class="text-header">Уверенность</div>
                    <p>На мой взгляд, уверенность в данном случае тесно связано с доверием. Когда оба партнера стараются быть открытыми друг с другом, проявлять уважение, развивается и доверие. Когда вы оба знаете, что готовы к диалогу по любому вопросу, сомнения автоматически отсеиваются. Зрелые отношения несут ощущение спокойствия. Стоит добавить пару слов о таком сильном чувстве, как ревность, которое часто ошибочно принимают в качестве неотъемлемого атрибута любви, которое как раз-таки нарушает спокойную тихую гавань пары. Конечно, ревность - это естественное явление, но не стоит с этим перегибать. Именно ревность является одной из распространенных причин многих разрывов. Сами посудите: когда вы уверены в своем партнере, в ваших отношениях нет запретных тем для обсуждения и вы доверяете друг другу, может ли появиться ревность? А) Ревность в отношениях присутствует, так как партнер дает реальные поводы усомниться в верности. В таком случае, нужен ли вам такой человек, который лишает вас ощущения спокойствия, а напротив, заставляет понервничать? Б) Вам кажется, что партнер вот-вот «накосячит», видите повсюду знаки и подвохи, но по факту партнер ни в чем не был замечен. Здесь уже вопросы к вам. Скорее всего вы проецируете собственные страхи и комплексы на партнера из-за отсутствия той самой уверенности не только в партнёре, но и в себе. Начните с себя :) </p>

                    <img src="post-img-4.jpg" alt="">
                    <div class="text-header">Личностный рост</div>
                    <p>В зрелых отношениях партнеры поддерживают увлечения друг друга, помогают в осуществлении каких-либо планов или мечт, искренне радуются победам, ищут возможность сделать совместную жизнь еще более яркой и насыщенной. Такие отношения вдохновляют, мотивируют и вселяют уверенность. В противовес этому можно привести в пример распространенную историю, когда один из партнеров демонстрирует недоверие или неприятие к деятельности/хобби другого, тем самым вселяя в него сомнения или даже комплексы. С желанием двигаться вперед, творить и заниматься делом, которое приносит удовольствие, в таких отношениях обстоит непростая ситуация. Одно можно сказать точно - дисгармония. </p>

                    <img src="post-img-5.jpg" alt="">
                    <div class="text-header">Личное пространство - необходимость человека</div>
                    <p>Существует классное выражение: прежде чем найти вторую половинку, найди первую. Получается, чтобы две части одного союза гармонично взаимодействовали друг с другом, им необходимо сначала обрести целостность собственной личности. Человек, который осознает свою самоценность, свою природу, также осознает, что имеет право на личное пространство, на время побыть с собой или заняться личными делами, на определенный уровень конфиденциальности. Он понимает, что оба партнера - самостоятельные единицы, способные жить своей наполненной жизнью; быть вместе - это осознанный выбор, а не необходимость. Думаю, про нарушение границ в виде досмотра телефона партнера и прочего говорить не придется, все очевидно. Всем же понятно, что в зрелых отношениях такое поведение табу? :)</p>

                    <div class="quote">
                        <p>Зрелые отношения - не гарант от трудностей, разногласий или кризиса. Это естественно, это нормально. Другой вопрос: как вы справляетесь с препятствиями? Зрелость в решении проблем такого толка заключается в диалоге, в взаимоуважении, в желании слышать и идти навстречу.</p>
                    </div>

                    <img src="post-img-6.jpg" alt="">

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