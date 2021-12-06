
@foreach ($user->whatido as $whatido)
    <form action="{{ route('updateWhat', $whatido) }}"
          method="POST">

        <div class="form-row">
            <div class="col-md-12">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Habilidades
                </label>
                <input id="title" type="text"  name="title" class="form-control" value="{{ old('title', $whatido->title) }}">

            </div>
            <div class="col-md-12">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Descripción
            </label>
            <input id="description" type="text"  name="description" class="form-control" value="{{ old('description', $whatido->description) }}">

        </div>

            <input type="hidden" name="id" value="{{ $whatido->id }}">

        </div>
        @csrf
        @method('PUT')
        <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
    </form>
    <form action="{{ route('destroyWhat', $whatido) }}"
          method="POST">
        <input type="hidden" name="id" value="{{ $whatido->id }}">
        @csrf
        @method('DELETE')
        <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
    </form>
@endforeach

