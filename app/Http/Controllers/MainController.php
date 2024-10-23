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
        $page = Page::find(3);
        $pageElements = $page->elements;
        return view('page3', compact('page','pageElements'));
    }

    public function page4()
    {
        $page = Page::find(4);
        $pageElements = $page->elements;
        return view('page4', compact('page','pageElements'));
    }

    public function page5()
    {
        $page = Page::find(5);
        $pageElements = $page->elements;
        return view('page5', compact('page','pageElements'));
    }

    public function page6()
    {
        $page = Page::find(6);
        $pageElements = $page->elements;
        return view('page6', compact('page','pageElements'));
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

