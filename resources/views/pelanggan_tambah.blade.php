<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Tambah Pelanggan') }}
      </h2>
  </x-slot>

  <div class="card my-4">
      <div class="card-body">

        <form action="store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-1">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan" value="{{ old('nama_pelanggan') }}">
                @error('nama_pelanggan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group  my-1">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="Gambar" value="{{ old('gambar') }}">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/portofolio" class="btn btn-dark my-2 ml-auto">Kembali</a>
            <button type="submit" class="btn btn-dark my-2">Submit</button>
        </form>
            
      </div>
  </div>
</x-app-layout>