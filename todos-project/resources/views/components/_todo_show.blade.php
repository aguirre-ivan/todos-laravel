<div class="container w-25 bg-dark p-4 mt-4 rounded text-white">
    <form method="POST"
        action="{{ route('todos-update', ['id' => $todo->id]) }}">
        @method('PATCH')
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error ('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="name"
                class="form-label">Edit todo</label>
            <input type="text"
                name="title"
                placeholder="Todo title"
                class="form-control"
                value="{{ $todo->title }}">
        </div>

        <div class="mb-3">
            <label for="category-select"
                class="form-label">Category</label>
            <select id="category-select"
                class="form-select mb-3"
                name="category_id">
                @foreach ($categories as $category)
                @if ($category == $category_selected)
                <option value="{{ $category->id }}"
                    selected>
                    {{ $category->name }}
                </option>
                @else
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="d-grid gap-2 col-6 ms-auto">
            <button type="submit"
                class="btn btn-primary">Update</button>
        </div>
    </form>
</div>