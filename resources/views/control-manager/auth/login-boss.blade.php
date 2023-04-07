<form onsubmit="return validateForm();" action="{{ route('boss.login') }}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@include('control-manager.auth.login')
</form>