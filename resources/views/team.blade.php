<x-app-layout>
  <x-slot name="header">
      <h2 class="h4 font-weight-bold">
          {{ __('Team ') }}<a href="team/tambah" class="btn btn-dark">Tambah Data</a>
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
                  <td class="align-middle" >{{ $td->nama }}</td>
                  <td class="align-middle" >{{ $td->jabatan }}</td>
                  <td class="align-middle" >
                    @if ($td->ig)
                      <a href="{{ $td->ig }}" target="_blank" class="btn btn-dark"><i class="fab fa-instagram"></i> Instagram</a>
                    @endif
                    @if ($td->twit)
                      <a href="{{ $td->twit }}" target="_blank" class="btn btn-dark"><i class="fab fa-twitter"></i> Twitter</a>
                    @endif
                    @if ($td->fb)
                      <a href="{{ $td->fb }}" target="_blank" class="btn btn-dark"><i class="fab fa-facebook"></i> Facebook</a>
                    @endif
                    @if ($td->linkdin)
                      <a href="{{ $td->linkdin }}" target="_blank" class="btn btn-dark"><i class="fab fa-linkedin"></i> L inkedin</a>
                    @endif
                  </td>
                  <td class="d-flex">
                    <form action="team/hapus" method="post">
                      @csrf
                      @method('delete')
                      <input type="hidden" name="id" value="{{ $td->id }}">
                        <a href="team/edit/{{ $td->id }}" class="btn btn-dark m-1">Edit</a>
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