<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingTableRequest;
use App\Models\BookingTable;
use Illuminate\Http\Request;


class BookingTableController extends Controller
{
    public function AddBookingTable(BookingTableRequest $request)
    {
        $request = $request->validated();
        BookingTable::create($request);
        return redirect()->route('about#menu');
    }
}
