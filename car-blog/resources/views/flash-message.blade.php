@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
        <i> Haven't registered? Click <a href="/register">here!</a></i>
    </div>
@endif
