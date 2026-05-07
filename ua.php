<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザーエージェント</title>
</head>
<body>
  <h1>ユーザーエージェント</h1>

  <h2>JavaScriptでデバイス判定</h2>
  <p>
    この端末は
    <span id="device"></span>
    です。
  </p>
  
  <h2>JavaScriptでユーザーエージェントを取得</h2>
  <div id="ua" class="js"></div>
  
  <h2>PHPでユーザーエージェントを取得</h2>
  <div class="php">
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
  </div>

  <script>
    const userAgent = navigator.userAgent;
    let device;

    if (userAgent.match(/iPhone|Android.+Mobile/)) {
      device = "スマホ";
    } else if (userAgent.match(/iPad|Android/)) {
      device = "タブレット";
    } else {
      device = "PC";
    }

    document.getElementById("ua").innerText = userAgent;
    document.getElementById("device").innerText = device;
  </script>
</body>
</html>