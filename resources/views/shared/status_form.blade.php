<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared.errors')
  {{ csrf_field() }}
  <textarea class="form-control" name="content" rows="3" placeholder="聊聊二次元">{{ old('content') }}</textarea>
  <button class="btn btn-primary pull-right" type="submit">发布</button>
</form>
