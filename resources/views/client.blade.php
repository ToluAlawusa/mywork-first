@extends('layouts.app')
@section('content')        

  <div class="site-content">
    <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <h4>Clients</h4>
                <ol class="breadcrumb no-bg mb-1">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Apps</a></li> -->
                    <li class="breadcrumb-item active">Clientss</li>
                </ol>
                @if (count($errors))
                <div class="form-group">

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>

                </div>
                 @endif
                 @if(Session::has('fail'))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            
                                <section class="info-box danger">
                                    {{ Session::get('fail') }}
                                </section>
                            
                        </div>
                    </div>
                    <hr/>
                    @endif
                <p class="row" style="padding: 10px; text-align: right">
                  <button class="btn btn-rounded btn-success" data-toggle="modal" data-target="#addClientModal"><b>+</b>Add Client</button>
                </p>
                <div class="row row-sm">
                  @foreach($allclients as $clientlist)
                    <div class="col-md-4">
                        <div class="box box-block bg-white">
                          
                            <div class="row">
                  
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img class="img-fluid b-a-radius-circle" src="{{ asset('storage/images/ClientImages/' . $clientlist->image )}}" alt="">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                  <h5>{{ $clientlist->name }}</h5>
                                  <span class="tag tag-success">{{ $clientlist->email }}</span>
                                  <p style="margin: 4px">
                                    <button type="button" class="btn btn-secondary mb-0-25 waves-effect waves-light" data-container="body" data-toggle="popover" data-placement="top" title="Address" data-content="{{$clientlist->address}}">
                                      @if(strlen($clientlist->address) > 30)

                                       {{mb_substr($clientlist->address, 0, 30)}}...
                                      @else
                                        {{mb_substr($clientlist->address, 0, 30)}}
                                      @endif
                                    </button><br/>

                                    <abbr title="Phone">P:</abbr> {{ $clientlist->phone }}

                                  </p>
                                  <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#clientMailModal" data-identity="{{ $clientlist->id }}" data-name="{{$clientlist->name}}" data-email="{{ $clientlist->email }}">Send email</button>
                                  <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#editClientModal"
                                  data-identity="{{ $clientlist->id }}" 
                                  data-name="{{$clientlist->name}}"
                                  data-email="{{ $clientlist->email }}"
                                  data-address="{{ $clientlist->address }}"
                                  data-phone="{{ $clientlist->phone }}"
                                  data-source="{{ $clientlist->source }}"
                                  data-image="{{ $clientlist->image }}">Edit</button>
                                  <button class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#deleteClientModal" data-identity="{{ $clientlist->id }}"
                                    data-name="{{ $clientlist->name }}">Delete</button>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-xs-center">
              <div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
                2016 © Neptune
              </div>
              <div class="col-sm-8 text-sm-right">
                <ul class="nav nav-inline l-h-2">
                  <li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
                  <li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
                  <li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>

    </div>
        <!-- Add Admin Modal -->
        <!-- Modal -->
      @include('modals.add_client')
      @include('modals.edit_client')
      @include('modals.delete_client')
      @include('modals.client_send_email')
    <!-- /add admin modal -->

    <!-- Vendor JS -->
    <script type="text/javascript" src="{{ asset('back/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/tether/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/mwheelIntent.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/waves/waves.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/switchery/dist/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/vendor/dropify/dist/js/dropify.min.js')}}"></script>

    <!-- Neptune JS -->
    <script type="text/javascript" src="{{ asset('back/js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/js/demo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('back/js/forms-upload.js')}}"></script>
    @include('logic.clientjs')

@endsection                