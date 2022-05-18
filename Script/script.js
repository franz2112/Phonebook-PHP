let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
}
//Script for VIDEO
// Get the video
var video = document.getElementById("myVideo");
//End Script for VIDEO BG

//tilt

(function($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function() {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function() {
        $(this).focus(function() {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }



})(jQuery);


//modals

$(document).ready(function() {

    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#name').val() == "") {
            alert("Name is required");
        } else if ($('#address').val() == '') {
            alert("Address is required");
        } else if ($('#designation').val() == '') {
            alert("Designation is required");
        } else {
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#add_data_Modal').modal('hide');
                    $('#employee_table').html(data);
                }
            });
        }
    });



    // view details
    $(document).on('click', '.view_data', function() {
        $('#dataModal').modal();
        var employee_id = $(this).attr("surnamesubmit");

        $.ajax({
            url: "selectsurname.php",
            method: "POST",
            data: { employee_id: employee_id },
            success: function(data) {
                $('#employee_detail').html(data);
                $('#add_data_Modal').modal('show');
            }
        });
    });
});

//delete confimation
$('.confirmation').on('click', function() {
    return confirm('Are you sure?');
});
//delete confimation
//other modals