<div class="container w-25 bg-dark p-4 mt-4 rounded text-white">
    <form method="POST"
        action="{{ route('categories.update', ['category' => $category->id]) }}">
        @method('PATCH')
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error ('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="name"
                class="form-label">Edit category</label>
            <input type="text"
                name="name"
                placeholder="Category name"
                value="{{ $category->name }}"
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
                    value="{{ $category->color }}"
                    title="Choose your color">
            </div>
            <div class="d-grid gap-2 col-6 ms-auto">
                <button type="submit"
                    class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>