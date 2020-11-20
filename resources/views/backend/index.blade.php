@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{url('/backend/dist/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                
                            </div>
                            
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin

                        <div class="sb-sidenav-footer" aria-labelledby="">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                  
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Admin Panel
                            </div>
                            
                            <div class="card-body">

                              @if(Session::has('message'))
                              <div class="alert alert-success alert-dismissable">
                                {{ Session::get('message') }}
                              </div>
                              @endif
{{-- Introduction Form Portion --}}

                                <div class="table-responsive">
                                   <h2> For Introduction Portion</h2>
                                  <form method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
                                    @csrf                                                                                        
                                    <div class="form-group">
                                      <label>Your Image</label>
                                      <input id="image" type="file" name="image" class="btn-success">
                                    </div>
                                    <div class="form-group">
                                      <label>Your Introduction</label>
                                      <input id="intro" type="text" name="intro" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input id="email" type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <button class="btn btn-success">Add</button>
                                    </div>
                                  </form>
                                    
{{-- ABOUT ME Portion --}}
                                  {{-- <h2> For About Me Portion</h2>   
                                  <div class="form-group">
                                    <label>Add Image</label>
                                    <input id="aimage" type="file" name="aimage" class="btn-success">
                                  </div>
                                    <div class="form-group">
                                      <label>Title</label>
                                      <input id="atitle" type="text" name="atitle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Description</label>
                                      <input id="adescription" type="text" name="adescription" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Content Title</label>
                                      <input id="acontenttitle" type="text" name="acontenttitle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Content Description</label>
                                      <input id="acontentdescription" type="longtext" name="adescription" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <button class="btn btn-success">Add</button>
                                    </div>
                                  </form> --}}
{{-- 
                                  <h2> For Reviews Portion</h2>
                                  <form method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Your Image</label>
                                      <input type="file" name="image" class="btn-success">
                                    </div>
                                    <div class="form-group">
                                      <label>Your Introduction</label>
                                      <input type="text" name="intro" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" name="intro" class="form-control">
                                    </div>
                                  </form>

                                  <h2> For Contact Portion</h2>
                                  <form method="post" action="{{url('addSettings')}}" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Your Image</label>
                                      <input type="file" name="image" class="btn-success">
                                    </div>
                                    <div class="form-group">
                                      <label>Your Introduction</label>
                                      <input type="text" name="intro" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" name="intro" class="form-control">
                                    </div>
                                  </form> --}} 
                                </div>
                            </div>
                        </div>
                    </div>                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                    
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/dist/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/dist/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('/backend/dist/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/dist/assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>
@endsection

