<?php
namespace Library\Http\Controllers;

class BooksController extends Controller
{
    public function index()
    {
        return view('admin.books.index');
    }
}