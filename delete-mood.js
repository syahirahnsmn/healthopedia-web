<script type="text/javascript">
    $(document).ready(function() {
        $('fa-trash').click(function() {
            let id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this Logged data?")) {
                $.ajax({
                    type: "POST",
                    url: "delete-mood.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(html) {
                        $(".list-mood" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
        })
    });
</script>