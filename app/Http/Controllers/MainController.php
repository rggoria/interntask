<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MainController extends Controller
{
    public function blog(Request $request)
    {
        $jsonFilePath = resource_path('json/UATWEB/resources/blogItems.json');
        $jsonContent = File::get($jsonFilePath);
        
        $blogItems = json_decode($jsonContent, true);

        usort($blogItems, function ($a, $b) {
            return (int)$b['id'] - (int)$a['id'];
        });

        $collection = collect($blogItems);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        $blogItemsPaginated = new LengthAwarePaginator($currentItems, $collection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view("pages.blog", [
            "blogItems" => $blogItemsPaginated,
        ]);
    }

    public function blogItem($title) {
        return match ($title) {
            'employment-background-check-companies' => view('pages.blog.blog_100'),
            'employment-background-check-agencies' => view('pages.blog.blog_101'),
            'background-check-companies-for-employers' => view('pages.blog.blog_102'),
            'afp-checks-for-employment' => view('pages.blog.blog_103'),
            'afp-checks-vs-state-police-checks' => view('pages.blog.blog_104'),
            'demystifying-afp-checks-in-australia' => view('pages.blog.blog_105'),
            'how-long-does-an-afp-check-take-in-australia' => view('pages.blog.blog_106'),
            'understanding-the-different-types-of-afp-checks' => view('pages.blog.blog_107'),
            'how-do-i-check-my-criminal-background' => view('pages.blog.blog_108'),
            'background-screening-companies' => view('pages.blog.blog_109'),
            'how-to-do-a-background-check-on-a-person' => view('pages.blog.blog_100'),
            // default => back(),
            default => abort(404),
        };
    }
}
