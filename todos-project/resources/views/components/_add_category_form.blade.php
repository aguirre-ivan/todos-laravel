<div class="container w-25 bg-dark p-4 mt-4 rounded text-white">
    <form method="POST"
        action="{{ route('categories.store') }}">
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error ('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="name"
                class="form-label">New category</label>
            <input type="text"
                name="name"
                placeholder="Category title"
                class="form-control">
        </div>

        <label for="categoryColor"
            class="form-label">Color</label>
        <div class="mb-3 row">
            <div class="col-md-4 d-flex align-items-center">
                <input type="color"
                    class="form-control form-control-color"
                    id="categoryColor"
                    name="color"
                    value="#563d7c"
                    title="Choose your color">
            </div>
            <div class="col-md-8 d-flex justify-content-end">
                <button type="submit"
                    class="btn btn-primary">Add category</button>
            </div>
        </div>
    </form>
</div>