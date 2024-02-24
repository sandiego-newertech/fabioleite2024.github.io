function enviarWhatsapp() {
    var nome = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mensagem = document.getElementById('messagem').value;

    // Formatar a mensagem com os dados do formulário
    var mensagemFormatada = encodeURIComponent("Olá, meu nome é " + nome + " \nEmail: " + email + "\n" + mensagem);

    // Criar o link do WhatsApp
    var linkWhatsapp = "https://wa.me/5511940382765?text=" + mensagemFormatada;
    //https://wa.me/5511940382765?text=teste
    // Redirecionar para o link do WhatsApp
    window.location.href = linkWhatsapp;

    // Limpar os campos do formulário
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('messagem').value = '';
}
