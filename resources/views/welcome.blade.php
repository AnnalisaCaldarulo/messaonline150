<x-layout>
    <div class="container-fluid bg-success min-vh-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="h1 display-3 text-center text-white pb-4">
                    Messa online Hack150
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:article-form />
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <h2 class="text-white text-center py-5">Tutti gli articoli</h2>
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $article->title }} </h5>
                            <h6 class="card-subtitle"> {{ $article->subtitle }} </h6>
                            <p class="card-text"> {{ $article->body }} </p>
                            <p class="text-muted"> {{ $article->genre }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
