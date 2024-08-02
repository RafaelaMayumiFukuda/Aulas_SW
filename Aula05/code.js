$(document).ready(function(){

    $( "#btnome" ).on( "click", function()  {
        var nome = $("#txtNome").val();
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
    $( "#btestadocvl" ).on( "click", function()  {
        var estadocvl = $("#cvl").val();
                if (estadocvl) {
                    alert("Estado selecionado: " + estadocvl);
                } else {
                    alert("Por favor, selecione um estado.");
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
    $( "#bttell" ).on( "click", function()  {
        var tell = $("#txtTell").val();
        alert("Telefone selecionado: " + tell);
    })
    $( "#btcell" ).on( "click", function()  {
        var cell = $("#txtCell").val();
        alert("CPF selecionado: " + cell);
    })
    $( "#btemail" ).on( "click", function()  {
        var email = $("#txtEmail").val();
        alert("E-mail selecionado: " + email);
    })
    $( "#btnasc" ).on( "click", function()  {
        var nasc = $("#txtnasc").val();
        alert("Data de Nascimento selecionado: " + nasc);
    })

    $( "#btcadastro" ).on( "click", function()  {
        var nome = $("#txtNome").val();
        var idade = $("#txtidade").val();
        var genero = $("#cmb").val();
        var rg = $("#txtrg").val();
        var cpf = $("#txtcpf").val();
        var estadocvl = $("#cvl").val();
        var tell = $("#txtTell").val();
        var cell = $("#txtCell").val();
        var email = $("#txtEmail").val();
        var nasc = $("#txtnasc").val();
        if (nome && idade && genero && rg && cpf && estadocvl && tell && cell && email && nasc) {
            alert("Cadastrado com sucesso!\nNome: " + nome + "\nIdade: " + idade + "\nNascimento: "+ nasc +"\nGênero: " + genero + "\nRG: " + rg + "\nCPF: " + cpf + "\nEstado Civil: " + estadocvl + "\nTelefone: " + tell + "\nCelular: " + cell + "\nEmail: " + email );
        } else {
           
            alert("Por favor, preencha todos os campos antes de cadastrar.");
        }
    })
});