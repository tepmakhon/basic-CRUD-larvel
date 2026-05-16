@extends('layouts.app')

@section('content')

<div class="card-box">

    <h3 class="mb-3">📦 Import Items Dashboard</h3>

    <a href="/items/create" class="btn btn-primary mb-3">
        ➕ Add New Item
    </a>

    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Supplier</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Status</th>
                <th width="180">Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>

                <td>
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}"
                             width="60"
                             class="rounded">
                    @endif
                </td>

                <td>{{ $item->item_name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->supplier }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ $item->import_price }}</td>

                <td>
                    @if($item->status == 'Completed')
                        <span class="badge bg-success">Completed</span>
                    @else
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </td>

                <td>
                    <a href="/items/{{ $item->id }}/edit"
                       class="btn btn-warning btn-sm">Edit</a>

                    <form action="/items/{{ $item->id }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection