<?php
use App\Models\Siteinfo;
use App\Models\Page;
use App\Models\Category;
use App\Models\Post;

if (!function_exists('siteInfo'))
{
    function siteInfo()
    {
        return Siteinfo::where('id', 1)->first();
    }
}

if (! function_exists('pages'))
{
    function pages()
    {
        return Page::orderBy('order', 'ASC')->where('status', 'active')->get();
    }
}

if (! function_exists('categories'))
{
    function categories()
    {
        return Category::orderBy('order', 'ASC')->get();
    }
}

if (! function_exists('posts'))
{
    function posts()
    {
        return Post::where('status', 'active')->orderBy('created_at', 'DESC')->paginate(10);
    }
}

if (! function_exists('recentPosts'))
{
    function recentPosts()
    {
        return Post::orderBy('created_at', 'DESC')->paginate(5);
    }
    {

    }
}
