@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Purchase Details</h2>
    <a href="{{ route('stocks.create') }}" class="btn btn-primary">Add Stock</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Invoice No</th>
                <th>Invoice Date</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>MRB Cost</th>
                <th>Basic Cost</th>
                <th>Landing Cost</th>
                <th>Sales Cost</th>
                <th>Remainder Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->id }}</td>
                    <td>{{ $stock->INVNO }}</td>
                    <td>{{ $stock->INVDE }}</td>
                    <td>{{ $stock->PROID }}</td>
                    <td>{{ $stock->QTY }}</td>
                    <td>{{ $stock->MRB }}</td>
                    <td>{{ $stock->BSCST }}</td>
                    <td>{{ $stock->LDCST }}</td>
                    <td>{{ $stock->SECST }}</td>
                    <td>{{ $stock->RDATE }}</td>
              
                    <td>
    <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <form action="{{ route('stocks.buy', $stock->id) }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-success">Buy Now</button>
    </form>
</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
