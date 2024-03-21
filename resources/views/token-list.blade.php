@include('header')
<div>
  <h1>Token List</h1>
  <div>
    <a href="{{route("admin.token.create", $workspace_id)}}">create</a>
    <table>
      <thead>
        <tr>
          <td>title</td>
          <td>description</td>
          <td></td>
        </tr>
      </thead>
      @foreach($tokens as $token)
        <tr>
          <td>{{ $token->name }}</td>
          {{-- <td><a href="{{route("admin.token.update", $token->id)}}">update</a></td>
          <td><a href="{{route("admin.token.token-list")}}">token list</a></td> --}}
        </tr>
      @endforeach
    </table>
  </div>
</div>
@include('footer')