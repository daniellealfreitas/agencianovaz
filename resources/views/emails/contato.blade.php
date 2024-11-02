<h1>Você recebeu uma nova mensagem de contato!</h1>

<p><strong>Nome:</strong> {{ $dados['nomecompleto'] }}</p>
<p><strong>Telefone:</strong> {{ $dados['telefone'] ?? 'Não informado' }}</p>
<p><strong>Email:</strong> {{ $dados['email'] }}</p>
<p><strong>Mensagem:</strong> {{ $dados['mensagem'] }}</p>
