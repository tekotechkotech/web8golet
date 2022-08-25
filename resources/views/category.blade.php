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
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{ asset('') }}assets/gambar/{{ $data->img }}" alt="Card image cap">
            
            <div class="card-body ">
              <h5 class="card-title">{{ $data->nama_kategori }}</h5>
              <p class="card-text">{{ $data->deskripsi_kategori }}</p>
            </div>
            <div class="card-footer mr-auto">
              
              <form action="/kategori/hapus/{{ $data->id }}" method="post">
                @method('delete')
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <a href="/kategori/{{ $data->id }}/edit" class="btn btn-dark">Edit</a>
                <button type="submit" class="btn btn-dark">Hapus</button>
              </form>
            </div>
          </div>
    </div>
    @endforeach
  </div>

  </div>
</div>
</x-app-layout>