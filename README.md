# syuukei
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>出欠確認</title>
</head>
<body>
  <h1>出欠確認</h1>
  <form action="submit.php" method="post">
    <p>クラス名:</p>
    <input type="text" name="class_number" required>
    <p>名前:</p>
    <input type="text" name="name" required>
    <p>出欠:</p>
    <input type="radio" name="attendance" value="出席" checked> 出席
    <input type="radio" name="attendance" value="欠席"> 欠席
    <input type="submit" value="送信">
  </form>
</body>
</html>
