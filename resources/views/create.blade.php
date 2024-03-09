<x-header title="New quail">
    <div class="container">
        <form action="/store/quail" method="post">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label mt-3">Title:</label>
                <input type="text" id="name" name="title" class="form-control">
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Content:</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Quail it!</button>
        </form>
    </div>
</x-header>