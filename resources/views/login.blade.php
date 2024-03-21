@include('header')

<form action="{{route('login')}}" method="POST">
  @csrf
  <div>
    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">password</label>
      <input type="password" name="password">
    </div>
  </div>
  <button type="submit">submit</button>
  @if(session("message"))
    <div>{{session("message")}}</div>
  @endif
</form>
@include('footer')