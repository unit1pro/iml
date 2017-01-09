<footer>
    <div class="footer">
        <span class="copyright_text">&COPY; 2023 by Indian Music Labs.</span>
    </div>
</footer>
</div>


</div>
<script>

    $(document).ready(function () {
        get_page('home.php');
        $('.nav-link').click(function (event) {
            event.preventDefault();

            var url = $(this).attr('href');
            $('.nav-link').attr("style","");
            $(this).attr("style","color: #FF6666 !important;");
            get_page(url);
        });
    });
    function get_page(url) {
        $.ajax({
            'url': url,
            'type': 'get',
            success: function (result) {
                console.log(result);
                $('#base_container').html(result);
            }
        });
    }
</script>
</body>
</html>
