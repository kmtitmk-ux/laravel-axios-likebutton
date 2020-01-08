@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ユーザー一覧</div>
                <div class="card-body">
                    <div class="row">

                        <user-list
                            v-for="post in user_data"
                            v-bind:key="post.id"
                            v-bind:post="post"
                        ></user-list>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection