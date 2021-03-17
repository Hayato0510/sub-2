<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=18025'); //コンプレックスラブ - fam
            // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=17545'); //恋バナナ - fam
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=18025'); //コンプレックスラブ - fam
        // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=17545'); //恋バナナ - fam
    }
}
