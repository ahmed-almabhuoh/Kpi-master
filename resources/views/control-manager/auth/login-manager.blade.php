<form onsubmit="return validateForm();" action="{{ route('manager.login') }}" method="post"  enctype="multipart/form-data">
{{csrf_field()}}
@include('control-manager.auth.login')
</form>