<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

$articles = Article::findNLastArticles(3);

include __DIR__ . '/App/templates/index.php';