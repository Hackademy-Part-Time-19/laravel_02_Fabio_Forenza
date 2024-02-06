<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul>
                    @foreach ($dati as $dato)
                        <li>{{ $dato['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>
