$(document).ready(function() {
    $("#video").hide();
    $("#closevideo").hide();
    $("#btnvideo").click(function(){
        $("#video").show(400);
        $("#video").trigger("play");
        $("#btnvideo").hide();
        $("#closevideo").show();
    });
    $("#closevideo").click(function(){
        $("#video").trigger("pause");
        $("#video").hide(400);
        $("#btnvideo").show();
        $("#closevideo").hide();
    });
});