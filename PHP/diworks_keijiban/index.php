<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
  
<body>
    <header>
        <img src="diblog_logo.jpg"> 
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="left">
            <div id="daimei">プログラミングに役立つ掲示板</div>
            <form method="post" action="insert.php">
                <h1> 入力フォーム</h1>
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size="35" name="handlename" >
                </div>
                
                <div>
                    <label>タイトル</label><br>
                    <input type="text" class="text"size="35" name="title" >
                </div>
                
                <div>
                    <label>コメント</label><br>
                    <textarea cols="35"rows="7"name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
        
            <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select*from diworks_keijiban");
            while ($row = $stmt->fetch()){
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
                
        <div class="right">
            <div id="koumoku1">人気の記事</div>
            <p>PHPオススメ本<br>PHP MyAdminの使い方<br>今人気のエディタTops<br>HTMLの基礎
            </p>
            <div id="koumoku2">オススメリンク</div>
            <p>ﾃﾞｨｱｲﾜｰｸｽ株式会社<br>XAMPPのダウンロード<br>Eclipseのダウンロード<br>Braketsのダウンロード
            </p>
            <div id="koumoku3">カテゴリ</div>
            <p>HTML<br>PHP<br>MySQL<br>JavaScript
            </p>
        </div>
    </main>
    
    <footer>
        copyright&emsp;D.I.Works&nbsp;|&nbsp;D.I.blog is the one which provides A to Z about programing
    </footer>
    
</body>
</html>