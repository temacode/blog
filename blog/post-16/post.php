<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <link rel="stylesheet" type="text/css" media="screen and (max-width: 456px)" href="../../css/style-mobile.css?v=9">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 456px)" href="../../css/style.css?v=9">

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
    <div class="content">
        <div class="back-btn"><a href="../../index.php"><i class="fas fa-long-arrow-alt-left"></i>Назад</a></div>
        <div class="full-post">
            <div class="full-post-header">
                <div class="full-post-header-name">
                    <p>
                        Харизма. Что это? Дар или дело сноровки?
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
                        Харизма. Что это? Дар или дело сноровки?
                    </h3>
                    <div class="post-date">
                        <p>05.10.20</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <p>
                        Мы всегда чувствуем магнетизм, обаяние и особую притягательность некоторых людей. Кто они? Что такое необъяснимо завораживающее витает в воздухе, когда ОНИ рядом?
                    </p><br>
                    <p>
                        У каждого из нас есть хотя бы один человек в окружении, кто магнитом притягивает внимание к своей персоне. За ним хочется наблюдать. За ним хочется следовать.
                    </p><br>
                    <p>
                        Способность человека вызывать своим поведением интерес к себе, восхищение окружающих; способность очаровывать - дело рук харизмы.
                    </p><br>
                    <div class="text-header">Портрет харизматичного человека</div>
                    <img src="./header.png" class="img-full-width">
                    <p align="center">
                        <a href="https://www.instagram.com/aiyanavruzova/" target="_blank" class="text-link">Автор: aiyanavruzova</a>
                    </p><br>
                    <p>
                        Харизматичный человек наделен лидерскими качествами. Он становится душой компании, ему не составляет труда сконцентрировать интерес коллектива на себе. Такой человек знает, что делает, всегда отстаивает свою точку зрения и приводит нужные аргументы.
                    </p><br>
                    <p>
                        Человек наделенный харизмой имеет смелость придерживаться своих интересов, умеет быть (и оставаться) собой и относиться к себе с юмором. Не стоит забывать и про ярко выраженную эмоциональность. Он также умеет и считывать эмоциональное состояние человека, подстраиваться на его волну.
                    </p><br>
                    <p>
                        Увлекательные собеседники, ораторы, мастера коммуникации и привлечения внимания - это все про них.
                    </p><br>
                    <div class="text-header">Врожденная VS Приобретенная</div>
                    <img src="post-img-1.jpg" class="img-full-width">
                    <p>
                        Харизма - это коктейль из различных характеристик человека. Да-да, она содержит как и врожденные черты, так и приобретённые.
                    </p><br>
                    <div class="text-header">Что относится к врожденным?</div>
                    <p>
                        <ul class="line-list">
                            <li>
                                Особенности внешности
                            </li>
                            <li>
                                Особенность голоса, манера речи
                            </li>
                            <li>
                                Энергия человека (невербальный компонент)
                            </li>
                            <li>
                                Драматичность. Харизматичные люди зачастую наделены активной жестикуляцией и мимикой
                            </li>
                        </ul>
                    </p><br>
                    <div class="text-header">Что относится к приобретенным? </div>
                    <p>
                        <ul class="line-list">
                            <li>
                                Уверенность в себе, возможность делать из недостатка достоинство.
                            </li>
                            <li>
                                Подвешенный язык, богатый словарный запас и цепляющая речь, уверенная интонация
                            </li>
                            <li>
                                Необычное поведение. Честно признаться, я долго думала к какому из подпунктов отнести этот. Ведь харизматов зачастую видно издалека и в детстве. Однако, поведенческие привычки поддаются корректировке. Поэтому научиться транслировать «то самое» вполне реально в течение жизни
                            </li>
                            <li>
                                Яркий имидж
                            </li>
                        </ul>
                    </p><br>
                    <p>
                        Человек рождается с определенными набором свойств личности, некоторые из которых можно изменить. Путь к харизме - усилия, работа над сбой и, пожалуй, самое главное - цель. Для чего вам нужно обрести ее? Что вы хотите почувствовать и получить от нее?
                    </p><br>
                    <p>
                        Важно иметь в виду, что харизматичный человек не всегда удобен для окружения, так как он не пытается понравится/угодить кому-либо, всегда прислушивается к своему внутреннему голосу и отстаивает свои интересы.
                    </p><br>
                    <div class="text-header">Почему кто-то харизмат, а кто-то нет?</div>
                    <img src="post-img-2.jpg" class="img-full-width">
                    <p>
                        Харизма об ответственности, смелости в своих проявлениях и решительности. К этому не все готовы и не всем это нужно на самом деле. Не стоит забывать и о том, что стиль жизни и ритм харизматичного человека элементарно не для каждого. Харизматы в большинстве своем индивидуалисты.
                    </p><br>
                    <div class="text-header">Как взрастить харизму?</div>
                    <p>
                        Как ни крути, навыки харизмы чрезвычайно полезны как и на работе, так и в личных делах. Харизма - мощное оружие влияния на людей, инструмент социальной адаптации.
                    </p><br>
                    <p>
                        Причиной того, почему харизма не развивается, может стать что угодно. Но в ее основе всегда будет страх заявить о себе, страх проявить себя и страх оценки со стороны окружающих.
                    </p><br>
                    <div class="text-header">Что делать?</div>
                    <p>
                        <ul class="numeric-list">
                            <li>
                                Составьте список людей, которых вы считаете харизматичными. Что конкретно делает их такими?
                            </li>
                            <li>
                                Найдите свою уникальность. В чем она заключается? Рекомендую составить развёрнутый список своих достоинств и того, что хочется откорректировать. Что вы хотите почувствовать в итоге при достижении цели? Поразмышляйте над тем, что можно сделать для того, чтобы усилить свои сильные стороны?
                            </li>
                            <div class="min-quote">
                                В целом, харизма - это усиление сильных сторон, акцент на достоинствах и их транслирование.
                            </div>
                            <li>
                                Ну, и классика жанра - психотерапия. Эффективно проработать и этот вопрос можно с помощью специалиста. Обращаться к психологу - нормально (если кто-то забыл)!
                            </li>
                        </ul>
                    </p><br>
                    <div class="text-header">Подведем итоги</div>
                    <p>
                        Харизма - это не мистика, не эфемерное состояние, доступное лишь избранным. Ее можно развить путем работы над собой и теми качествами, которыми вас наделила природа. Загвоздка заключается в следующем: кому-то нужно прилагать усилия для этого, а кому-то нет.
                    </p><br>
                    <img src="post-img-3.jpg" class="img-full-width">
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
</body>

</html>