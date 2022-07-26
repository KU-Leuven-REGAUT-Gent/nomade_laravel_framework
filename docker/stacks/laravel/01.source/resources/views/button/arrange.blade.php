@can('arrange', $class)
    <form action="{{$url}}/up" method="POST">
        @csrf
        <button class="btn btn-primary-outline" type="submit"><i class="fa fa-sort-up h4"></i></button>
    </form>
    <form action="{{$url}}/down" method="POST">
        @csrf
        <button class="btn btn-primary-outline" type="submit"><i class="fa fa-sort-down h4"></i></button>
    </form>
@endcan