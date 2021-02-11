

@if(count($errors)>0)
@foreach($errors->all() as $error)

<div class="row"><br>
  <div class="container">
    <div class="col-md-4">
    <div class="alert alert-danger" alert-dismissible fade in>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> {{$error}}
    </div>
    @endforeach
 @endif    
</div>
<div class="col-md-4"></div>
</div>
</div>

<div class="row"><br>
  <div class="container">
    <div class="col-md-4">
      @if(session('success'))
    <div class="alert alert-success" alert-dismissible fade in>
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong>Success!.</strong>	{{session('success')}}
    </div>
      @endif
    </div>
     <div class="col-md-4"></div> 
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="col-md-4">
      @if(session('error'))
      <div class="alert alert-danger" alert-dismissible fade in>
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error!.</strong>	{{session('error')}}
      </div>
    @endif
    </div>
    <div class="col-md-4"></div>
  </div>
</div>


