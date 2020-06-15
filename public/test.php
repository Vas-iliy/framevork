<?php

require 'rb.php';
$db = require '../config/config_db.php';
$options = [
	\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
];
R::setup($db['dsn'], $db['user'], $db['pass'], $options);
R::freeze(true);

// Create
/*$cat = R::dispense('category');
$cat->title = '';
$id = R::store($cat);*/

//Read
/*$cat = R::load('category', 3);
echo $cat->title;*/

//Update
/*$cat = R::load('category', 3);
$cat->title = 'Категория 3';
R::store($cat);
echo $cat->title;*/

//Delete
/*$cat = R::load('category', 2);
R::trash($cat);*/

//Delete all
/*R::wipe('category');*/



