<h1>
    Lista de tickets
    <a href="{{ route('tickets.create')}}">Nuevo ticket</a>
</h1>

@include('partials.info')
<table border = "1" >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->nombre}}</td>
                <td>{{$ticket->tipo_tramite}}</td>
                <td>{{$ticket->fecha}}</td>
                <td>{{$ticket->estado}}</td>
                <td>
                    <a title="ver" href="{{ route('tickets.show',$ticket)}}">
                        VER
                    </a>
                    
                    <form method="POST" action="{{ route('tickets.destroy',$ticket)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">ELIMINAR</button>
                        
                    </form>
                    <a title="Editar" href="{{ route('tickets.edit',$ticket)}}">
                        EDITAR
                    </a>

                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Operaciones</th>
             

        </tr>
    </tfoot>
</table>