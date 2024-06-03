<?php
// Routing berdasarkan URL
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Pecah URL untuk mendapatkan path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Pecah path menjadi array
$pathSegments = explode('/', trim($path, '/'));

// Ambil metode dari path kedua setelah nama controller
$methodName = end($pathSegments);

// Ambil nama controller dari path pertama setelah 'tugas-akhir'
$controllerName = prev($pathSegments);

if (in_array('dashboard', $pathSegments)) {
    $controllerFile = "controllers/dashboard/$controllerName.php";
    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        $controller = new $controllerName();

        if (method_exists($controller, $methodName)) {
            call_user_func_array([$controller, $methodName], []);

        } else {
            http_response_code(404);
            echo "404 Not Found";
        }

    } else {
        $controllerName = "Home";
        $controllerFile = "controllers/dashboard/$controllerName.php";
        require_once $controllerFile;
        $controller = new $controllerName();
        call_user_func_array([$controller, "index"], []);
    }

} else {
    $controllerFile = "controllers/$controllerName.php";
    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        $controller = new $controllerName();

        if (method_exists($controller, $methodName)) {
            call_user_func_array([$controller, $methodName], []);

        } else {
            http_response_code(404);
            echo "404 Not Found";
        }

    } else {
        $sectionName = end($pathSegments);
        $methodName = prev($pathSegments);
        $controllerName = prev($pathSegments);
        
        $controllerFile = "controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            
            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], [$sectionName]);
                
            } else {
                http_response_code(404);
                echo "404 Not Found";
            }
            
        } else {
            $controllerName = $methodName;
            $controllerFile = "controllers/$controllerName.php";

            if (file_exists($controllerFile)) {
                require_once $controllerFile;
                $controller = new $controllerName();
                
                if (method_exists($controller, "index")) {
                    call_user_func_array([$controller, "index"], []);
                    
                } else {
                    http_response_code(404);
                    echo "404 Not Found";
                }
                
            } else {
                $controllerFile = "controllers/Home.php";

                require_once $controllerFile;
                $controller = new Home();
                call_user_func_array([$controller, "index"], []);
            }
        }
    }
}

// if ($controllerName == "dashboard") {
//     $controllerFile = "controllers/dashboard/$methodName.php";
//     if (file_exists($controllerFile)) {
//         require_once $controllerFile;

//         $controller = new $methodName();

//         if (method_exists($controller, "index")) {
//             call_user_func_array([$controller, "index"], []);

//         } else {
//             http_response_code(404);
//             echo "404 Not Found";
//         }

//     } else {
//         $controllerName = "Home";
//         $controllerFile = "controllers/dashboard/$controllerName.php";
//         require_once $controllerFile;
//         $controller = new $controllerName();
//         call_user_func_array([$controller, "index"], []);
//     }

// } elseif (prev($pathSegments) == "dashboard") {
//     $controllerFile = "controllers/dashboard/$controllerName.php";
//     if (file_exists($controllerFile)) {
//         require_once $controllerFile;

//         $controller = new $controllerName();

//         if (method_exists($controller, $methodName)) {
//             call_user_func_array([$controller, $methodName], []);

//         } else {
//             http_response_code(404);
//             echo "404 Not Found";
//         }

//     } else {
//         $controllerName = "Home";
//         $controllerFile = "controllers/dashboard/$controllerName.php";
//         require_once $controllerFile;
//         $controller = new $controllerName();
//         call_user_func_array([$controller, "index"], []);
//     }

// } else {
//     $controllerFile = "controllers/$controllerName.php";
//     if (file_exists($controllerFile)) {
//         require_once $controllerFile;

//         $controller = new $controllerName();

//         if (method_exists($controller, $methodName)) {
//             call_user_func_array([$controller, $methodName], []);

//         } else {
//             http_response_code(404);
//             echo "404 Not Found";
//         }

//     } else {
//         $controllerName = $methodName;
//         $controllerFile = "controllers/$controllerName.php";
//         if (file_exists($controllerFile)) {
//             require_once $controllerFile;
//             $controller = new $controllerName();
            
//             if (method_exists($controller, "index")) {
//                 call_user_func_array([$controller, "index"], []);
                
//             } else {
//                 http_response_code(404);
//                 echo "404 Not Found";
//             }
            
//         } else {
//             $controllerName = "Home";
//             $controllerFile = "controllers/$controllerName.php";
//             require_once $controllerFile;
//             $controller = new $controllerName();
//             call_user_func_array([$controller, "index"], []);
//         }
//     }
// }