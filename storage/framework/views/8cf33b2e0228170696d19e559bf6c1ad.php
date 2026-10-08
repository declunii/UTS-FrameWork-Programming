<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Mini-Perpus'); ?> - Mini-Perpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('books.index')); ?>">Mini-Perpus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('books.*') ? 'active' : ''); ?>" href="<?php echo e(route('books.index')); ?>">Buku</a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('categories.*') ? 'active' : ''); ?>" href="<?php echo e(route('categories.index')); ?>">Kategori</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container pb-5">
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show"><?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show"><?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mini-perpus\resources\views/layouts/app.blade.php ENDPATH**/ ?>