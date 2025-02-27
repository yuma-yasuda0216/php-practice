<?php
// Q1 tic-tac問題

for($i=1; $i<=100; $i++){
    if($i %20===0) {
        echo 'tic-tac',"\n";
        continue;
    }elseif ($i %5===0) {
        echo 'tac',"\n";
        continue;
    }elseif($i %4===0){
        echo 'tic',"\n";
        continue;
    }
    
    echo $i,"\n";
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

//問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel']. 'です。';

//問題2
foreach ($personalInfos as $x => $y){
  //echo $y['name'] ;
  $number = $x + 1;
  echo $number . '番目の' . $personalInfos[$x]['name'] . 'のメールアドレスは' . $personalInfos[$x]['mail'] . 'で電話番号は' . $personalInfos[$x]['tel'] . 'です。' ;
  echo "\n";
}

//問題3
$ageList=[25,30,18];

foreach ($ageList as $key => $age){
    $personalInfos[$key]['age']=$age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new student(120,'山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

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

    public function attend($study)
    {
        echo $this->studentName . 'は' . $study . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

//問題1
$days = new DateTime('now');
$newday =$days->modify('-1 month')->format('Y-m-d');

echo $newday;

//問題2
$days = new DateTime('now');
$past = new DateTime('1992-4-25');
$diff = $past->diff($days);

echo 'あの日から' . $diff->days . '日経過しました。';
?>