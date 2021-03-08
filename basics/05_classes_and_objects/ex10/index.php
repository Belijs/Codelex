<?php
require_once('Application.php');
require_once('VideoStore.php');
require_once('Video.php');

$moviesLV = new VideoStore();

$moviesLV->addVideo(new Video('Godfather I'));
$moviesLV->addVideo(new Video('Star Wars Episode IV: A New Hope'));
$moviesLV->addVideo(new Video('The Matrix'));

$moviesLV->rateVideo('The Matrix', 8);
$moviesLV->rateVideo('The Matrix', 6);

$app = new Application();
$app->run($moviesLV);