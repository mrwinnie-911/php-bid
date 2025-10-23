<?php

function render_view(string $view, array $data = []): void
{
    $viewPath = __DIR__ . '/../views/' . $view . '.php';

    if (!file_exists($viewPath)) {
        $viewPath = __DIR__ . '/../views/dashboard/index.php';
    }

    extract($data, EXTR_SKIP);

    include __DIR__ . '/../views/layout/header.php';
    include $viewPath;
    include __DIR__ . '/../views/layout/footer.php';
}

function format_currency(float $value): string
{
    return '$' . number_format($value, 0, '.', ',');
}

function active_nav(string $page, string $current): string
{
    return $page === $current ? 'active fw-semibold' : '';
}
