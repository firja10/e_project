@extends('layouts.admin_template')

@section('title')
    Beranda
@endsection





@section('content')







 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
     

      <!-- =========================================================== -->
      {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}




      
      <div class="row">
        <div class="col-12">
         
         


         
          <div id="accordion">
            <div class="card bg-info">

              <center>
                <button class="btn btn-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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

          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                 
                  <ol type=1>
                    <li>PJ : Mbak Zizah

                      <ul>
                        <li>PIC : </li>
                        <li>Total : </li>
                        <li>Projek Penting Yang Mendekati: </li>

            

                      </ul>

                    </li>
                     
                  </ol>


                </div>
              </div>
            </div>










        </div>
     <!-- /.col -->
      </div>
     <!-- /.row -->







      <div class="row">

        <div class="col-md-3 col-sm-6 col-12 btn-group">
     
            {{-- <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-cogs"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Rekap Project <br/>Dalam Sebulan</span>
                  <span class="info-box-number">Total: </span>
                  <span class="progress-description">
                    135
                  </span>
                </div>
              </div>


            </button>
            <div class="dropdown-menu">
              ...
            </div> --}}


            <div id="accordion">
              <div class="card bg-info">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="info-box-icon"><i class="fas fa-cogs"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">Rekap Project <br/>Dalam Sebulan</span>
                          <span class="info-box-number">Total: </span>
                          <span class="progress-description">
                            135
                          </span>
                        </div>
                    </button>
                  </h5>
                </div>
            
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                   
                    <ol type=1>
                      <li>PJ : Mbak Zizah

                        <ul>
                          <li>PIC : </li>
                          <li>Total : </li>
                          <li>Projek Penting : </li>
                        </ul>

                      </li>
                       
                    </ol>


                  </div>
                </div>
              </div>

              



            </div>

        </div>
        <!-- /.col -->



        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rekap Project <br/> Per Status</span>
              <span class="info-box-number">Total :</span>

              {{-- <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div> --}}

              <span class="progress-description">
                500
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->



        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Piutang <br/> Project</span>
              <span class="info-box-number">Total :</span>

              {{-- <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div> --}}

              <span class="progress-description">
                IDR. 32000
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-danger">
            <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Hutang <br/> Komisi</span>
              <span class="info-box-number">Total</span>

              {{-- <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div> --}}

              <span class="progress-description">
                IDR. 40
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



      
 
      <div class="row">
        <div class="co-md-6 col-12">
            <div class="info-box bg-primary">
                <span class="info-box-icon"><i class="fas fa-credit-card"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Total Hutang Gaji Tim Teknis</span>
                  <strong><span class="info-box-number"> Total </span> </strong>       <span class="progress-description">
                    IDR. 40
                  </span>
    
                  {{-- <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div> --}}
    
            
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
        </div>
     <!-- /.col -->
      </div>
     <!-- /.row -->








    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



    








    
@endsection