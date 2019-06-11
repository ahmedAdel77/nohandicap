@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger red lighten-4 red-text text-darken-4 card-panel">
            {{ $error }}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success green lighten-4 green-text text-darken-4 card-panel">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger red lighten-4 red-text text-darken-4 card-panel">
        {{ session('error') }}
    </div>
@endif
