<?php
include("index_north.php");

extract($_POST);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mode    = $_POST["mode"];
  } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mode = $_GET["mode"];
  }


if($mode == "ad"){

echo "<div id=\"sakuhintitle\">管理者とかいてエイディー（←元ネタわかったらすてき！）</div><br>";
echo "いりもという、藤崎竜先生を愛してやまない人が<br>";
echo "作りました。<br><br>";
echo "サイトタイトルの元ネタは…うんあの頃は●ちゃん見てた確かに！！(笑)<br><br>";
echo "参加型なので、管理人の怠惰ゆえに更新が止まるということは<br>";
echo "ないですｖ<br>";
echo "よかったら気軽に参加してやってくださいませ～<br><br>";



}elseif($mode == "howtouse"){

echo "<div id=\"sakuhintitle\">使い方</div><br>";

echo "藤崎作品が、初出が古い順に並んでいる<br>";
echo "左の青いメニューから<br>";
echo "好きなタイトルを選んでくだされば<br>";
echo "イメージソング、アーティスト名、歌詞、試聴、購入<br>";
echo "コメントを見る、という一連の情報が<br>";
echo "ずらーっと出てきます。<br>";
echo "（ネット上には見つからない場合は押しても画面が変わらない、ということになります。）<br><br>";

echo "片っ端から歌詞にうなずくもよし<br>";
echo "コメントを残してみるのもよし<br>";
echo "気になったら買ってしまうのもよし（←まっ大胆）<br><br>";

echo "参加型なので<br>";
echo "投稿ができちゃったりもします。<br>";
echo "<s>曲の投稿はタイトル下の「曲投稿」から、</s><br>";
echo "コメント投稿は気になった曲の「コメントを見る」ページの一番下の一言フォームからできちゃいます。<br>";
echo "よかったら参加してやってくださいませｖ<br><br>";

echo "ちなみにデータは全て、新しいのが下に追加されていきます。<br>";
echo "すいません新しいのを上に置けるプログラミングの知識がまだなく…<br>";
echo "あと曲数、コメント数が出ると便利ですよね。。そこらへん今後勉強します…。<br>";

echo "ここまで読んでくださってありがとうございました。<br>";
echo "それでは、少しでも楽しんでいただければ…！<br><br>";
}



include("index_south.php");
?>
