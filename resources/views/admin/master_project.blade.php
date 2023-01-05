@extends('layouts.admin_template')

@section('title')
    Master Project
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

                        <th>Dari Rekanan</th>
                        <th>Upload Penawaran</th>
                        <th>Upload SPK</th>

                        <th>Upload Tanda Terima Bekas</th>
                        <th>No. HP Klien</th>
                        <th>Email Klien</th>
                        <th>Alamat Klien</th>

                        <th>Tanggal Project Masuk</th>
                        <th>Alamat Persil </th>

                        <th>Koordinat Lokasi</th>
                        <th>Foto Lokasi</th>

                        <th>Rincian Layanan</th>
                        <th>Rincian Biaya</th>
                        <th>Rincian Berkas Diterima</th>

                        <th>Link GDrive Bebas</th>
                        <th>Total Biaya (Bruto)</th>
                        <th>Total Biaya (Netto)</th>

                        <th>Rincian Termin (Brutto)</th>
                        <th>Rincian Termin (Netto)</th>

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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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

                        <th>Dari Rekanan</th>
                        <th>Upload Penawaran</th>
                        <th>Upload SPK</th>

                        <th>Upload Tanda Terima Bekas</th>
                        <th>No. HP Klien</th>
                        <th>Email Klien</th>
                        <th>Alamat Klien</th>

                        <th>Tanggal Project Masuk</th>
                        <th>Alamat Persil </th>

                        <th>Koordinat Lokasi</th>
                        <th>Foto Lokasi</th>

                        <th>Rincian Layanan</th>
                        <th>Rincian Biaya</th>
                        <th>Rincian Berkas Diterima</th>

                        <th>Link GDrive Bebas</th>
                        <th>Total Biaya (Bruto)</th>
                        <th>Total Biaya (Netto)</th>

                        <th>Rincian Termin (Brutto)</th>
                        <th>Rincian Termin (Netto)</th>

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