<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Search";
    $search_active = "active";
	require_once('layouts/head.php');
?>

<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Search Catalog</h2>
                </div>
                <form class="search" rel="search" id="search" action="javascript:void(0);">
                    <div class="form-group"><label for="search">Search</label><input class="form-control item" type="text" id="query" name="query" placeholder="Search..." aria-label="Search through site content"></div><button class="btn btn-primary btn-block" role="submit" type="submit">Submit</button></form>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
<script>
var currentUrl = window.location.href;
var url = new URL("catalog-page.php", currentUrl);

document.getElementById("search").onsubmit = function() {searchSubmit()};

function searchSubmit() {
  inputValue = document.getElementById("query").value;
  url.searchParams.set("query", inputValue); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};
</script>
</body>

</html>