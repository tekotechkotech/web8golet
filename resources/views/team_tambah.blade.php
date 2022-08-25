<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Tambah Team') }}
      </h2>
  </x-slot>

  <div class="card my-4">
      <div class="card-body">

        <form action="store" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group my-1">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group my-1">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="" value="{{ old('jabatan') }}">
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group my-1">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row">
                
                <div class="col">
                    <div class="form-group my-1">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" placeholder="di isi link akun" value="{{ old('twitter') }}">
                        @error('twitter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group my-1">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" placeholder="di isi link akun" value="{{ old('facebook') }}">
                        @error('facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group my-1">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="di isi link akun" value="{{ old('instagram') }}">
                        @error('instagram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group my-1">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin" placeholder="di isi link akun" value="{{ old('linkedin') }}">
                        @error('linkedin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
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
            <a href="/team" class="btn btn-dark my-2 ml-auto">Kembali</a>
            <button type="submit" class="btn btn-dark my-2">Tambah</button>
        </form>
            
    </div>
</div>
</x-app-layout>