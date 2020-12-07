<?php
require_once('includes/load.php');
/*--------------------------------------------------------------*/
/* Function for find all database table rows by table name
/*--------------------------------------------------------------*/
function find_all($table) {
    global $db;
    if(tableExists($table))
    {
        return find_by_sql("SELECT * FROM ".$db->escape($table));
    }
}

/*--------------------------------------------------------------*/
/* Function for find all photos
/*--------------------------------------------------------------*/
function find_all_photos($table) {
    global $db;
    if(tableExists($table))
    {
        return find_by_sql("SELECT * FROM ".$db->escape($table)." ORDER BY id");
    }
}

/*--------------------------------------------------------------*/
/* Function for perform queries
/*--------------------------------------------------------------*/
function find_by_sql($sql)
{
    global $db;
    $result = $db->query($sql);
    $result_set = $db->while_loop($result);
    return $result_set;
}

/*--------------------------------------------------------------*/
/*  Function for find data from table by id
/*--------------------------------------------------------------*/
function find_by_id($table,$id)
{
    global $db;
    $id = (int)$id;
    if(tableExists($table)){
        $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE id='{$db->escape($id)}' LIMIT 1");
        if($result = $db->fetch_assoc($sql))
            return $result;
        else
            return null;
    }
}

/*--------------------------------------------------------------*/
/* Function for delete data from table by id
/*--------------------------------------------------------------*/
function delete_by_id($table,$id)
{
    global $db;
    if(tableExists($table))
    {
        $sql = "DELETE FROM ".$db->escape($table);
        $sql .= " WHERE id=". $db->escape($id);
        $sql .= " LIMIT 1";
        $db->query($sql);
        return ($db->affected_rows() === 1) ? true : false;
    }
}


/*--------------------------------------------------------------*/
/* Function for count id  by table name
/*--------------------------------------------------------------*/

function count_by_id($table){
    global $db;
    if(tableExists($table))
    {
        $sql    = "SELECT COUNT(id) AS total FROM ".$db->escape($table);
        $result = $db->query($sql);
        return($db->fetch_assoc($result));
    }
}

