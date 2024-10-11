<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index()
    {
        $page = Page::first();
        $pageElements = $page->elements;
        return view('index', compact('page','pageElements'));
    }

    public function page2()
    {
        dd(App::getLocale());
        $page = Page::find(2);
        $pageElements = $page->elements;
        return view('page2', compact('page','pageElements'));
    }

    public function page3()
    {
        return view('page3');
    }

    public function page4()
    {
        return view('page4');
    }

    public function page5()
    {
        return view('page5');
    }

    public function page6()
    {
        return view('page6');
    }

    public function send(Request $request)
    {
        Application::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);


        return redirect()->back()->with('success', 'Ваша заявка успешно отправлена');
    }
}

