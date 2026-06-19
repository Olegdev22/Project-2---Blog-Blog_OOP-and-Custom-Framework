<?php

namespace App\Controllers;

class PostController
{
    public function index(): string
    {
        return "All posts";
    }

    public function show($id): string
    {
        return "Post nr $id";
    }
}