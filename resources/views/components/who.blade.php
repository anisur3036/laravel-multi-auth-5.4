@if (Auth::guard('web')->check())
	<p>You are logged In as <strong>USER</strong></p>
@else 
	<p class="text-danger">
		You are Logged Out as a <strong>USER</strong>
	</p>
@endif

@if (Auth::guard('admin')->check())
	<p>You are logged In as <strong>ADMIN USER</strong></p>
@else 
	<p class="text-danger">
		You are Logged Out as a <strong>ADMIN USER</strong>
	</p>
@endif