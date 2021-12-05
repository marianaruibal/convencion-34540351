<form action="{{ route('user.update', $user) }}" enctype="multipart/form-data" method="POST">

    <div class="form-row">
        <div class="col-md-4">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Titulo de la sección
            </label>
            <input id="whatido_title" type="text"  name="whatido_title" class="form-control" value="{{ old('whatido_title', $user->whatido_title) }}">
            @error('whatido_title')
            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
            @enderror
        </div>
        @foreach($user->whatido as $whatido)
        <div class="col-md-4">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Mensaje
            </label>
            <input id="cute_message" type="text"  name="top_message" class="form-control" value="{{ old('top_message', $user->top_message) }}">
            @error('top_message')
            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ top_message }}</div>
            @enderror
        </div>

        <div class="col-md-4 mt-2 mb-2 w-100">
            @if ($user->image)
                <img class="card-img-top w-25" src="{{ $user->get_image }}" alt="{{ $user->name }}">
            @else
                <img class="card-img-top w-25" src="https://picsum.photos/640/360" alt="Card image cap">
            @endif
            <input type="file" name="file">
            @error('file')
            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
            @enderror
        </div>
        @endforeach
        <input type="hidden" name="id" value="{{ $user->id }}">

    </div>
    @csrf
    @method('PUT')
    <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Guardar Cambios</button>
</form>
