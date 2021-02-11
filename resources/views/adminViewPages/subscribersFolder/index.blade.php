@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">subscribers table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                 
                                    </div>
                                    <div class="table-data__tool-right">
                                     
                                    </div>
                                </div>
                                @php
                                    $i = 1;
                                @endphp
                                @if (count($subscribers)>0)
                                    
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID</th>
                                                <th>Subscribers Email</th>
                                                <th>Subscribed Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($subscribers as $sub)
                                            <tr class="tr-shadow">
                                                <td>{{$i++}}</td>
                                                <td>{{$sub->id}}</td>
                                                <td><a href="mailto:{{$sub->subscribers_email}}">{{$sub->subscribers_email}}</a></td>
                                                <td>{{$sub->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                     <form method="post"  action="{{url('admin/our-subscribers',$sub->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach                                       
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <h2>No subscribers yet.</h2>
                                @endif

                                <!-- END DATA TABLE -->
                                     
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>list of Subscribers Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <ul style="direction: none">
                                                <td>
                                                   @foreach($AllSubscribers as $sub)
                                                        <li>
                                                            <a href="mailto:{{$sub->subscribers_email}}">{{$sub->subscribers_email}}</a>
                                                        </li>
                                                    @endforeach   
                                                </td>
                                            </ul>
                                        </tbody>
                                    </table>
           

                                </div>
                            </div>
						</div>
					</div>
				</div>
            </div>

            <div class="pagenation">
             <center>   {{$subscribers->links()}}</center>
            </div>
@endsection
