<?php
// Q1 変数と文字列
$name = '河本海';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device == 'windows' || $device == 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 25;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$kanto = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '茨城県', '群馬県'];

echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kantoCities = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($kantoCities as $city) {
    echo $city . "\n";
}

// Q8 連想配列-2
foreach ($kantoCities as $pref => $city) {
    if ($city == 'さいたま市') {
        echo "{$pref}の県庁所在地は{$city}です。";
    }
}

// Q9 連想配列-3
$kantoCities['愛知県'] = '名古屋市';
$kantoCities['大阪府'] = '大阪市';

    // 条件を総当たりするパターン
foreach($kantoCities as $pref => $city) {
    if ($pref == '東京都' || $pref == '神奈川県' || $pref == '千葉県' || $pref == '埼玉県' || $pref == '栃木県' || $pref == '群馬県' || $pref == '茨城県') {
        echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $pref . 'は関東地方ではありません。' . "\n";
    }
}

    // 正式な関東地方のリストを作成するパターン
$kantoList = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];

foreach ($kantoCities as $pref => $city) {
    if (array_key_exists($pref, $kantoList)) {
        echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
    } else {
        echo $pref . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';
}

calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 1) {
        echo $num . 'は奇数です。' . "\n";
    } else {
        echo $num . 'は偶数です。' . "\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
        case 'A':
        case 'B':
            echo '合格です。' . "\n";
            break;
        case 'C':
            echo '合格ですが追加課題があります。' . "\n";
            break;
        case 'D':
            echo '不合格です。' . "\n";
            break;
        default:
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            break;
    }
}

evaluateGrade('A');
evaluateGrade('F');