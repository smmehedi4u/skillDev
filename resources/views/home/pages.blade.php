@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Sidebar -->
                <div class="sidebar p-3">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul style="display:block;" class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <div class="p-3 mb-4" style="background-color: #f9e79f; border-radius: 5px;">
                                <h3 class="m-0">{{ $data->skill->name }}</h3>
                            </div>
                            @foreach ($topics as $topic)
                                <li class="nav-item">
                                    <a href="?topic_id={{ $topic->id }}"
                                        class="nav-link d-flex align-items-center @if ($topic->id == $data->id) active @endif">
                                        <i
                                            class="far fa-circle nav-icon mr-2 @if (in_array($topic->id, session()->get('completed_topics', []))) font-weight-bold @endif"></i>
                                        <p class="m-0">{{ $topic->title }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>

        <div class="col-lg-8">
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 float-right">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="p-3 mb-4 text-center"
                                            style="background-color: #f8f9fa; border-radius: 5px;">
                                            <h5 class="m-0" style="font-size: 2rem; color: #000;">{{ $data->title }}
                                            </h5>
                                        </div>

                                        <p class="card-text">
                                            {!! $data->docs !!}
                                        </p>

                                        <b>Question:</b>
                                        @foreach ($data->question()->get() as $q)
                                            <form action="{{ route('detail.post', $data->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <p>{{ $q->question }}</p>
                                                <input type="hidden" name="q_id" value="{{ $q->id }}" />

                                                <div style="display: flex; width: 100%; gap: 10px;">
                                                    <div class="form-check option" onclick="selectOption(this)"
                                                        style="flex: 1; display: flex; align-items: center; justify-content: center;
                                                                padding: 15px; background-color: #f4f6ea; border-radius: 8px; text-align: center; transition: background-color 0.2s;">
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option1_{{ $q->id }}" value="1"
                                                            style="display: none;">
                                                        <label class="form-check-label" for="option1_{{ $q->id }}"
                                                            style="flex-grow: 1; margin: 0; cursor: pointer;">
                                                            {{ $q->option1 }}
                                                        </label>
                                                    </div>

                                                    <div class="form-check option" onclick="selectOption(this)"
                                                        style="flex: 1; display: flex; align-items: center; justify-content: center;
                                                                padding: 15px; background-color: #f4f6ea; border-radius: 8px; text-align: center; transition: background-color 0.2s;">
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option2_{{ $q->id }}" value="2"
                                                            style="display: none;">
                                                        <label class="form-check-label" for="option2_{{ $q->id }}"
                                                            style="flex-grow: 1; margin: 0; cursor: pointer;">
                                                            {{ $q->option2 }}
                                                        </label>
                                                    </div>
                                                </div>

                                                <script>
                                                    function selectOption(selectedOption) {
                                                        // Remove active background from all options
                                                        document.querySelectorAll('.option').forEach(option => {
                                                            option.style.backgroundColor = '#f4f6ea'; // Reset to default color
                                                        });

                                                        // Add active background to the selected option
                                                        selectedOption.style.backgroundColor = '#d4edda'; // Active color
                                                    }
                                                </script>


                                                <div class="input-group-append mt-3">
                                                    <button class="btn btn-primary w-100" type="submit"
                                                        id="button-addon2">Submit</button>
                                                </div>


                                                @if (session()->has('success'))
                                                    <div class="alert alert-success mt-3">Answer is correct!</div>
                                                @elseif(session()->has('error'))
                                                    <div class="alert alert-danger mt-3">{!! session('error') !!}</div>
                                                @endif
                                            </form>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">

                                    @php
                                        $prevTopic = prevTopic($data->id);
                                        $nextTopic = nextTopic($data->id);
                                    @endphp

                                    @if ($prevTopic)
                                        <a href="?topic_id={{ $prevTopic }}" class="btn btn-secondary">Previous</a>
                                    @else
                                        <button class="btn btn-secondary" disabled type="button">Previous</button>
                                    @endif

                                    @if ($nextTopic)
                                        <a href="?topic_id={{ $nextTopic }}" class="btn btn-secondary">Next</a>
                                    @else
                                        <button class="btn btn-secondary" disabled type="button">Next</button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        function selectOption(selectedOption) {
            // Remove active background from all options
            document.querySelectorAll('.option').forEach(option => {
                option.style.backgroundColor = '#f4f6ea'; // Reset to default color
            });

            // Add active background to the selected option
            selectedOption.style.backgroundColor = '#d4edda'; // Active color
        }
    </script>
@endsection
@endsection
