<?php
require"Search.php";
require"User.php";
require"Post.php";

$user= new User;
$post= new Post;

echo $user->all();
echo $post->all();




