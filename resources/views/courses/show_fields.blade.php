<!-- Title Id Field -->
<div class="form-group col-xs-12">
    <h1>{!! $course->title !!}</h1>
    <p class="text-muted">{!! $course->sub_title !!}</p>
</div>


<!-- User Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('user_id', 'Author:') !!}
    <p>{!! $course->user['name'] !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('category_id', 'Category :') !!}
    <p><a href="/categories/{!!$course->category['id'] !!}">{!!$course->category['name'] !!}</a></p>
</div>

<!-- Description Field -->
<div class="form-group col-md-6">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $course->description !!}</p>
</div>

<!-- About Instructor Field -->
<div class="form-group">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{!! $course->about_instructor !!}</p>
</div>

<!-- Playlist Url Field -->
<div class="form-group">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    <p>{!! $course->playlist_url !!}</p>
</div>

<!-- Tags Field -->
<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{!! $course->tags !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{!! $course->photo !!}</p>
</div>

<!-- Promo Video Url Field -->
<div class="form-group">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    <p>{!! $course->promo_video_url !!}</p>
</div>

<!-- Creator Status Field -->
<div class="form-group">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    <p>{!! $course->creator_status !!}</p>
</div>

<!-- Admin Status Field -->
<div class="form-group">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    <p>{!! $course->admin_status !!}</p>
</div>

<!-- What Will Students Learn Field -->
<div class="form-group">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    <p>{!! $course->what_will_students_learn !!}</p>
</div>

<!-- Target Students Field -->
<div class="form-group">
    {!! Form::label('target_students', 'Target Students:') !!}
    <p>{!! $course->target_students !!}</p>
</div>

<!-- Requirements Field -->
<div class="form-group">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{!! $course->requirements !!}</p>
</div>

<!-- Discount Price Field -->
<div class="form-group">
    {!! Form::label('discount_price', 'Discount Price:') !!}
    <p>{!! $course->discount_price !!}</p>
</div>

<!-- Actual Price Field -->
<div class="form-group">
    {!! Form::label('actual_price', 'Actual Price:') !!}
    <p>{!! $course->actual_price !!}</p>
</div>

<!-- View Count Field -->
<div class="form-group">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{!! $course->view_count !!}</p>
</div>

<!-- Subscriber Count Field -->
<div class="form-group">
    {!! Form::label('subscriber_count', 'Subscriber Count:') !!}
    <p>{!! $course->subscriber_count !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $course->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $course->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $course->updated_at !!}</p>
</div>

