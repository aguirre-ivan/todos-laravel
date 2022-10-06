<div class="container w-25 bg-dark px-4 py-3 mt-4 rounded text-white">
    @foreach ($todos as $todo)
    <div class="card bg-secondary my-2">
        <div class="card-body row">
            <div class="col-md-8 d-flex align-items-center">
                <a href="{{ route('todos-edit', ['id' => $todo->id]) }}">
                    {{ $todo->title }}
                </a>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <form action="{{ route('todos-destroy', [$todo->id]) }}"
                    method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit"
                        class="btn-close btn-close-white"
                        aria-label="Close"></button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>