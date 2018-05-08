@extends('layouts.backend-skeleton')

@section('content')
      
    <div class="jumbotron">
        <h1 class="display-1 text-center">Elenco Iscrizioni</h1>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-dark">
            		<thead>
                		<tr>
                            <th scope="col">ID</th>
                    		<th scope="col">Nome</th>
                    		<th scope="col">Cognome</th>
                    		<th scope="col">Nascita</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">FIT</th>
                            <th scope="col">Club</th>
                            <th scope="col">Classifica</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Tipologia</th>
                            <th scope="col">Note</th>
                    		<th scope="col">Attività</th>
                		</tr>
            		</thead>
            
            		<tbody>
            			@foreach($subscribers as $subscriber)
                			<tr>
                                <td>{{ $subscriber->id }}</td>
                    			<td>{{ $subscriber->name }}</td>
                    			<td>{{ $subscriber->surname }}</td>
                                <td>{{ $subscriber->birthday }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>{{ $subscriber->phone }}</td>
                                <td>{{ $subscriber->fit }}</td>
                                <td>{{ $subscriber->club }}</td>
                                <td>{{ $subscriber->score->name }}</td>
                                <td>{{ $subscriber->category->short }}</td>
                                <td>{{ $subscriber->type->short }}</td>
                                <td>{{ $subscriber->note }}</td>
                    			
                                <td>
                                    <form action="{{ route('admin.subscribers.delete', $subscriber->id) }}" method="post" enctype="multipart/form-data">

                                        {{ csrf_field() }}

                                        {{-- method_field('DELETE') --}}

                                        <button type="submit" class="btn btn-small btn-danger" name="submit">Elimina</button>

                                    </form>
                    			</td>
                                 
                			</tr>
            			@endforeach

            		</tbody>
        		</table>
           </div>
        </div>
    </div>
@endsection