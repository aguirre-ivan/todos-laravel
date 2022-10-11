<div class="container w-25 bg-dark px-4 py-3 mt-4 rounded text-white">
    @foreach ($categories as $category)
    <div class="card bg-secondary my-2">
        <div class="card-body row">
            <div class="col-md-8 d-flex align-items-center">
                <a class="d-flex align-items-center gap-2"
                    href="{{ route('categories.show', ['category' => $category->id]) }}">
                    <span class="color-container"
                        style="background-color: {{ $category->color }}"></span> {{ $category->name }}
                </a>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <form action="{{ route('categories.destroy', [$category->id]) }}"
                    method="POST">
                    @method('DELETE')
                    @csrf

                    <!-- Button trigger modal -->
                    <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal"
                        aria-label="Delete"></button>

                    <!-- Modal -->
                    <div class="modal fade text-dark"
                        id="deleteModal"
                        tabindex="-1"
                        aria-labelledby="deleteCategory"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5"
                                        id="deleteCategory">Delete category</h1>
                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure? Todos will be erased too.
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit"
                                        class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>