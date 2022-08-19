<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Kategori Portofolio ') }}<a href="kategori/tambah" class="btn btn-dark">Tambah Data</a>
        </h2>
    </x-slot>
    <div class="card my-4">
      <div class="card-body">
        <div class="row">
        @foreach ($data as $data)
      <div class="col col-lg-3 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('') }}/img/category/{{ $data->img }}" alt="" width="500px">
              <h3>{{ $data->nama_kategori }}</h3>
              <p>{{ $data->deskripsi_kategori }}.</p>
            </div>
          </div>
    </div>
    @endforeach
  </div>

  </div>
</div>
</x-app-layout>