@extends('layouts.app')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">書籍一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">書籍名(name)</th>
        <th class="text-center">価格(price)</th>
        <th class="text-center">著者(author)</th>
        <th class="text-center"></th>
        <th class="text-center"></th>
      </tr>
      @foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->author }}</td>
        

          
          @if( ( $book->user_id ) === ( Auth::user()->id ) )
          <td>
          
            <button  class="btn btn-xs btn-danger" ><a href="/book/{{ $book->id }}/edit"><div>編集</div></a></button>
          </td>
          <td>
            <form action="/book/{{ $book->id }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span><div>削除</div></button>
            </form>
          </td>

          @else
          <td class="text-center">編集</td>
          <td class="text-center">削除</td>
          @endif
          
          
      </tr>
      @endforeach
    </table>
    <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection
