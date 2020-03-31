
@if (count($errors) > 0)
<div class="alert alert-danger fade show">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
    @foreach ($errors as $error)
    <div class="row">
        {{$error}}
    </div>
    @endforeach
</div>
@endif



@if(session('success'))
<div class="alert alert-success fade show" role="alert" style="width:50%; margin:auto;">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
  <p>{{session('success')}}</p>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger fade show" style="width:50%; margin:auto;">
    {{session('error')}}
</div>
@endif

