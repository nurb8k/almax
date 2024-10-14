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
        $pages = Page::where('id', '!=', 1)->get();
        return view('index', compact('page','pages','pageElements'));
    }

    public function page2()
    {
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
        $page4 = Page::find(4);
        return view('page4', compact('page4'));
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

