<?php
require_once('Application.php');
require_once('VideoStore.php');
require_once('Video.php');

$moviesLV = new VideoStore();
$moviesLV->addVideo(new Video('The Matrix'));
$moviesLV->addVideo(new Video('Godfather I'));
$moviesLV->addVideo(new Video('Star Wars Episode IV: A New Hope'));

$moviesLV->rateVideo('The Matrix', 7);
$moviesLV->rateVideo('The Matrix', 6);
$moviesLV->rateVideo('The Matrix', 8);



$app = new Application();
$app->run($moviesLV);