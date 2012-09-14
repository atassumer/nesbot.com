<?php

$app->get('/', function () use ($app, $posts) {
   $app->render('index.php', ['posts' => $posts->findAll()]);
});

$app->get('/:year/:month/:day/:slug', function ($year, $month, $day, $slug) use ($app, $posts) {
   $post = $posts->findBySlug($slug);
   
   if ($post == null)
   {
       $app->pass();
   }

   $app->render('post.php', ['post' => $post, 'next' => $posts->next($post), 'prev' => $posts->prev($post)]);
})->name('post');

$app->get('/rss', function() use ($app, $posts) {
   $app->contentType('application/rss+xml');
   $app->view()->partial('rss.php', ['posts' => $posts->findAll()]);
});

$app->notFound(function () use ($app) {
   $app->view()->partial('404.php');
});