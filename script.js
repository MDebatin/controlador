
// Função para redirecionar o usuário com base na seleção do perfil
function selectProfile(profileName) {
    // Crie um formulário dinâmico
    var form = document.createElement('form');
    form.method = 'post'; // Usar o método POST
    form.action = 'principal.php'; // Defina a ação para a página desejada

    // Crie um campo de entrada oculto para o perfil selecionado
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'user';
    input.value = profileName; // Valor do perfil selecionado

    // Adicione o campo de entrada ao formulário
    form.appendChild(input);

    // Adicione o formulário à página e envie-o
    document.body.appendChild(form);
    form.submit();
}

// Adicione eventos de clique aos perfis para chamar a função selectProfile com o perfil correto
document.querySelector('.user-one').addEventListener('click', function () {
    selectProfile('Michael');
});

document.querySelector('.user-two').addEventListener('click', function () {
    selectProfile('Marino');
});

document.querySelector('.user-three').addEventListener('click', function () {
    selectProfile('Mayara');
});
