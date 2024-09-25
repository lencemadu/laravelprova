
@foreach ($vendedors as $vendedor)
  <div>
    {{$vendedor->nome}} 
    {{$vendedor->matricula}} 
    {{$vendedor->comisao}}
  </div>
@endforeach