<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Edit Portofolio') }}
      </h2>
  </x-slot>

<div class="card my-4">
    <div class="card-body">

        <form action="update/{{ $porto->id_portofolio }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-1">
                <label for="nama_portofolio">Nama Project</label>
                <input type="text" class="form-control @error('nama_portofolio') is-invalid @enderror" id="nama_portofolio" name="nama_portofolio" placeholder="Nama Project" value="{{ old('nama_portofolio',$porto->nama_portofolio) }}">
                @error('nama_portofolio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Nama Project" value="{{ old('slug',$porto->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="link">Link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="Nama Project" value="{{ old('link',$porto->link) }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group my-1">
                <label for="deskripsi_portofolio">Deskripsi Project</label>
                <textarea name="deskripsi_portofolio" rows="3" class="form-control @error('deskripsi_portofolio') is-invalid @enderror" id="deskripsi_portofolio" placeholder="Deskripsi Kategori">{{ old('deskripsi_portofolio',$porto->deskripsi_portofolio) }}</textarea>
                @error('deskripsi_portofolio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group my-1">
                  <label for="tanggal_pesan">Tanggal Pemesanan</label>
                  <input type="date" class="form-control @error('tanggal_pesan') is-invalid @enderror" id="tanggal_pesan" name="tanggal_pesan" placeholder="Nama Kategori" value="{{ old('tanggal_pesan',$porto->tanggal_pesan) }}">
                  @error('tanggal_pesan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
              </div>
              <div class="col">
                <div class="form-group my-1">
                  <label for="pelanggan">Pelanggan</label>
                  <select name="pelanggan" id="" class="form-control">
                    @if (!empty($porto->pelanggan_id))
                      <option value="{{ $porto->pelanggan_id }}">{{ $porto->nama_pelanggan }}</option>
                    @else
                      @foreach ($pelanggan as $pelanggan)
                      <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_pelanggan }}</option>
                      @endforeach
                    @endif
                    @foreach ($pelanggan as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama_pelanggan }}</option>
                    @endforeach
                  </select>
                  @error('pelanggan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
              </div>
              <div class="col">
                <div class="form-group my-1">
                  <label for="kategori">Kategori</label>
                  
                  <select name="kategori" id="" class="form-control">
                    @foreach ($kategori as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                  </select>
                  @error('kategori')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
              </div>
            </div>
            
          
          
        <div class="row">
          <div class="col">
            @if (!empty($porto->gambar1))
            <center>
                <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar1 }}" class="pt-2" width="200px">
            </center>
            @endif
            <div class="form-group  my-1">
              <label for="gambar1">Gambar 1</label>
              <input type="file" class="form-control @error('gambar1') is-invalid @enderror" id="gambar1" name="gambar1" placeholder="gambar1" value="{{ old('gambar1') }}">
              @error('gambar1')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          </div>
          <div class="col">
            <div class="form-group  my-1">
                @if (!empty($porto->gambar2))
                <center>
                    <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar2 }}" class="pt-2" width="200px">
                </center>
                @endif
              <label for="gambar2">Gambar 2</label>
              <input type="file" class="form-control @error('gambar2') is-invalid @enderror" id="gambar2" name="gambar2" placeholder="gambar2" value="{{ old('gambar2') }}">
              @error('gambar2')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          </div>
          <div class="col">
            <div class="form-group  my-1">
                @if (!empty($porto->gambar3))
                <center>
                    <img src="{{ asset('') }}assets/gambar/{{ $porto->gambar3 }}" class="pt-2" width="200px">
                </center>
                @endif
              <label for="gambar3">Gambar 3</label>
              <input type="file" class="form-control @error('gambar3') is-invalid @enderror" id="gambar3" name="gambar3" placeholder="gambar3" value="{{ old('gambar3') }}">
              @error('gambar3')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          </div>
        </div>
            
          
            
            <a href="/portofolio" class="btn btn-dark my-2 ml-auto">Kembali</a>
            <button type="submit" class="btn btn-dark my-2 mr-auto">Edit</button>
        </form>
            
    </div>
</div>
</x-app-layout>