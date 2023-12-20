<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function __construct(){}

    public function index(): View
    {
        return \view('Frontend.index');
    }

    public function page($locale, $slug): View
    {
        if (!$page = Page::where('slug', $slug)->first())
        {
            abort(404);
        }
        return \view('Frontend.page', compact('page'));
    }

    public function singleCat($locale, $slug): View
    {
        if (! $cat = Category::where('slug', $slug)->first())
        {
            abort(404);
        }
        $posts = Post::where('category_id', $cat->id)
            ->where('status', 'active')
            ->paginate(10);

        return \view('Frontend.singleCat', compact('cat', 'posts'));
    }

    public function singlePost($locale, $slug): View
    {
        if (!$post = Post::where('slug', $slug)->first())
        {
            abort(404);
        }

        return \view('Frontend.singlePost', compact('post'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:subscribes,email'
        ]);

        $sub = new Subscribe();
        $sub->client_id = $request->ip();
        $sub->email = $request->email;

        if ($sub->save())
        {
            return redirect()->back()->with('success', 'You are subscribed successfully!');
        }

        return redirect()->back()->with('error', '500 server Error !');


    }
}
