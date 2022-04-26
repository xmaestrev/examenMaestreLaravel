@include("layouts.header")

    <div class="container-form-producto">

      @if($errors->any())
      <h4 class="error">{{$errors->first()}}</h4>
      @endif

        <form class=form-producto method="POST" action="{{route("anadir-casal-bd")}}" enctype="multipart/form-data">
          @csrf
                  <label for="fname">Nom</label>
                  <input type="text" id="fname" name="nom" >
              
                  <label for="lname">Data Inici</label>
                  <input type="date" id="lname" name="data_inici" >
    
                  <label for="lname">Data final</label>
                  <input type="date" id="lname" name="data_final" >

                  <label for="lname">Num places</label>
                  <input type="number" id="lname" name="num_places" >
              
                  <label for="categorias">Ciutat</label>
                  <select id="categorias" name="id_ciutat">

                    @foreach ($ciutats as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach

                  </select>


                <button class="crear-producto" type="submit">Crear Casal</button>
        </form>


</div>

@include("layouts.footer")