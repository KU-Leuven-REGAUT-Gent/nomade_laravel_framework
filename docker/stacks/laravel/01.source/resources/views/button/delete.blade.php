@can('delete', $class)
    <form action="{{$url}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary-outline" onclick="return confirm('Are you sure?')"  type="submit"><i class="fa fa-trash-alt h4"></i></button>
    </form>
@endcan