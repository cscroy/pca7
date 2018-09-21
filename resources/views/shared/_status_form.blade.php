<form action="{{ route('statuses.store')  }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="3" placeholder="你有什么新鲜的故事" name="content">{{ old('content') ?: "" }}</textarea>

    <button class="btn btn-primary pull-right" type="submit">发布</button>
</form>