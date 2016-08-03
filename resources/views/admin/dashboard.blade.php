@extends('admin.app')

@section('content')
    <section class="content">

        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Anggota Baru</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="{{URL::route('membershownew')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Konfirmasi Pembayaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-credit-card"></i>
            </div>
            <a href="{{URL::route('membershowpay')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Anggota Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{URL::route('membershowaccepted')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Anggota Non-Aktif</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{URL::route('membershowidle')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    </section>
@endsection