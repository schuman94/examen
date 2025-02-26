<div class="mb-5">
    <x-input-label for="libro_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Libro
    </x-input-label>
    <select name="libro_id" id="libro_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach ($libros as $libro)
            <option value="{{ $libro->id }}" >
                {{ $libro->titulo }}
            </option>
        @endforeach
    </select>
</div>
