@extends('layouts.technician')

@section('title')
    Profile User
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
            </div>
            <!-- /.card-header -->
            <div class="card-body">


                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <center>
                                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" style="width:300px" alt="User Image">
                           
                                <br><br>
                                <label for="ganti_foto">Ganti Foto</label>
                                <input type="file" id="ganti_foto" class="form-control">

                            </center>
                         
                        </div>
                        <div class="col-6">

                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
                                  </div>

                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Alamat Email</label>
                                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="form-group">
                                   <button class= "btn btn-primary" type="submit">Submit</button>
                                  </div>
      
                              </form>


                        </div>
                    </div>
                </div>



          






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