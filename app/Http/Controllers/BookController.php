<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class BookController extends Controller
{

    public function index()
    {
        $data = Book::query()->paginate(5);

        return Inertia::render('books', [
            'data' => $data
        ]);
    }

    public function store(StoreBookRequest $request)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ])->validate();

        Book::create($request->all());

        return redirect()->back()
            ->with('message', 'Book created');
    }


    public function update(UpdateBookRequest $request, Book $book)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ])->validate();

        $book->update($request->all());

        return redirect()->back()
            ->with('message', 'Book updated');
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()
            ->with('message', 'Book deleted');
    }
}
