<div class="container__companies-employes">
    <div class="container__companies-employes__form">
        <div class="container__companies-employes__title">
            <h1>ADICIONAR EMPRESAS</h1>
        </div>
        <form method="POST" action="{{ route('admin.companies.add.do') }}" id="form__companies-employes" enctype="multipart/form-data"> 
            @csrf

            @if($message = Session::get('success'))
                <div class="success_alert">{{ $message }}</div>
            @endif

            @foreach($errors->all() as $error)
                <div class="error_alert">{{ $error }}</div>
            @endforeach
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="website">Website</label>
            <input type="text" name="website" id="website">
            @if($message = Session::get('error_file'))
                <div class="success_alert">{{ $message }}</div>
            @endif
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo">
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>