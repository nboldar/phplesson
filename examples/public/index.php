<?php
header("Content-Type: text/html; charset=utf8");
include __DIR__ .  "/../config/main.php";
include ENGINE_DIR . "render.php";

$category = $_GET['category'] ?? 'news';
$num = $_GET['number'] ?? 0;

$data = [
    'news' => [
        ['Новость 1', 'Сегодня в полночь произошло что -то очень интересное'],
        ['Новость 2', 'После полуночи уже нчего интересного не происходило]'
        ],
    ],
    'article' => [
        ['Статья1', 'Это очень увлекательная и познавательная статья ни о чем'],
        ['Статья2', 'Предыдущая статья ни очем а эта вообще - вообще ни очем, всем читать обязательно!']
    ]
];

$title = $data[$category][$num][0];
$content = $data[$category][$num][1];
?>
<ul>
    <?php foreach ($data as $groupName => $group): ?>
        <?php foreach ($group as $index => $item): ?>
            <li>
                <a href="/index.php?category=<?=$groupName?>&number=<?=$index?>">
                    <?=$item[0]?>
                </a>
            </li>
        <?endforeach;?>
    <?endforeach;?>
</ul>
<h1><?=$title?></h1>
<p><?=$content?></p>
