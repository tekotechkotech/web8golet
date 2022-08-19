<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Pelanggan ') }}<a href="pelanggan/tambah" class="btn btn-dark">Tambah Data</a>
      </h2>
  </x-slot>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <div class="card my-4">
      <div class="card-body">
        

        <table id="example" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  @foreach ($th as $th)
                  <th>{{ $th }}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach ($td as $td)
                <tr>
                  <td class="align-middle"><b>{{ $loop->iteration }}</b></td>
                  <td class="align-middle" >{{ $td->nama_pelanggan }}</td>
                  <td class="align-middle">
                    <img src="{{ asset('') }}assets/gambar/{{ $td->gambar }}" alt="{{ $td->gambar }}" height="46px"> 
                  </td>
                  <td class="d-flex">
                      <a href="pelanggan/edit/{{ $td->id }}" class="btn btn-dark m-1">Edit</a>


                      <form action="pelanggan/hapus" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $td->id }}">
                        <button type="submit" class=" btn btn-dark m-1">Hapus</button>
                      </form>
                    </div>
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
      </div>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
  </script>
</x-app-layout>