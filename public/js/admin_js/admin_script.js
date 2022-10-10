$(function () {
    //section active or inactive
    $(".UpdateSectionStatus").click(function(){
        var status = $(this).text();
        var section_id = $(this).attr("section_id");
        alert(status);
        alert(section_id);
    });

});

