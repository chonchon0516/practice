@extends('layouts.layout')

@section('title','Finish')

@section('main')
    
<main class="finish">
  <form action="testform" method="post">
        @csrf
    <h1>送信完了しました</h1>
    <p>ありがとうございます</p>
    <div class="button-submit">
      <button class="button" type="submit">戻る</button>
    </div>
  </form>
</main>   
@endsection