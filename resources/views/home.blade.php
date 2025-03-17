@extends('layouts.app')

@section('content')
    <h2>Welcome to the Laravel Blade Lab</h2>
    <p>This is the home page using a Blade template.</p>

    <h3>Product List</h3>
    <ul>
        @forelse($products as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @empty
            <li>No products found.</li>
        @endforelse
    </ul>

    @if(count($products) > 0)
        <p>Available products are listed above.</p>
    @else
        <p>No products available.</p>
    @endif
@endsection

<x-alert type="success" message="Product added successfully!" />
<x-alert type="error" message="Failed to add product." />

<x-button type="primary" url="/" text="Go Home"/>