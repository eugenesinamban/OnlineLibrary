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
            <h1><a href="#book">Eugene's Library</a></h1>
        </div>
        <div id="form">
            <form action="index.php" method="post">
                <label for="book">Book :</label>
                <select name="book" id="book">
                    <option value="x">Please Choose</option>
                    <?php  
                    include "library.php";
                    for ($i = 1; $i <= Book::$counter ; $i++){ echo "<option value=".$i.">".${"book$i"}->title."</option>";}
                    ?>
                </select>
                <br>
                <label for="option">Show:</label> <select name="option" id="option">
                    <option value="general">General</option>
                    <option value="author">Author</option>
                    <option value="pages">Pages</option>
                    <option value="rating">Rating</option>
                </select>
                <br>
                <input type="submit">
            </form>
        </div>
        <div id="php"> <?php 
            
                
                $book = @$_POST["book"];
                $option = @$_POST["option"];  
            
                if ($book === "x"){    	   //default display
                    echo "Please Choose A Book / An Option";
                } else {
                    if ($option == "general"){          //general option -> show all information
                        echo 'This book is '.${"book$book"}->title.' By ' .${"book$book"}->author.' with '. ${"book$book"}->pages .' pages.<br>';
                        echo 'Rating :'. ${"book$book"}->GetRating() . '<br>';
                    } elseif ($option == "author"){   //show author
                        echo "This book's author is " .${"book$book"}->author;
                    } elseif ($option == "pages"){ //show pages 
                        echo "This book's number of pages is " .${"book$book"}->pages;
                    } elseif ($option == "rating") { //show rating
                        echo "Eugene's rating of this book is " .${"book$book"}->GetRating();
                    } else {   //default display
                        echo "Please Choose A Book / An Option";
                    }
                }
            
            
            
            
            //$library =  ((array) $book1);
              //  var_dump($library);
                
                 
            //$book10->SetRating(5);
            //echo $book10->GetRating();
            
            /*
                $library = array ($book1,$book2,$book3,$book4,$book5,$book6,$book7,$book8,$book9,$book10);
                foreach ($library as $index){
                        
                    echo 'This book is '.$index->title.' By ' .$index->author.' with '. $index->pages .'pages.<br>';
                    echo 'Rating :'. $index->GetRating() . '<br>';
                
                }*/
               
            ?></div>
        <div id="footer">
            <div id="container">
                <div id="footer-left">
                    <p>制作者をフォローする</p>
                    <a href="https://twitter.com/EugeneSinamban?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false" target="_blank">Follow @EugeneSinamban</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div id="footer-right">
                    &copy; 2019 Eugene's Library.
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>

</html>
