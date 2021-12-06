@foreach ($user->skill as $skill)
    <form action="{{ route('updateSkill', $skill) }}"
          method="POST">

        <div class="form-row">
            <div class="col-md-12">
                <label class="text-gray-700 text-sm font-bold mb-2" >
                    Habilidades
                </label>
                <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $skill->name) }}">

            </div>
            <input type="hidden" name="id" value="{{ $skill->id }}">

        </div>
        @csrf
        @method('PUT')
        <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
    </form>
    <form action="{{ route('destroyClient', $skill) }}"
          method="POST">
        <input type="hidden" name="id" value="{{ $skill->id }}">
        @csrf
        @method('DELETE')
        <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
    </form>
@endforeach
