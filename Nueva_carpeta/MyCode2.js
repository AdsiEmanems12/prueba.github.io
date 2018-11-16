$(document).ready(()=>{
    $("#enviar").on("click",(e)=>{
        e.preventDefault();
        $esp = $("#esp").val();
        $ing = $("#ing").val();

        $.get(`./crear.php?esp=${$esp}&ing=${$ing}`,(data)=>{
            if(data=="vacio"){
                alert("No se pudo crear la palabra");
                $("#esp").val("");
                $("#ing").val("");
            }else{
                alert("Se creo la palabra");
                $("#esp").val("");
                $("#ing").val("");
            }
        });
    });
});