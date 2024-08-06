<!-- resources/views/stocks/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Stock Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Invoice No: {{ $stock->INVNO }}</h5>
            <p class="card-text"><strong>Invoice Date:</strong> {{ $stock->INVDE }}</p>
            <p class="card-text"><strong>Product Name:</strong> {{ $stock->PROID }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $stock->QTY }}</p>
            <p class="card-text"><strong>MRB Cost:</strong> {{ $stock->MRB }}</p>
            <p class="card-text"><strong>Basic Cost:</strong> {{ $stock->BSCST }}</p>
            <p class="card-text"><strong>Landing Cost:</strong> {{ $stock->LDCST }}</p>
            <p class="card-text"><strong>Sales Cost:</strong> {{ $stock->SECST }}</p>
            <p class="card-text"><strong>Remainder Date:</strong> {{ $stock->RDATE }}</p>

            <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            
            <a href="{{ route('stocks.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
