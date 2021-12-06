<form action="{{ route('updateAbout', $user) }}" enctype="multipart/form-data" method="POST">

    <div class="form-row">
        <div class="mb-2 mt-3">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Titulo de la sección
            </label>
            <input id="whatido_title" type="text"  name="whatido_title" class="form-control" value="{{ old('whatido_title', $user->whatido_title) }}">

        <input type="hidden" name="id" value="{{ $user->id }}">

        </div>
        @csrf
        @method('PUT')
        <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Guardar Cambios</button>
    </div>
</form>
