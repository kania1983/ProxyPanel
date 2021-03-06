@extends('admin.layouts')
@section('css')
    <link href="/assets/global/vendor/dropify/dropify.min.css" type="text/css" rel="stylesheet">
@endsection
@section('content')
    <div class="page-content container">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">数据导入</h2>
            </div>
            @if (Session::has('successMsg'))
                <div class="alert alert-success" role="alert">
                    <button class="close" data-close="alert"></button>
                    {{Session::get('successMsg')}}
                </div>
            @endif
            @if($errors->any())
                <x-alert type="danger" :message="$errors->first()"/>
            @endif
            <div class="panel-body">
                <form action="/tools/import" method="POST" enctype="multipart/form-data" class="upload-form">
                    <input type="file" id="inputUpload" name="uploadFile" data-plugin="dropify" data-default-file="" required/>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success float-right mt-10"> 导入</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/global/vendor/dropify/dropify.min.js" type="text/javascript"></script>
@endsection
