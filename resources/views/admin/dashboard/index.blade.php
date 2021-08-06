@extends('admin.dashboard.layouts.dashboard')

@section('title')
<title>Dashboard - NguyenPhiKhanh.Net</title>
@endsection

@section('content')

@include('admin.dashboard.partials.dashboard-header')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Bài viết nổi bật</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Bài viết</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col">Tác giả</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 0 ;$i < 5; $i++)
                  <tr>
                    <th scope="row">
                      /argon/
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      tác giả
                    </td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

  
@endsection
