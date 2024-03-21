@include('header')

<h1>create workspace</h1>
<form action="{{route('admin.workspace.create')}}" method="POST">
  @csrf
  <div>
    <div>
      <label for="">title</label>
      <input type="text" name="title">
    </div>
    <div>
      <label for="">description</label>
      <input type="text" name="description">
    </div>
    <div>
      <label for="">amount</label>
      <input type="number" name="amount">
    </div>
  </div>
  <button type="submit">submit</button>
  @if(session("message"))
    <div>{{session("message")}}</div>
  @endif
</form>
@include('footer')