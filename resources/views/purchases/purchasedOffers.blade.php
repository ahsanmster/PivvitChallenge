@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Purchase Offerings</div>
					
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>Purchase ID</th>
									<th>Offer Title</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
								@foreach($purchases as $val)
									<tr>
										<td>{{$val->id}}</td>
										<td>{{$val->offerDetail->title}}</td>
										<td>{{$val->quantity}}</td>
										<td>{{$val->offerDetail->price}}</td>
										<td>{{$val->offerDetail->price * $val->quantity}}</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
