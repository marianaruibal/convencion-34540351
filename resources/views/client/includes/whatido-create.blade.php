
<form action="{{ route('store') }}"
      method="POST">

    <div class="form-row">
        <div class="col-md-12">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Titulo what i do's
            </label>
            <input id="title" type="text"  name="title" class="form-control">
        </div>
    </div>

    <div class="col-md-12">
        <label class="text-gray-700 text-sm font-bold mb-2" >
            Descripción
        </label>
        <input id="description" type="text"  name="description" class="form-control">
        @error('description')
        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
        @enderror
    </div>

    <input type="hidden" name="user_id" value="{{ $user->id }}">
    @csrf
    <button class="bg-success text-white btn btn-lg" type="submit" class="site-btn">Agregar</button>
</form>