/*--------------------------------------------------------------*/
/* Determine if database table exists
/*--------------------------------------------------------------*/
function tableExists($table){
    global $db;
    $table_exit = $db->query('SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape($table).'"');
    if($table_exit) {
        if($db->num_rows($table_exit) > 0)
            return true;
        else
            return false;
    }
}

/*--------------------------------------------------------------*/
/* Login with the data provided in $_POST,
/* coming from the login_v2.php form.
/* If you used this method then remove authenticate function.
/*--------------------------------------------------------------*/
function authenticate_v2($username='', $password='') {
    global $db;
    $username = $db->escape($username);
    $password = $db->escape($password);
    $sql  = sprintf("SELECT * FROM members WHERE username ='%s' LIMIT 1", $username);
    $result = $db->query($sql);
    if($db->num_rows($result)){
        $user = $db->fetch_assoc($result);
        $password_request = sha1($password);
        if($password_request === $user['password'] ){
            return $user;
        }
    }
    return false;
}


/*--------------------------------------------------------------*/
/* Find current log in user by session id
/*--------------------------------------------------------------*/
function current_user(){
    static $current_user;
    global $db;
    if(!$current_user){
        if(isset($_SESSION['member_id'])):
            $user_id = intval($_SESSION['member_id']);
            $current_user = find_by_id('members',$user_id);
        endif;
    }
    return $current_user;
}
/*--------------------------------------------------------------*/
/* Find current log in user by session id
/*--------------------------------------------------------------*/
function brand(){
    static $brand;
    global $db;
	$sql = $db->query("SELECT * FROM library_information LIMIT 1");
        if($result = $db->fetch_assoc($sql))
            return $result;
        else
            return null;

    return $brand;
}
/*--------------------------------------------------------------*/
/* Function to update the last log in of a user
/*--------------------------------------------------------------*/

function activityLog($action)
{
    global $db;
    $sql = "INSERT INTO activityLog (activity,location) VALUES ('$action','Catalog')";
    $result = $db->query($sql);
    return ($result && $db->affected_rows() === 1 ? true : false);
}
/*--------------------------------------------------------------*/
/* Find all books
/*--------------------------------------------------------------*/
function find_all_books(){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.image_url,b.copy_no,";
    $sql .="c.category_name,t.type_name,m.file_name ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_media m ";
    $sql .="ON m.id=b.image_url ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type ORDER BY b.title ASC";
    $result = find_by_sql($sql);
    return $result;
}

/*--------------------------------------------------------------*/
/* Find all books without media
/*--------------------------------------------------------------*/
function find_all_books_no_media(){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.copy_no,";
    $sql .="c.category_name,t.type_name ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type ORDER BY b.title ASC";
    $result = find_by_sql($sql);
    return $result;
}

/*--------------------------------------------------------------*/
/* Find all books grouped by name
/*--------------------------------------------------------------*/
function find_all_books_grouped(){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.image_url,";
    $sql .="c.category_name,t.type_name,m.file_name,COUNT(b.title) as titlecount ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_media m ";
    $sql .="ON m.id=b.image_url ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type GROUP BY b.title ORDER BY b.title ASC";
    $result = find_by_sql($sql);
    return $result;
}
/*--------------------------------------------------------------*/
/* Find all members by joining members table and member groups table
/*--------------------------------------------------------------*/
function find_book_grouped($title){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.image_url,b.status,";
    $sql .="c.category_name,t.type_name,m.file_name,COUNT(b.title) as titlecount ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_media m ";
    $sql .="ON m.id=b.image_url ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type WHERE b.title = '{$title}' GROUP BY b.title ORDER BY b.title ASC LIMIT 1";
    $result = find_by_sql($sql);
    return $result;
}
/*--------------------------------------------------------------*/
/* Find book by id
/*--------------------------------------------------------------*/
function find_book_id($id){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.image_url,b.status,";
    $sql .="c.category_name,t.type_name,m.file_name ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_media m ";
    $sql .="ON m.id=b.image_url ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type WHERE b.id = '{$id}' ORDER BY b.id ASC LIMIT 1";
    $result = find_by_sql($sql);
    return $result;
}
/*--------------------------------------------------------------*/
/* Find book by name
/*--------------------------------------------------------------*/
function find_book_by_name($title){
    global $db;
    $results = array();
    $sql = "SELECT b.id,b.type,b.title,b.category,b.description,b.image_url,b.copy_no,b.status,b.CirculationsAssociatedID,";
    $sql .="c.category_name,t.type_name,m.file_name ";
    $sql .="FROM book_catalog b ";
    $sql .="LEFT JOIN book_media m ";
    $sql .="ON m.id=b.image_url ";
    $sql .="LEFT JOIN book_category c ";
    $sql .="ON c.category_level=b.category ";
    $sql .="LEFT JOIN book_types t ";
    $sql .="ON t.type_level=b.type WHERE b.title = '{$title}' ORDER BY b.copy_no ASC";
    $result = find_by_sql($sql);
    return $result;
}

/*--------------------------------------------------------------*/
/* Function to update the last log in of a user
/*--------------------------------------------------------------*/

function updateLastLogIn($user_id)
{
    global $db;
    $date = make_date();
    $sql = "UPDATE users SET last_login='{$date}' WHERE id ='{$user_id}' LIMIT 1";
    $result = $db->query($sql);
    return ($result && $db->affected_rows() === 1 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by group name
/*--------------------------------------------------------------*/
function find_by_groupName($val)
{
    global $db;
    $sql = "SELECT group_name FROM user_groups WHERE group_name = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by category name
/*--------------------------------------------------------------*/
function find_by_categoryName($val)
{
    global $db;
    $sql = "SELECT category_name FROM book_category WHERE category_name = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}
/*--------------------------------------------------------------*/
/* Find by type name
/*--------------------------------------------------------------*/
function find_by_typeName($val)
{
    global $db;
    $sql = "SELECT type_name FROM book_types WHERE type_name = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by member names
/*--------------------------------------------------------------*/
function find_by_member_name($val)
{
    global $db;
    $sql = "SELECT name FROM members WHERE name = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by catelog title
/*--------------------------------------------------------------*/
function find_by_catalog_item_title($val)
{
    global $db;
    $sql = "SELECT title FROM book_catalog WHERE title = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by card number
/*--------------------------------------------------------------*/
function find_by_card_number($val)
{
    global $db;
    $sql = "SELECT member_no FROM barcode_generator WHERE member_no = '{$db->escape($val)}' AND created = '0' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by member id
/*--------------------------------------------------------------*/
function find_member_by_id($val)
{
    global $db;
    $results = array();
    $sql = "SELECT * FROM members WHERE id = '{$db->escape($val)}' LIMIT 1 ";
if($result = $db->fetch_assoc($sql))
            return $result;
        else
            return null;
    return $result;

}

/*--------------------------------------------------------------*/
/* Find by member username
/*--------------------------------------------------------------*/
function find_by_member_username($val)
{
    global $db;
    $sql = "SELECT username FROM members WHERE username = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}

/*--------------------------------------------------------------*/
/* Find by active
/*--------------------------------------------------------------*/
function find_by_active($val)
{
    global $db;
    $sql = "SELECT status FROM users WHERE id = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}
/*--------------------------------------------------------------*/
/* Find by group level
/*--------------------------------------------------------------*/
function find_by_groupLevel($level)
{
    global $db;
    $sql = "SELECT group_level FROM user_groups WHERE group_level = '{$db->escape($level)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}
/*--------------------------------------------------------------*/
/* Find by category level
/*--------------------------------------------------------------*/
function find_by_categoryLevel($level)
{
    global $db;
    $sql = "SELECT category_level FROM book_category WHERE category_level = '{$db->escape($level)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}
/*--------------------------------------------------------------*/
/* Find by type level
/*--------------------------------------------------------------*/
function find_by_typeLevel($level)
{
    global $db;
    $sql = "SELECT type_level FROM book_types WHERE type_level = '{$db->escape($level)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
}
/*--------------------------------------------------------------*/
/* Function for checking which user level has access to page
/*--------------------------------------------------------------*/
function page_require_level($require_level){
    global $session;
    $current_user = current_user();
    $login_level = find_by_groupLevel($current_user['group']);
    //if user not login
    if (!$session->isMemberLoggedIn(true)):
        $session->msg('d','Please login...');
        redirect('index.php', false);
    //check logged in User level and Require level is Less than or equal to
    elseif($current_user['group'] <= (int)$require_level):
        return true;
    else:
        $session->msg("d", "Sorry! you dont have permission to view the page.");
        redirect('dashboard.php', false);
    endif;

}

/*------------------------------------------------------------------------*/
/* Function for finding by dates
/*------------------------------------------------------------------------*/
function find_by_dates($table,$id){
    global $db;
    $id = (int)$id;
    if(tableExists($table)){
        $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE id='{$db->escape($id)}' LIMIT 1");
        if($result = $db->fetch_assoc($sql))
            return $result;
        else
            return null;
    }
}

?>