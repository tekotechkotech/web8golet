<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Edit Data Kategori') }}
      </h2>
  </x-slot>

<div class="card my-4">
    <div class="card-body">

        <form action="/kategori/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-1">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="{{ old('nama_kategori',$data->nama_kategori) }}">
                @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="deskripsi_kategori">Deskripsi Kategori</label>
                <textarea name="deskripsi_kategori" rows="3" class="form-control @error('deskripsi_kategori') is-invalid @enderror" id="deskripsi_kategori" placeholder="Deskripsi Kategori">{{ old('deskripsi_kategori',$data->deskripsi_kategori) }}</textarea>
                @error('deskripsi_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <center>
              <img class="" src="{{ asset('') }}assets/gambar/{{ $data->img }}" height="200px">
            </center>
            <div class="form-group  my-1">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="gambar" value="{{ old('gambar') }}">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <a href="/kategori" class="btn btn-dark my-2 ml-auto">Kembali</a>
            <button type="submit" class="btn btn-dark my-2 mr-auto">Simpan</button>
        </form>
            
    </div>
</div>
</x-app-layout>