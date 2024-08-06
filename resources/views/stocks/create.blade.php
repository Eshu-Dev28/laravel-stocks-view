<!-- resources/views/stocks/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Stock</h1>
    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="INVNO">Invoice No</label>
            <input type="text" name="INVNO" class="form-control">
        </div>
        <div class="form-group">
            <label for="INVDE">Invoice Date</label>
            <input type="text" name="INVDE" class="form-control">
        </div>
        <div class="form-group">
            <label for="PROID">Product Name</label>
            <input type="text" name="PROID" class="form-control">
        </div>
        <div class="form-group">
            <label for="QTY">Quantity</label>
            <input type="text" name="QTY" class="form-control">
        </div>
        <div class="form-group">
            <label for="MRB">MRB Cost</label>
            <input type="text" name="MRB" class="form-control">
        </div>
        <div class="form-group">
            <label for="BSCST">Basic Cost</label>
            <input type="text" name="BSCST" class="form-control">
        </div>
        <div class="form-group">
            <label for="LDCST">Landing Cost</label>
            <input type="text" name="LDCST" class="form-control">
        </div>
        <div class="form-group">
            <label for="SECST">Sales Cost</label>
            <input type="text" name="SECST" class="form-control">
        </div>
        <div class="form-group">
            <label for="RDATE">Remainder Date</label>
            <input type="text" name="RDATE" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Stock</button>
    </form>
</div>
@endsection
