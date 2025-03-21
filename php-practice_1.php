<?php
// Q1 変数と文字列
$name = '安田';

$NewName ='私の名前は「' . $name . '」です。';
echo  $NewName;

// Q2 四則演算
$num  =  5* 4;
echo  $num,"\n";

$num  /=  2;
echo  $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
$device = '';//windows、mac、ipadなど入れてみて下さい！
if ($device === 'windows' || $device === 'mac') {
    echo '使用のOSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = '';//年齢を入れる。
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$prefecture = ['埼玉県' , '茨城県' , '栃木県' , '千葉県' , '長野県' , '神奈川県' , '東京都'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。'

// Q7 連想配列-1
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉県',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach($prefectures as $NewPrefectures => $valus)
echo $prefectures[$NewPrefectures],"\n";

// Q8 連想配列-2
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉県',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($prefectures as $key => $value) {
    if ($key === '埼玉県') {
       echo $key . 'の県庁所在地は' . $value . 'です。';
    }
}

// Q9 連想配列-3
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉県',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

$prefectures['愛知県']='名古屋';
$prefectures['大阪府']='大阪市';

foreach ($prefectures as $key => $value) {
    
    if ($key ==='愛知県' || $key === '大阪府') {
       echo  $key . 'は関東地方ではありません。' . "\n";
    }else {
       echo $key . 'の県庁所在地は' . $value . 'です。' ."\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。' ."\n";
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    return $price . '円の商品の税込価格は' . $taxInPrice . '円です。';
}

echo calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($number)
{
    $OddNumber=$number+1;
    if ($OddNumber %2 == 0) {
        echo $number . 'は奇数です。' . "\n";
    }else {
        if($number %2 == 0){
        echo $number . 'は偶数です。'. "\n";
        }
    }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($test)
{
    switch ($test) {
        case 'A':
        case 'B':
            return '合格です。';

        case 'C':
            return '合格ですが追加課題があります。';
            
        case 'D':
            return '不合格です。';

        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A'),"\n";
echo evaluateGrade('Z');
?>