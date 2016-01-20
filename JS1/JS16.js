
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        $(document).ready(function(){
        $("#validar").click(function(){
           var n = $("#usuario").val();
           var t = /\d/.test(n);
            if (t==false){
                res = "Muy bien";
                css = "3px solid green";
            }if (t==true){
                res = "Muy mal";
                css = "3px solid red";
            }
        $("#resultado").val(res);
        $("#usuario").css("border",css);
        });
    });
