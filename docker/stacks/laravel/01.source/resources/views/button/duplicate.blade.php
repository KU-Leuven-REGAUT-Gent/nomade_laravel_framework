@can('duplicate', $class)
    <form action="{{$url}}" method="POST">
        @csrf
        <button class="btn btn-primary-outline" type="submit"><i class="fa fa-copy h4"></i></button>
    </form>
@endcan