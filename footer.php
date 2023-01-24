<script>
/*Listening for search params*/
document.getElementById("searchInput").addEventListener("keyup", function(event) {
  // If the "enter" key is pressed
  if (event.keyCode === 13) {
    // Get the search parameter
    var searchParam = document.getElementById("searchInput").value;
    // Send the search parameter to /search.php
    window.location.href = "/index.php?search=" + searchParam;
  }
});

</script>


</body>
</html>