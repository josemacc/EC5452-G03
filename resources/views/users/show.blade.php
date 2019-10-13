@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    {{--Courses--}}
                    <h3 class="text-center col-md-12">My Courses</h3>
                    @include('courses.table')
                </div>
            </div>
        </div>
    </div>
@endsection
