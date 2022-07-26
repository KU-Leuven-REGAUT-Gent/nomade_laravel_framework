// PARAMETER DEFINES
@foreach($defines as $define)
public static final short {{$define['variable']}} = {{$define['value']}}; // {{$define['description']}}
@foreach($define['options'] as $option)
public static final float {{$option['variable']}} = {{$option['value']}}; // {{$option['description']}}
@endforeach
@endforeach
