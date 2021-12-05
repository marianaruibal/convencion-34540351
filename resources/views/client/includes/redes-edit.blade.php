@foreach ($user->socialmedia as $socialmedia)
    <form action="{{ route('social.update', $socialmedia) }}"
          method="POST">
        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="red">
                <option selected>{{ old('red', $socialmedia->red) }}</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="twitter">Twitter</option>
                <option value="github">Github</option>
            </select>
        </div>

        <div class="form mx-3 w-100 mt-2 mb-2">
            <label class="form-label text-gray-700 text-sm font-bold mb-2" >
                URL
            </label>
            <input id="url" type="url"  name="url" class="form-input" value="{{ old('url', $socialmedia->url) }}">

            <input type="hidden" name="id" value="{{ $socialmedia->id }}">
        </div>

        @csrf
        @method('PUT')
        <button class="bg-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
    </form>
    <form action="{{ route('social.destroy', $socialmedia) }}"
          method="POST">
        <input type="hidden" name="id" value="{{ $socialmedia->id }}">
        @csrf
        @method('DELETE')
        <button class="bg-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
    </form>
@endforeach


