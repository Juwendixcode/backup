@extends('layouts.storeapp')

@section('content')
<div class="banner">
	<div class="wrap">
		<div class="banner-text">
			<h1>Qurilish</h1>
			<h2>We are Working on a Awesome new Design</h2>	
				<div class="timer_wrap">
					<div id="counter"> </div>		
				</div> 	
		</div>				
	</div>  	
	<div class="clear"> </div>
</div> 
<div class="banner-text-info">
	<p>Back to Hom</p>
		<div class="form-info">
			<form>
				<input type="text" class="text" value="Enter your email address..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address...';}">
				<input type="submit"value="Subscribe">
			</form> 
		</div>

	<div class="text-xs-center"> 
        <a href="{{ url('/') }}" class="btn btn-secondary rounded btn-sm">
    	    <i class="fa fa-arrow-left"></i> Back to homepage
        </a>
    </div>
</div>

@endsection