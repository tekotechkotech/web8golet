<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
                Selamat datang, You're logged in!
                <a href="portofolio" class="btn btn-dark  float-end mx-1">Portofolio</a>
                <a href="pelanggan" class="btn btn-dark  float-end mx-1">Pelanggan</a>
                <a href="kategori" class="btn btn-dark float-end mx-1">Kategori</a>
        </div>
    </div>
</x-app-layout>