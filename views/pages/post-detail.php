<?php
    $metadata = $metadata ?? request('metadata', []);
    $content = $content ?? request('content', ''); 

    $pageTitle = $metadata['title'] ?? "Welcome — Your Brand Name | Savv Web Framework Starter";
    $pageDescription = $metadata['excerpt'] ?? "We build things that matter. Powered by Savv Web Framework";

    // Use the Savv helper to get recommendations
    $recommendations = getRecommendedPosts($metadata['slug'] ?? '', 3);
    $posts = $recommendations['posts'];
    $random_keys = $recommendations['recommendedKeys'];

    // Start capturing the HTML content
    ob_start();
?>

<div id="post_content">
    <div>
        <?= $content ?>
    </div>

    <div class="mt-5"> 
        <h2>You Might Also Like:</h2>
        <div class="row">
            <?php foreach ($random_keys as $key): ?>
                <div class="col-md-4">
                    <a href='/<?= $key ?>'>
                        <img src="<?= !empty($posts[$key]['featured_image']) ? $posts[$key]['featured_image'] : asset('/images/logos/logo.png') ?>" 
                            alt="<?= $posts[$key]['title'] ?>" 
                            style="width: 100%; height: auto; display: block;">
                    </a>
                    <a href='/<?= $key ?>'>
                        <h4> <?= $posts[$key]['title'] ?> </h2>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 
    // Load the layout and inject the variable
    include view_path('/layouts/index.php'); 
?>
