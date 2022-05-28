<?php

class BooksManager {
    private $books;

    public function addBook($book){
        $this->books[] = $book;  
    }

    

    /**
     * Get the value of books
     */
    public function getBooks()
    {
        return $this->books;
    }
}