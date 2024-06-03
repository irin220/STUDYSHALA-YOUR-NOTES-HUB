<link rel="stylesheet" href="css/search_style.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<form class="example" action="searching.php" method="post" style="margin:auto;max-width:200px" id="searchForm">
    <input type="text" placeholder="Search subjects" name="search" id="search">
    <button type="submit" name="submit" id="submit"><i class="fa fa-search"></i></button>
    <ul class="autocomplete" id="auto"></ul>
</form>

<script>
    $(document).ready(function () {
        $("#search").keyup(function () {
            var search = $(this).val();

            if (search != '') {
                $.ajax({
                    url: "searching.php",
                    method: "POST",
                    data: { search: search },
                    success: function (data) {
                        $("#auto").html(data).show(); // Show the autocomplete dropdown
                    }
                });
            } else {
                $("#auto").hide(); // Hide the autocomplete dropdown if search is empty
            }
        });

        $(document).on('click', '#auto li', function () {
            $('#search').val($(this).text());
            $("#auto").hide(); // Hide the autocomplete dropdown when an item is clicked
        });

        $("#submit").click(function (e) {
            e.preventDefault(); // Prevent default form submission

            var search = $("#search").val();
            if (search != '') {
                // Redirect to another page with search query in the URL
                window.location.href = "all_searched_notes.php?search=" + encodeURIComponent(search);
            }
        });
    });
</script>