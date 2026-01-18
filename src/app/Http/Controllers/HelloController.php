<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOT
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
</style>
EOT;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>{$txt}</{$tag}>";
}

class HelloController extends Controller
{
    public function index()
    {
        global $head, $style, $body, $end;
        $html = $head . tag('title', 'Hello/Index') . $style . $body
        . tag('h1', 'Hello Index')
        . tag('p', 'This is HelloController@index method')
        .'<a href="/hello/other">Go to Other</a>'
        . $end;
        return $html;
    }

    public function other()
    {
        global $head, $style, $body, $end;
        $html = $head . tag('title', 'Hello/Other') . $style . $body
        . tag('h1', 'Other')
        . tag('p', 'this is other page')
        .'<a href="/hello">Go to Index</a>'
        . $end;
        return $html;
    }
}
