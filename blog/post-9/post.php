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

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=5">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 456px)" href="../../css/style.css?v=5">

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
                    <p id="postName">Не могу жить без тебя</p>
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
                    <h3>Не могу жить без тебя</h3>
                    <div class="post-date">
                        <p>05.04.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <p>
                        Зависимые отношения… Этот феномен возникает в паре. И не так важно, кто выступает в роли партнера в «паре» - человек, алкоголь или азартная игра. Любовная зависимость также, как и алкоголизм, разрушает личность человека.
                    </p><br>
                    <p>
                        Мы привыкли употреблять слово ЗАВИСИМОСТЬ в контексте вредных привычек. Зависимость = Злоупотребление - первые возникающие ассоциации. Не стоит умалять опасность психологической (эмоциональной) зависимости в любовных отношениях. Да, из ряда зависимостей эта самая «лайтовая», так как она вредит человеку не так явно, как, например, наркомания. Однако, такого рода зависимость - в первую очередь зависимость (!!!), способная нанести разрушительные последствия не только в виде беспрестанно ноющей душевной боли, но и на физическом уровне (например, проблемы со сном или нарушение пищевого поведения). Любовную зависимость относят к виду клинического расстройства, поэтому пренебрегать профессиональной психологической помощью не стоит.
                    </p><br>
                    <div class="text-header">Что такое психологическая зависимость и как она проявляется?</div>
                    <p>
                        Потеря контроля. Непреодолимое желание и стремление к объекту «зависимости». Отсутствие самостоятельности и свободы. Состояние, при котором человек совершает действие под влиянием чего-либо или кого-либо, не по собственному желанию, а вынужденно. Такого рода несвобода опасна сильными переживаниями.
                    </p><br>
                    <p>
                        Однако, зависимости предшествует, казалось бы, весьма приятное состояние. Ведь процесс человеку доставляет огромное удовольствие. Что плохого? - спросите вы. Ничего, но только до тех пор пока эти приятные чувства не перетекут в навязчивую идею и не приведут к компульсивному поведению.
                    </p><br>
                    <p>
                        Человек, находящийся в зависимости, перестает осознавать происходящее, действует исходя из внутреннего инстинкта, несмотря на риск возможного урона здоровью (и физическому, и ментальному). Он восполняет состояние внутреннего дефицита, при этом доводя себя до истощения.
                    </p>
                    <img src="post-img-2.jpg" alt="">

                    <div class="text-header">Признаки зависимых отношений</div>
                    <strong>Амбивалентность</strong>
                    <p>
                        «Отношения меня не удовлетворяют. Я чувствую, что то, что происходит неправильно. Я не могу находиться в этих отношениях, но у меня не выходит противостоять своему внутреннему аффекту. Поэтому я решаю оставаться в них и продолжить верить, что все наладится и я наконец получу то, что мне не хватает».
                    </p><br>
                    <p>Взаимная Любовь сопровождается переживанием внутреннего согласия. В случае Безответной Любви внутреннее согласие, как правило, отсутствует, однако, есть решение человека остаться. При <strong>любви зависимой</strong> нет и согласия, и решения.</p><br>

                    <p>
                        В зависимости жизнь человека концентрируется вокруг отношений и на самом партнере; остальное представляется ему незначительным приложением.
                    </p><br>
                    <p>
                        Любовная зависимость также зачастую проявляется и в некой безличности в отношениях, то есть для зависимого является ценностью сами отношения, а не партнер. Иными словами, для зависимого сам по себе партнер теряет ценность, он ценит то, что может дать и компенсировать в его жизни другой человек.
                    </p><br>
                    <p>
                        Так как в зависимости зачастую нет места осознанности, жертва может элементарно не осознавать свои чувства. Следовательно, его поведение ограничено.
                    </p><br>
                    <p>
                        Человек ощущает внутреннюю необходимость предпринимать определенные действия, чтобы сохранить значимые отношения.
                    </p><br>
                    <p>
                        Из этого следует классическая история про старый добрый абьюз, о котором я ранее уже подробно писала в статье <a href="../post-6/post.php" class="text-link">АБЬЮЗИВНЫЕ ОТНОШЕНИЯ | МОЙ ОПЫТ</a>. <br>Появляются роли: жертва, которой что-то запрещено, и «всемогущий» тиран.
                    </p>

                    <img src="post-img-3.jpg" alt="">

                    <strong>Без него нет смысла</strong>
                    <p>
                        Потеря свободы у зависимого человека обуславливается отсутствием смысла существовать вне отношений с партнером. Однако, как правило, понимание бессмысленности в продолжении этих болезненных отношений также присутствует (амбивалентность).
                    </p><br>
                    <p>
                        Зависимые отношения - это замкнутый круг. Жертва страдает, ей плохо в этих отношениях поскольку, как правило, ощущает униженность и неуважение к себе со стороны тирана. Но после расставания боль усиливается, после чего зависимый человек вынужден возвращаться снова и снова.
                    </p><br>
                    <p>
                        Зависимым отношениям характерны и «эмоциональные качали», которые обуславливаются резкими скачками: от эйфории до отчаяния, от чувства собственной значимости до ничтожности.
                        После окончательного разрыва зависимому человеку обычно требуется несколько лет, чтобы прийти в себя после «круга страданий» такого рода.
                    </p><br>
                    <p>
                        Когда в отношениях наступает очередной недолгий период под названием «все хорошо», ощущения зависимого обостряются и становятся максимально яркими и красочными. Эти чувства сравнимы с влюбленностью на первых стадиях отношений.
                    </p>
                    <p>
                        «Наконец-то! Теперь моя жизнь имеет смысл»
                    </p><br>
                    <p>
                        Исследователи утверждают, что именно эти эмоциональные переживания, яркие вспышки и представляют особую значимость для зависимого человека, ради которых он готов снова и снова проходить этот «адовый» замкнутый круг. Надежда и вера пережить это снова - вот, что ему помогает.
                    </p><br>
                    <p>
                        В здоровых отношениях подобные яркие вспышки возможны во время влюбленности, а в стабильных здоровых отношениях переживания такого характера, напротив, сбавляют обороты и становятся более глубокими.
                    </p>

                    <img src="post-img-4.jpg" alt="">
                    <strong>Самоценность</strong>
                    <p>
                        Как и писала ранее, зависимость разрушает личность человека. Алкоголик отождествляет себя с бутылкой горячительного напитка, в ней заключена его жизнь, в ней - он. Без бутылки он чувствует себя неполноценно, жизнь не представляется наполненной. По такой же системе действия происходят и в любовной зависимости.
                    </p><br>
                    <p>
                        В отношениях зависимый человек бессознательно намеревается заполнить дефицит душевных «пустот», которые он (как чувствует жертва) самостоятельно восполнить не в силах, за счет другого человека и их отношений (компенсация извне).
                        <ul class="line-list">
                            <li>
                                дефицит самоценности и уверенности в себе (отношение к себе пропорционально отношению со стороны партнера к человеку. «Когда он меня ценит, я ценю себя»)
                            </li>
                            <li>
                                дефицит опоры (невозможность представить свою жизнь вне контекста отношений. «Одна без него я пропаду»)
                            </li>
                            <li>
                                отсутсвие вкуса к жизни (положительные эмоции связаны только с партнером и с отношениями с ним. «Она - моя радость. Она пробуждает во мне жизнь».
                            </li>
                        </ul>
                    </p>
                    <div class="quote">
                        Если вы осознали, что находитесь в зависимых отношениях, обратитесь за психологической помощью к специалисту, поскольку, не стоит забывать, что зависимость от отношений с партнером схожа с алкоголизмом и наркотической зависимостью. Если упустить момент и вовремя не проработать сложившуюся проблему с психологом, есть шанс повторить сценарий зависимости уже в других отношениях.
                    </div>
                    <p>
                        О том, как пережить расставание, читайте в моей следующей статье <a href="../post-8/post.php" class="text-link">«МОРЕ ЛЮБВИ | О РАССТАВАНИИ»</a>
                    </p><br>

                    <img src="post-img-5.jpg" alt="">

                    <div class="text-header text-header-footer">Берегите свое пространство ♡</div>
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