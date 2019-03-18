
$(document).ready(function(){
    $("#btnSearch").click(function(){
        var keyword = $('#txtSearch').val();
        $.post("./timkiem.php",{tukhoa:keyword},function(data){
            $('#datasearch').html(data);
        })
    })
})
