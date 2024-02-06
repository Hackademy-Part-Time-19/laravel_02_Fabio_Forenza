<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($anime as $dati)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $dati['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dati['title'] }}</h5>
                            <p class="card-text">Rating</p>
                            <p>{{ $dati['rank'] }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
