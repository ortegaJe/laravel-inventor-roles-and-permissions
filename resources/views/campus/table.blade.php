<!--<div class="table-responsive">
    <table class="table table-bordered text-center" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campus as $campu)
            <tr>
                <td>{{ $campu->campu_name }}</td>
                <td>
                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>-->
@include('layouts.datatables_css')

<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>created_at</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($campus as $campu)
            <td><i class="fa fa-building text-aqua"></i> {{ $campu->campu_name }}</td>
            <td> {{ $campu->created_at }}</td>
            <td class="text-center">
                <form action="{{ route('campus.destroy', $campu->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@push('js')
@endpush
<!-- /.box-body -->