<?php

/*

  Blockchains.io is a Blockstrap Application
  Designed and Mantained by Neuroware.io

  MIT LICENSE - http://en.wikipedia.org/wiki/MIT_License

  ------------------------------------------------------

  The MIT License (MIT)

  Copyright (c) 2014 Neuroware.io, Inc

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights
  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  copies of the Software, and to permit persons to whom the Software is
  furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in
  all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
  THE SOFTWARE.

  ------------------------------------------------------

  Learn more about Blockstrap
  http://blockstrap.com

  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMZZZZZZZZZZZZZMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMZZZZZZZ,,,,,,,,,ZZZZZZZMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMNZZZZZZZ,,,,,,,,,,,,,,,,,,,ZZZZZZZ8MMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMOZZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$ZZZZZZZMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMZZZZZZZ?,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:ZZZZZZZMMMMMMMMMMMMMMM
  MMMMMMMMMZZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ZZZZZZZMMMMMMMMMM
  MMMDZZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ZZZZZZZOMMMM
  MMZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,IZZZMMM
  MMZZ:,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ZZOMM
  MMNZZZZZ$,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,?ZZZZZ8MMM
  MMMMMMNZZZZZO.,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:ZZZZZZDMMMMMMM
  MMMMMMMMMZZZZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,Z$ZZZZZZZMMMMMMMMMM
  MMMMNZZZZZZIIII?ZZZZZZ7,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,+ZZZZZZIIIIIZZZZZZDMMMMM
  MMMMZZIIIIIIIIIIIIII7ZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ZZZZZZ7IIIIIIIIIIIIIIZZDMMMM
  MMMMZZZ7IIIIIIIIIIIIIIIII$ZZZZZZ,,,,,,,,,,,,,,,,,,,ZZ$ZZZZIIIIIIIIIIIIIIIII7ZZZMMMMM
  MMMMMMZZZZZZIIIIIIIIIIIIIIIII7ZZZZZZ$,,,,,,,,,?ZZZZZZIIIIIIIIIIIIIIIIIIZZZZZZ8MMMMMM
  MMMMMMMMMMZZZZZZ7IIIIIIIIIIIIIIIII7ZZZZZZZZZZZZZ7IIIIIIIIIIIIIIIIIIZZZZZZMMMMMMMMMMM
  MMMMMMMMMZZZZZZZZZZZ$IIIIIIIIIIIIIIIIIIZZZZZI?IIIIIIIIIIIIIIII7ZZZZZZZZZZZNMMMMMMMMM
  MMMMMMZZZZZ,,,,,,,:ZZZZZZIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIZZZZZZ=,,,,,,.$ZZZZMMMMMMM
  MMMMMMZZ,,,,,,,,,,,,,,,ZZZZZZ7IIIIIIIIIIIIIIIIIIIIIIIIZZZZZZ,,,,,,,,,,,,,,,ZZ8MMMMMM
  MMMMMMZZZZZ,,,,,,,,,,,,,,,,+ZZZZZZIIIIIIIIIIIIIII$ZZZZZ7.,,,,,,,,,,,,,,.OOZZZMMMMMMM
  MMMMMMMMMOZZZZZ:,,,,,,,,,,,,,,,,ZZZZZZIIIIIIIZZZZZZ,,,,,,,,,,,,,,,,.ZZZZZZMMMMMMMMMM
  MMMMMMMMMMMMM$ZZZZZ7,,,,,,,,,,,,,,,,ZZZZZZZZZZZ,,,,,,,,,,,,,,,,=ZZZZZZMMMMMMMMMMMMMM
  MMMMMMMMMZZZZZZIIIZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,$ZZZZZ7II$ZZZZZMMMMMMMMMM
  MMMMMMMMZZ7IIIIIIIIIIIZZZZZZ,,,,,,,,,,,,,,,,,,,,,,,,,,,ZZZZZZIIIIIIIIIIIIZZMMMMMMMMM
  MMMMMMMMZZZIIIIIIIIIIIIIIIZZZZZZ,,,,,,,,,,,,,,,,,,,ZZZZZZIIIIIIIIIIIIIIIZZZMMMMMMMMM
  MMMMMMMMMZZZZZ$IIIIIIIIIIIIIIIZZZZZZ.,,,,,,,,,,ZZZZZZIIIIIIIIIIIIIII$ZZZZZMMMMMMMMMM
  MMMMMMMMMMMMMOZZZZ7IIIIIIIIIIIIIII$ZZZZZ.,,ZZZZZZIIIIIIIIIIIIIII7ZZZZZMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMZZZZZ7IIIIIIIIIIIIIII$ZZZZZ$IIIIIIIIIIIIIII7ZZZZZMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMZZZZZ7IIIIIIIIIIIIIIIIIIIIIIIIIIIII7$ZZZZNMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMNZZZZZ7IIIIIIIIIIIIIIIIIIIIIIZZZZZDMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMNZZZZZIIIIIIIIIIIIIIIZZZZZDMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMDZZZZZIIIIIIIZZZZZ8MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM8ZZZZZZZZZOMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMOZ8MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

  TO LEARN MORE ABOUT OUR APIs and FRAMEWORK,
  PLEASE READ OUR DOCUMENTATION - http://docs.blockstrap.com

 */

//error_reporting(-1);

$base = dirname(__FILE__);
include_once($base . '/_libs/php/bs.php');
include_once($base . '/_libs/php/cache.php');

BlockstrapCache::config('stats', array(
    'engine' => 'BlockstrapFileEngine'
    , 'key_prefix' => 'bc_stats'
    , 'cache_duration' => 10
    , 'path' => '/media/temp/bc_cache'
        )
);
BlockstrapCache::config('blocks', array(
    'engine' => 'BlockstrapFileEngine'
    , 'key_prefix' => 'bc_blocks'
    , 'cache_duration' => 600
    , 'path' => '/media/temp/bc_cache'
        )
);
BlockstrapCache::config('shortterm', array(
    'engine' => 'BlockstrapFileEngine'
    , 'key_prefix' => 'bc_shortterm'
    , 'cache_duration' => 60
    , 'path' => '/media/temp/bc_cache'
        )
);

$bs = new blockstrap_core($base);

$slug = $bs->slug($_SERVER);
$currency = $bs->currency($_SERVER);
$directory = $bs->directory($_SERVER, $base);

$data = $bs->data($base, $slug, $directory, $currency);
$html = $bs->html($base, $slug, $directory);
$content = $bs->content($base, $slug, $directory);

if (isset($_GET['debug']) && $_GET['debug'] == true) {
    var_dumped($data);
    var_dumped($html);
    var_dumped($content);
}

// ADD CONTENT TO DATA
$data['content'] = $content;

// MERGE DATA AND HTML
$bs->display($html, $data);

exit;
