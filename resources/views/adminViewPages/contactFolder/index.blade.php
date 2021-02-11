@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">contact table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="/admin/contact/create">  <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="mcodal" data-target="#mediumModal">
                                         <i class="zmdi zmdi-plus"></i>add item</button></a> 
                                    </div>
                                </div>
                                @foreach($contacts as $contact)
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="submenuTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>fa_title</th>
                                                <th>fa_subTitle</th>
                                                <th>fa_Address</th>

                                                <th>ps_title</th>
                                                <th>ps_subTitle</th>
                                                <th>p_Address</th>

                                                <th>de_title</th>
                                                <th>de_subTitle</th>
                                                <th>de_Address</th>

                                                <th>en_title</th>
                                                <th>en_subTitle</th>
                                                <th>en_Address</th>

                                                <th>phone</th>
                                                <th>phone 2(optional)</th>
                                                <th>phone 3(optional)</th>
                                                <th>Email</th>
                                                <th>Email 2(optional)</th>
                                                <th>Email 3(optional)</th>
                                                <th>Created_at</th>
                                                <th>Update_at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>{{$contact->id}}</td>
                                                <td>{{$contact->fa_title}}</td>
                                                <td><div class="subScroll">{{$contact->fa_subtitle}}</div></td>
                                                <td><div class="subScroll">{{$contact->fa_address}}</div></td>

                                                <td>{{$contact->ps_title}}</td>
                                                <td><div class="subScroll">{{$contact->ps_subtitle}}</div></td>
                                                <td><div class="subScroll">{{$contact->ps_address}}</div></td>

                                                <td>{{$contact->de_title}}</td>
                                                <td><div class="subScroll">{{$contact->de_subtitle}}</div></td>
                                                <td><div class="subScroll">{{$contact->de_address}}</div></td>

                                                <td>{{$contact->en_title}}</td>
                                                <td><div class="subScroll">{{$contact->en_subtitle}}</div></td>
                                                <td><div class="subScroll">{{$contact->en_address}}</div></td>

                                                <td>{{$contact->phone1}}</td>
                                                <td>{{$contact->phone2}}</td>
                                                <td>{{$contact->phone3}}</td>
                                                <td><a href="mailto: {{$contact->email1}}">{{$contact->email1}}</a></td>
                                                <td><a href="mailto: {{$contact->email2}}">{{$contact->email2}}</a></td>
                                                <td><a href="mailto: {{$contact->email3}}">{{$contact->email3}}</a></td>
                                                <td>{{$contact->created_at->diffForHumans()}}</td>
                                                <td>{{$contact->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <form method="get" action="{{url('admin/contact/'.$contact->id.'/edit')}}" enctype="multipart/form-data">
                                                     <button class="item"  data-placement="top" title="Edit"data-toggle="tooltip" data-target="#largeModal"><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/contact',$contact->id)}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach                                       
                                <!-- END DATA TABLE -->
                            </div>
						</div>
					</div>
				</div>
			</div>


@endsection
 

