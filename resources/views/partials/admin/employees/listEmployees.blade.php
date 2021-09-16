<div class="container__companies-employes">
    <div class="container__companies-employes__list">
        <div class="container__companies-employes__title">
            <h1>Lista</h1>
        </div>
        <div class="container__companies-employees__list">
            
            @if($message = Session::get('message'))
                <div class="success_alert">{{ $message }}</div>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Empresa</th>
                        <th>Editar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                        <tr>
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>{{ $datas->phone }}</td>
                            <td>{{ $datas->cpf }}</td>
                            <td>{{ $datas->company_id }}</td>
                            <td class="list__tbody-td">
                                <a href="{{ route('admin.employees.edit', $datas->id)}}"><i class="gg-pen"></i></a>
                                <a href="{{ route('admin.employees.delete', $datas->id)}}" onclick="return confirm('Você confirma que deseja deleta o funcionário {{ $datas->name }}?')"><i class="gg-trash"></i></a>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($data->hasPages())
        <div class="pagination-center">
            {{ $data->links("pagination::bootstrap-4") }}
        </div>
        @endif  
    </div>
</div>

