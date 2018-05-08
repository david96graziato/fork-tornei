<div class="table-responsive-lg">
    <table class="table table-hover table-dark">
    	<thead>
    		<tr>
        		<th scope="col">Titolo</th>
        		<th scope="col">Descrizione</th>
        		<th scope="col">Dimensione</th>
        		<th scope="col">Foto</th>
                <th scope="col">Attività</th>
    		</tr>
    	</thead>

    	<tbody>
    		@foreach($photos as $photo)
    			<tr>
        			<td>{{ $photo->title }}</td>
        			<td>{{ $photo->description }}</td>
        			<td>{{ $photo->formatted_size }}</td>
                    <td><img height="150" width="300" src="{{ $photo->url() }}"></td>
        			<td>
                        @if ($photo->protected)
                            <button disabled type="submit" class="btn btn-small btn-info" name="submit">Modifica</button>
                        @else
                            <form action="{{ route('admin.photos.edit', $photo->id) }}" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-small btn-info" name="submit">Modifica</button>
                            </form>
                        @endif
                    </td>

                    <td>
                        @if ($photo->protected)
                            <button disabled type="submit" class="btn btn-small btn-danger" name="submit">Elimina</button>
                        @else
                            <form action="{{ route('admin.photos.delete', $photo->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-small btn-danger" name="submit">Elimina</button>
                            </form>
                        @endif

                    </td>
    			</tr>
    		@endforeach

    	</tbody>
    </table>
</div>