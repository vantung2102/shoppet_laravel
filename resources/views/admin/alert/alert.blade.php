<style>
    .alert_li{
        display: flex;
        list-style: none;
        justify-content:center;
        align-items: center;
    }
    .alert_ul{
        margin: 0;
        padding: 0;
    }
</style>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="alert_ul">
            @foreach ($errors->all() as $error)
                <li class="alert_li">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        <ul class="alert_ul">
            <li class="alert_li">{{ Session::get('error') }}</li>
        </ul>
    </div>
@elseif(Session::has('success'))
    <div class="alert alert-success">
        <ul class="alert_ul">
            <li class="alert_li">{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif