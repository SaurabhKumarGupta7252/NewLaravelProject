<!--<h1>{{--$user--}} is logged in!</h1> -->

<h1>{{count($user)}} Users are logged in!</h1>

<br>

@foreach($user as $name)
<h1>{{$name}} is logged in! and name length is {{Str::length($name)}} and is length greater than 5 ? {{(Str::length($name) > 5) ? 'True' : 'False'}}</h1>
@endforeach

<br>

@include('contact')

@csrf

<script>
    var data = @json($user);
    console.warn(data[0]);
    console.warn(data);
</script>

<!-- @foreach($user as $name)
<h3>{{$name}}</h3>
@if(Str::length($name) >= 6)
<h5>true</h5>
@else <h5>false</h5>
@endif
@endforeach -->