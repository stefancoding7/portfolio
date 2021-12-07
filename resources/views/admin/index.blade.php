
@extends('admin.layouts.app')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Visitors</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($stats->visitors) }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fas fa-eye fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Projects views</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($allVisitors) }}</div>
                                        </div>
                                        <div class="col-auto">
                                            
                                            <i class="fas fa fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Projects</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($countProjects) }}</div>
                                        </div>
                                        <div class="col-auto">
                                            
                                            <i class="fas fa fa-laptop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Last visited</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats->updated_at->diffForHumans() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            
                                            <i class="fas fas fa-walking fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                
                                <!-- Card Body -->
                                
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Top 5 projects</h6>
                                </div>
                                <div class="card-body">
                                    @if($allVisitors === 0)
                                        <h2>No any visits yet.</h2>
                                    @else
                                    @foreach($projects as $project)
                                    @if($project->visitors >= 1)
                                    <h2 class="small font-weight-bold"><a href="{{ route('edit-project', $project->id) }}">{{ $project->title  }}</a> <span style="font-size: 10px">(Last visited {{ $project->updated_at->diffForHumans() }})</span><span
                                            class="float-right"><i class="fas fa-eye"></i> {{ $project->visitors }}</span></h2>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ number_format((($project->visitors/$allVisitors) * 100), 2) }}%"
                                            aria-valuenow="{{ floor(number_format((($project->visitors/$allVisitors) * 100), 2))}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @endif
                                    @endforeach
                                   @endif
                                </div>
                            </div>

                            <!-- Color System -->
                            

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            

                            <!-- Approach -->
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            
            @stop
          
   