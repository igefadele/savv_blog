<?php
    $metadata = $metadata ?? request('metadata', []);
    $content = $content ?? request('content', '');

    $pageTitle = $metadata['title'] ?? "Welcome — Your Brand Name | Savv Web Framework Starter";
    $pageDescription = $metadata['excerpt'] ?? "We build things that matter. Powered by Savv Web Framework";

    // Start capturing the HTML content
    ob_start();
?>

<div id="post_content">
    <?= $content ?>
</div>

<?php 
    // Save the captured HTML into a variable
    $content = ob_get_clean(); 

    // Load the layout and inject the variable
    include view_path('/layouts/index.php'); 

    
    /* {
        "type": "vcs",
        "url": "https://github.com/igefadele/savv_framework"
    } */
?>
