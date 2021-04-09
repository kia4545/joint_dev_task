<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

array_push($names, "斎藤");
print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array = array_merge($array1, $array2);
print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$count = 0;
foreach ($numbers as $value) {
  if ($value == 3) {
    $count++;
  }
}
print_r($count . "回です" . PHP_EOL);

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
$sports = array_diff($sports,array(null));
print_r($sports);
echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

if (empty($array1)) {
  echo "true";
} else {
  echo "false";
}
echo PHP_EOL;

if (!empty($array2)) {
  echo "false";
} else {
  echo "true";
}

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [];

foreach ($numbers1 as $value) {
  $numbers2[] = $value * 10;
  array_push($numbers2);
}
print_r($numbers2);
echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

$array = array_map('intval', $array);

  # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

$upper_case_programming_languages = array_map('strtoupper', $programming_languages);
$programming_languages = array_map('ucfirst', $programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

$names1 = [];
foreach ($names as $key => $name) {
  $index = $key + 1;
  $names1[] =  "会員No. " . $index . $name;
  array_push($names, $index);
}
print_r($names1);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼","高級なうに"];

foreach ($foods as $food) {
  if (preg_match('/うに/', $food)) {
    echo "好物です", PHP_EOL;
  } else {
    echo "まぁまぁ好きです", PHP_EOL;
  }
}

echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

$sports1 = [];
foreach ($sports as $key => $sport) {
  if (is_array($sport)) {
    $sports1 = array_merge($sports1, $sport);
  } else {
    array_push($sports1, $sport);
  }
}
//配列で重複を削除
$sports1 = array_unique($sports1);
//バラバラの要素にキーを振り直す
$sports1 = array_values($sports1);

$sports2 = [];
$index = [];
foreach ($sports1 as $key => $sport) {
  $index = $key + 1;
  $sports2[] =  "No. " . $index . $sport;
  array_push($sports1, $index);
}
print_r("ユーザの趣味一覧 ");
foreach ($sports2 as $sport) {
  print($sport . PHP_EOL);
}

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

//型の初期化
$name = [];
$name = $data["user"]["name"];
print_r($name . PHP_EOL);

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

//要素を置き換える
$update_data = array_replace($user_data, $update_data);
print_r($update_data);


echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

//型の初期化
$data_key = [];
$data_key1 = [];

//キーを取得
$data_key = array_keys($data);
//キーを振り直す
$data_key1 = array_values($data);
//配列に追加
array_push($data, $data_key1);
print_r($data_key1);


echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

//型の初期化
$data1_1 = [];
//キーを取得
$data1_1 = array_keys($data1);
//配列に追加
array_push($data1);

//条件分岐＆正規表現
if (preg_grep('/age/', $data1_1)) {
  echo "OK";
} else {
  echo "NG";
}

//型の初期化
$data2_1 = [];
//キーを取得
$data2_1 = array_keys($data2);
//配列に追加
array_push($data2);

//条件分岐＆正規表現
if (preg_grep('/age/', $data2_1)) {
  echo "OK";
} else {
  echo "NG";
}

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

foreach ($users as $user) {
  echo "私の名前は" . $user["name"] . "です。年齢は" . $user["age"] . "歳です。" . PHP_EOL;
}


echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

// $user1->info();
print("-------------".PHP_EOL);
// $user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

// $man1 = new Man("あじー",32);
// $man2 = new Man("ゆたぼん",10);

// $man1->introduce();
// $man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
// print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{

  # コードを追加

}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  // $zoo->info_entry_fee($human);
}

echo PHP_EOL;

?>