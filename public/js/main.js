$("#checkbox-all").click(function () {
    $(this).closest("table").find(":checkbox").prop("checked", this.checked);
});