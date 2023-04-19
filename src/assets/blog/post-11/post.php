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

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=6">
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
    <div class="content">
        <div class="back-btn"><a href="../../index.php"><i class="fas fa-long-arrow-alt-left"></i>Назад</a></div>
        <div class="full-post">
            <div class="full-post-header">
                <div class="full-post-header-name">
                    <p>
                        Сравниваю себя с другими: чем опасно и как избавиться
                    </p>
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
                    <h3>
                        Сравниваю себя с другими: чем опасно и как избавиться
                    </h3>
                    <div class="post-date">
                        <p>29.05.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <p>
                        «Все познается в сравнении» - установка, с которой многие из нас проживают свои дни с пеленок. И да, разумеется, не стоит забывать о родительских ошибках из разряда: «А Маша из соседнего подъезда получила 5…». Вроде и родителей понять можно - ведь как иначе более наглядно объяснить ребенку, особо не напрягаясь, а с другой стороны - у ребенка в графе «уверенность в себе» можно смело ставить знак вопроса. И это мы еще не говорим о том, как мелочи такого рода лихо застревают в подсознании, порождая комплексы уже в зрелом возрасте.
                    </p>
                    <img src="./post-img-1.png">
                    <div class="min-quote">
                        <strong>
                            Без черного нет белого. Без зла нет добра.
                        </strong>
                    </div>
                    <p>
                        Оглядываться по сторонам, сопоставлять и оценивать свои успехи с достижениями другого - совершенно естественное явление, «запрограмированное» в нас теми же родителями, не упускающими возможность ткнуть носом в промах или упомянуть Машу Иванову. Сравнение в таком случае редко, когда подчеркивает сильные стороны, даже напротив, обнажает и указывает на слабости. У этого естественного явления есть второе имя - Путь токсичного бытия или как разрушить собственную жизнь.
                    </p><br>
                    <p>
                        Главная проблема <strong>сравнения</strong> - это смещенный фокус вовне. Сравниваем, чтобы понять хуже мы или лучше.
                    </p><br>
                    <p>
                        Всегда найдется кто-то богаче, красивее, успешнее - это не новость. Однако, стоит задуматься вот над чем: мы бессознательно сами ищем таких людей, «напарываемся» на них и убеждаемся в собственной «неполноценности».
                    </p><br>
                    <p>
                        То, что чужие ресурсы и возможности нас не касаются, следовательно, и волновать не должны, очевидные вещи. Однако, мы снова и снова с упоением вступаем на эти грабли и… сами знаете что.
                    </p><br>
                    <div class="min-quote">
                        <strong>
                            Сравнение не имеет начала и конца. При любых обстоятельствах (даже самых радужных) всегда найдется повод с кем себя сравнить. Сравнение мешает проживать дни в радости.
                        </strong>
                    </div>
                    <img src="./post-img-2.png" class="img-full-width">
                    <p>
                        Что делать?<br>
                        Заняться осозноннастью<br>
                        Да, попсово! Но как эффективно!
                    </p><br>
                    <div class="text-header">Шаг №1</div>
                    <p>
                        Осознай свою уникальность. Возьми чистый лист бумаги (а лучше сразу десять) и пропиши все-все свои сильные стороны, все достоинства. Не скупись на комплименты и добрые слова :)
                    </p><br>
                    <p>
                        Важно помнить, что мы все уникальные личности. Сочетание недостатков и достоинств, бекграунд и опыт делают нас такими. В этом и состоит ценность.
                    </p>
                    <div class="quote">
                        <p>
                            Обрати внимание, что сравнение, как правило, проскальзывает по тем критерием, которые в целом и не являют собой ценность. Например, материальные вещи, внешность, успех. Как часто ты сравниваешь доброту, милосердие, мудрость или честность? Держу пари, с этим делом все обстоит куда труднее.
                        </p>
                    </div>
                    <div class="text-header">Шаг №2</div>
                    <p>
                        Каждый раз, когда ловишь себя на сравнении, делай паузу.
                        Включай осознанность. Лови вспомогательные вопросы и пример диалога с Собой от меня :
                    </p><br>
                    <p>
                        «Что я сейчас делаю? Сравниваю и сопоставляю собственную ценность с чужой? Для чего? Несет ли это пользу для меня? Я сужу Себя по незначительным критериям, которые не несут никакой ценности. Следовательно, это несправедливо. Поступать с Собой таким образом у меня нет желания. Я ощущаю свою ценность».
                    </p><br>
                    <p>
                        Процесс Сравнения токсичен еще и тем, что вселяет ощущение тревожности, уязвимости и заставляет сомневаться в собственных силах. Именно поэтому крайне важно выделять время каждый день на Себя. Проводить его в медитации или в безмолвии, чтобы четче и ярче ощущать свои желания, мотивы и, конечно же, силы. Впрочем, чем мы и занимаемся на наших онлайн - программах в моем проекте «Double Balance». Пиши нам и не стесняйся <a href="https://www.instagram.com/db.human/?hl=ru" class="text-link">Double Balance</a>
                    </p><br>
                    <img src="post-img-3.png" alt="">
                    <div class="text-header">Шаг №3</div>
                    <p>
                        Мысли глобально. Бери во внимание то, что бесценно. Например, стремление к зрелой любви с партнером и полноценным отношениям, наполненных верностью, заботой, чувством стабильности и защищенности.
                    </p><br>
                    <p>
                        Определение успешности не существует в чистом виде. Оно навязано извне. Копай глубже, не концентрируйся на поверхности.
                    </p><br>
                    <div class="text-header">
                        Шаг №4
                    </div>
                    <p>
                        Не сравнивай, а вдохновляйся примером других! Разница уловима?
                    </p>
                    <p>
                        Сравнивать себя с другими - бессмысленно и утопично, а вдохновляться чужим опытом, брать на заметку - мудро.
                    </p>
                    <p>
                        Если уж и говорить о Сравнении, то о таком, об Осознанном :)
                    </p><br>
                    <p>
                        Напоследок еще раз повторю ценную мысль: держи фокус на себе, внутри себя. Ощущай опору внутри, не ищи ее вовне. Когда ты обладаешь навыком пребывать в осознанности, все вокруг становится прозрачнее и приобретает совсем иное значение.
                    </p>
                    <img src="./post-img-4.png">

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