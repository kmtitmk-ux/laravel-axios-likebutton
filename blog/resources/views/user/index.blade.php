@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ユーザー一覧</div>
                <div class="card-body">
                    <userlist-component></userlist-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection