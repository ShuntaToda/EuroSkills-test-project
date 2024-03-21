@include('header')
<div>
  <h1>Workspace list</h1>
  <div>
    <a href="{{route("admin.workspace.create")}}">create</a>
    <table>
      <thead>
        <tr>
          <td>title</td>
          <td>description</td>
          <td></td>
        </tr>
      </thead>
      @foreach($workspaces as $workspace)
        <tr>
          <td>{{ $workspace->title }}</td>
          <td>{{ $workspace->description }}</td>
          <td><a href="{{route("admin.workspace.update", $workspace->id)}}">update</a></td>
          <td><a href="{{route("admin.token.list", $workspace->id)}}">token list</a></td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@include('footer')