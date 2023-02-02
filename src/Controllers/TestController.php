<?php

namespace Jerickcm\Migrate\Controllers;

use Illuminate\Http\Request;
use Jerickcm\Inspire\Inspire;

class TestController
{
    public function __invoke(Inspire $inspire)
    {
        dd("hello");
        // $quote = $inspire->justDoIt();
        // return view('inspire::index', compact('quote'));
    }
}
