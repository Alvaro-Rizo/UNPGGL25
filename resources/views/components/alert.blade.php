@php
 $class="";   

switch ($type) {
    case 'success':
       $class="alert alert-success";
        break;
         case 'warning':
       $class="alert alert-warning";
        break;
     case 'error':
       $class="alert alert-error";
        break;
     case 'info':
       $class="alert alert-info";
        break;
    
    default:
        $class="alert alert-primary";
        break;
}

@endphp


<div class="{{$class}}" role="alert">
    <h1>{{$titulo}}</h1>
    <span> {{$contenido}} </span>
</div>

{{--$class="";
 Aquí se muestra el componente de alerta 
@switch($type)
    @case('success')
        <div class="alert alert-success" role="alert">
 <h1> {{$titulo}}</h1>
 <span>{{$contenido}} </span>
</div>
        @break
    @case('warning')
                <div class="alert alert-warning" role="alert">
 <h1> {{$titulo}}</h1>
 <span>{{$contenido}} </span>
</div>
        @break
        @case('error')
                       <div class="alert alert-danger" role="alert">
 <h1> {{$titulo}}</h1>
 <span>{{$contenido}} </span>
</div>
        @break
        @case('info')
                       <div class="alert alert-info" role="alert">
 <h1> {{$titulo}}</h1>
 <span>{{$contenido}} </span>
</div>
        @break

    @default
        
@endswitch
--}}