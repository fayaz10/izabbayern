@extends('adminViewLayout.adminViewApp')
@section('adminContent')
		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Doners table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                 
                                    </div>
                                    <div class="table-data__tool-right">
                                     
                                    </div>
                                </div>
                                @php
                                    $i = 1;
                                @endphp
                                @if (count($Doners)>0)
                                @foreach($Doners as $don)
                                    
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                               <th>First name</th>
                                               <th>Last name</th>
                                               <th>User name</th>
                                               <th>Email</th>
                                               <th>Donated_for</th>
                                               <th>Amount</th>
                                               <th>Name on Card</th>
                                               <th>Card Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
                                            <tr class="tr-shadow">
                                                <td>{{$i++}}</td>
                                                <td>{{$don->created_at->diffForHumans()}}</td>
                                                <td>{{ $don->firstName }}</td>
                                                <td>{{ $don->lastName }}</td>
                                                <td>{{ $don->userName }}</td>
                                                <td><a href="mailto:{{$don->email}}">{{$don->email}}</a></td>
                                                <td>{{ $don->category }}</td>
                                                <td>{{ $don->amount }} {{ $don->currency }}</td>
                                                <td>{{ $don->nameOnCard }}</td>
                                                <td>{{ $don->cardNumber }}</td>
                                                {{-- <td>
                                                    <div class="table-data-feature">
                                                     <form method="post"  action="{{url('admin/our-Doners',$don->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>

                                                    </div>
                                                </td> --}}
                                            </tr>
                                            <tr class="spacer"></tr>
                                                                               
                                        </tbody>
                                    </table>
                                    
                                </div>
                                @endforeach 
                                @else
                                <h2>No Doners yet.</h2>
                                @endif

                                <!-- END DATA TABLE -->
                                     
                                {{-- <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>list of Doners Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <ul style="direction: none">
                                                <td>
                                                   @foreach($AllDoners as $don)
                                                        <li>
                                                            <a href="mailto:{{$don->Doners_email}}">{{$don->Doners_email}}</a>
                                                        </li>
                                                    @endforeach   
                                                </td>
                                            </ul>
                                        </tbody>
                                    </table>
           

                                </div> --}}
                            </div>
						</div>
					</div>
				</div>
            </div>

            <div class="pagenation">
             <center>   {{$Doners->links()}}</center>
            </div>
@endsection
