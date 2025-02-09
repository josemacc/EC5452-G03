@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('courses.show_fields')
                    <h3 class="col-md-12 text-center"> Subscribers </h3>
                    @include('users.table-user')
                </div>
            </div>
        </div>
    </div>
@endsection
