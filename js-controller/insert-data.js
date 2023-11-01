$(document).ready(function() {
    $("#gradelist")
        .on("change", function() {
            var grade = $("#gradelist").val();

            $.ajax({
                type: "get",
                url: "config/fetch/fetchSection.php",
                data: { grade: grade },
                success: function(response) {
                    $("#result").html(response);
                },
            });
        })
        .change();
});

$(document).ready(function() {
    $("#grade").on("change", function() {
            var grade = $("#grade").val();

            // console.log(grade);

            $.ajax({
                type: "get",
                url: "config/fetch/Fetch-Grade-Section.php",
                data: { grade: grade },
                success: function(response) {
                    $("#section").html(response);
                },
            });
        })
        .change();
});
// to fetch grade and section
$(document).ready(function() {
    $("#section-list").on("change", function() {
        var section = $("#section-list").val();
        var grade = $("#grade-list").val();
        // console.log(section);

        $.ajax({
            type: "GET",
            url: "config/fetch/Fetch-Student.php",
            data: { grade: grade, section: section },
            success: function(response) {
                $("#stud_result").html(response);
            },
        });
    }).change();
});
// to fetch grade only
$(document).ready(function() {
    $("#grade-list").on("change", function() {
        var section = $("#section-list").val();
        var grade = $("#grade-list").val();
        // console.log(section);

        $.ajax({
            type: "GET",
            url: "config/fetch/Fetch-Student.php",
            data: { grade: grade, section: section },
            success: function(response) {
                $("#stud_result").html(response);
            },
        });
    }).change();
});


// this fetch code is for the student record
$(document).ready(function() {
    $("#grade-list").on("change", function() {
        var grade = $("#grade-list").val();
        // console.log(grade);

        $.ajax({
            type: "GET",
            url: "config/fetch/Fetch-Stud-Sec.php",
            data: { grade: grade },
            success: function(response) {
                $("#section-list").html(response);
            },
        });
    }).change();
});