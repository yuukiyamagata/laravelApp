http://localhost:8888/fullstack-webdev



# 030

セマンティックHTMLとは？
セマンティック（semantic）
「意味の、語義の、意味論の、意味的な」
セマンティックHTML
 その HTML 要素には、どのような目的や役割があるのか？

ダブルコーテンション: 変数とエスケープシーケンスが使用できる

if($score < 50 || $absent >= 5){
  echo '不合格';
}elseif($score < 70){
  echo '合格';
}else{
  echo '秀';
}

?>

var_dump()
変数に関する情報をダンプする
この関数は、指定した式に関してその型や値を含む構造化された情報を返します。
配列の場合、その構造を表示するために各値について再帰的に 探索されます。

falsyな値
'',0,null,undefined,0n,false

issetとempty
条件分岐と一緒によく使用する関数

 - isset
 変数が宣言されていること、そしてnullとは異なることを検査する
 => 変数が定義されていて、null以外の値の時にtrueを返す

 - empty
変数が空であるかどうかを検査する。
変数が空であるとみなされるのは、変数が存在しない場合や 変数の値がfalseに等しい場合です
=> issetがfalse、または値がfalsyな時にtrueを返す
emptyをissetと合わせて使用すると.....
 !isset($val) || $val == false

 - falsyな値
 "" (空文字)
 0 (数値、文字列)
 NULL
 FALSE




# 04

arrayに対し、値を追加する => $array[] = 'value';

arrayに対して使用する
print_r(): 変数の値に関する情報を解り易い形式で表示します。
printf — フォーマット済みの文字列を出力する
https://dotinstall.com/questions/wy43lyw
 > printf(string $format, mixed ...$values): int
count(): 配列または Countable オブジェクトに含まれるすべての要素の数を数える
array_shift(): array の最初の値を取り出して返します
array_pop() は配列 array の最後の要素の値を取り出して返します。
array_splice() 配列の一部を削除し、他の要素で置換する
unset — 指定した変数の割当を解除する
連想配列: キーとヴァリューが対になって格納されている入れ物

cf)
Javascript
push() 配列の末尾に1つ以上の要素を追加することができます。また戻り値として新しい配列の要素数を返します。
unshift() 配列の最初に1つ以上の要素を追加し、新しい配列の長さを返します。
pop() 配列から最後の要素を取り除き、その要素を返します。このメソッドは配列の長さを変化させます。
shift() 配列から最初の要素を取り除き、その要素を返します。このメソッドは配列の長さを変えます。


slice()
startとendが配列の中の項目のインデックスを表している場合、startからendまで(endは含まれない)で選択された配列の一部の浅いコピーを新しい配列オブジェクに作成して返します。元の配列は変更されません

splice
その場で既存の要素を取り除いたり、置き換えたり、新しい要素を追加したりすることで、配列の内容を変更します。


## 正規表現
文字列を検索する際の高度な検索方法。
正規表現で検索するためには//で検索したい文字列を囲む

よく使う文字
 . 任意の文字
 * 0回以上の繰り返し
 + 1回以上の繰り返し
 {n} n回以上の繰り返し
    例) {1}: {}に続く前の位置が1文字続く
        {1, 3}: 1文字以上3文字以下で前の文字列が連続して続いているか
 []文字クラスの作成
 [abc]aまたはbまたはc
 [^abc]aまたはbまたはc以外
 [0-9] 0から9まで
 [a-z] aからzまで
 $ 終端一致
 ^ 先頭一致
 \w 半角英数字と(アンダースコア)_
 \d 数値
 \エスケープ

 preg_match
 preg_match — 正規表現によるマッチングを行う
 preg_match_all — 繰り返し正規表現検索を行う
 round — 浮動小数点数を丸める


 ## 関数
 決められたルールに従って、入力(インプット)を受け取り、何らかの処理を行なってから結果として別の値をアウトプット(出力)にして返す一連の処理のまとまり



 ## スコープと実行順
 実行中のコードから値と式が参照できる範囲
 (実行中のコードから参照できる、変数や関数の範囲)
 変数や関数の宣言文とそれらを使用する文(実行文の行)が同一スコープ内に存在する場合のみ参照可能

 phpでは以下の3種類がある
  1. グローバルスコープ
  2. ローカルスコープ -> 関数スコープにあたる。
   =>関数宣言はプログラムの実行よりも前に準備される。関数が実行されて初めて関数内の処理が動く。またホイスティングが働く
  3. スーパーグローバル ex) $_SERVER リクエストが来た時の情報を保持しいている
  4. PHPではブロックスコープが形成されない

