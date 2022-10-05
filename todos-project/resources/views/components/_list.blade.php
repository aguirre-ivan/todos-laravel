<div class="container w-25 bg-dark px-4 py-3 mt-4 rounded text-white">
    @foreach ($todos as $todo)
    <div class="card bg-secondary my-2">
        <div class="card-body row">
            <div class="col-md-9 d-flex align-items-center">
                {{ $todo->title }}
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <form>
                    <button type="button"
                        class="btn-close btn-close-white"
                        aria-label="Delete"></button>
                </form>
            </div>
        </div>
    </div>

    @endforeach
</div>