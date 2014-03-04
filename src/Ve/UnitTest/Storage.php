<?php

namespace Ve\UnitTest;

class Storage
{
	protected $location = '';
	
	public function setLocation($location)
	{
		$this->location = $location;
	}
	
	public function getLocation()
	{
		return $this->location;
	}
	
	public function storePosts($array)
	{
		foreach ($array as $post)
		{
//			$postData = array(
//				'title' => $post->getTitle(),
//				'author' => $post->getAuthor(),
//				'body' => $post->getBody(),
//				'publish_date' => $post->getDate()
//			);
			
			$fileName = $post->getTitle() . '.txt';
			
			if ( ! file_exists($this->location. '/' . $fileName))
			{
				$content = '';
			}
			else
			{
				$content = file_get_contents($this->location . '/' . $fileName);
			}
			
			$fp = fopen($this->location . '/' . $fileName, 'w+');
			
			// TODO: Can you write a plain object to text?
			fwrite($fp, $post);
			fclose($fp);
		}
	}
	
	public function getPosts()
	{
		// TODO: Sort by most recent first
		$posts = scandir($this->location);
		
		$data = array();
		
		foreach ($posts as $postFile)
		{
			$content = file_get_contents($this->location . '/' . $postFile);
			$data[] = $content;
		}
		
		return $data;
	}
	
	public function getSinglePost($post_title)
	{
		$file = $post_title . '.txt';
		$content = file_get_contents($this->location . '/' .$file);
		
		return $content;
	}
	
}