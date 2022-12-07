
function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = 'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(xhr, ajaxOptions, thrownError) {
            
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

        }
        $.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.phplift.net/api/index.php";
    var call = new ajaxCall();



    this.getCities = function(id) {
        $(".cities option:gt(0)").remove();
        //get additional fields
        
        var url = rootUrl+'?type=getCities&countryId='+ '&stateId=' + id;
        var method = "post";
        var data = {};
        $('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.cities').find("option:eq(0)").html("Select City");
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    $.each(data['result'], function(key, val) {

                        var option = $('<option />');
                        option.attr('value', val.name).text(val.name);
                        $('.cities').append(option);
                    });
                }
                

                $(".cities").prop("disabled",false);
            
        });
    };

    this.getStates = function(id) {
        $(".states option:gt(0)").remove();
        $(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = $('#stateId').attr('class');

        
        var url = rootUrl+'?type=getStates&countryId=' + id;
        var method = "post";
        var data = {};
        $('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.states').find("option:eq(0)").html("Select State");
            
                $.each(data['result'], function(key, val) {
                    var option = $('<option />');
                    option.attr('value', val.name).text(val.name);
                    option.attr('stateid', val.id);
                    $('.states').append(option);
                });
                $(".states").prop("disabled",false);
            
        });
    };

    this.getCountries = function() {
        var url = rootUrl+'?type=getCountries';
        var method = "post";
        var data = {};
        $('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            $('.countries').find("option:eq(0)").html("Select Country");
            
            $.each(data['result'], function(key, val) {
                var option = $('<option />');
                
                option.attr('value', val.name).text(val.name);
                option.attr('countryid', val.id);
                
                $('.countries').append(option);
            });
                // $(".countries").prop("disabled",false);
            
        });
    };

}

$(function() {
    var loc = new locationInfo();
    loc.getCountries();
    $(".countries").on("change", function(ev) {
        var countryId = $("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            $(".states option:gt(0)").remove();
        }
    });
    $(".states").on("change", function(ev) {
        var stateId = $("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            $(".cities option:gt(0)").remove();
        }
    });
});

