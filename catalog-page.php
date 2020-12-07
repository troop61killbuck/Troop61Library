<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Catalog";
    $catalog_active = "active";
    require_once('layouts/head.php');
    if(!isset($_GET['page'])){ redirect('?page=1'); }
    if(isset($_GET['query']) && isset($_GET['c'])  && $_GET['c'] != 0 && isset($_GET['t']) && $_GET['t'] != 0){
        $query = $_GET['query'];
        $category = $_GET['c'];
        $type = $_GET['t'];
        $all_books = find_all_books_grouped_search_t_c($query,$type,$category);
    } elseif(isset($_GET['query']) && isset($_GET['c']) && $_GET['c'] != 0) {
        $query = $_GET['query'];
        $category = $_GET['c'];
        $all_books = find_all_books_grouped_search_c($query,$category);
    } elseif(isset($_GET['query']) && isset($_GET['t']) && $_GET['t'] != 0) {
        $query = $_GET['query'];
        $type = $_GET['t'];
        $all_books = find_all_books_grouped_search_t($query,$type);
    } elseif(isset($_GET['t']) && $_GET['t'] != 0 && isset($_GET['c']) && $_GET['c'] != 0) {
        $category = $_GET['c'];
        $type = $_GET['t'];
        $all_books = find_all_books_grouped_t_c($type,$category);
    } elseif(isset($_GET['query'])) {
        $query = $_GET['query'];
        $all_books = find_all_books_grouped_search($query);
    } elseif(isset($_GET['t']) && $_GET['t'] != 0) {
        $type = $_GET['t'];
        $all_books = find_all_books_grouped_t($type);
    } elseif(isset($_GET['c']) && $_GET['c'] != 0) {
        $category = $_GET['c'];
        $all_books = find_all_books_grouped_c($category);
    } else {
        $all_books = find_all_books_grouped();
    }
$all_categories = find_all('book_category');
$all_types = find_all('book_types');
$size = sizeof($all_books);
$pages = ceil($size/9);
?>
<head>
<style>
form.search {
  width: 100%;
  border: 2.5px solid #EFEFEF;
  border-radius: 5px;
  display: flex;
  flex-direction: row;
  align-items: center;
}
input.search {
  all: unset;
  font: 16px;
  height: 100%;
  width: 100%;
  padding: 6px 10px;
}
button.search {
  all: unset;
  cursor: pointer;
  height: 100%;
  padding: 6px;
}
.pointer {
  cursor: pointer;
}
</style>
</head>
<body>
<?php require_once('layouts/navbar.php');?>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Library Catalog</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <div class="form-group">
                                            <h3>Search</h3><form class="search" rel="search" id="search" action="javascript:void(0);"><input class="search" type="text" id="query" name="query" placeholder="Search..." aria-label="Search through site content" value="<?php echo $_GET['query'];?>"><button role="submit" class="search"><i class="fa fa-search"></i></button></form>
						    </div>
						</div>
<hr>
                                    <div class="filter-item">

<form id="filters" action="javascript:void(0);">							
							<h2 style="margin-top: 40px">Filters</h2>

<h3>Category</h3>
						<div class="form-group">
							<?php foreach($all_categories as $a_category): ?>
                                            <div class="form-check"><input class="form-check-input" type="radio" id="category.<?php echo remove_junk(ucwords($a_category['category_level']))?>" name="category" value="<?php echo remove_junk(ucwords($a_category['category_level']))?>" <?php if($category == remove_junk(ucwords($a_category['category_level']))){ echo "checked";};?>><label class="form-check-label" for="category.<?php echo remove_junk(ucwords($a_category['category_level']))?>"><?php echo remove_junk(ucwords($a_category['category_name']))?></label></div>
							<?php endforeach;?>
							</div>
                                        <h3>Type</h3>
                                    <div class="form-group">
							<?php foreach($all_types as $a_type): ?>
                                            <div class="form-check"><input class="form-check-input" type="radio" id="type.<?php echo remove_junk(ucwords($a_type['type_level']))?>" name="type" value="<?php echo remove_junk(ucwords($a_type['type_level']))?>" <?php if($type == remove_junk(ucwords($a_type['type_level']))){ echo "checked";};?>><label class="form-check-label" for="type.<?php echo remove_junk(ucwords($a_type['type_level']))?>"><?php echo remove_junk(ucwords($a_type['type_name']))?></label></div>
							<?php endforeach;?>
                                    </div>
						<div class="form-group clearfix">
						<button type="submit" class="btn btn-primary" style="width:100%; margin-bottom: 15px;">Apply Filters</button>
						<button type="reset" onclick="filtersReset()" class="btn btn-danger" style="width:100%; margin-bottom: 30px;">Reset Filters</button>
						</div>
						</form>
                                </div></div>
                            </div>
                            <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                                <div class="collapse"
                                    id="filters">
