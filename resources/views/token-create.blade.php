@include('header')

<h1>create workspace</h1>
<form action="{{route('admin.token.create', $workspace_id)}}" method="POST">
  @csrf
  <div>
    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>
  </div>
  <button type="submit">submit</button>
  @if(session("message"))
    <div>{{session("message")}}</div>
  @endif
</form>
@include('footer')