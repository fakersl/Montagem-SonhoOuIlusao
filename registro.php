<?php

if (isset($_POST['submit']))
{
  print_r($_POST['nome']);
  print_r($_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <!--JS-->
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NUNCA MEXA </title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div class="login-form shadow p-5">
              <div class="text-center mb-5">
                <!--<img src="" alt="Icon" class="icon">-->
                <h1 class="form-title">Registro</h1>
              </div>
              <form action="registro.php" novalidate>
                <div class="form-row">
                  <div class="form-group col-12">
                      <label for="username" class="form-label">Nome: <span class="text-danger">*</span></label>
                      <input type="text" name="nome" class="form-control" id="username" placeholder="Digite seu nome:" required>
                      <div class="invalid-feedback">
                        Ops, digite um nome válido!
                      </div>
                  </div>
                  <div class="form-group col-12">
                    <label for="cpf" class="form-label">CPF: </label>
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite seu CPF: ">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="email" class="form-label">E-mail: <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email:" required>
                    <div class="invalid-feedback">
                      Ops, digite um e-mail válido!
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                      <label for="inputAddress" class="form-label">Endereco: <span class="text-danger">*</span></label>
                      <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua Exemplo de Exemplo" required>
                      <div class="invalid-feedback">
                        Ops, digite um endereço válido!
                      </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12 col-md-6">
                      <label for="inputCity" class="form-label">Cidade: <span class="text-danger">*</span></label>
                      <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Bairro Exemplo">
                      <div class="invalid-feedback">
                        Ops, digite uma cidade válida!
                      </div>
                  </div>
                  <div class="form-group col-12 col-md-6">
                      <label for="inputState" name="cidade" class="form-label">Estado: <span class="text-danger">*</span></label>
                      <select id="inputState" class="form-control" required>
                          <option selected disabled value="">Escolha: </option>
                          <option value="SP">São Paulo</option>
                          <option value="PE">Pernambuco</option>
                          <option value="ES">Espírito Santo</option>
                          <option value="BA">Bahia</option>
                          <option value="SC">Santa Catarina</option>
                          <option value="AM">Amazonas</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor, escolha um estado válido!
                      </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="password" class="form-label">Senha: </label>
                    <input type="password" name="senha" class="form-control" id="password" placeholder="Digite sua senha:">
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block"">Registrar-se</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>