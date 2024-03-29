<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/answers' => [[['_route' => 'answer_index', '_controller' => 'App\\Controller\\AnswerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/answers/new' => [[['_route' => 'answer_new', '_controller' => 'App\\Controller\\AnswerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\HomeController::mentions'], null, null, null, false, false, null]],
        '/questions' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/questions/myquestions' => [[['_route' => 'question_mine', '_controller' => 'App\\Controller\\QuestionController::myquestions'], null, ['GET' => 0], null, false, false, null]],
        '/questions/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/results' => [[['_route' => 'result_index', '_controller' => 'App\\Controller\\ResultController::index'], null, ['GET' => 0], null, true, false, null]],
        '/results/myresults' => [[['_route' => 'result_mine', '_controller' => 'App\\Controller\\ResultController::myResults'], null, ['GET' => 0], null, false, false, null]],
        '/results/new' => [[['_route' => 'result_new', '_controller' => 'App\\Controller\\ResultController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users/profile/edit' => [[['_route' => 'user_profile_edit', '_controller' => 'App\\Controller\\UserController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users/password/edit' => [[['_route' => 'user_password_edit', '_controller' => 'App\\Controller\\UserController::editPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/answers/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/questions/([^/]++)(?'
                    .'|(*:241)'
                    .'|/(?'
                        .'|edit(*:257)'
                        .'|results(*:272)'
                        .'|stats(*:285)'
                        .'|choice(*:299)'
                    .')'
                    .'|(*:308)'
                .')'
                .'|/res(?'
                    .'|et\\-password/reset(?:/([^/]++))?(*:356)'
                    .'|ults/([^/]++)(?'
                        .'|(*:380)'
                        .'|/edit(*:393)'
                        .'|(*:401)'
                    .')'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:429)'
                    .'|/edit(*:442)'
                    .'|(*:450)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'answer_show', '_controller' => 'App\\Controller\\AnswerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'answer_edit', '_controller' => 'App\\Controller\\AnswerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'answer_delete', '_controller' => 'App\\Controller\\AnswerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'question_answer', '_controller' => 'App\\Controller\\QuestionController::answer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'question_stats', '_controller' => 'App\\Controller\\QuestionController::stats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'question_choice', '_controller' => 'App\\Controller\\QuestionController::choices'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        380 => [[['_route' => 'result_show', '_controller' => 'App\\Controller\\ResultController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        393 => [[['_route' => 'result_edit', '_controller' => 'App\\Controller\\ResultController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        401 => [[['_route' => 'result_delete', '_controller' => 'App\\Controller\\ResultController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        429 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        442 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
