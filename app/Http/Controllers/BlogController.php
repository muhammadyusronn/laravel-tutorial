<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $data['title'] = 'All Blog';
        $data['posts'] = Blog::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString();
        return view('blog', $data);
    }

    public function show(Blog $blog)
    {
        $data['title'] = 'Blog';
        $data['posts'] = $blog;
        return view(
            'detail_blog',
            $data
        );
    }

    public function blogByCategory(Category $category)
    {
        $data['title'] = 'Blog By Category (' . $category->name . ')';
        $data['posts'] = $category->blog->load('author', 'category');
        return view('blog', $data);
    }

    public function blogByAuthor(User $author)
    {
        $data['title'] = 'Blog By Author (' . $author->name . ')';
        $data['posts'] = $author->blog->load('category', 'author');
        return view('blog', $data);
    }
}
