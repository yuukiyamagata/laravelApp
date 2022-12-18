<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {
//     font-size: 16pt;
//     color: #999;
// }
// h1 {
//     font-size: 100px;
//     text-align: right;
//     color: #999;
//     margin: -40px 0px -50px 0px;
// }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {
//     public function index(){
//         global $head, $style, $body, $end;

//             $html = $head . tag('title', 'Hello/Index') . $style .
//             $body
//             . tag('h1', 'Index')
//             . tag('p', 'this is Index Page')
//             . '<a href="/hello/other">go to Other page</a>'
//             . $end;

//         return $html;
//     }

//     public function other(){
//         global $head, $style, $body, $end;

//         $html = $head . tag('title', 'Hello/Other') . $style . $body
//         .tag('h1', 'Other')
//         .tag('p', 'this is Other Page')
//         .$end;
//         return $html;
//     }
// }

// class HelloController extends Controller
// {
//     public function __invoke(){
//         return <<<EOF
//         <html>
//             <head>
//                 <title>Hello</title>
//                 <style>
//                     body{
//                         font-size: 16pt;
//                         color: #999;
//                     }
//                     h1{
//                         font-size: 30pt;
//                         text-align: right;
//                         color: #eee;
//                         margin: -15px 0px 0px 0px;
//                     }
//                 </style>
//             </head>
//             <body>
//                     <h1>Single Action</h1>
//                     <p>これは、シングルアクションコントローラーです</p>
//             </body>
//         </html>
//         EOF;
//     }
// }

class HelloController extends Controller
{
    public function index(Request $request, Response $response){
        $html = <<<EOF
        <html>
            <head>
                <title>Hello</title>
                <style>
                    body{
                        font-size: 16pt;
                        color: #999;
                    }
                    h1{
                        font-size: 120pt;
                        text-align: right;
                        color: #eee;
                        margin: -50px 0px -120px 0px;
                    }
                </style>
            </head>
            <body>
                <h1>Hello</h1>
                <h3>Request</h3>
                <pre>{$request}</pre>
                <h3>Response</h3>
                <pre>{$response}</pre>
            </body>
        </html>
        EOF;

        $response->setContent($html);
        return $response;
    }
}