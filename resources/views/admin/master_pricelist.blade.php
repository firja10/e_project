@extends('layouts.admin_template')

@section('title')
    Master Pricelist
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
                      <th>Project</th>
                      <th>Nama Klien</th>
                      <th>Jenis Project</th>
                      <th>Sumber Project</th>
                      <th>Status Project</th>
                      <th>Biaya</th>
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
                      <td></td>
             
                    </tr>
                
                </tbody>
                    <tfoot>
                    <tr>
                        <th>No. </th>
                        <th>Project</th>
                        <th>Nama Klien</th>
                        <th>Jenis Project</th>
                        <th>Sumber Project</th>
                        <th>Status Project</th>
                        <th>Biaya</th>
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
            <label for="nama_project">Nama Project</label>
            <input type="text" class="form-control" id="nama_project" placeholder="Nama Project">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>

          <div class="form-group">
            <label for="nama_klien">Nama Klien</label>
            <input type="text" class="form-control" id="nama_klien" placeholder="Nama Klien">
          </div>

          <div class="form-group">
            <label for="jenis_project">Jenis Project</label>
            <input type="text" class="form-control" id="jenis_project" placeholder="Jenis Project">
          </div>


          <div class="form-group">
            <label for="sumber_project">Sumber Project</label>
            <input type="text" class="form-control" id="sumber_project" placeholder="Sumber Project">
          </div>

          
          <div class="form-group">
            <label for="status_project">Status Project</label>
            <input type="text" class="form-control" id="status_project" placeholder="Status Project">
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