<div class="filters" style="margin-right:40px">
                                    <div class="filter-item">
                                        <div class="form-group">
                                            <h3>Search</h3><form class="search" rel="search" id="searchM" action="javascript:void(0);"><input class="search" type="text" id="queryM" name="queryM" placeholder="Search..." aria-label="Search through site content" value="<?php echo $_GET['query'];?>"><button role="submit" class="search"><i class="fa fa-search"></i></button></form>
						    </div>
						</div>
<hr>
                                    <div class="filter-item">

<form id="filtersM" action="javascript:void(0);">							
							<h2 style="margin-top: 40px">Filters</h2>

<h3>Category</h3>
						<div class="form-group">
							<?php foreach($all_categories as $a_category): ?>
                                            <div class="form-check"><input class="form-check-input" type="radio" id="category.<?php echo remove_junk(ucwords($a_category['category_level']))?>" name="categoryM" value="<?php echo remove_junk(ucwords($a_category['category_level']))?>" <?php if($category == remove_junk(ucwords($a_category['category_level']))){ echo "checked";};?>><label class="form-check-label" for="category.<?php echo remove_junk(ucwords($a_category['category_level']))?>"><?php echo remove_junk(ucwords($a_category['category_name']))?></label></div>
							<?php endforeach;?>
							</div>
                                        <h3>Type</h3>
                                    <div class="form-group">
							<?php foreach($all_types as $a_type): ?>
                                            <div class="form-check"><input class="form-check-input" type="radio" id="type.<?php echo remove_junk(ucwords($a_type['type_level']))?>" name="typeM" value="<?php echo remove_junk(ucwords($a_type['type_level']))?>" <?php if($type == remove_junk(ucwords($a_type['type_level']))){ echo "checked";};?>><label class="form-check-label" for="type.<?php echo remove_junk(ucwords($a_type['type_level']))?>"><?php echo remove_junk(ucwords($a_type['type_name']))?></label></div>
							<?php endforeach;?>
                                    </div>
						<div class="form-group clearfix">
						<button type="submit" class="btn btn-primary" style="width:100%; margin-bottom: 15px;">Apply Filters</button>
						<button type="reset" onclick="filtersReset()" class="btn btn-danger" style="width:100%; margin-bottom: 30px;">Reset Filters</button>
						</div>
						</form>
                                </div></div></div></div>                            
                        </div>
                        <div class="col-md-9">
                            <div class="products">
<?php if($size == 0):?>
                    <center><h3 class="text-info">No Results Found</h3>
			  <br>
			  <p> Please try a different search term.</p></center>
<?php else:?>

                                <div class="row no-gutters">
<?php $i = 1; ?>
                               <?php foreach($all_books as $a_book): ?>
                                   <div class="col-12 col-md-6 col-lg-4" id="<?php echo $i++;?>" style="display:none">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="product-page.php?title=<?php echo remove_junk(urlencode($a_book['title']))?>"><img class="img-fluid d-block mx-auto img-thumbnail" src="admin/uploads/books/<?php echo remove_junk($a_book['file_name'])?>"></a></div>
                                            <div class="product-name" style="height: 50px"><a href="product-page.php?title=<?php echo remove_junk(urlencode($a_book['title']))?>"><?php echo remove_junk(ucwords($a_book['title']))?></a></div>
