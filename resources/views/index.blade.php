<!DOCTYPE html>
<html lang="ja">

<style>
  h1 {
    margin:0 0 30px 0;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/add" method="post">
    @csrf
    <label>氏名<br><input type="text" name="name"></label><br>
    <label>メールアドレス<br><input type="email" name="email"></label><br>
    <button>送信する</button>
    <!-- Inputとしていて、データ接続がうまくいっていなかった。 -->
  </form>
</body>

</html>