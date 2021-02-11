@extends('adminViewLayout.adminViewApp')

@section('adminContent')
 
<div class="container row">
    <div class="col-md-3"></div>
    <div class="from-gruop col-md-6">
        <h2>Laravel File Upload With Progress Bar Tutorial Example</h2>
            <form method="POST" action="imagePro" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">file name</label>
                    <input type="text" class="form-control" name="fa_title" id="">
                </div>
                <div class="form-group">
                    <label for="title">file name</label>
                    <input type="text" class="form-control" name="pa_title" id="">
                </div>
                <div class="form-group">
                    <label for="title">file name</label>
                    <input type="text" class="form-control" name="en_title" id="">
                </div>
                <div class="form-group">
                    <label for="title">file name</label>
                    <input type="text" class="form-control" name="de_title" id="">
                </div>
                <div class="form-group">
                    <input name="image" type="file" class="form-control"><br/>
                    <input name="file" type="file" class="form-control"><br/>
                    <div class="progress">
                        <div class="bar"></div >
                        <div class="percent">0%</div >
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    
                    <br>
                    <input type="submit"  value="Submit" class="btn btn-primary">
                </div>
            </form>   
            @foreach ($imagePro as $item)
        <img src="/storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" srcset="" style="width: 100px; hight:100px">
  @endforeach
  <iframe width="560" height="315" src="https://www.youtube.com/embed/1DX8uQkXt7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/1DX8uQkXt7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/1DX8uQkXt7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  {{-- <x-embed url="https://www.youtube.com/watch?v=oHg5SJYRHA0" /> --}}
  {{-- <x-embed url="https://www.youtube.com/watch?v=oHg5SJYRHA0" /> --}}
  {{-- <iframe width="420" height="315" src="//www.youtube.com/embed/watch?v=LXy-R_ZX4R8" frameborder="0" allowfullscreen></iframe> --}}
    </div> 
</div>

@endsection

