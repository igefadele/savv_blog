<?php
    $pageTitle = "Welcome — Your Brand Name | Savv Web Framework Starter";
    $pageDescription = "We build things that matter. Powered by Savv Web Framework";

    $metadata = request('metadata');
    $content = request('content');

    use Savv\Services\BlogService;
    

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