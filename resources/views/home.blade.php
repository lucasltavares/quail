<x-header title="Quail - Instant thoughts">
    @foreach ($quails as $quail)
    <div class="card mt-3 col-md-6 mx-auto">
        <div class="card-body">
            <h5 class="card-title">{{$quail->title}}</h5>
            <p class="card-text">{{$quail->content}}</p>
            <p class="card-text"><small class="text-muted"> Last update in {{\Carbon\Carbon::parse($quail->updated_at)->diffForHumans()}} </small></p>
        </div>
    </div>
    @endforeach
</x-header>