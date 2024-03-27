@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Text Editors</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Text Editors</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Summernote
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <textarea id="summernote">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>
                        </div>
                        <div class="card-footer">
                            Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more
                            examples and information about the plugin.
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                CodeMirror
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <textarea id="codeMirrorDemo" class="p-3">
<div class="info-box bg-gradient-info">
<span class="info-box-icon"><i class="far fa-bookmark"></i></span>
<div class="info-box-content">
  <span class="info-box-text">Bookmarks</span>
  <span class="info-box-number">41,410</span>
  <div class="progress">
    <div class="progress-bar" style="width: 70%"></div>
  </div>
  <span class="progress-description">
    70% Increase in 30 Days
  </span>
</div>
</div>
            </textarea>
                        </div>
                        <div class="card-footer">
                            Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and
                            information about the plugin.
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('template/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('template/plugins/codemirror/theme/monokai.css') }}">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{ asset('template/plugins/simplemde/simplemde.min.css') }}">
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('template/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('template/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('template/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('template/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
