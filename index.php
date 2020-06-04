<?php


  class Author {

    private $name;
    private $lastname;

    public function __construct($name, $lastname) {

      $this -> name = $name;
      $this -> lastname = $lastname;
    }
    public function printMe() {
      echo $this -> name . " " . $this -> lastname;
    }
  }
  class Book{

    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
      $this -> title = $title;
      $this -> author = $author;
      $this -> price = $price;
    }
    public function printMe(){
      echo "Title: " . $this -> title
       . "<br>Price: " . $this -> price
       . "<br>Author: ";

       $this -> author -> printMe();
    }
  }

  $author = new Author("Bernard", "Cornwell");
  $price = 20;
  $book = new Book("Sword of Kings", $author, $price);

  $book -> printMe();

 ?>
