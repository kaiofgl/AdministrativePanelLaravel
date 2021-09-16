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
                        <th>Logotipo</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Edição/Exclusão</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                        
                        <tr>
                            <td><img class="logo-companies" src="https://dummyimage.com/600x400/949494/0011ff" alt="Imagem de teste"></td>
                            <td>{{ $datas->name }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>{{ $datas->website_url }}</td>
                            <td class="list__tbody-td">
                                <a href="{{ route('admin.companies.edit', $datas->id)}}"><i class="gg-pen"></i></a>
                                <a href="{{ route('admin.companies.delete', $datas->id)}}" onclick="return confirm('Você confirma que deseja deleta a empresa {{ $datas->name }}?')"><i class="gg-trash"></i></a>
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

