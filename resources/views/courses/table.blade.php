<table class="table table-responsive" id="courses-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Discount Price</th>
        <th>Actual Price</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
        <tr>
            <td><h2>{!! $course->title !!}<h2> <br/>
            {!! $course->sub_title !!}<br/>
            </td>
            <td>{!! $course->photo !!}</td>
            <td>{!! $course->promo_video_url !!}</td>
            <td>{!! $course->discount_price !!}</td>
            <td>{!! $course->actual_price !!}</td>
            <td>
                {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>