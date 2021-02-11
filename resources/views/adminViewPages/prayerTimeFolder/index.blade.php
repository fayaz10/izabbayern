@extends('adminViewLayout.adminViewApp')
@section('adminContent')
@php $lang = session()->get('locale'); @endphp
		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Menu table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="prayerTable">
                                        <thead>
                                            <tr><small><center><b>Note:</b> First of 6 prayer times would be displayed for uers.</center></small></tr>
                                            <tr>
                                                <th>ID</th>
                                                <th>Farsi name</th>
                                                <th>pashtow name</th>
                                                <th>German name</th>
                                                <th>English name</th>
                                                <th>prayer_Time</th>
                                                <th>AM|PM</th>
                                                <th>Created_at</th>
                                                <th>Updated_at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prayer as $pray)
                                            <tr class="tr-shadow">
                                                <td>{{$pray->id}}</td>
                                                <td>{{$pray->fa_prayername}}</td>
                                                <td>{{$pray->ps_prayername}}</td>
                                                <td>{{$pray->de_prayername}}</td>
                                                <td>{{$pray->en_prayername}}</td>
                                                <td>{{$pray->prayertime}}</td>
                                                <td> 
                                                    <?php if( $pray->amorpm == 1){
                                                        echo "<span style='color:blue'>AM</span>";
                                                       }else{ echo "<span style='color:green'>PM</span>";}
                                                     ?>
                                                    </td>
                                                <td>{{$pray->created_at->diffForHumans()}}</td>
                                                <td>{{$pray->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <form method="get" action="{{url('admin/prayer/'.$pray->id.'/edit')}}" enctype="multipart/form-data">
                                                   
                                                     <button class="item"  data-placement="top" title="Edit"data-toggle="tooltip" data-target="#largeModal"><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/prayer',$pray->id)}}">
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
                                <!-- END DATA TABLE -->
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- modal Create Menu -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Create Prayer Time</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                        <form id="prayerForm" method="post" enctype="multipart/form-data" action="{{url('admin/prayer')}}">
                            <!-- <form id="submenuForm"> -->
                            @csrf 
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="prayer name">(فارسی)اسم نماز</label>
                                    <input type="text" id="fa_prayername" name="fa_prayername" placeholder="اسم نماز" class="form-control">
                                    <small class="form-text text-muted">Write اسم نماز here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="prayer name">(پشتو)اسم نماز</label>
                                    <input type="text" id="ps_prayername" name="ps_prayername" placeholder="اسم نماز" class="form-control">
                                    <small class="form-text text-muted">Write اسم نماز here.</small>
                                </div>
                                
                            </div>       
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="prayer name">prayer Name(German)</label>
                                    <input type="text" id="de_prayername" name="de_prayername" placeholder="prayer Name.." class="form-control">
                                    <small class="form-text text-muted">Write prayer name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="prayer name">prayer Name(English)</label>
                                    <input type="text" id="en_prayername" name="en_prayername" placeholder="prayer Name.." class="form-control">
                                    <small class="form-text text-muted">Write prayer name here.</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="prayer time">prayer Time</label>
                                    <input type="text" id="prayertime" name="prayertime" placeholder="prayer Time.." class="form-control">
                                    <small class="form-text text-muted">Write prayer Time here.</small>
                                </div>
                                 <div class="col-12 col-md-6"><label for="amorpm">AM | PM</label>
                                        <select name="amorpm" id="amorpm" class="form-control">
                                            <option value="1">AM</option>
                                            <option value="0">PM</option>
                                    </select><small class="form-text text-muted">Select the AM|PM of Time</small>
                                    </div>
                                </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit"  class="btn btn-primary">Submit</button>
                        </div>
                    </form>
					</div>
				</div>
            </div>

@endsection
 

