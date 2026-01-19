<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabTask 5 </title>
</head>
<body>
    <?php
    class Book {
        private string $title;
        private string $author;
        private int $year;

       
        public function __construct(string $title = '', string $author = '', int $year = 0) {
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        public function __destruct() {
           
        }

        
        public function __get($property) {
            return $this->$property ?? null;
        }

        public function __set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }

      
        public function details(): string {
            return "Title: {$this->title}<br>Author: {$this->author}<br>Publication Year: {$this->year}";
        }
    }

 
    $book1 = new Book("IKIGAi", "Francesc Miralles", 2017);

    $book2 = new Book();
    $book2->title = "Kaizen";
    $book2->author = "SARAH HARVEY";
    $book2->year = 2025;

    
    echo $book1->details() . "<br><br>";
    echo $book2->details();
    ?>
</body>
</html>
