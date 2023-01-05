@extends('layouts.admin_template')

@section('title')
    Tabel Hutang Komisi
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
                      <th>Nama Project </th>
                      <th>Jenis Projek</th>
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
                      <td></td>
             
                    </tr>
                
                </tbody>
                    <tfoot>
                    <tr>
                        <th>No. </th>
                        <th>Nama Project </th>
                        <th>Jenis Projek</th>
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
          <h5 class="modal-title" id="exampleModalLabel">Input Master PriceList</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Project</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Klien</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
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