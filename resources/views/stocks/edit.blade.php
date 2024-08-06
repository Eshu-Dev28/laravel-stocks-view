<!-- resources/views/stocks/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Stock</h1>
    <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="INVNO">Invoice No</label>
            <input type="text" name="INVNO" class="form-control" value="{{ $stock->INVNO }}">
        </div>
        <div class="form-group">
            <label for="INVDE">Invoice Date</label>
            <input type="text" name="INVDE" class="form-control" value="{{ $stock->INVDE }}">
        </div>
        <div class="form-group">
            <label for="PROID">Product Name</label>
            <input type="text" name="PROID" class="form-control" value="{{ $stock->PROID }}">
        </div>
        <div class="form-group">
            <label for="QTY">Quantity</label>
            <input type="text" name="QTY" class="form-control" value="{{ $stock->QTY }}">
        </div>
        <div class="form-group">
            <label for="MRB">MRB Cost</label>
            <input type="text" name="MRB" class="form-control" value="{{ $stock->MRB }}">
        </div>
        <div class="form-group">
            <label for="BSCST">Basic Cost</label>
            <input type="text" name="BSCST" class="form-control" value="{{ $stock->BSCST }}">
        </div>
        <div class="form-group">
            <label for="LDCST">Landing Cost</label>
            <input type="text" name="LDCST" class="form-control" value="{{ $stock->LDCST }}">
        </div>
        <div class="form-group">
            <label for="SECST">Sales Cost</label>
            <input type="text" name="SECST" class="form-control" value="{{ $stock->SECST }}">
        </div>
        <div class="form-group">
            <label for="RDATE">Remainder Date</label>
            <input type="text" name="RDATE" class="form-control" value="{{ $stock->RDATE }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Stock</button>
    </form>
</div>
@endsection
