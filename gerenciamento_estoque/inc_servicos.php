<!DOCTYPE html>
<html>
<head>
  <title>Consulta de CEP</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#cep').blur(function() {
        var cep = $(this).val();
        if (cep != '') {
          $.ajax({
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            dataType: 'json',
            beforeSend: function() {
              $('#loading').html('Consultando CEP...');
            },
            success: function(data) {
              if (!data.erro) {
                $('#endereco').val(data.logradouro);
                $('#bairro').val(data.bairro);
                $('#cidade').val(data.localidade);
                $('#estado').val(data.uf);
              } else {
                $('#loading').html('CEP não encontrado.');
              }
            },
            error: function() {
              $('#loading').html('Erro na consulta do CEP.');
            }
          });
        }
      });
    });
  </script>
</head>
<body>
  <h1>Consulta de CEP para envio de mercadorias.</h1>
  <label for="cep">CEP:</label>
  <input type="text" id="cep" name="cep">
  <br>
  <label for="endereco">Endereço:</label>
  <input type="text" id="endereco" name="endereco">
  <br>
  <label for="bairro">Bairro:</label>
  <input type="text" id="bairro" name="bairro">
  <br>
  <label for="cidade">Cidade:</label>
  <input type="text" id="cidade" name="cidade">
  <br>
  <label for="estado">Estado:</label>
  <input type="text" id="estado" name="estado">
  <br>
  <span id="loading"></span>
</body>
</html>