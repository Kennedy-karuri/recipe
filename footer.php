<script>

document.getElementById("searchInput").addEventListener("keyup", function(event) {

  if (event.keyCode === 13) {
   
    var searchParam = document.getElementById("searchInput").value;
  
    window.location.href = "/index.php?search=" + searchParam;
  }
);

</script>


</body>
</html>