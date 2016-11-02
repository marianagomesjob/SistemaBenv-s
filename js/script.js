$("#formulario_empresa").submit(function(){

    $.ajax({
        type: 'POST',
        url: "dados.php",
        data: $('#formulario_empresa').serialize(), 
        success: function(response) {
            //alert(response);
            window.location.href = '/benvs/empresa.php';
        },
        error: function(erro) {
             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
            alert("Erro no formulário! erro: "+erro);
        }
    });
    return false;
});

$("#formulario_cargo").submit(function(){

    $.ajax({
         type: 'POST',
         url: "dados_cargo.php",
         data: $('#formulario_cargo').serialize(), 
         success: function(response) {
            console.log(response);
            alert(response); 
            $("#commentList").append("Name:" + $("#name").val() + "<br/>comment:" + $("#body").val());
         },
        error: function() {
             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
            alert("Erro no formulário!");
        }
    });
    return false;
});

$("#formulario_departamento").submit(function(){

    $.ajax({
         type: 'POST',
         url: "dados_departamento.php",
         data: $('#formulario_departamento').serialize(), 
         success: function(response) {
            console.log(response);
            alert(response); 
            $("#commentList").append("Name:" + $("#name").val() + "<br/>comment:" + $("#body").val());
         },
        error: function() {
             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
            alert("Erro no formulário!");
        }
    });
    return false;
});

$("#formulario_ramo_atividade").submit(function(){

    $.ajax({
         type: 'POST',
         url: "dados_ramo_atividade.php",
         data: $('#formulario_ramo_atividade').serialize(), 
         success: function(response) {
            console.log(response);
            alert(response); 
            $("#commentList").append("Name:" + $("#name").val() + "<br/>comment:" + $("#body").val());
         },
        error: function() {
             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
            alert("Erro no formulário!");
        }
    });
    return false;
});