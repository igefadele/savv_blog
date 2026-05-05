<?php 

// Specific route
router()->get('/', function() {
    require page_path('/views/pages/index.php');
});