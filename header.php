<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/8f44b5795a.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <div class="container-fluid">

<!-- navbar -->
    <div class="navtop">
        <ul>
            <li class="logo"><a href="default.asp" class="navbar-brand"><img src="images/logo.png" width="150" height="50"></a></li>
        </ul>
        <ul style="padding-top: 2rem;">
            <li><a href="default.asp"><i class="fa-solid fa-user-large"></i>マイページ</a></li>
            <li><a href="news.asp"><i class="fa-solid fa-lock"></i>ログアウト</a></li>
            <li><a href="contact.asp"><i class="fa-solid fa-heart"></i>お気に入り</a></li>
            <li><a href="contact.asp"><i class="fa-solid fa-cart-shopping"></i> ¥0</a></li>
          </ul>
         
    </div>

    <div class="nav1">
    <ul>
        <li><a href="default.asp">TOP</a></li>
        <li><a href="news.asp">おすすめ商品</a></li>
        <li><a href="contact.asp">特価商品</a></li>
        <li><a href="contact.asp">エリアで探す</a></li>
        <li><a href="about.asp">About</a></li>
      </ul>
    </div>

    <div class="nav2">
        <ul>
            <li>
                <select name="language" id="language">
                    <option value="javascript" disabled selected>全てのエリア</option>
                    <option value="python">Python</option>
                    <option value="c++">C++</option>
                    <option value="java">Java</option>
                  </select></li>
            <li>
                <select name="language" id="language">
                <option value="javascript" disabled selected>全てのジャンル</option>
                <option value="python">Python</option>
                <option value="c++">C++</option>
                <option value="java">Java</option>
              </select></li>
            <li>
                <form action="/action_page.php">
                <input type="text" placeholder="キーワード" name="search">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>検索</button>
              </form></li>
          </ul>
        </div>