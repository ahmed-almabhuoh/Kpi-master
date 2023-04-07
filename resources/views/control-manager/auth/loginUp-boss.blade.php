<form onsubmit="return validateForm();" action="{{ route('boss.loginUp') }}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@include('control-manager.auth.loginUp')
</form>