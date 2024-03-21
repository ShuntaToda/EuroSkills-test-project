@include('header')
<div>
  <h1>Token complete</h1>
  <div>
    <a href="{{route("admin.token.list", $workspace_id)}}">token list</a>
    <table>
      <thead>
        <tr>
          <td>name</td>
          <td>token</td>
          <td></td>
        </tr>
      </thead>
      <tr>
        <td>{{ $token->name }}</td>
        <td>{{ $token->token }}</td>
      </tr>
    </table>
  </div>
</div>
@include('footer')