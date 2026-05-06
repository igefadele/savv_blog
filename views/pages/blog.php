<?php
    $pageTitle = $metadata['title'] ?? "Blog";
    $pageDescription = $metadata['excerpt'] ?? "We build things that matter. Powered by Savv Web Framework";
    /** 
     * These variables are passed from the BlogController@index method when it calls response()->view('pages/blog', [...])
     * @var array $posts; 
     * @var int $currentPage; 
     * @var int $limit; 
     * @var int $totalPosts;
     * @var int $totalPages; 
    */
    
    // Start capturing the HTML content
    ob_start();
?>

<div id="blog_content" class="row">
    <h1 class="text-center mx-auto"> Blog</h1>
    <div class="col-12">
        <?php foreach ($posts as $slug => $post): ?>
            <article class="post-card" style="display: flex; margin-bottom: 20px; gap: 20px;">

                <div class="column-left" style="flex: 1;">
                    <a href="/<?= $slug ?>">
                        <img src="<?= !empty($post['featured_image']) ? $post['featured_image'] : asset('/images/logos/logo.png') ?>" 
                            alt="<?= $post['title'] ?>" 
                            style="width: 100%; height: auto; display: block;">
                    </a>
                </div>


                <div class="column-right" style="flex: 2;">
                    <a href="/<?= $slug ?>" style="text-decoration: none; color: inherit;">
                        <h2 style="margin-top: 0;"><?= $post['title'] ?></h2>
                    </a>
                    
                    <p><?= $post['excerpt'] ?></p>

                    <div class="post-meta" style="font-size: 0.9em; color: #666; margin-bottom: 15px;">
                        <time><?= date('F j, Y', strtotime($post['created_at'])) ?></time>
                    </div>

                    <a href="/<?= $slug ?>" class="read-more-btn">Read More</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- Pagination Controls -->
    <div class="col-12">
        <?php if ($totalPages > 1): ?>
            <div class="pagination" style="margin-top: 40px; display: flex; gap: 10px; justify-content: center; align-items: center;">
                
                <?php if ($currentPage > 1): ?>
                    <a href="?page=<?= $currentPage - 1 ?>&limit=<?= $limit ?>" class="page-link">&laquo; Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="?page=<?= $i ?>&limit=<?= $limit ?>" 
                    class="page-link <?= $i === $currentPage ? 'active' : '' ?>"
                    style="<?= $i === $currentPage ? 'font-weight: bold; text-decoration: underline;' : '' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <?php if ($currentPage < $totalPages): ?>
                    <a href="?page=<?= $currentPage + 1 ?>&limit=<?= $limit ?>" class="page-link">Next &raquo;</a>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    </div>
</div>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean();
    // Load the layout and inject the variable
    include view_path('/layouts/index.php');
?>