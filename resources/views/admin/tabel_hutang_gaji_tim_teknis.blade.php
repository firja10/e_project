@extends('layouts.admin_template')

@section('title')
    Tabel Hutang Gaji Tim Teknis
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
                            <th>ID Gaji </th>
                            <th>ID Tim Teknis</th>
                            <th>ID Projek</th>
                            <th>Jumlah Hutang</th>
                            <th>Terbayar</th>
                            <th>Sisa</th>
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
                            <th>ID Gaji </th>
                            <th>ID Tim Teknis</th>
                            <th>ID Projek</th>
                            <th>Jumlah Hutang</th>
                            <th>Terbayar</th>
                            <th>Sisa</th>
                          </tr>
                    </tfoot>
                  </table>




<form>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Tabel Hutang Gaji Tim Teknis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
                <div class="form-group">
                  <label for="idGaji">ID Gaji</label>

                  <select name="" id="idGaji" class="form-control">
                           
                    <option value="1">1</option>
                    <option value="2">2</option>                        

                  </select>

                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>

                <div class="form-group">
                  <label for="idTim_Teknis">ID Tim Teknis</label>

                  <select name="" id="idTim_Teknis" class="form-control">
                           
                    <option value="1">1</option>
                    <option value="2">2</option>                        

              </select>
                </div>



                <div class="form-group">
                  <label for="jumlah_hutang">Jumlah Hutang</label>
                  <input type="number" class="form-control" name="jumlah_hutang" id="jumlah_hutang">
                </div>
                


                <div class="form-group">
                  <label for="terbayar">Terbayar</label>
                  <input type="number" class="form-control" name="terbayar" id="terbayar">
                </div>


               <div class="form-group">
                  <label for="sisa">Sisa</label>
                  <input type="number" class="form-control" name="sisa" id="sisa">
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