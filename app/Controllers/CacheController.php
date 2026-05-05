<?php

namespace App\Controllers;

use Savv\Services\{PostService, PageService};
use Savv\Console\Commands\RouteCache;

class CacheController {

    public function syncPost(string $slug): string {
        echo PostService::syncPost($slug);
        exit;
    }

    // Create the configs/posts.php file based on the markdown files in the posts/ directory
    public function syncAllPosts(): string {
        echo PostService::syncAllPosts();
        exit;
    }

    public function cachePost(string $slug): string {
        echo PostService::cachePost($slug);
        exit;
    }

    public function cacheAllPosts(): string {
        echo PostService::cacheAllPosts();
        exit;
    }

    public function cacheRoutes() {
        (new RouteCache())->execute();
        exit;
    }

    public function cachePage(string $uri) {
        echo PageService::cachePage($uri);
        exit;
    }
    
    public function cacheAllPages() {
        echo PageService::cacheAllPages();
        exit;
    }
}