<x-layout>
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="">
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $anime['title'] }}</h5>
                        <p>Rating {{ $anime['rank'] }}</p>
                        <p>{{ $anime['synopsis'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
