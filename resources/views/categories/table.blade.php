<table class="table table-responsive" id="categories-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>View Count</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody> 
    
    <div class="card-deck">

    @foreach($categories as $category)

    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>

        <tr>
            <td>{!! $category->name !!}</td>
            <td>{!! $category->description !!}</td>
            <td>{!! $category->view_count !!}</td>
            <td>
                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

    </div>
    </tbody>
</table>