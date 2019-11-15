
        <?php $request = request(); ?>

        @foreach($clients as $client)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.ndebi-tech-clients.destroy', $client->id]]) !!}
                        
                            <a href="{{ route('backend.ndebi-tech-clients.edit', $client->id) }}" class="btn btn-xs btn-default">
                                <i class="fa fa-edit"></i>
                            </a>
                        

                        
                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        
                    {!! Form::close() !!}
                </td>
                <td>{{ $client->logo }}</td>
                <td>{{ $client->name }}</td>
            </tr>

        @endforeach


