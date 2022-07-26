@can('edit', $class)
    <form action="{{$url}}" method="post">
        @csrf
        <a class="icon" >
            <button class="btn btn-primary-outline" type="submit">
                <i class="fa fa-file-export h4"></i>
            </button>
        </a>
    </form>
  
@endcan