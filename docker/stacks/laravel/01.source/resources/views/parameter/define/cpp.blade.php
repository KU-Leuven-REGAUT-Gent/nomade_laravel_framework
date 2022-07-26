// PARAMETER DEFINES
@foreach($defines as $define)
#define {{$define['variable']}} {{$define['value']}}; // {{$define['description']}}
@foreach($define['options'] as $option)
#define {{$option['variable']}} {{$option['value']}}; // {{$option['description']}}
@endforeach
@endforeach
