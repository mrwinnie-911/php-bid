<?php
require __DIR__ . '/../app/bootstrap.php';

$page = $_GET['page'] ?? 'dashboard/index';
$allowedPages = [
    'dashboard/index',
    'projects/index',
    'quotes/index',
    'notifications/index',
    'imports/index',
    'settings/index',
    'audit/index',
];

if (!in_array($page, $allowedPages, true)) {
    $page = 'dashboard/index';
}

render_view($page, compact('page', 'config', 'departments', 'projects', 'quotes', 'notifications', 'metrics', 'metric_templates', 'imports', 'audit_events'));
