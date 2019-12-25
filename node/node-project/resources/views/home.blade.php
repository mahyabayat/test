


@extends ('layouts.app')

@section ('content')
<div class="container">
    
        @csrf
        <div class="row"> 
        <div class="col-8 offset-2">
             
               
                
                  <div class="row " style="padding-left:280px;padding-bottom:20px">
                  <a href="/p/create"  class="btn btn-info" role="button"> 
                            + ثبت خاطره جدید</a>
                 
                  </div>
          <div style="padding-left:410px" >
                  <div class="" style="background-color:white;height:80px;width:500px;padding-top:20px;padding-left:410px">
                  عنوان خاطره 

                  </div></div>
         </div>
    </div>
    <div class="row pt-4">
        <!-- @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
     
        <div style="padding-left:410px" >
                  <div class="" style="background-color:white;height:80px;width:500px;padding-top:20px;padding-left:410px">
                  {{ $post->$title }}  

                  </div>
                  </div>
        </div>
        @endforeach -->
    </div>
</div>
@endsection