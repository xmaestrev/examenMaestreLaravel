@include('layouts.header')

<div class="inici-container">

    <h2>CASALS D'ESTIU</h2>
    <br>
    @if($errors->any())
    <h4 class="error">{{$errors->first()}}</h4>
    @endif
    <table style="width:80%">
        <tr>
            <th>Nom</th>
            <th>Data_inici</th>
            <th>Data_final</th>
            <th>Num places</th>
            <th>Ciutat</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
            @foreach ($casals as $casal)

                <tr>
                    <td>{{$casal->nom}}</td>
                    <td>{{$casal->data_inici}}</td>
                    <td>{{$casal->data_final}}</td>
                    <td>{{$casal->n_places}}</td>

                    @foreach ($ciutats as $ciutat)
                        @if ($ciutat->id == $casal->id_ciutats)
                            <td>{{$ciutat->nom}}</td>
                        @endif
                    @endforeach

                    <td>

                        <form action="{{route("editar-casal")}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$casal->id}}" name="id_casal">
                            <button type="submit">EDITAR</button>
                        </form>

                    </td>

                    <td>

                        <form action="{{route("eliminar-casal")}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$casal->id}}" name="id_casal">
                            <button type="submit">ELIMINAR</button>
                        </form>

                    </td>


                </tr>
                
            @endforeach

    </table>

</div>



@include("layouts.footer")