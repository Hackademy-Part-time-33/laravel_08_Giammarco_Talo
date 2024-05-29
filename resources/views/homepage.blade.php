<x-main>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Benvenuto sulla nostra homepage!</h2>
                <p>Qui puoi trovare gli ultimi articoli del nostro blog.</p>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($latestPosts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="{{ route('showpost', $post->id) }}" class="btn btn-primary">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <h2>Scopri i nostri contenuti in evidenza</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Immagine Card 1">
                        <div class="card-body">
                            <h5 class="card-title">Titolo Card 1</h5>
                            <p class="card-text">Testo descrittivo della Card 1. Puoi inserire qui una breve anteprima del contenuto o una descrizione.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Immagine Card 2">
                        <div class="card-body">
                            <h5 class="card-title">Titolo Card 2</h5>
                            <p class="card-text">Testo descrittivo della Card 2. Puoi inserire qui una breve anteprima del contenuto o una descrizione.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Immagine Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Titolo Card 3</h5>
                            <p class="card-text">Testo descrittivo della Card 3. Puoi inserire qui una breve anteprima del contenuto o una descrizione.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-main>