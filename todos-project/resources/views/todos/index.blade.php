@extends('app')

@section('content')
<div class="container w-25 bg-dark p-4 mt-4 rounded text-white">
    <form method="POST"
        action="">
        <div class="mb-3">
            <label class="form-label">New todo</label>
            <input type="text"
                name="title"
                placeholder="Todo title"
                class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text"
                name="category"
                placeholder="Category name"
                class="form-control">
        </div>
        <div class="d-grid gap-2 col-6 ms-auto">
            <button type="submit"
                class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection