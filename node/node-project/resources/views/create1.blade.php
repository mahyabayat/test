@extends('layouts.app')

@section('content')
<div class="container"dir:right>
    <div class="row justify-content-center" style="font-family:tahoma">
        <div class="col-md-8"> <h2  >ثبت خاطره جدید</h2>
            <div class="card">
           
                <div class="card-header" >عنوان خاطره</div>

                <div class="card-body"style="height:200px">
                   

                  متن خاطره
                </div>

            </div>


        </div>
        
    </div>
    <div class="pt-10" style="padding-left:500px; padding-top:30px" >
    <form action="/profile/{user}" enctype="multipart/form-data" method="post">
    <button class="btn btn-primary " type="submit"> بازگشت </button>
    </form>
        <button class="btn btn-primary p-10" type="submit"> ثبت </button>
        </div>
</div>
@endsection