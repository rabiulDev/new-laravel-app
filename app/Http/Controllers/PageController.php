<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPosts(): string
    {
        return "<h1> Return page from controller </h1>";
    }

    public function showSinglePosts(string $id): string
    {
        return "<h1> Return from controller single post of ID $id </h1>";
    }
}
