/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {

    $("#dis1")
            .mouseover(function () {
                $("#dis1").addClass("disHover");
                $('#diabetes_icon1').attr("src", 'resources/icons/diabaticsHover.png');
            })
            .mouseout(function () {
                $("#dis1").removeClass("disHover");
                $('#diabetes_icon1').attr("src", 'resources/icons/diabatics.png');
            });
    $("#dis2")
            .mouseover(function () {
                $("#dis2").addClass("disHover2");
                $('#diabetes_icon2').attr("src", 'resources/icons/careHover.png');
            })
            .mouseout(function () {
                $("#dis2").removeClass("disHover2");
                $('#diabetes_icon2').attr("src", 'resources/icons/care.png');
            });
    $("#dis3")
            .mouseover(function () {
                $("#dis3").addClass("disHover");
                $('#diabetes_icon3').attr("src", 'resources/icons/otcHover.png');
            })
            .mouseout(function () {
                $("#dis3").removeClass("disHover");
                $('#diabetes_icon3').attr("src", 'resources/icons/otc.png');
            });
    $("#dis4")
            .mouseover(function () {
                $("#dis4").addClass("disHover2");
                $('#diabetes_icon4').attr("src", 'resources/icons/wellnessHover.png');
            })
            .mouseout(function () {
                $("#dis4").removeClass("disHover2");
                $('#diabetes_icon4').attr("src", 'resources/icons/wellness.png');
            });




});