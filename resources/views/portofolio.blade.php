<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Portofolio') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
          <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Link</th>
                    <th scope="col">Klien</th>
                    <th scope="col">Kategori</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $port)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $port->nama_portofolio }}</td>
                    <td>{{ $port->link }}</td>
                    <td>{{ $port->nama_pelanggan }}</td>
                    <td>{{ $port->nama_kategori }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
</x-app-layout>