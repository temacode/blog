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
                    <p>Личные границы</p>
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
                    <h3>Личные границы</h3>
                    <div class="post-date">
                        <p>20.08.19</p>
                    </div>
                </div>
                <div class="full-post-text">
                    <div class="text-header">Личные границы</div>
                    <p>
                        С проблемой посягательства на личные границы, думаю, сталкивались все. Под «посягательством» я подразумеваю все, что может задеть личное пространство: бестактные вопросы, попытки манипуляции, физическое вмешательство в жизнь человека и тд. Люди, выступающие в роли «антигероя», в основном не преследуют злых намерений, не нацелены обидеть. Зачастую бывает так, что «обидчики» и представить не могут, что доставляют окружающим дискомфорт, и их поведение - демонстративное неуважение. С людьми такого типа, как говорится, ничего не поделать, а вот с собственным восприятием всего происходящего можно разобраться. С этого момента поподробнее: что такое личные границы, для чего их нужно обозначать и защищать.
                    </p><br>
                    <p>
                        Личными границами принято обозначать четкую черту, которая разделяет человека c окружающими, за которой скрывается нечто интимное и недоступное (личное пространство). Под личным пространством подразумевается ряд индивидуальных принципов, моралей, норм и пр. Когда личные устои человека в безопасности и никто на них не посягается, он чувствует себя сбалансировано. Однако, понимать это и применять - не одно и то же. Для многих страдающих от постоянных нападок на «свою территорию» возможность экологично ее обозначить и защитить кажется немыслимым. От сюда сразу следует боязнь показаться грубым и обидеть того, от кого как раз-таки и нужно защищаться.
                    </p>
                    <img src="post-img-1.jpg" alt="">

                    <div class="text-header">Почему важно следить за качеством личных границ?</div>


                    <p>
                        В первую очередь нужно осознать, что обозначение своих границ - это естественный процесс. Главное условие - ко всему подойти с точки зрения здравого смысла. Вот пару рекомендация от меня, от человека, который долго шел именно к ЗДОРОВОМУ отстаиванию личных границ. Для Зены -королевы войнов этот процесс дался непросто:
                        <ul class="dotted-list">
                            <li>
                                Осознание границ. Лучше всего наглядно представить для себя (прописать) все сферы, в которых фигурирует понятие «личные границы». Например: личные вещи, пространство (как близко можно ко мне подойти и тд), деньги, время и тд.
                            </li>
                            <li>
                                Также стоит проанализировать свой опыт: в каких ситуациях ты чувствовал дискомфорт, а в каких - безопасность.
                            </li>
                            <li>
                                Сообщать о границах и говорить «нет». Главное условие - самому не нарушить чужие границы and be polite. Из разряда: «Пожалуйста, не трогай мои вещи. Мне неприятно». Однако, если человек всячески вас игнорирует, можно позволить своей внутренней Зене - королеве войнов выйти наружу.
                            </li>
                        </ul>
                    </p>

                    <img src="post-img-2.jpg" alt="">

                    <div class="quote">
                        Здоровые границы позволяют человеку без труда выстраивать крепкие взаимоотношения, не затрачивая при этом свою жизненную энергию
                    </div>

                    <p>
                        Не нужно усложнять жизнь себе и другим! Что лучше для вас - знаете только ВЫ. Не бойтесь говорить о желаемом или обращаться с просьбой (особенно, когда дело касается ваших границ). Залог любых здоровых взаимоотношений - это грамотно выстроенная коммуникация, основанная на взаимоуважении.
                        И напоследок: ключевое слово в любой ситуации - здравый смысл. Такой подход способен расставить все по полочкам и даже укрепить отношения. Данный совет не работает только в том случае, если оппонент - агрессор, не пытающийся услышать. А с таким, по большому счету, и разговор короткий :)
                    </p><br>

                    <div class="quote">
                        Слабые границы - это большой риск попасть в зависимые отношения
                    </div>
                    <div class="quote">
                        В случае, когда ваше личное пространство кто-то нарушает, и вы не отстаиваете его, а погружаетесь в обиду, возникает пассивная агрессия
                    </div>

                    <div class="text-header">Если личные границы уязвимы</div>
                    <p>
                        Эти критерии говорят о том, что ваши границы часто нарушают:
                        <ul class="line-list">
                            <li>
                                Трудно отказать в просьбе, когда нет желания что-либо делать
                            </li>
                            <li>
                                Вы делаете что-то в ущерб себе ради других
                            </li>
                            <li>
                                Вас часто критикуют и задевают чувства, а вы не можете возразить
                            </li>
                            <li>
                                Трудно отделить свои мысли и желания от чужих
                            </li>
                        </ul>
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