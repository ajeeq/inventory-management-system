<!-- ERROR HANDLING EXCEPTION -->
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <script>alert({{session('error')}})</script>
    </div>
@endif
<!-- END OF ERROR HANDLING EXCEPTION -->

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    
    if(exist)
    {
      alert(msg);
    }
</script>