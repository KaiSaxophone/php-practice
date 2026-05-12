<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($i % 4 === 0) {
        echo 'tic' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
    } else {
        echo $i. "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

    // 問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

    // 問題2
foreach ($personalInfos as $index => $person) {
    $index++;
    echo $index . '番目の' . $person['name'] . 'のメールアドレスは' . $person['mail'] . 'で、電話番号は' . $person['tel'] . 'です。' . "\n";
}

    // 問題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => $person) {
    $personalInfos[$index]['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lang)
    {
        echo $this->studentName . 'は' . $lang . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。' . "\n";
$yamada->attend('PHP');


// Q5 定義済みクラス
    // 問題1
date_default_timezone_set('Asia/Tokyo');
$oneMonthAgo = new DateTime();
$oneMonthAgo->modify('-1 month');
echo $oneMonthAgo->format('Y-m-d');

    // 問題2
$now = new DateTime();
$target = new DateTime('1992-04-25');
$interval = $now->diff($target)->format('%a');
echo 'あの日から' . $interval . '日経過しました。';

?>