<?php 
 class Book {
            public static $counter = 0;
            public $title;
            public $author;
            public $pages;
            private $rating;
            
            function __construct($title, $author, $pages,$rating){
                self::$counter++;
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
                $this->SetRating($rating);
                                
            }
            
            function GetRating(){
                return $this->rating;                
            }
            
            function SetRating($Rating){
                switch($Rating){
                    case $rating = 5:
                    $this->rating = $rating;
                    break;
                    case $rating = 4:
                    $this->rating = $rating;
                    break;
                    case $rating = 3:
                    $this->rating = $rating;
                    break;
                    case $rating = 2:
                    $this->rating = $rating;
                    break;
                    case $rating = 1:
                    $this->rating = $rating;
                    break;
                    default:
                    $this->rating = "NR";
                      
                }
                
            }
            
        }   
        
        $book1 = new Book("ノルウェイの森 - 上巻","村上春樹",304,4);
        $book2 = new Book("ノルウェイの森 - 下巻","村上春樹",296,5);
        $book3 = new Book("海辺のカフカ　-　上巻","村上春樹",496,5);
        $book4 = new Book("海辺のカフカ　-　下巻","村上春樹",528,5);
        $book5 = new Book("マスカレードホテル","東野圭吾",515,4);
        $book6 = new Book("悪意","東野圭吾", 281, 5);
        $book7 = new Book("容疑者Xの献身","東野圭吾",394,0);
        $book8 = new Book("聖女の救済","東野圭吾",424,0);
        $book9 = new Book("火花","又吉直樹",180,0);
        $book10 = new Book("どこよりも遠い場所にいる君へ","阿部暁子",317,0);
        $book11 = new Book("Harry Potter and the Sorcerer's Stone","J.K. Rowling",223,5);
        $book12 = new Book("Harry Potter and the Chamber of Secrets","J.K. Rowling",251,5);
        $book13 = new Book("Harry Potter and the Prisoner of Azkaban","J.K. Rowling",317,5);
        $book14 = new Book("Harry Potter and the Goblet of Fire","J.K. Rowling",636,5);
        $book15 = new Book("Harry Potter and the Order of the Phoenix","J.K. Rowling",766,5);
        $book16 = new Book("Harry Potter and the Half-Blood Prince","J.K. Rowling",607,5);
        $book17 = new Book("Harry Potter and the Deathly Hallows","J.K. Rowling",607,5);
        $book18 = new Book("Fight Club","Chuck Palahniuk",208,5);
        $book19 = new Book("A Little Life","Hanya Yanagihara",720,5);
?>
