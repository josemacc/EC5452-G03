
<!-- Description Field -->
<div class="form-group w-100">
    <p>{!! $category->description !!}</p>
</div>

<!-- View Count Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('view_count', 'Views:') !!}
    <p>{!! $category->view_count !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at->format(' h:m - a D d M Y') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at->format(' h:m - a D d M Y') !!}</p>
</div>

