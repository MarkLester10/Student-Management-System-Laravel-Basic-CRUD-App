$("#editModal").on("show.bs.modal", function(event) {
    var button = $(event.relatedTarget);
    var firstname = button.data("firstname");
    var lastname = button.data("lastname");
    var country = button.data("country");
    var city = button.data("city");
    var address = button.data("address");
    var gender = button.data("gender");
    var student_id = button.data("student_id");

    var modal = $(this);

    modal.find(".modal-body #firstname").val(firstname);
    modal.find(".modal-body #lastname").val(lastname);
    modal.find(".modal-body #country").val(country);
    modal.find(".modal-body #city").val(city);
    modal.find(".modal-body #address").val(address);
    modal.find(".modal-body #student_id").val(student_id);
    modal
        .find(".modal-body #gender  >  [value=" + gender + "]")
        .attr("selected", "true");
});

$("#deleteModal").on("show.bs.modal", function(event) {
    var button = $(event.relatedTarget);
    var student_id = button.data("student_id");
    var modal = $(this);
    modal.find(".modal-body #student_id").val(student_id);
});

$("#showModal").on("show.bs.modal", function(event) {
    var button = $(event.relatedTarget);
    var firstname = button.data("firstname");
    var lastname = button.data("lastname");
    var country = button.data("country");
    var city = button.data("city");
    var address = button.data("address");
    var gender = button.data("gender");
    var student_id = button.data("student_id");

    var modal = $(this);

    modal.find(".modal-body #firstname").val(firstname);
    modal.find(".modal-body #lastname").val(lastname);
    modal.find(".modal-body #country").val(country);
    modal.find(".modal-body #city").val(city);
    modal.find(".modal-body #address").val(address);
    modal.find(".modal-body #student_id").val(student_id);
    modal
        .find(".modal-body #gender  >  [value=" + gender + "]")
        .attr("selected", "true");
});
