<form action="{{URL::to('loggedin')}}" method='post'>
@csrf
<input type="text" name="username" placeholder="Enter your name">
<br/>
<br/>
<input type="text" name="password" placeholder="Enter your age">
<br/>
<br/>
<input type="submit" value="Sumbit">
</form>