@if(session()->has('message'))
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <b>{{ session()->get('message') }}</b>
    </div>
@endif
