<?php
$appTitle = $config['app_name'] ?? 'Quoting Platform';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($appTitle) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><?= htmlspecialchars($appTitle) ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?= active_nav('dashboard/index', $page) ?>" href="/?page=dashboard/index">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('projects/index', $page) ?>" href="/?page=projects/index">Projects</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('quotes/index', $page) ?>" href="/?page=quotes/index">Quotes</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('notifications/index', $page) ?>" href="/?page=notifications/index">Notifications</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('imports/index', $page) ?>" href="/?page=imports/index">Imports</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('settings/index', $page) ?>" href="/?page=settings/index">Settings</a></li>
                <li class="nav-item"><a class="nav-link <?= active_nav('audit/index', $page) ?>" href="/?page=audit/index">Audit</a></li>
            </ul>
            <span class="navbar-text small text-white-50">Next phase prototype</span>
        </div>
    </div>
</nav>
<main class="container-fluid py-4">
