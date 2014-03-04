<?php

namespace Ve\UnitTest;

class Post
{
	protected $_title = '';
	protected $_author = '';
	protected $_body = '';
	protected $_publish_date = '';
	
	public function setTitle($title)
	{
		$this->_title = $title;
	}
	
	public function getTitle()
	{
		return $this->_title;
	}
	
	public function setAuthor($author)
	{
		$this->_author = $author;
	}
	
	public function getAuthor()
	{
		return $this->_author;
	}
	
	public function setBody($body)
	{
		$this->_body = $body;
	}
	
	public function getBody()
	{
		return $this->_body;
	}
	
	public function setDate($date)
	{
		$this->_publish_date = $date;
	}
	
	public function getDate()
	{
		return $this->_publish_date;
	}
}