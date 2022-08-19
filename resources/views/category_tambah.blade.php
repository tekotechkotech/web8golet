<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Tambah Kategori') }}
      </h2>
  </x-slot>

  <div class="card my-4">
      <div class="card-body">

        <form action="store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-1">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" placeholder="Nama Pelanggan" value="{{ old('nama_kategori') }}">
              @error('nama_kategori')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="form-group my-1">
            <label for="deskripsi_kategori">Deskripsi Kategori</label>
            <textarea name="deskripsi_kategori" rows="3" class="form-control @error('deskripsi_kategori') is-invalid @enderror" id="deskripsi_kategori" placeholder="Deskripsi Kategori">{{ old('deskripsi_kategori') }}</textarea>
            @error('deskripsi_kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
            <div class="form-group  my-1">
                <label for="img">Gambar</label>
                <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" placeholder="img" value="{{ old('img') }}">
                @error('img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
              <a href="kategori" class="btn btn-dark my-2 ml-auto">Kembali</a>
              <button type="submit" class="btn btn-dark my-2 mr-auto">Tambah</button>
        </form>
            
      </div>
  </div>
</x-app-layout>