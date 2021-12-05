
<div class="row">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif

    <form
        action="{{ route('updateAbout', $user) }}"
        enctype="multipart/form-data"
        method="POST">

            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Titulo
                </label>
                <input id="title" type="text"  name="title" class="form-control" value="{{ old('title', $user->about_title) }}">
                @error('title')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Descripción sobre mí
                </label>
                <input id="about_description" type="text"  name="about_description" class="form-control" value="{{ old('about_description', $user->about_description) }}">
                @error('about_description')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Nombre botón cargar documento
                </label>
                <input id="about_cv" type="text"  name="about_cv" class="form-control" value="{{ old('about_cv', $user->about_cv) }}">
                @error('about_cv')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mt-2 mb-2 w-100">
                @if ($user->about_image)
                    <img class="card-img-top w-25" src="{{ $user->get_about_image }}" alt="{{ $user->about_title }}">
                @else
                    <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
                @endif
                <input type="file" name="about_image">
                @error('about_image')
                <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                @enderror
            </div>
        <input type="hidden" name="id" value="{{ $user->id }}">
        @csrf
        @method('PUT')

        <button type="submit" class="site-btn">Guardar Cambios</button>
    </form>
</div>

