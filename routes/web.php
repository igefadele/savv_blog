<?php 
use Savv\Controllers\{CacheController};

/**  ======== Start Cache Routes ======== 
 * You can customise the endpoints you want to use for each action below.
 * Also, you can create your own Controller using the CacheController Savv provides as a template.
 * The services you need to get this done are already provided in the Savv core, just check the CacheController for their usage.
 */

// Sync all posts
router()->get('/sync-post/{slug}', [CacheController::class, 'syncPost']);

// Sync all posts
router()->get('/sync-posts', [CacheController::class, 'syncAllPosts']);

// generate a post cache html file
router()->get('/cache-post/{slug}', [CacheController::class, 'cachePost']);

// generate cache for all posts
router()->get('/cache-posts', [CacheController::class, 'cacheAllPosts']);

// Cache routes for faster performance
router()->get('/cache-routes', [CacheController::class, 'cacheRoutes']);

// Cache a page using its uri
router()->get('/cache-page/{uri}', [CacheController::class, 'cachePage']);

// Cache pages
router()->get('/cache-pages', [CacheController::class, 'cacheAllPages']);

/* ======== End Cache Routes ======== */