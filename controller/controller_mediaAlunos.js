$(function(){

    $("#btn-calc").click(function() {

       var nota1 = $("#nota1").val();
       var nota2 = $("#nota2").val();
       console.log(nota1 + " " + nota2);

        $.ajax({
            type: "POST",
            url: "../model/model_mediaAlunos.php",
            data: "nota1=" + nota1 +
            "&nota2=" + nota2,

            success: function(msg){
               
               var msg = msg;
               var array = msg.split(" ");
               console.log(array);
               
               $("#result-media").val(array[0]);
               $("#status-aluno").val(array[1]);
            },
    
        })

    });
});