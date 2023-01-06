@extends('layouts.admin_template')

@section('title')
    Master Marketing
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
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>File Upload</th>
                    </tr>
                    </thead>
                    <tbody>                  
                    <tr>
                
                        <td></td>
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
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>File Upload</th>
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
                <label for="nama">Nama </label>
                <input type="text" class="form-control" id="nama"  placeholder="Nama">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
              </div>



              <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="number" class="form-control" id="no_hp" placeholder="No HP">
              </div>



              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>


              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
              </div>


              <div class="form-group">
                <label for="file_upload">File Upload</label>
                <input type="file" class="form-control" id="file_upload" placeholder="File Upload">
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