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
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-cogs"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rekap Project <br/>Dalam Sebulan</span>
              <span class="info-box-number">Total: </span>

              {{-- <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div> --}}
              <span class="progress-description">
                135
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
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