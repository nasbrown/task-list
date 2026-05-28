<?php

declare(strict_types=1);

const ALLOWED_METHODS = ['GET', 'POST', 'DELETE', 'PATCH'];
const INDEX_URI = '';
const INDEX_ROUTE = 'index';

function normalizeuri(string $uri): string{
    $uri = strtok($uri, '?');
    $uri = strtolower(trim($uri, '/'));

    return $uri === INDEX_URI ? INDEX_ROUTE : $uri;
}

function getFilePath(string $uri, string $method): string{
    return ROUTES_DIR . '/' . normalizeuri($uri) . '_' . strtolower($method) . '.php';
}

function notFound(): void{
    http_response_code(404);

    echo "404 not found";

    exit;
}

function dispatch(string $uri, string $method): void{
    $uri = normalizeuri($uri);
    $method = strtoupper($method);

    if(!in_array($method, ALLOWED_METHODS)){
        notFound();
    }

    $filePath = getFilePath($uri, $method);

    if(file_exists($filePath)){
        include($filePath);
        return;
    }

    notFound();
}