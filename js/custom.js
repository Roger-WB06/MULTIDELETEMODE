jQuery(document).ready(function($){


    $("#delBtn").click(function(){
        var i = 0;
        var str = Array();
        var rowPerPage = $("#rowperpage").val();

        for(i; i< rowPerPage; i++)
        {
            if($("#"+i).is(":checked"))
            {
                str[i] = $("#"+i).val();
            }
        }

        if(str.length == 0)
        {
            //console.log(str);
            alert("PLease Select User(s)");
        }
        else
        {
            document.getElementById("recid").value = str;
            askUser = confirm("Do you want to delte user(s)?");
            if(askUser == true)
            {
                document.delForm.submit();
            }
            else
            {
                return false;
            }

        }
    });

    $("#alldel").click(function(){
        var i = 0;
        var row_per_page = $("#rowperpage").val();
        for(i; i<row_per_page; i++)
        {
            if($(this).is(":checked"))
            {
                $("#"+i).prop("checked", true);
            }
            else
            {
                $("#"+i).prop("checked", false);
            }
            
        }
    })




})