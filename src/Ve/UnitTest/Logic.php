<?php

namespace Ve\UnitTest;

class Logic
{
	public function test()
	{
		$posts = array();
		
		for($i = 1; $i <= 5; $i++)
		{
			$post = new Post;
			$post->setTitle('Post_' . $i);
			$post->setAuthor('Juan');
			$post->setBody('Post #'.$i.' body should come here mate');
			$post->setDate('Today!');
			
			$posts[] = $post;
		}
		
		Storage::storePosts($posts);
		
		echo 'retrieve posts: <Br/>';
		echo '<pre>';
		print_r(Storage::getPosts());
		exit;
	}
}

