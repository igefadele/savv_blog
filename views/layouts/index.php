<?php
/** @var string $content */
?>

<!DOCTYPE html>
<html lang="en">

<?php include ROOT_PATH . '/views/partials/head.php'; ?>

<body>

    <?php include ROOT_PATH . '/views/partials/header.php'; ?>

    <!-- IMPORTANT: Wrap your main element or outermost container in #savv
        This is to benefit from the SPA feel and SSG-like navigation speed
    -->
    <main id="savv" class="transition-fade">
        <?php echo $content; ?>
    </main>

    <?php include ROOT_PATH . '/views/partials/footer.php'; ?>
    <?php include ROOT_PATH . '/views/partials/scripts.php'; ?>

</body>

</html>
