@extends('layouts.admin_template')

@section('title')
    Beranda
@endsection


@section('user')

Admin
    
@endsection




@section('content')







 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
     

      <!-- =========================================================== -->
      {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}




      <center>

      <div class="row">
        <div class="col-12">
        
          <div id="accordion">
            <div class="card bg-info">

              <center>
                <button class="btn btn-info" data-toggle="collapse" data-target="#collapseDua" aria-expanded="false" aria-controls="collapseDua">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                  
                        <span class="info-box-icon"><i class="fas fa-cogs"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Rekap Project <br/>Dalam Sebulan</span>
                          <span class="info-box-number">Total: </span>
                          <span class="progress-description">
                            135
                          </span>
                        </div>

                  </h5>
                </div>
              </button>
              </center>

          
              <div id="collapseDua" class="collapse" aria-labelledby="headingDua" data-parent="#accordion">
                <div class="card-body">
                 

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Projek Penting Saat Ini</th>
                        <th scope="col">PJ</th>
                        <th scope="col">PIC</th>
                        <th scope="col">Deadline Projek</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>27 Januari 2023</td>
                      </tr>
                    </tbody>
                  </table>
                




                </div>
              </div>
            </div>



        </div>
     <!-- /.col -->
      </div>
     <!-- /.row -->
        
    </center>




      <center>


     <div class="row">
      <div class="col-12">
        <div id="accordion">
          <div class="card bg-success">

            <center>
              <button class="btn btn-success" data-toggle="collapse" data-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTiga">
              <div class="card-header" id="headingTiga">
                <h5 class="mb-0">
                
                  <span class="info-box-icon"><i class="fas fa-list-alt"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Rekap Project <br/> Per Status</span>
                        <span class="info-box-number">Total: </span>
                        <span class="progress-description">
                          500
                        </span>
                      </div>

                </h5>
              </div>
            </button>
            </center>

        
            <div id="collapseTiga" class="collapse" aria-labelledby="headingTiga" data-parent="#accordion">
              <div class="card-body">
               

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Projek Penting Saat Ini</th>
                      <th scope="col">PJ</th>
                      <th scope="col">PIC</th>
                      <th scope="col">Deadline Projek</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>27 Januari 2023</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

      </div>
   <!-- /.col -->
    </div>
   <!-- /.row -->
  </center>




  <center>

   <div class="row">
    <div class="col-12">
      <div id="accordion">
        <div class="card bg-warning">

          <center>
            <button class="btn btn-warning" data-toggle="collapse" data-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseEmpat">
            <div class="card-header" id="headingEmpat">
              <h5 class="mb-0">
              
                <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Piutang <br/>Project</span>
                      <span class="info-box-number">Total: </span>
                      <span class="progress-description">
                        500
                      </span>
                    </div>

              </h5>
            </div>
          </button>
          </center>

      
          <div id="collapseEmpat" class="collapse" aria-labelledby="headingEmpat" data-parent="#accordion">
            <div class="card-body">
             

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Projek Penting Saat Ini</th>
                    <th scope="col">PJ</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Deadline Projek</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>27 Januari 2023</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>

    </div>
 <!-- /.col -->
  </div>
 <!-- /.row -->
    
</center>






 <center>


 <div class="row">
  <div class="col-12">
    <div id="accordion">
      <div class="card bg-danger">

        <center>
          <button class="btn btn-danger" data-toggle="collapse" data-target="#collapseLima" aria-expanded="false" aria-controls="collapseLima">
          <div class="card-header" id="headingLima">
            <h5 class="mb-0">
            
              <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Total Hutang <br/> Komisi</span>
                    <span class="info-box-number">Total: </span>
                    <span class="progress-description">
                      500
                    </span>
                  </div>

            </h5>
          </div>
        </button>
        </center>

    
        <div id="collapseLima" class="collapse" aria-labelledby="headingLima" data-parent="#accordion">
          <div class="card-body">
           

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Projek Penting Saat Ini</th>
                  <th scope="col">PJ</th>
                  <th scope="col">PIC</th>
                  <th scope="col">Deadline Projek</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>27 Januari 2023</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>

  </div>
<!-- /.col -->
</div>
<!-- /.row -->
</center>





<center>


<div class="row">
  <div class="col-12">
    <div id="accordion">
      <div class="card bg-primary">

        <center>
          <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseEnam" aria-expanded="false" aria-controls="collapseEnam">
          <div class="card-header" id="headingEnam">
            <h5 class="mb-0">
            
              <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Total Hutang Gaji Tim Teknis</span>
                    <span class="info-box-number">Total: </span>
                    <span class="progress-description">
                      500
                    </span>
                  </div>

            </h5>
          </div>
        </button>
        </center>

    
        <div id="collapseEnam" class="collapse" aria-labelledby="headingEnam" data-parent="#accordion">
          <div class="card-body">
           

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Projek Penting Saat Ini</th>
                  <th scope="col">PJ</th>
                  <th scope="col">PIC</th>
                  <th scope="col">Deadline Projek</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>27 Januari 2023</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>

  </div>
<!-- /.col -->
</div>
<!-- /.row -->
</center>



    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



    








    
@endsection