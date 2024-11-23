<div class="contact-right wow fadeInRight">
    <h2>Envie uma mensagem</h2>
    <form action="{{ route('envia.contato') }}" class="contact-form" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome" name="nomecompleto" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Telefone" name="telefone">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Mensagem" name="mensagem" required></textarea>
        </div>
        <button type="submit" data-text="Enviar" class="button button-default"><span>Enviar</span></button>
    </form>
</div>