ホイスティング:コンテキスト内で宣言した変数や関数の定義をコードの実行前にメモリーに配置すること


 cf) JavaScript
 ①グローバルスコープ
  JavaScriptファイルのトップレベルまたはHTMLファイルのscriptタグの直下で「varを使って定義された変数や関数」または「関数宣言によって定義された関数」が属するスコープ
 ②スクリプトスコープ
  JavaScriptファイルのトップレベルまたはHTMLファイルのscriptタグの直下でletやconstを使って宣言された変数や関数が属するスコープ
 ③関数スコープ
  関数内で宣言された変数や関数が属するスコープ。関数に囲まれた{}の中のスコープ
 ④ブロックスコープ
  if文やwhile文などのブロック内で、letまたはconstで宣言された変数や関数が属するスコープ
 ⑤モジュールスコープ
  ESModulesの機能が有効な時に、JavaScriptファイルのトップレベルまたはHTMLファイルのscriptタグの直下で宣言された変数や関数が属するスコープ


 # 05

三項演算子
 -> 配列の初期化や変数の初期化の際に使用する

 null合体演算子
 -> 値が設定されている時特に何もしない
 null・・・参照を保持していない。すなわち、「変数が空である」ことを意図的に表すリテラル
           * 変数は値が格納されているメモリに対する参照が格納される。
           * 参照とは、値が保持されているメモリ空間の番地(アドレス)情報
例)
$array['key'] = $array['key'] ?? 1;
$array['key']がnullの時 ??の右の値
$array['key']がnull以外の時 ?? 左の値
cf)
三項演算子で記述すると、$array['key] = isset($array['key]) ? $array['key'] : 1;

## 定数
一度値を設定するとそれ以降変更できない特殊な変数
constとdefine
 - const 変数名 = 値;
 - define('変数名', 値);

constとdefineの違い
1. constはif文や関数の中では使えない
2. defineではグローバルスコープの値が配置される
3. constは名前空間に配置される


## ファイル分割
require('file1.php');ファイルの読み込み。絶対にないとダメなファイルを指定する => 関数などを読み込む
require_once('file1.php'); ファイルの一度だけの読み込み
includeで最悪なくても動くファイルを読み込む => HTMLのテンプレートなどを読み込む
キーワードによる宣言もできる
ex) include 'file1.php' require 'file1.php'
ファイル分割を行って関数を宣言する際には関数が既に宣言されているかどうかを確認する
function_exists — 指定した関数が定義されている場合に true を返す

## パスの書き方
相対パス: 実行中のファイルから見た時のパスの指定方法
 => 実行中のファイルが同じディレクトリに配置されている場合に、ファイル名だけで相対パスの指定可能
  ex) ./現在のディレクトリに格納されているファイル ../一つ上のディレクトリ
絶対パス: ルートから見た時のパスの指定方法。ルートのディレクトリからのパスがすべて記載されている状態

__DIR__ 現在のディレクトリまでのパスが格納されている
__FIlE__ ファイル名まで含めてパスが格納されている
dirname — 親ディレクトリのパスを返す

"" => \に続くものは、エスケープシーケンスと見做される場合がある
'' => エスケープシーケンスとして認識されない

## 名前空間
ソースコードを名前のついた空間に配置していくと言う考え方
namespace 名前 で関数や定数、クラスを登録する
名前空間ではdefineが使用できないのでconstを使用する
①\{namespace名}\{関数名や変数名}
②use キーワードを使用する
 => ex) use function {namespace名}\{関数名}

