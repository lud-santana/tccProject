<div class="login-container">
    <!-- Left image side -->
    <div class="login-image">
        <img src="{{asset('assets/imagens/logo-square.png')}}" style="width: 150px;" alt="login illustration">
    </div>

    <!-- Right form side -->
    <div class="login-form">
        <h2>Cadastro</h2>
        <form action="{{ route('storeCadastro') }}" method="POST">
            @csrf
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="inputnome" class="form-label">Nome</label>
                <input type="text" name="name" id="inputnome" class="form-control" placeholder="Nome" required="" autofocus="">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
            </div>
            <button type="submit" class="btn btn-primary mb-3">cadastrar</button>

            <div class="d-flex justify-content-center">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</div>