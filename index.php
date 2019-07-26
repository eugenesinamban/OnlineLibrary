<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Library</title>
</head>

<body>
    <div id="wrap">
        <div id="header">
            <h1><a href="#book">Yogi's Library</a></h1>
        </div>
        <div id="php">
            <?php
                require "db.php";
                $sql = "SELECT * FROM `library`";
                try {
                    $getBooks = $pdo->prepare($sql);
                    $getBooks->execute();
                    while ($bookArray = $getBooks->fetch()) {
                        echo "Book number " . $bookArray['book_Id'] . " is <br>";
                        echo "Book title is " . $bookArray['title'] . "<br>";
                        echo "Author is " . $bookArray['author'] . "<br><br>";
                    }
                } catch (\PDOException $e) {
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }
            ?>
        </div>
        <div id="footer">
            <div id="container">
                <div id="footer-left">
                    <p>制作者をフォローする</p>
                    <a href="https://twitter.com/EugeneSinamban?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false" target="_blank">Follow @EugeneSinamban</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div id="footer-right">
                    &copy; 2019 Yogi's Library.
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>

</html>
