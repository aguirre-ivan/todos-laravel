<div class="container w-25 bg-dark p-4 mt-4 rounded text-white">
    <form method="POST"
        action="{{ route('todos') }}">
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error ('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="title"
                class="form-label">New todo</label>
            <input type="text"
                name="title"
                placeholder="Todo title"
                class="form-control">
        </div>

        <div class="mb-3">
            <label for="category-select"
                class="form-label">Category</label>
            <select id="category-select"
                class="form-select mb-3">
                <option selected>Select a category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="d-grid gap-2 col-6 ms-auto">
            <button type="submit"
                class="btn btn-primary">Add</button>
        </div>
    </form>
</div>