@include('header')

<h1>edit workspace</h1>
<form action="{{route('admin.workspace.update', $workspace->id)}}" method="post">
  @csrf
  <div>
    <div>
      <label for="">title</label>
      <input type="text" name="title" value="{{$workspace->title}}">
    </div>
    <div>
      <label for="">description</label>
      <input type="text" name="description" value="{{$workspace->description}}">
    </div>
    <div>
      <label for="">amount</label>
      <input type="number" name="amount"  value="{{$workspace->amount}}">
    </div>

  </div>
  <button type="submit">submit</button>
  @if(session("message"))
    <div>{{session("message")}}</div>
  @endif
</form>
@include('footer')