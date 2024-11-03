<div class="table-responsive">
    <table class="table" id="produitees-table">
        <thead>
        <tr>
            <th>Nom</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Date</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produitees as $produitees)
            <tr>
                <td>{{ $produitees->nom }}</td>
            <td>{{ $produitees->prix }}</td>
            <td>{{ $produitees->description }}</td>
            <td>{{ $produitees->date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['produitees.destroy', $produitees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produitees.show', [$produitees->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('produitees.edit', [$produitees->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
