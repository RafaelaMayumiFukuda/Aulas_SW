$(document).ready(function(){

    $( "#btnome" ).on( "click", function()  {
        var nome = $("#inputNome").val();
        alert("Nome selecionado: " + nome);
    })
    $( "#btidade" ).on( "click", function()  {
        var idade = $("#txtidade").val();
        alert("Idade selecionado: " + idade)
    })
    $( "#btgenero" ).on( "click", function()  {
        var genero = $("#cmb").val();
                if (genero) {
                    alert("Gênero selecionado: " + genero);
                } else {
                    alert("Por favor, selecione um gênero.");
                }
    })
    $( "#btrg" ).on( "click", function()  {
        var rg = $("#txtrg").val();
        alert("RG selecionado: " + rg);
    })
    $( "#btcpf" ).on( "click", function()  {
        var cpf = $("#txtcpf").val();
        alert("CPF selecionado: " + cpf);
    })

    $( "#btcadastro" ).on( "click", function()  {
        var nome = $("#inputNome").val();
        var idade = $("#txtidade").val();
        var genero = $("#cmb").val();
        var rg = $("#txtrg").val();
        var cpf = $("#txtcpf").val();
        if (nome && idade && genero && rg && cpf) {
            alert("Cadastrado com sucesso!\nNome: " + nome + "\nIdade: " + idade + "\nGênero: " + genero + "\nRG: " + rg + "\nCPF: " + cpf);
        } else {
           
            alert("Por favor, preencha todos os campos antes de cadastrar.");
        }
    })
});