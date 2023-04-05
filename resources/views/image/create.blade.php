<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subir Imagen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Subir Nueva Imagen</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('image.save') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Image -->
                                        <div>
                                            <x-input-label for="image_path" :value="__('Imagen')" />
                                            <x-text-input id="image_path" class="block mt-1 w-full" type="file"
                                                name="image_path" :value="old('image_path')" required autofocus
                                                autocomplete="image_path" />
                                            <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
                                        </div>
                                        <!-- Descripcion -->
                                        <div>
                                            <x-input-label for="description" :value="__('Descripcion')" />
                                            <x-text-input id="description" class="block mt-1 w-full" type="text"
                                                name="description" :value="old('description')" required autofocus
                                                autocomplete="description" />
                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">

                                            <x-primary-button class="ml-4">
                                                {{ __('Subir Imagen') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
