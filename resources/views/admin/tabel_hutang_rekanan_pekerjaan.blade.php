@extends('layouts.admin_template')

@section('title')
    Tabel Hutang Rekanan
@endsection





@section('content')


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  {{-- <h3 class="card-title">DataTable with minimal features & hover style</h3> --}}
                                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No. </th>
                      <th>Nama Rekanan </th>
                      <th>Nama Projek</th>
                      <th>Rincian Biaya</th>
                      <th>Jumlah Biaya</th>
                    </tr>
                    </thead>
                    <tbody>                  
                    <tr>
                
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
             
                    </tr>
                
                </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama Rekanan </th>
                        <th>Nama Projek</th>
                        <th>Rincian Biaya</th>
                        <th>Jumlah Biaya</th>
                    </tr>
                    </tfoot>
                  </table>




<form>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Hutang Rekanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
                <div class="form-group">
                  <label for="nama_rekanan">Nama Rekanan</label>
                  <input type="text" class="form-control" id="nama_rekanan" placeholder="Nama Rekanan">
                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>


                <div class="form-group">
                  <label for="nama_projek">Nama Projek</label>
                  <input type="text" class="form-control" id="nama_projek" name="nama_projek" placeholder="Nama Projek">
                </div>


                <div class="form-group">
                  <label for="rincian_biaya">Rincian Biaya</label>
                  <input type="text" class="form-control" id="rincian_biaya" name="rincian_biaya" placeholder="Rincian Biaya">
                </div>

                
                <div class="form-group">
                  <label for="jumlah_biaya">Jumlah Biaya</label>
                  <input type="number" class="form-control" id="jumlah_biaya" name="jumlah_biaya" placeholder="Jumlah Biaya">
                </div>







        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>


                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    
@endsection