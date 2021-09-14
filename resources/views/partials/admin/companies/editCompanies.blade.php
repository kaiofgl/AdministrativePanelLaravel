<div class="container__companies-employes">
    <div class="container__companies-employes__form">
        <div class="container__companies-employes__title">
            <h1>EDIIITTT DE EMPRESA EMPRESAS</h1>
        </div>
        <form method="POST" action="{{ route('admin.companies.edit.do') }}" id="form__companies-employes" enctype="multipart/form-data"> 
            @csrf

            @if($message = Session::get('success'))
                <div class="success_alert">{{ $message }}</div>
            @endif
                
            @foreach($errors->all() as $error)
                <div class="error_alert">{{ $error }}</div>
            @endforeach
            <input type="hidden"  name="id"  value="{{ $data->id }}"/>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ old('name', $data->name) }}">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email', $data->email) }}">

            <label for="website">Website</label>
            <input type="text" name="website" id="website" value="{{ old('website', $data->website_url) }}">
            @if($message = Session::get('error_file'))
                <div class="success_alert">{{ $message }}</div>
            @endif
            <img src=" {{ asset('/storage/'.$data->logo_path) }}" alt="{{ $data->name }}">
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo">

            
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>