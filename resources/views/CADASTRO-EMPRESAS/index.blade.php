<!-- FORMULÁRIO - CADASTRO EMPRESAS -->
<div class="col-md-10 mx-auto col-lg-5">
    <form class="form p-5 p-md-5 rounded-3 was-validated">
        <div class="text-center">
            <a href="index.html"><img src="assets/imagens/logo-square.png" alt="Logo" class="mb-3 logo"
                    style="max-width: 15%; height: auto;"></a>
            <p class="form-title">Teste gratuitamente e faça seu negócio crescer.</p>
        </div>

        <h3>Dados de Pessoais</h3>

        <div class="col-12 input-container">
            <label for="tipo_pessoa">Você quer ser um fornecedor?</label>
            <select class="form-select" id="tipo_pessoa" name="tipo_pessoa" required>
            <option value="" disabled selected>Selecione</option>
               @foreach($tipoPessoa as $value)
               <option value="{{$value->id}}">{{$value->nome}}</option>
               @endforeach
            </select>
        </div>

        <div>
            <!-- NOME PESSOA FÍSICA -->
            <div class="input-container">
                <label for="nome-empresa">Nome Completo</label>
                <input type="text" id="nome-pessoa" name="nome-pessoa"
                    placeholder="Digite o seu nome completo" required>
            </div>

             <!-- E-MAIL -->
             <div class="input-container">
                <label for="email">E-mail</label>
                <input type="email" placeholder="email@email.com" required>
            </div>

            <div class="row">
                <!-- TELEFONE -->
                <div class="col-6 input-container">
                    <label for="telefone">Telefone</label>
                    <input type="tel" placeholder="+55 (XX) XXXX-XXXX" required>
                </div>

                <!-- CEP -->
                <div class="col-6 input-container">
                    <label for="cep">CEP</label>
                    <input type="text" placeholder="XXXXX-XXX" required>
                </div>
            </div>

            <!-- ESTADO -->
            <div class="row">
                <div class="col-6 input-container">
                    <label for="estado">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="" disabled selected>Selecione um estado</option>
                        <option value="RJ">Rio de Janeiro</option>
                    </select>
                </div>

                <!-- CIDADE -->
                <div class="col-6 input-container">
                    <label for="cidade">Cidade</label>
                    <select class="form-select" id="cidade" name="cidade" required>
                        <option value="" disabled selected>Selecione uma cidade</option>
                        <option value="Angra dos Reis">Angra dos Reis</option>
                        <option value="Aperibé">Aperibé</option>
                        <option value="Araruama">Araruama</option>
                        <option value="Areal">Areal</option>
                        <option value="Barra do Piraí">Barra do Piraí</option>
                        <option value="Barra Mansa">Barra Mansa</option>
                        <option value="Belford Roxo">Belford Roxo</option>
                        <option value="Bom Jardim">Bom Jardim</option>
                        <option value="Bom Jesus do Itabapoana">Bom Jesus do Itabapoana</option>
                        <option value="Cabo Frio">Cabo Frio</option>
                        <option value="Cachoeiras de Macacu">Cachoeiras de Macacu</option>
                        <option value="Cambuci">Cambuci</option>
                        <option value="Campos dos Goytacazes">Campos dos Goytacazes</option>
                        <option value="Cantagalo">Cantagalo</option>
                        <option value="Carapebus">Carapebus</option>
                        <option value="Cardoso Moreira">Cardoso Moreira</option>
                        <option value="Carmo">Carmo</option>
                        <option value="Casimiro de Abreu">Casimiro de Abreu</option>
                        <option value="Conceição de Macabu">Conceição de Macabu</option>
                        <option value="Cordeiro">Cordeiro</option>
                        <option value="Duque de Caxias">Duque de Caxias</option>
                        <option value="Engenheiro Paulo de Frontin">Engenheiro Paulo de Frontin</option>
                        <option value="Guapimirim">Guapimirim</option>
                        <option value="Iguaba Grande">Iguaba Grande</option>
                        <option value="Itaboraí">Itaboraí</option>
                        <option value="Itaguai">Itaguai</option>
                        <option value="Itaperuna">Itaperuna</option>
                        <option value="Laje do Muriaé">Laje do Muriaé</option>
                        <option value="Macaé">Macaé</option>
                        <option value="Macuco">Macuco</option>
                        <option value="Magé">Magé</option>
                        <option value="Mangaratiba">Mangaratiba</option>
                        <option value="Maricá">Maricá</option>
                        <option value="Mendes">Mendes</option>
                        <option value="Mesquita">Mesquita</option>
                        <option value="Nilópolis">Nilópolis</option>
                        <option value="Niterói">Niterói</option>
                        <option value="Nova Friburgo">Nova Friburgo</option>
                        <option value="Nova Iguaçu">Nova Iguaçu</option>
                        <option value="Paracambi">Paracambi</option>
                        <option value="Paraíba do Sul">Paraíba do Sul</option>
                        <option value="Paraty">Paraty</option>
                        <option value="Petrópolis">Petrópolis</option>
                        <option value="Pinheiral">Pinheiral</option>
                        <option value="Piraí">Piraí</option>
                        <option value="Porciúncula">Porciúncula</option>
                        <option value="Quatis">Quatis</option>
                        <option value="Queimados">Queimados</option>
                        <option value="Rio Bonito">Rio Bonito</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Santa Maria Madalena">Santa Maria Madalena</option>
                        <option value="Santo Antônio de Pádua">Santo Antônio de Pádua</option>
                        <option value="São Fidélis">São Fidélis</option>
                        <option value="São Gonçalo">São Gonçalo</option>
                        <option value="São João de Meriti">São João de Meriti</option>
                        <option value="São José de Ubá">São José de Ubá</option>
                        <option value="São Sebastião do Alto">São Sebastião do Alto</option>
                        <option value="Sapucaia">Sapucaia</option>
                        <option value="Tanguá">Tanguá</option>
                        <option value="Três Rios">Três Rios</option>
                        <option value="Valença">Valença</option>
                        <option value="Vassouras">Vassouras</option>
                        <option value="Volta Redonda">Volta Redonda</option>
                    </select>
                </div>
            </div>

            <!-- ENDEREÇO -->
            <div class="row">
                <div class="col-6 input-container">
                    <label for="setor">Endereço</label>
                    <select class="form-select" id="setor" name="setor" required>
                        <option value="" disabled selected>Selecione um setor</option>
                        <option value="Eventos e Festas">Eventos e Festas</option>
                        <option value="Buffet">Buffet</option>
                        <option value="Decoração">Decoração</option>
                        <option value="Sonorização">Sonorização</option>
                        <option value="Fotografia">Fotografia</option>
                        <option value="Filmagem">Filmagem</option>
                        <option value="Locação de Espaços">Locação de Espaços</option>
                        <option value="Transporte">Transporte</option>
                        <option value="Segurança">Segurança</option>
                        <option value="Assessoria de Eventos">Assessoria de Eventos</option>
                    </select>
                </div>

                <!-- NÚMERO -->
                <div class="col-6 input-container">
                    <label for="atividade">Número</label>
                    <select class="form-select" id="atividade" name="atividade" required>
                        <option value="" disabled selected>Selecione uma atividade</option>
                        <option value="Casamentos">Casamentos</option>
                        <option value="Aniversários">Aniversários</option>
                        <option value="Eventos Corporativos">Eventos Corporativos</option>
                        <option value="Formaturas">Formaturas</option>
                        <option value="Festas Infantis">Festas Infantis</option>
                        <option value="Conferências">Conferências</option>
                        <option value="Shows">Shows</option>
                        <option value="Feiras">Feiras</option>
                        <option value="Eventos Temáticos">Eventos Temáticos</option>
                    </select>
                </div>

                <!-- COMPLEMENTO -->
             <div class="input-container">
                <label for="email">Complemento (opcional)</label>
                <input type="email" placeholder="Digite o complemento do seu endereço">
            </div>
            </div>

            <h3>Dados de Acesso</h3>

            <!-- USUÁRIO -->
            <div class="input-container">
                <label for="usuario">Usuário</label>
                <input type="text" placeholder="Nome de Usuário" required>
                <div class="form-subtitle">O nome de Usuário deve ter pelo menos 5 caracteres.</div>
            </div>

            <!-- SENHA -->
            <div class="input-container">
                <label for="senha">Senha</label>
                <input type="password" placeholder="Senha" required>
                <div class="form-subtitle">Sua senha deve ter entre 8 e 48 caracteres, incluir pelo menos uma letra
                    minúscula, uma letra
                    maiúscula e um número, e não pode conter espaços.</div>
            </div>

            <!-- ACEITE DE TERMOS -->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                <label for="validationFormCheck1">
                    Aceito as <a href="#" target="_blank" rel="noopener noreferrer">condições de uso</a> e a <a href="#"
                        target="_blank" rel="noopener noreferrer">Aviso de Privacidade</a>
                </label>
            </div>

            <!-- CAPTCHA -->
            <div class="mb-3">
                <label for="captcha">Verificação CAPTCHA</label>
                <!-- Adicionar código CAPTCHA aqui -->
            </div>

            <!-- BOTÃO DE CRIAÇÃO DE CONTA -->
            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" class="btn btn-primary botao-empresa">
                    Criar Conta
                </button>
            </div>
        </div>
    </form>
</div>