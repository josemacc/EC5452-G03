
 <div class="card-columns">
    @foreach($categories as $category)

    <div class="card">
        <img src="https://image.shutterstock.com/z/stock-vector-grunge-red-sample-word-round-rubber-seal-stamp-on-white-background-1242668641.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{!! $category->name !!}</h5>
            <p class="card-text">{{ str_limit($category->description, $limit = 150, $end = '...') }}</p>
            <ul class="list-group list-group-flush">
                <small class="text-muted">Views: {!! $category->view_count !!}</small>
            </ul>
        </div>
        <div class="card-footer">
        <a href="#" class="btn btn-primary">View Category</a>
        </div>
    </div>
    @endforeach
</div>







<!-- 

                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
 
 -->