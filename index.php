<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = [
        '/' => 'controllers/login.php',
        '/dashboard' => 'controllers/dashboard.php',
    ];

    if( array_key_exists($uri, $routes) ){
        require $routes[$uri];
    } else{
        http_response_code(404);
        echo "Sorry Not Found";
        die();
    }

?>