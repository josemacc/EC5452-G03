<!-- Title Id Field -->
<div class="form-group col-md-12">
    <h1>{!! $course->title !!}</h1>
    <p>{!! $course->sub_title !!}
    <div class="text-muted col-md-6">
    @if($course->subscriber_count > 0   )
    | Students : {{number_format($course->subscriber_count)}}
    @endif
    @if($course->view_count > 0 )
    | Views: {{number_format($course->view_count)}}
    @endif

    <!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Last Updated:') !!}
    <p>{!! $course->updated_at->format('h:i a - D d M Y') !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $course->created_at->format('h:i a - D d M Y') !!}</p>
</div>

<!-- User Id Fields -->
<div class="form-group col-md-6">
    {!! Form::label('user_id', 'Author:') !!}
    <p><a href="/users/{!! $course->user['id'] !!}">{!! $course->user['name'] !!}</a></p>
</div>

<!-- Category Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('category_id', 'Category :') !!}
    <p><a href="/categories/{!!$course->category['id'] !!}">{!!$course->category['name'] !!}</a></p>

</div>

    </div>
      

            <!-- Discount Price Field -->
            <div class="form-group col-md-6">
                <span style="font-size: 38px;">${!! $course->discount_price !!}</span>
                <br/>
                <span style="font-size: 18px; text-decoration:line-through">
                    ${!! $course->actual_price !!}</span>

                    <script src="https://js.stripe.com/v3"></script>
   
                  <!--   <div class:"col-md-12" >
                    <a href="" class="btn btn-lg btn-success" id="checkout-button-sku_G1q6jDxU8kOaku"
                      role="link"> Buy Now ${!! $course->discount_price !!} </a> 
                    </div> -->
                    <div class:"col-md-12" >            
                    <button
                      style="background-color:#4BB543;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                      id="checkout-button-sku_G1q6jDxU8kOaku"
                      role="link"
                    >
                      Buy Now ${!! $course->discount_price !!}
                    </button>
                    
                    </div>
                    <div id="error-message"></div>

                    <script>
                    (function() {
                      var stripe = Stripe('pk_test_1LdVPQkda6Ewhk1LjH39CMu700WM6noH7I');

                      var checkoutButton = document.getElementById('checkout-button-sku_G1q6jDxU8kOaku');
                      checkoutButton.addEventListener('click', function () {
                        // When the customer clicks on the button, redirect
                        // them to Checkout.
                        stripe.redirectToCheckout({
                          items: [{sku: 'sku_G1q6jDxU8kOaku', quantity: 1}],

                          // Do not rely on the redirect to the successUrl for fulfilling
                          // purchases, customers may not always reach the success_url after
                          // a successful payment.
                          // Instead use one of the strategies described in
                          // https://stripe.com/docs/payments/checkout/fulfillment
                          successUrl: 'http://127.0.0.1:8000/',
                          cancelUrl: 'http://127.0.0.1:8000/',
                        })
                        .then(function (result) {
                          if (result.error) {
                            // If `redirectToCheckout` fails due to a browser or network
                            // error, display the localized error message to your customer.
                            var displayError = document.getElementById('error-message');
                            displayError.textContent = result.error.message;
                          }
                        });
                      });
                    })();
                    </script>



            </div>

       


    </p>
</div>





@if(Auth::check() AND (Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id))
<div class="form-group col-md-6">
    {!! Form::label('creator_status', 'Creator Status:') !!}
    @if($course->creator_status ==1 ) 
    <p>On
        @if(Auth::user()->id == $course->user_id )
         
<!--             <a href="#" class="btn-danger btn-xs"> Turn Disapproved</a>
-->            
        {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}

        <input type="hidden" name="course_id" value="{{$course->id}}">
             {!! Form::button('<i class="glyphicon glyphicon-thumbs-down"></i>Unpublish', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to Unpublish?')"]) !!}
        {!! Form::close() !!}
        @endif
    </p>
    @endif
    @if($course->creator_status ==0 )
    <p>Off
        @if(Auth::user()->id == $course->user_id )
        
<!--             <a href="#" class="btn-danger btn-xs"> Turn Disapproved</a>
-->            
        {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}

        <input type="hidden" name="course_id" value="{{$course->id}}">
             {!! Form::button('<i class="glyphicon glyphicon-thumbs-down"></i> Publish', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to Publish?')"]) !!}
        {!! Form::close() !!}
        @endif
    </p>
    @endif
    
</div>

<!-- Admin Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('admin_status', 'Admin Status:') !!}
    
    @if($course->admin_status == 1 ) 
        <p>Approved         
            @if(Auth::user()->role_id < 3)
            
<!--             <a href="#" class="btn-danger btn-xs"> Turn Disapproved</a>
 -->            
            {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}

            <input type="hidden" name="course_id" value="{{$course->id}}">
                 {!! Form::button('<i class="glyphicon glyphicon-thumbs-down"></i>Turn to Disapprove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to disapprove?')"]) !!}
            {!! Form::close() !!}
            @endif
        </p>
    @endif

    @if($course->admin_status ==0 ) 
        <p>Disapproved  
             @if(Auth::user()->role_id < 3)
            
<!--             <a href="#" class="btn-success btn-xs"> Turn Approved</a>
 -->            
            {!! Form::open(['route' => ['courses.approve' , $course->id], 'method' => 'post']) !!}
            <input type="hidden" name="course_id" value="{{$course->id}}">
                {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>Turn to Approve', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to approve?')"]) !!}
            {!! Form::close() !!}
            @endif 
        </p>
    @endif
</div>

@endif

<!-- Description Field -->
<div class="form-group col-md-8">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $course->description !!}</p>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-8">
    {!! Form::label('about_instructor', 'About Instructor:') !!}
    <p>{!! $course->about_instructor !!}</p>
</div>


@if(Auth::user()->role_id < 3 || Auth::user()->id == $course->user_id)
<!-- Playlist Url Field -->
 <div class="form-group col-md-8">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    <p>{!! $course->playlist_url !!}</p>
</div> 

<!-- Promo Video Url Field -->
 <div class="form-group col-md-8">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    <p>{!! $course->promo_video_url !!}</p>
</div> 
<!-- Creator Status Field -->

@endif
<!-- Tags Field -->
<div class="form-group col-md-8">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{!! $course->tags !!}</p>
</div>

<!-- What Will Students Learn Field -->
<div class="form-group col-md-8">
    {!! Form::label('what_will_students_learn', 'What Will Students Learn:') !!}
    <p>{!! $course->what_will_students_learn !!}</p>
</div>

<!-- Target Students Field -->
<div class="form-group col-md-8">
    {!! Form::label('target_students', 'Target Students:') !!}
    <p>{!! $course->target_students !!}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-8">
    {!! Form::label('requirements', 'Requirements:') !!}
    <p>{!! $course->requirements !!}</p>
</div>

