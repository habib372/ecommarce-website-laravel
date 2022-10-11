$(function () {
    //section active or inactive
    $(".UpdateSectionStatus").click(function(){
        var status = $(this).text();
        var section_id = $(this).attr("section_id");
        $.ajax({
            type:'post',
            url:'/admin/update-section-status',
            data:{status:status, section_id:section_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#section-"+section_id).html("<a class='UpdateSectionStatus text-danger' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status']==1){
                    $("#section-"+section_id).html("<a class='UpdateSectionStatus text-primary'  href='javascript:void(0)'>Active</a>");
                }           
            },error:function(){
                alert('Error');
            }
        });
    });

});

