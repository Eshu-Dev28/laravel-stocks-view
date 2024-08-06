<?php
namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }
    public function buyNow($id)
    {
        $stock = Stock::find($id);
        // Handle the buying logic here
    
        return redirect()->route('stocks.index')->with('success', 'Stock purchased successfully!');
    }
    
    public function show($id)
{
    $stock = Stock::find($id);
    if (!$stock) {
        return redirect()->route('stocks.index')->with('error', 'Stock not found.');
    }
    return view('stocks.show', compact('stock'));
}

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // validation rules
        ]);

        Stock::create($request->all());

        return redirect()->route('stocks.index');
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $request->validate([
            // validation rules
        ]);

        $stock->update($request->all());

        return redirect()->route('stocks.index');
    }

public function destroy(Stock $stock)
{
    // Remove related records from returns table
    DB::table('returns')->where('STOID', $stock->id)->delete();
    
    // Now delete the stock
    $stock->delete();
    
    return redirect()->route('stocks.index');
}



}
