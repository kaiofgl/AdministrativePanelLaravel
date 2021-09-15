<div class="container__companies-employes">
    <div class="container__companies-employes__form">
        <div class="container__companies-employes__title">
            <h1>ADICIONAR FUNCIONARIO</h1>
        </div>
        <form method="POST" action="{{ route('admin.employees.add.do') }} " id="form__companies-employes">
            @csrf
            @if($message = Session::get('success'))
                <div class="success_alert">{{ $message }}</div>
            @endif

            @foreach($errors->all() as $error)
                <div class="error_alert">{{ $error }}</div>
            @endforeach

            <label for="name">Nome</label>
            <input type="name" name="name" id="name" value="{{ old('name') }}">

            <label for="email"email>E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">

            <label for="phone">Telefone</label>
            <input type="phone" name="phone" id="phone" value="{{ old('phone') }}" data-mask="(00) 00000-0000">
            
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" onblur="window.teste" value="{{ old('cpf') }}" data-mask="000.000.000-00">
            
            <!-- NAO CADASTRAR -->
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" value="{{ old('cep') }}" onblur="getCEPData(this.value);" data-mask="00000-000">

            <label for="address">Endereço</label>
            <input type="text" name="address" id="address" disabled value="{{ old('address') }}">

            <label for="neighborhood">Bairro</label>
            <input type="text" name="neighborhood" id="neighborhood" disabled value="{{ old('neighborhood') }}">

            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" disabled value="{{ old('city') }}">

            <label for="state">Estado</label>
            <input type="text" name="state" id="state" disabled value="{{ old('state') }}">
            <!-- NAO CADASTRAR -->
            
            <label for="companies">Empresa</label>
            <select name="companies"" id="companies">
            <option value="0"> Selecione uma empresa</option>
                @foreach($data->all() as $datas)
                    <option value="{{ $datas->id }}" >{{ $datas->name }}</option>
                @endforeach
            </select>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>