<hr>
                                            <div class="about">
                                                <div class="product-name" style="margin-top: 5px; margin-bottom: auto;"><p><?php echo remove_junk(ucwords($a_book['type_name']))?></p></div>
                                                <div class="price" style="margin-top: 5px;">
                                                    <p style="display:inline;">Copies:</p><h3> <?php echo remove_junk(ucwords($a_book['titlecount']))?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                                </div>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item <?php if($_GET['page'] == 1){echo "disabled";} elseif($_GET['page'] < 1){echo "disabled";};?>"><p class="page-link pointer" id="back" aria-label="Previous"><span aria-hidden="true">«</span></p></li>
							<?php foreach (range(1, $pages) as $number):?>
								<li class="page-item <?php if($_GET['page'] == $number){echo "active";};?>">
									<p class="page-link pointer" onclick="page(<?php echo $number;?>)"><?php echo $number;?></p>
								</li>
							<?php endforeach;?>
                                        <li class="page-item <?php if($_GET['page'] == $number){echo "disabled";} elseif($_GET['page'] >= $number){echo "disabled";};?>"><p class="page-link pointer" id="forward" aria-label="Next"><span aria-hidden="true">»</span></p></li>
                                    </ul>
                                </nav>

<?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
<?php 
    $page_no = $_GET['page'];
    $upper = $page_no * 9;
    $lower = $upper - 8;
?>
<script>
<?php foreach (range($lower, $upper) as $catalog_items):?>
    document.getElementById('<?php echo $catalog_items;?>').style.display = "";
<?php endforeach;?>
</script>
<script>
var currentUrl = window.location.href;
var url = new URL(currentUrl);
document.getElementById("search").onsubmit = function() {searchSubmit()};
document.getElementById("filters").onsubmit = function() {filtersSubmit()};
document.getElementById("searchM").onsubmit = function() {searchSubmitM()};
document.getElementById("filtersM").onsubmit = function() {filtersSubmitM()};

function searchSubmit() {
  inputValue = document.getElementById("query").value;
  url.searchParams.set("query", inputValue); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};


function filtersSubmit() {
const rbsCategory = document.querySelectorAll('input[name="category"]');
            let selectedValueCategory;
            for (const rbCategory of rbsCategory) {
                if (rbCategory.checked) {
                    selectedValueCategory = rbCategory.value;
                    break;
                }
            }
const rbsType = document.querySelectorAll('input[name="type"]');
            let selectedValueType;
            for (const rbType of rbsType) {
                if (rbType.checked) {
                    selectedValueType = rbType.value;
                    break;
                }
            }
if(typeof selectedValueCategory === 'undefined') {
    selectedValueCategory = 0;
}

if(typeof selectedValueType === 'undefined') {
    selectedValueType = 0;
}


  url.searchParams.set("c", selectedValueCategory); // setting your param
  url.searchParams.set("t", selectedValueType); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};

function searchSubmitM() {
  inputValue = document.getElementById("queryM").value;
  url.searchParams.set("query", inputValue); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};


function filtersSubmitM() {
const rbsCategory = document.querySelectorAll('input[name="categoryM"]');
            let selectedValueCategory;
            for (const rbCategory of rbsCategory) {
                if (rbCategory.checked) {
                    selectedValueCategory = rbCategory.value;
                    break;
                }
            }
const rbsType = document.querySelectorAll('input[name="typeM"]');
            let selectedValueType;
            for (const rbType of rbsType) {
                if (rbType.checked) {
                    selectedValueType = rbType.value;
                    break;
                }
            }
if(typeof selectedValueCategory === 'undefined') {
    selectedValueCategory = 0;
}

if(typeof selectedValueType === 'undefined') {
    selectedValueType = 0;
}


  url.searchParams.set("c", selectedValueCategory); // setting your param
  url.searchParams.set("t", selectedValueType); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};

function filtersReset() {
document.getElementById("filters").reset();

  url.searchParams.set("c", 0); // setting your param
  url.searchParams.set("t", 0); // setting your param
  url.searchParams.set("page", 1); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};

$('p#back').click(function(){ 
  url.searchParams.set("page", <?php echo $_GET['page'] - 1;?>); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
});
$('p#forward').click(function(){ 
  url.searchParams.set("page", <?php echo $_GET['page'] + 1;?>); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
});
function page($number){ 
  url.searchParams.set("page", $number); // setting your param
  var newUrl = url.href;
console.log(newUrl); 
window.location.assign(newUrl);
};
</script>
</body>

</html>