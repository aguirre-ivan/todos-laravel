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
            <input type="text"
                name="title"
                placeholder="Todo title"
                class="form-control"
                value="{{ $todo->title }}">
        </div>

        <div class="d-grid gap-2 col-6 ms-auto">
            <button type="submit"
                class="btn btn-primary">Update title</button>
        </div>
    </form>
</div>