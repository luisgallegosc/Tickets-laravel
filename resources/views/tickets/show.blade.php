<h1>
    Ver un ticket
    <a href="{{ route('tickets.index')}}">volver</a>
</h1>
<form >
    
    ID: <input type = "text" value="{{$ticket -> id }}"/><br/>
    Nombres: <input type = "text" value="{{$ticket -> nombre }}"/><br/>
    <input type = "radio"{{$ticket->tipo_tramite == 'PLATAFORMA' ? 'checked':'' }}disabled/>PLATAFORMA
    <input type = "radio"{{$ticket->tipo_tramite == 'VENTANILLA' ? 'checked':'' }}disabled/>VENTANILLA <br/>
    Fecha: <input type = "text" value="{{$ticket -> fecha }}"/><br/>
    <input type = "checkbox"{{$ticket->estado == 1  ? 'checked':'' }}disabled/>Atendido<br/>
    
</form>