グローバル空間
namespaceの指定がない空間
グローバル空間に配置された変数や関数に関しては\を指定する必要がない
だだし、*クラスに関しては例外*グローバル空間に配置されたクラスを呼び出す際には
必ず\を使用する

名前空間に登録された関数などを使用する時は\を使用する
「\」は名前空間のグローバル空間をあらわしている
同じ名前空間内に指定した変数や関数というのは、\を指定する必要がない
ファイルやフォルダを指定する際の相対パスのイメージ

## クラス
新しくオブジェクトを作成するための雛形
特定の変数を格納していたり、関数を保持している構造体
オブジェクトに保持される変数 -> メンバ、プロパティ
オブジェクトに保持される関数 -> メソッド
newでオブジェクトを作成することをインスタンス化
new演算子によって生成されたオブジェクトをインスタンスという

クラスにプロパティを定義する場合には、その変数に関するアクセスキーワードを
先頭に指定する

__construct(){}
new演算子によってインスタンス化される際に呼ばれる関数

$this
インスタンス化された後のオブジェクトを指し示す。生成したアタのオブジェクトを指す
cf JavaScript
thisは呼び出し元のオブジェクトへの参照を保持するキーワード

staticメソッド
クラス自体に登録するメソッド。
staticメソッドと一般的なメソッドを使用する時の切り分け
まずは、$thisを使用するかどうかで切り分けできる

staticで定義したプロパティ
静的メンバ、静的プロパティはクラス内に保持される変数
全てのオブジェクトで共通して設定される値
オブジェクトごとに値が変わらない値はstaticとして設定しておく

cf public const 変数名は static public 変数名 と同じ

protected 自クラス内かクラスを継承したクラス内からアクセスできる

継承元のクラスのメソッドを変更することをオーバーライドという
 - 継承元のクラスでfinalをつけた場合、継承先のクラスでメソッドの内容を変更できない
 - 継承先のクラスで必ず実装させたいメソッドは abstract を使用する
    abstractがついたメソッドがあるクラスは必ずクラス名の前にabstractをつける
    abstractがついたクラスはそのままインスタンス化できない
    => 親クラスにabstractがついたものがある場合、継承先のクラスに必ずそのメソッドが存在することが担保される

static parent selfの違い
static,self -> 静的プロパティ、静的メソッドを呼び出す際に使用するキーワード。継承先で使用する場合は特に違いはない。継承元で使用する場合は挙動が少し異なるので注意が必要。(以下の*参照)
parent -> 継承元のクラスのプロパティやメソッドを取りに行く
parent::__construct()で継承元のコンストラクターを呼ぶ

(*)
staticを継承元のクラスで使用すると継承先の静的プロパティを取得する
selfを継承元のクラスで使用すると継承元の静的プロパティを取得する

## 厳密な型チェック
<?php declare(strict_types = 1);を入れる
https://www.php.net/manual/ja/language.types.declarations.php#language.types.declarations.strict 

require_once 'person.php';
use animal\Person;
use animal\Japanese;

function callHelloFunction(Person $person){
   // Personクラスから作成されたオブジェクト
  $person->hello();
}

$taro = new Japanese('太郎', 18);
callHelloMethod($taro);



## options
ビルトイン関数



# 06
formのaction属性に設定する値。
formを送信する先のURLを設定する

GET
データの取得
POST
データの作成・更新

ブラウザの更新ボタン
 => 前回送信したリクエストを再送信する

 隠しフィールドとは
 画面には入力欄を表示したくないが値としては、サーバーに送りたいフィールド
 *改竄されて困る値はhiddenフィールドに使用しない

Cookieについて
setcookie('VISIT_COUNT', 1, [
  'expires' => time() + 60 * 60 * 24 * 30,
  'path' => '/',
]);
 Secure : HTTPSの通信の場合のみやり取りされるCooKie
  HTTPS 通信が暗号化されたやりとりのことを指す
 HttpOnly: trueになっているとJavaScriptからCookieに値を操作することができない

 Sessionについて