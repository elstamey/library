<?php

namespace Library\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Library\Book;
use Library\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $Book = Book::findOrFail($id);
        $Book->update($request->all());

        return $Book;
    }

    public function store(Request $request)
    {
        $Book = Book::create($request->all());
        return $Book;
    }

    public function destroy($id)
    {
        $Book = Book::findOrFail($id);
        $Book->delete();
        return '';
    }
}
