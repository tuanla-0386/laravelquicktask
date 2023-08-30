<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function changeLocale(Request $request)
    {
        $lang = $request->language;

        if (!in_array($lang, config('lang'))) {
            abort(400);
        }

        Session::put('language', $lang);

        return redirect()->back();
    }
}
