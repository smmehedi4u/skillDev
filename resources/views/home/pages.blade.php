@extends('layouts.master')
@section('content')


<div class="row">
    <div class="col-lg-3">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">  
            <!-- Sidebar -->
            <div class="sidebar p-3">
              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul style="display:block;" class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->

                    <h3>{{$data->skill->name}}</h3>
                    @foreach($topics as $topic)
                      <li class="nav-item  ">
                        <a href="?topic_id={{$topic->id}}" class="nav-link @if($topic->id==$data->id) active @endif">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{$topic->title}}</p>
                        </a>
                      </li>
                      @endforeach
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
    </div>
    <div class=" col-lg-8 ">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 float-right">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->title}}</h5>

                        <p class="card-text">
                        {!! $data->docs !!}
                        </p>

                        <b> Question:</b>
                        @foreach ($data->question()->get() as $q)

                            <form :action=" route('detail.post',$data->id)" method="post" enctype="multipart/form-data">
                                @csrf
                                <p>{{$q->question}}</p>
                                <input type="hidden" value="{{$q->id}}" name="q_id" />
                                <div class="input-group mb-3">
                                    <input name="answer" type="text" class="form-control" placeholder="Answer" aria-label="Answer" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-primary" type="submit" id="button-addon2">Submit</button>
                                    </div>
                                  </div>



                            @if(session()->has('success'))
                            <div class="alert alert-success">Answer successsfully submited</div>
                            @elseif(session()->has("error"))

                            <div class="alert alert-danger">{!!session("error")!!}</div>
                            @endif
                        </form>
                        @endforeach



                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>


    </div>
</div>



@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection

@endsection
