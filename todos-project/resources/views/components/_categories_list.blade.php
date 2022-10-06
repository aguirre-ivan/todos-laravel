<div class="container w-25 bg-dark px-4 py-3 mt-4 rounded text-white">
    @foreach ($categories as $category)
    <div class="card bg-secondary my-2">
        <div class="card-body row">
            <div class="col-md-8 d-flex align-items-center">
                <a href="{{ route('categories.show', ['id' => $category->id]) }}">
                    {{ $category->name }}
                </a>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <form action="{{ route('categories-destroy', [$category->id]) }}"
                    method="POST">
                    @method('DELETE')
                    @csrf
                    <div>
                        <a class="d-flex align-items-center gap-2"
                            href="{{ route('categories.show', ['category' => $category->id]) }}">
                            <span class="color-container"
                                style="background-color: {{ $category->color }}"></span> {{ $category->name }}
                        </a>
                    </div>
                    <button type="submit"
                        class="btn-close btn-close-white"
                        aria-label="Close"></button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>