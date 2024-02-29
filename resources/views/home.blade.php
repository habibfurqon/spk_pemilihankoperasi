@extends('layouts.dashboard')
@section('content')

<div>
  <h3 class="font-weihgt-bold">Dashboard</h3>
</div>

<section class="content">
<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-sm-6 col-md-4">
      <div class="info-box">
       <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
       <div class="info-box-content">
      <span class="info-box-text">CPU Traffic</span>
     <span class="info-box-number">
  10
  <small>%</small>
       </span>
     </div>
  
  </div>
  
  </div>
  
  <div class="col-12 col-sm-6 col-md-4">
  <div class="info-box mb-3">
  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
  <div class="info-box-content">
  <span class="info-box-text">Likes</span>
  <span class="info-box-number">41,410</span>
  </div>
  
  </div>
  
  </div>
  
  
  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-4">
  <div class="info-box mb-3">
  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
  <div class="info-box-content">
  <span class="info-box-text">Sales</span>
  <span class="info-box-number">760</span>
  </div>
  
  </div>
  
  </div>
  </div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Table Rangking</h3>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Task</th>
            <th>Progress</th>
            <th style="width: 40px">Label</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-danger">55%</span></td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Clean database</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar bg-warning" style="width: 70%"></div>
              </div>
            </td>
            <td><span class="badge bg-warning">70%</span></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Cron job running</td>
            <td>
              <div class="progress progress-xs progress-striped active">
                <div class="progress-bar bg-primary" style="width: 30%"></div>
              </div>
            </td>
            <td><span class="badge bg-primary">30%</span></td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Fix and squish bugs</td>
            <td>
              <div class="progress progress-xs progress-striped active">
                <div class="progress-bar bg-success" style="width: 90%"></div>
              </div>
            </td>
            <td><span class="badge bg-success">90%</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    
  
@endsection