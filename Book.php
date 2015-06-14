<?php

	
	class Book
	{
		private $bookISBN ;
		private $bookTitle;
		public $bookAuthor;

		public function __construct($bookISBN,$bookTitle,$bookAuthor)
		{
 			$this->bookISBN = $bookISBN;
 			$this->bookTitle = $bookTitle;
 			$this->bookAuthor = $bookAuthor;

		}
		
		public function showBook()
		{
			echo $this->bookISBN.'  '.$this->bookTitle.' '.$this->bookAuthor;
		}

		public function showBookRe()
		{
			$show = $this->bookISBN.'  '.$this->bookTitle.' '.$this->bookAuthor;

			return $show;
		}
	}

?>