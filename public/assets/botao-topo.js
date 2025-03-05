document.addEventListener('DOMContentLoaded', function () {
    var scrollTopBtn = document.getElementById('scrollTopBtn');

    // Função que verifica a posição de rolagem e exibe ou oculta o botão
    function checkScrollPosition() {
        if (window.scrollY > 80) {
            scrollTopBtn.classList.add('show'); // Mostra o botão quando rolar mais de 80px
        } else {
            scrollTopBtn.classList.remove('show'); // Esconde o botão se estiver no topo
        }
    }

    // Executa a função de verificação ao rolar a página
    window.addEventListener('scroll', checkScrollPosition);

    // Adiciona comportamento de rolagem suave ao clicar no botão
    scrollTopBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o comportamento padrão do clique
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Rola suavemente para o topo
        });
    })
});