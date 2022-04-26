@include("layouts.header")

    <div class="container-form-producto">

      @if($errors->any())
      <h4 class="error">{{$errors->first()}}</h4>
      @endif

        <form class=form-producto method="POST" action="{{route("editar-casal-bd")}}" enctype="multipart/form-data">
          @csrf
                  <input type="hidden" value="{{$casal->id}}" name="id_casal">

                  <label for="fname">Nom</label>
                  <input type="text" id="fname" name="nom" value="{{$casal->nom}}">
              
                  <label for="lname">Data Inici</label>
                  <input type="date" id="lname" name="data_inici" value="{{$casal->data_inici}}">
    
                  <label for="lname">Data final</label>
                  <input type="date" id="lname" name="data_final" value="{{$casal->data_final}}">

                  <label for="lname">Num places</label>
                  <input type="number" id="lname" name="num_places" value="{{$casal->n_places}}">
              
                  <label for="categorias">Ciutat</label>
                  <select id="categorias" name="id_ciutat">

                    @foreach ($ciutats as $item)
                        @if ($casal->id_ciutats == $item->id)
                        <option value="{{$item->id}}" selected>{{$item->nom}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endif
                        
                    @endforeach

                  </select>


                <button class="crear-producto" type="submit">Editar Casal</button>
        </form>


</div>

@include("layouts.footer")