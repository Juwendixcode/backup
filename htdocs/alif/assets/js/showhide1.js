$("#hide1").click(function(){
    $("#formorder1").hide('blind');
    $("#hide1").hide();
    $("#show1").show();
});

$("#show1").click(function(){
    $("#formorder1").show('blind');
    $("#formorder").hide('blind');
    $("#formorder2").hide('blind');
    $("#show1").hide();
    $("#hide1").show();
    $("#show").show();
    $("#hide").hide();
    $("#show2").show();
    $("#hide2").hide();
});