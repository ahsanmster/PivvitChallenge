@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Purchase Offerings
						<span style="">

							@if($errors->any())
								@foreach ($errors->all() as $error)
									<div style="color: red">{{ ($error) }}</div>
								@endforeach
							@endif
							@if (session()->has('message'))
								<div style="color: green">
                  {{session()->get('message') }}
              </div>
							@endif
						</span>
					</div>
					
					<div class="panel-body">
						<form method="post" action="/purchases">
							{{csrf_field()}}
							<div class="form-group">
								<label for="offers">Offers:</label>
								<?php
								$offer = old('offers')
								?>
								<select name="offeringId" id="offers" class="form-control">
									@foreach($offers as $val)
										@if($val->price == $offer)
											<option value="{{$val->id}}" data-price="{{$val->price}}" selected>{{$val->title}}</option>
										@else
											<option value="{{$val->id}}"  data-price="{{$val->price}}">{{$val->title}}</option>
										@endif
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="customerName">Customer Name:</label>
								<input type="text" class="form-control" id="customerName" name="customerName" value="{{\Auth::user()->name}}" value="{{ old('customerName') }}" >
							</div>
							<div class="form-group">
								<label for="quantity">Quantity:</label>
								<input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
							</div>
							<div class="form-group">
								<label for="amount">Total Amount:</label>
								<label class="form-control" id="amount">0.00</label>
							</div>
							<button type="submit" class="btn btn-info ">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
